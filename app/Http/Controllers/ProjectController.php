<?php

namespace App\Http\Controllers;

use App\Project;
use RestClient;
use Carbon\Carbon;
use App\Http\Requests\ProjectRequest;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function __construct()
    {
        $this->authorizeResource(Project::class);
    }

    /**
     * Display a ` of the projects
     *
     * @param \App\Project  $model
     * @return \Illuminate\View\View
     */
    public function index(Project $model)
    {
        return view('projects.index', ['projects' => $model->with(['user'])->get()]);
    }

    /**
     * Show the form for creating a new project
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('projects.create');
    }

    /**
     * Store a newly created project in storage
     *
     * @param  \App\Http\Requests\ProjectRequest  $request
     * @param  \App\Project  $model
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(ProjectRequest $request, Project $model)
    {
        $project = $model->create($request->all());

        return redirect()->route('project.index')->withStatus(__('Project successfully created.'));
    }

    /**
     * Show the form for editing the specified project
     *
     * @param  \App\Project  $project
     * @param  \App\Tag   $tagModel
     * @param  \App\Category $categoryModel
     * @return \Illuminate\View\View
     */
    public function edit(Project $project, Tag $tagModel, Category $categoryModel)
    {
        return view('projects.edit', [
            'project' => $project->load('tags'),
            'tags' => $tagModel->get(['id', 'name']),
            'categories' => $categoryModel->get(['id', 'name'])
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Projectuest  $request
     * @param  \App\Project  $project
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(ProjectRequest $request, Project $project)
    {
        $project->update(
            $request->merge([
                'picture' => $request->photo ? $request->photo->store('pictures', 'public') : null,
                'show_on_homepage' => $request->show_on_homepage ? 1 : 0,
                'options' => $request->options ? $request->options : null,
                'date' => $request->date ? Carbon::parse($request->date)->format('Y-m-d') : null
            ])->except([$request->hasFile('photo') ? '' : 'picture'])
        );

        $project->tags()->sync($request->get('tags'));

        return redirect()->route('project.index')->withStatus(__('Project successfully updated.'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Project $project)
    {
        $project->delete();

        return redirect()->route('project.index')->withStatus(__('Project successfully deleted.'));
    }

    public function getKeywords($domain) {
        try {
            $client = new RestClient('https://api.dataforseo.com/', null, 'jbelland@galtwaymarketing.com', 'ngeNnYuOVg0z4lpr');
        } catch (RestClientException $e) {
            echo "\n";
            print "HTTP code: {$e->getHttpCode()}\n";
            print "Error code: {$e->getCode()}\n";
            print "Message: {$e->getMessage()}\n";
            print  $e->getTraceAsString();
            echo "\n";
            exit();
        }

        $keywords = [];
        //for domain
        try {
            $kw_get_result = $client->get("v2/kwrd_for_domain/{$domain}/us/en");
            $keywords = [];
            $post_array = array();
            $result = [];
            $index = 0;
            foreach ($kw_get_result['results'] as $key => $value) {
                $keywords[] = $value['key'];
                if($index++ < 25)
                    $post_array[] = array(
                        "keyword" => $value['key'],
                        "country_code" => "US",
                        "language" => "en",
                        "depth" => 2,
                        "limit" => 1,
                        "offset" => 0,
                        "orderby" => "cpc,desc",
                        "filters" => array(
                            array("cpc", ">", 0),
                            "or",
                            array(
                                array("search_volume", ">", 0),
                                "and",
                                array("search_volume", "<=", 1000)
                            )
                        )
                    );
            }

            $get_result = $client->post("v2/kwrd_finder_related_keywords_get", array('data' => $post_array));
            foreach ($get_result['results'] as $key => $value) {
                $result[$value['meta']['keyword']] = [
                    'key' => $value['related'][0]['key'],
                    'cpc' => $value['related'][0]['cpc'],
                    'competition' => $value['related'][0]['competition'],
                    'search_volume' => $value['related'][0]['search_volume']
                ];
            }
        } catch (RestClientException $e) {
            echo "\n";
            print "HTTP code: {$e->getHttpCode()}\n";
            print "Error code: {$e->getCode()}\n";
            print "Message: {$e->getMessage()}\n";
            print  $e->getTraceAsString();
            echo "\n";
            exit();
        }

        $client = null;
        return json_encode([
            'keywords' => $keywords,
            'related_keywords' => $result
        ]);
    }
    public function getExKeywords(Request $request) {
        $require_keywords = $request->input('keywords');
        try {
            $client = new RestClient('https://api.dataforseo.com/', null, 'jbelland@galtwaymarketing.com', 'ngeNnYuOVg0z4lpr');
        } catch (RestClientException $e) {
            echo "\n";
            print "HTTP code: {$e->getHttpCode()}\n";
            print "Error code: {$e->getCode()}\n";
            print "Message: {$e->getMessage()}\n";
            print  $e->getTraceAsString();
            echo "\n";
            exit();
        }

        $keywords = [];
        //for domain
        try {
            $keywords = [];
            $post_array = array();
            $result = [];
            $index = 0;
            foreach ($require_keywords as $key => $value) {
                $keywords[] = $value;
                if($index++ < 25)
                    $post_array[] = array(
                        "keyword" => $value,
                        "country_code" => "US",
                        "language" => "en",
                        "depth" => 2,
                        "limit" => 1,
                        "offset" => 0,
                        "orderby" => "cpc,desc",
                        "filters" => array(
                            array("cpc", ">", 0),
                            "or",
                            array(
                                array("search_volume", ">", 0),
                                "and",
                                array("search_volume", "<=", 1000)
                            )
                        )
                    );
            }

            $get_result = $client->post("v2/kwrd_finder_related_keywords_get", array('data' => $post_array));
            foreach ($get_result['results'] as $key => $value) {
                $result[$value['meta']['keyword']] = [
                    'key' => $value['related'][0]['key'],
                    'cpc' => $value['related'][0]['cpc'],
                    'competition' => $value['related'][0]['competition'],
                    'search_volume' => $value['related'][0]['search_volume']
                ];
            }
        } catch (RestClientException $e) {
            echo "\n";
            print "HTTP code: {$e->getHttpCode()}\n";
            print "Error code: {$e->getCode()}\n";
            print "Message: {$e->getMessage()}\n";
            print  $e->getTraceAsString();
            echo "\n";
            exit();
        }

        $client = null;
        return json_encode([
            'keywords' => $keywords,
            'related_keywords' => $result
        ]);
    }

    public function getCompetitors($domain) {
        try {
            $client = new RestClient('https://api.dataforseo.com/', null, 'jbelland@galtwaymarketing.com', 'ngeNnYuOVg0z4lpr');
        } catch (RestClientException $e) {
            echo "\n";
            print "HTTP code: {$e->getHttpCode()}\n";
            print "Error code: {$e->getCode()}\n";
            print "Message: {$e->getMessage()}\n";
            print  $e->getTraceAsString();
            echo "\n";
            exit();
        }

        try {
            $post_array = array();
            $competitors = [];

            $post_array[] = array(
                "country_code" => "US",
                "language" => "en",
                "domain" => $domain
            );
            
            $post_result = $client->post('v2/kwrd_finder_domain_competitors', array('data' => $post_array));
            
            foreach ($post_result['results'] as $key => $result) {
                foreach ($result['competitors'] as $key => $value) {
                    if($value['domain'] != $domain) {
                        $competitors[$value['domain']] = [
                            'intersection' => $value['domain'],
                            'pos_sum' => $value['pos_sum'],
                            'avg_pos' => $value['avg_pos']
                        ];
                    }
                }
            }
        } catch (RestClientException $e) {
            echo "\n";
            print "HTTP code: {$e->getHttpCode()}\n";
            print "Error code: {$e->getCode()}\n";
            print "Message: {$e->getMessage()}\n";
            print  $e->getTraceAsString();
            echo "\n";
            exit();
        }

        $client = null;
        return json_encode($competitors);
    }
}
