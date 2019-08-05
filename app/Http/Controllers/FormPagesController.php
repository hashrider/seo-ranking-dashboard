<?php

namespace App\Http\Controllers;

class FormPagesController extends Controller
{
    /**
     * Display the regular forms page
     *
     * @return \Illuminate\View\View
     */
    public function regularForms()
    {
        return view('pages.forms.form_regular');
    }

    /**
     * Display the extended forms page
     *
     * @return \Illuminate\View\View
     */
    public function extendedForms()
    {
        return view('pages.forms.form_extended');
    }

    /**
     * Display the validation forms page
     *
     * @return \Illuminate\View\View
     */
    public function validationForms()
    {
        return view('pages.forms.form_validation');
    }

    /**
     * Display the wizard forms page
     *
     * @return \Illuminate\View\View
     */
    public function wizardForms()
    {
        return view('pages.forms.form_wizard');
    }
}
