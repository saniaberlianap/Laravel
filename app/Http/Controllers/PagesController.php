<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return
     */
    public function home()
    {
        $mahasiswa = DB::table('mahasiswa')->get();
        return view('index', ['mahasiswa' => $mahasiswa]);
    }
}