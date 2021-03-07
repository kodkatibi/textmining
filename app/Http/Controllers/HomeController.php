<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('ui.home.index');
    }

    public function compute(Request $request)
    {

        $totalLenght = \Str::length($request->text);
        $wordCount = str_word_count($request->text);
        $sentenceCount=\Str::substrCount($request->text,'.');
        dd($totalLenght,$wordCount,$sentenceCount);
        return redirect()->route('home');
    }
}
