<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Share;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shares = Share::all();

        return view('image.index', compact('image'));
    }

}
