<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class SubtitlesController extends BaseController
{
    public function index(Request $request) {
        //$data = file_get_contents(fopen(storage_path("file.txt"), "r"));
        $data = file_get_contents(storage_path("file.txt"));

        //$input = Input::all();

        return view('welcome');
    }
}
