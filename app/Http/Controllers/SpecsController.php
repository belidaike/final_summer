<?php

namespace App\Http\Controllers;

use App\Models\Specs;
use Illuminate\Http\Request;

class SpecsController extends Controller
{
    public function index() {
        $specs = Specs::with('phone')->get();

        return inertia('Specs',[
            'specs' => $specs
        ]);
    }
}
