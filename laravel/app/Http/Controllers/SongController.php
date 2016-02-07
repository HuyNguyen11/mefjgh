<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Song;

class SongController extends BaseController
{
    function show($id)
    {
    	$song = Song::find($id);
    	$view = view('songs.show');
    	$view->with("song",$song);
    	return $view;
    } 
}
