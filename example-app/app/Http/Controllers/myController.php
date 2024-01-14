<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class myController extends Controller
{
    private $myvar = "hi";

    public function index() {
        echo $this->myvar;
    }
}
