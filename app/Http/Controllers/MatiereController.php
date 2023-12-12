<?php

namespace App\Http\Controllers;

use App\Models\Matiere;
use Illuminate\Http\Request;

class MatiereController extends Controller
{
    public function index(){

        $subjects = Matiere::all();
        return view('subjects.index',['subjects' => $subjects]);
    }
}
