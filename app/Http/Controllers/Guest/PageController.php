<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;

class PageController extends Controller
{
    public function index(){
        // 4. recuperare i record 
        $movies = Movie::All(); //SELECT * FROM NOME
        
        
        // 5. passare i record alla view
        return view('pages.welcome', compact('movies'));
    }
}
