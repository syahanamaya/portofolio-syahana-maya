<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{
    /**
     * Show the single-page portfolio.
     */
    public function index(): View
    {
        $portfolio = config('portfolio');

        return view('home', [
            'portfolio' => $portfolio,
            'currentPage' => 'home',
        ]);
    }

    public function section(string $section): View
    {
        $components = [
            'about' => 'about',
            'skills' => 'skills',
            'projects' => 'projects',
            'experience' => 'experience',
            'certifications' => 'goals',
            'contact' => 'contact',
        ];

        abort_unless(isset($components[$section]), 404);

        return view('pages.section', [
            'portfolio' => config('portfolio'),
            'component' => $components[$section],
            'currentPage' => $section,
        ]);
    }
}
