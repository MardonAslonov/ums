<?php

namespace App\Http\Controllers;

use App\Models\Mard;
use App\Models\Mir;
use Illuminate\Http\Request;

class MirshodController extends Controller
{
      public function index()
    {

        $mirshod = Mir::orderByDesc('created_at')->paginate(20);
        return view('mirshod.index',[
        'mirshod' => $mirshod
        ]);
    }

    public function create()
    {

        return view('mirshod.create');

    }

    public function store(Request $request)
    {
        // dd($request->all());

        $data = $request->validate([
            'name' => 'required',
            // 'phone' => 'required',
            'address' => 'required'
         ]);

        //  dd($data);

         $Mir = new Mir();
         $Mir -> name = $data['name'];
         $Mir -> address = $data['address'];
        //  $Mir -> phone = $data['phone'];
         $Mir -> save();
         return redirect() -> route('3bet');
    }

    public function deleteMirshod(Request $request, $id)
    {
        $mir = Mir::find($request->id);
        $mir->delete();
        return redirect()->route('3bet');
    }

    public function editMirshod(Request $request, $id)
    {
        // dd($request->id);
        $mir = Mir::find($request->id);
        return view('mirshod.edit',[
         'mir' => $mir
        ]);
    }

    public function updateUserMirshodTable(Request $request, $id)
    {
    // dd($id);
      $mir = Mir::where('id',$id)->first();
      $mir->name = $request['name'];
      $mir->address = $request['address'];
      $mir->save();
      return redirect()->route('3bet');
    //   return redirect('2bet');

    //  return view('mardon.edit');
    //   dd($mard);

    }
}
