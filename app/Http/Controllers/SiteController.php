<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class SiteController extends Controller
{
    //
    public function index()
    {
        return view( 'index', ['name' => 'Alex'] );
    }

    public function articles()
    {
        return view( 'articles', ['name' => 'Alex'] );
    }

    public function contact()
    {
        return view( 'contact' );
    }

}
