<?php

namespace App\Http\Controllers;

use App\Models\Pemainmodel;
use Illuminate\Http\Request;

class pemainController extends Controller
{
    public function index (){
        $data_pemain = Pemainmodel::all()->sortByDesc('id');

        return view('pemain.index', compact('data_pemain'));
    }
}
