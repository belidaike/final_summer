<?php

namespace App\Http\Controllers;

use App\Models\Phone;
use Illuminate\Http\Request;

class PhoneController extends Controller
{
    public function index() {
        $phones = Phone::with('specs')->get();

        return inertia('Phone',[
            'phones' => $phones
        ]);
    }
}
