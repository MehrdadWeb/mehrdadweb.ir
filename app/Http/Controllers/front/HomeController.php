<?php

namespace App\Http\Controllers\front;

use App\frontmodels\Portfolio;
use App\frontmodels\Service;
use App\frontmodels\Article;
use App\frontmodels\Category;
use App\frontmodels\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $portfolios = Portfolio::orderBy('id', 'DESC')->get();
        // dd($portfolios);
        $tags = $portfolios->unique('tag');

        $services = Service::orderBy('id', 'DESC')->get();
        $servicetags = $services->unique('tag');
        return view('front.main', compact('portfolios', 'tags','services','servicetags'));
    }
}
