<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function admin() {
        return view('pages.dashboardAdmin');
    }
    public function owner() {
        return view('pages.dashboardOwner');
    }

    public function allgyms() {
        return view('pages.allGyms');
    }



    public function userprofile() {
        return view('pages.userprofile');
    }
}



