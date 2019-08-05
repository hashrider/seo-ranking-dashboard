<?php

namespace App\Http\Controllers;

class MapPagesController extends Controller
{
    /**
     * Display the google maps page
     *
     * @return \Illuminate\View\View
     */
    public function googleMaps()
    {
        return view('pages.maps.maps_google');
    }

    /**
     * Display the full screen maps page
     *
     * @return \Illuminate\View\View
     */
    public function fullscreenMaps()
    {
        return view('pages.maps.maps_fullscreen');
    }

    /**
     * Display the vector maps page
     *
     * @return \Illuminate\View\View
     */
    public function vectorMaps()
    {
        return view('pages.maps.maps_vector');
    }
}
