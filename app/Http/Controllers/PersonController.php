<?php

namespace App\Http\Controllers;

use App\Models\Person;

class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('persons.index', [
            'collections' => Person::orderBy('sequence')->get()
        ]);
    }
}
