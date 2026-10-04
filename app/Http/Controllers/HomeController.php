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

}
