<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumni;

class AlumniController extends Controller
{
    
    function index()
    {
        $data = Alumni::all();
        return view('public.alumni', ['records' => $data]);
    }
}
