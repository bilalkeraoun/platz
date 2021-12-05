<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ressource;

class RessourcesController extends Controller
{
    public function index(Ressource $ressource) {
        $ressource = Ressource::find($ressource);
        return view('posts.index',compact('ressource'));
    }
}
