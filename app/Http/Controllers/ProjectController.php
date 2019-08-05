<?php

namespace App\Http\Controllers;

use App\Project;
use RestClient;
use Carbon\Carbon;
use App\Http\Requests\ItemRequest;

class ProjectController extends Controller
{
    public function __construct()
    {
        $this->authorizeResource(Project::class);
    }

    /**
     * Display a listing of the projects
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
        // try {
        //     //Instead of 'login' and 'password' use your credentials from https://my.dataforseo.com/login
        //     $client = new RestClient('https://api.dataforseo.com/', null, 'jbelland@galtwaymarketing.com', 'ngeNnYuOVg0z4lpr');
        // } catch (RestClientException $e) {
        //     echo "\n";
        //     print "HTTP code: {$e->getHttpCode()}\n";
        //     print "Error code: {$e->getCode()}\n";
        //     print "Message: {$e->getMessage()}\n";
        //     print  $e->getTraceAsString();
        //     echo "\n";
        //     exit();
        // }

        // $post_array = array();
        // $post_array["01"] = array( 
        //     "domain" => "ranksonic.com",
        //     "country_code" => "us",
        //     "language" => "en",
        //     "sort_by" => "relevance",
        //     "pingback_url" => 'https://your-server.com/your_pingback_url.php?task_id=$task_id&post_id=$post_id'
        // );

        // if (count($post_array) > 0) {
        //     try {
        //         $task_post_result = $client->post('/v2/kwrd_for_domain_tasks_post', array('data' => $post_array));
        //         print_r($task_post_result);

        //         //do something with post results

        //     } catch (RestClientException $e) {
        //         echo "\n";
        //         print "HTTP code: {$e->getHttpCode()}\n";
        //         print "Error code: {$e->getCode()}\n";
        //         print "Message: {$e->getMessage()}\n";
        //         print  $e->getTraceAsString();
        //         echo "\n";
        //     }
        // }

        // $client = null;
        return view('projects.create');
    }

    /**
     * Store a newly created item in storage
     *
     * @param  \App\Http\Requests\ItemRequest  $request
     * @param  \App\Item  $model
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(ItemRequest $request, Item $model)
    {
        $item = $model->create($request->merge([
            'picture' => $request->photo->store('pictures', 'public'),
            'show_on_homepage' => $request->show_on_homepage ? 1 : 0,
            'options' => $request->options ? $request->options : null,
            'date' => $request->date ? Carbon::parse($request->date)->format('Y-m-d') : null
        ])->all());
        $item->tags()->sync($request->get('tags'));

        return redirect()->route('item.index')->withStatus(__('Item successfully created.'));
    }

    /**
     * Show the form for editing the specified item
     *
     * @param  \App\Item  $item
     * @param  \App\Tag   $tagModel
     * @param  \App\Category $categoryModel
     * @return \Illuminate\View\View
     */
    public function edit(Item $item, Tag $tagModel, Category $categoryModel)
    {
        return view('items.edit', [
            'item' => $item->load('tags'),
            'tags' => $tagModel->get(['id', 'name']),
            'categories' => $categoryModel->get(['id', 'name'])
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Itemuest  $request
     * @param  \App\Item  $item
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(ItemRequest $request, Item $item)
    {
        $item->update(
            $request->merge([
                'picture' => $request->photo ? $request->photo->store('pictures', 'public') : null,
                'show_on_homepage' => $request->show_on_homepage ? 1 : 0,
                'options' => $request->options ? $request->options : null,
                'date' => $request->date ? Carbon::parse($request->date)->format('Y-m-d') : null
            ])->except([$request->hasFile('photo') ? '' : 'picture'])
        );

        $item->tags()->sync($request->get('tags'));

        return redirect()->route('item.index')->withStatus(__('Item successfully updated.'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Item $item)
    {
        $item->delete();

        return redirect()->route('item.index')->withStatus(__('Item successfully deleted.'));
    }
}
