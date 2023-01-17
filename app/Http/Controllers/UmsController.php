<?php

namespace App\Http\Controllers;

use App\Models\Mard;
use App\Models\Mir;
use Illuminate\Http\Request;

class UmsController extends Controller
{
    public function show($id){
        return 'Foydalanuvchinng ID raqami'.$id;

    }

    public function show1($id){
        return 'Foydalanuvchinng ID raqami  1]  '.$id;
    }

    public function index()
    {


        $mardon = Mard::all();
        dd($mardon);
        // $mardon = Mard::all();
        // return view('mardon.index',[
        // 'mardon' => $mardon
        // ]);
    }
}
