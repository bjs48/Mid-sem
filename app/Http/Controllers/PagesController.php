<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    function home() {
        return view('Pages.home');
    }
    function about() {
        return view('Pages.about');
    }
    function contact() {
        return view('Pages.contact');
    }
    function store(Request $request) {
        $name = $request->name;
        echo $name;
        return redirect()->route('thanks',['name' => $name ]);
    }
    function thanks($name, Request $request) {
        return view('Pages.thankyou')->with(compact('name'));
    }
}
