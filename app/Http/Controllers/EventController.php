<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(){
        $arr = ["gian", 2, 3, "G"];
        $nomes = ['João', 'Maria', 'Gian'];
        return view('welcome',['nome' => 'pedro', 'arr' => $arr, 'nomes' => $nomes]);
    }

    public function create(){
        return view('events.create');
    }
}
