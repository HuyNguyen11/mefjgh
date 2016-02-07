<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Models\Song;

class HomeController extends BaseController
{
    function index()
    {
    	$songs = Song::all();
    	$view = view('welcome');
    	$view->with("songs",$songs);
    	return $view;
    } 
}
