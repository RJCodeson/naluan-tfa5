<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class PageController extends Controller
{
    /**
     * Display the POS landing page.
     */
    public function home(): View
    {
        return view('pages.home', [
            'title' => 'Home - POS Management System',
        ]);
    }

    /**
     * Display the About page.
     */
    public function about(): View
    {
        return view('pages.about', [
            'title' => 'About - POS Management System',
        ]);
    }
}
