<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function admin() {
        return view('pages.dashboardAdmin');
    }
    public function manager() {
        return view('pages.dashboardManager');
    }

}
