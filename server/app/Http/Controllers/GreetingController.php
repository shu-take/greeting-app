<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GreetingController extends Controller
{
    public function show($greeting)
    {
        $array = [ "おはよう", "こんにちは", "こんばんは", "おやすみ"];
        $random = $array[array_rand($array)];
        return view('greeting.show', ['greeting' => $greeting, 'random' => $random, 'freeword' => '']);
    }

    public function free($freeword)
    {
        return view('greeting.show', ['greeting' => '','freeword' => $freeword]);
    }
}
