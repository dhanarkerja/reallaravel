<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Data;
class UserController extends Controller
{
    public function getData() // route ke halaman index
    {
        $datas = Data::get();
        return view('index',compact('datas'))->with('i', (request()->input('page', 1) - 1) * 5);;
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'kelas' => 'required',
        ]);
      
        Data::create($request->all());
       
        return redirect()->route('index')
                        ->with('success','Student created successfully.');
    }
    public function destroy(Data $id)
    {
        $id->delete();
       
        return redirect()->route('index')
                        ->with('success','Student deleted successfully');
    }
    
  
}
