<?php

namespace App\Http\Controllers;

use App\Models\Mard;
use App\Models\Mir;
use Illuminate\Http\Request;

class MardonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        // $mardon = Mard::all();
        // dd($mardon);
        // $companies = Company::orderByDesc('created_at')->paginate(20);
        $mardon = Mard::orderByDesc('created_at')->paginate(20);
        return view('mardon.index',[
        'mardon' => $mardon
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     return view('mardon.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());

         $data = $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'address' => 'required'
         ]);

        //  dd($data);

         $Mard = new Mard();
         $Mard -> name = $data['name'];
         $Mard -> address = $data['address'];
         $Mard -> phone = $data['phone'];
         $Mard -> save();

         return redirect() -> route('2bet');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function edit(Request $request, $id)
    {
        $mard = Mard::find($request->id);
        return view('mardon.edit',[
         'mard' => $mard
        ]);
    }

    public function updateUserMardonTable(Request $request, $id)
    {
    // dd($id);
      $mard = Mard::where('id',$id)->first();
      $mard->name = $request['name'];
      $mard->address = $request['address'];
      $mard->phone = $request['phone'];
      $mard->save();
      return redirect()->route('2bet');
    //   return redirect('2bet');

    //  return view('mardon.edit');
    //   dd($mard);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function delete(Request $request)
    {
        $mard = Mard::find($request->id);
        $mard->delete();
        return redirect()->route('2bet');
    }

}


