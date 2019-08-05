<?php

namespace App\Http\Controllers;

class ExamplePagesController extends Controller
{
    /**
     * Display the pricing page
     *
     * @return \Illuminate\View\View
     */
    public function pricing()
    {
        return view('pages.example_pages.pricing');
    }

    /**
     * Display the lock page
     *
     * @return \Illuminate\View\View
     */
    public function lock()
    {
        return view('pages.example_pages.lock');
    }

    /**
     * Display the rtl support page
     *
     * @return \Illuminate\View\View
     */
    public function rtlSupport()
    {
        return view('pages.example_pages.language');
    }

    /**
     * Display the timeline page
     *
     * @return \Illuminate\View\View
     */
    public function timeline()
    {
        return view('pages.example_pages.timeline');
    }

    /**
     * Display the widgets page
     *
     * @return \Illuminate\View\View
     */
    public function widgets()
    {
        return view('pages.widgets');
    }

    /**
     * Display the charts page
     *
     * @return \Illuminate\View\View
     */
    public function charts()
    {
        return view('pages.charts');
    }

    /**
     * Display the calendar page
     *
     * @return \Illuminate\View\View
     */
    public function calendar()
    {
        return view('pages.calendar');
    }
}
