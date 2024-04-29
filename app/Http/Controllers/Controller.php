<?php

namespace App\Http\Controllers;

abstract class Controller
{
    public function my_data() {
        return view('test');
    }
}
