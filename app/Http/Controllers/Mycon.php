<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Mycon extends Controller
{
    public function index()
    {

        return $this->myFunction();
    }

    public function myFunction()
    {
        return view('myview.index');
    }

    public function process(Request $request)
    {
        $data['mynum'] = $request->input('num');

        return view('myview.process', $data);
    }
}
