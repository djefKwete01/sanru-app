<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class testController extends Controller
{
    public function index(){
        return view('pages.table_list');
    }
    public function logout(){
        return view('sanru.test.logout');
    }
}
