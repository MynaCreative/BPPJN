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
        $lead = Person::orderBy('sequence')->first();
        return view('persons.index', [
            'lead' => $lead,
            'collections' => Person::where('id', '!=', $lead->id)->orderBy('sequence')->get()->chunk(3)
        ]);
    }
}
