<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anupam;

class StudentController extends Controller
{
    //
    public function addData(Request $req)
    {
        $anupam = new Anupam;
        $anupam->email=$req->email;
        $anupam->password=$req->password;
        $anupam->save();
        return redirect('list');
    }

    function show(){
        $data=Anupam::all();
        return view('list', ['anupam'=>$data]);
    }
    function deleteData($email)
    {
        $data = Anupam::where('email', $email)->first();
        $data->delete();

        return redirect('list');
    }
    function showData($email){
        $data = Anupam::where('email', $email)->first();
        return view('edit', ['data'=>$data]);
    }
    function update(Request $request, $email)
    {
        $updata = Anupam::where('email', $email)->first();
        $updata->email=$request->email;
        $updata->password=$request->password;
        $updata->save();
        return redirect('list');
    }
}

