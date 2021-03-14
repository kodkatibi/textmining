<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(array $data=[])
    {
        return view('ui.home.index',$data);
    }

    public function compute(Request $request)
    {

        $totalLenght = \Str::length($request->text);
        $wordCount = str_word_count($request->text);
        $sentenceCount=\Str::substrCount($request->text,'.');

        $data=array(
          'totalLenght'=>$totalLenght,
          'wordCount'=>$wordCount,
          'sentenceCount'=>$sentenceCount,
        );

        return $this->index($data);
    }
}
