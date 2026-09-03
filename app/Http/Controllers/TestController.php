<?php

namespace App\Http\Controllers;

class TestController extends Controller
{
    public function index()
    {
        $wort = 'Hallo, mein Name ist Tim und ich schreibe das hier.';

        return view('test', [
            'wort' => $wort
        ]);
    }
}
