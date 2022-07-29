<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bootstrap;

class BootstrapController extends Controller
{
     public function show()
    {
     return view('bootstrap');
    }

    public function store(Request $request)
    {
       Bootstrap::create($request->all());
        dd($request->all());
    
    }
    public function display(){
        // $users = DB::select('select * from bootstraps');
        $data= Bootstrap::all();
        return view ('bootstrapview',['bootstraps'=>$data]);
        }

    public function delete($id){
        $data=Bootstrap::find($id);
        $data->delete($id);
        return redirect('bootstrapview');
        } 

    public function edit($id){
            $data= Bootstrap::find($id);
            return view('edit',['data'=>$data]);

        }  
    public function update(Request $req){
        $data=Bootstrap::find($req->id);
        $data->email=$req->email;
        $data->password=$req->password;
        $data->address=$req->address;
        $data->address_2=$req->address_2;
        $data->city=$req->city;
        $data->gender=$req->gender;
        $data->save();
        return redirect('bootstrapview');

    }    
}


