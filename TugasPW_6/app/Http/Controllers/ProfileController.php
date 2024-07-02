<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function show()
    {
        $data = [
            ['Course' => 'Matematika', 'Type' => 'Diskrit', 'Rate' => 4],
            ['Course' => 'Matematika', 'Type' => 'Aljabar Linear', 'Rate' => 3],
            ['Course' => 'Basis Data', 'Type' => 'DDL', 'Rate' => 2],
            ['Course' => 'Bhs Inggris', 'Type' => 'Speaker', 'Rate' => 1]
        ];

        return view('profile', compact('data'));
    }
}
