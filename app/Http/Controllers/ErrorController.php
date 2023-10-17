<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ErrorController extends Controller
{

    public function unauthorized()
    {
        return view('errors.401');
    }

    public function forbidden()
    {
        return view('errors.403');
    }

    public function notFound()
    {
        return view('errors.404');
    }

    public function pageExpired()
    {
        return view('errors.419');
    }

    public function tooManyRequests()
    {
        return view('errors.429');
    }

    public function internalServerError()
    {
        return view('errors.500');
    }

    public function serviceUnavailable()
    {
        return view('errors.503');
    }
}
