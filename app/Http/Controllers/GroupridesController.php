<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Groupride;

class GroupridesController extends Controller
{
    public function index() {
        $grouprides = Groupride::all();

        return view('grouprides.index', compact('grouprides'));
    }

    public function store() {
        $attributes = request()->validate(['title' => 'required', 'description' => 'required', 'zip' => 'required']);

        Groupride::create($attributes);

        return redirect('grouprides');
    }

    public function show(Groupride $groupride) {
        return view('grouprides.show', compact('groupride'));
    }
}
