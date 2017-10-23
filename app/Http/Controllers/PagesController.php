<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function getWelcome() {
        return view('pages.welcome');
    }

    public function getWebdesign() {
        return view('pages.webdesign');
    }

    public function getAbout() {
        return view('pages.about');
    }

    public function getPortfolio() {
        return view('pages.portfolio');
    }
}
