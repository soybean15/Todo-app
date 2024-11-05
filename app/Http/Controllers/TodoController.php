<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class TodoController extends Controller
{


    public function index($filter){
        return Inertia::render('Task/Index', [
            'filter' => 'Today'
          ]);


    }
}
