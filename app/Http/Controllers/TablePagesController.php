<?php

namespace App\Http\Controllers;

class TablePagesController extends Controller
{
    /**
     * Display the regular tables page
     *
     * @return \Illuminate\View\View
     */
    public function regularTables()
    {
        return view('pages.tables.tables_regular');
    }

    /**
     * Display the extended tables page
     *
     * @return \Illuminate\View\View
     */
    public function extendedTables()
    {
        return view('pages.tables.tables_extended');
    }

    /**
     * Display the datatable tables page
     *
     * @return \Illuminate\View\View
     */
    public function datatableTables()
    {
        return view('pages.tables.tables_datatable');
    }
}
