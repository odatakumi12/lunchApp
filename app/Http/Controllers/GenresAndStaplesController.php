<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genre;
use App\Models\Staple;

class GenresAndStaplesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $data = [];
         $genres = Genre::orderBy('genre_id', 'asc')->paginate(10);
         $staples = Staple::orderBy('staple_id', 'asc')->paginate(10);
         $data = [
                'genres' => $genres,
                'staples' => $staples,
                ];
    
    return view('index',$data);
        
    }

        
}
