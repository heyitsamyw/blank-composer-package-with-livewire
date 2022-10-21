<?php

namespace blankpackage\blank\Http\Controllers;

use App\Http\Controllers\Controller;

class BlankController extends Controller
{
    public function index()
    {
        return view(
            'blank::blank.layout',
        );
    }
}
