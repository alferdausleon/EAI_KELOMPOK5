<?php

namespace App\Http\Controllers;

use App\Models\Ekskul;
use Illuminate\Http\Request;
use App\Models\ekstrakurikuler;

class EkskulController extends Controller
{
    public function index(){
        $ekskuls = ekstrakurikuler::all();
        return view('ekskul.index', compact('ekskuls'));
    }
}

