<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;
use App\User;
use App\LocoDetails;

class Users extends Controller
{
    public function list()
    {
       // print_r($user = User::all());
        // return Session::get('logData');
        $user = User::all();
        return view('userlist', ['user' => $user]);
    }

    public function doLogout(){
        Auth::logout(); // logging out user
        return redirect('login');
    }

    public function showloco()
    {
        //print_r( $user=USER::all());
        // return Session::get('logData');
        $locodetails = LocoDetails::all();
        return view('showloco', ['locodetails' => $locodetails]);
    }

    public function login()
    {
        return view('login');
    }

    public function create()
    {
        return view('createaccount');
    }

    public function locodetails()
    {
        return view('locodetails');
    }

    public function loginsubmit(Request $req)
    {
        //print_r($req->input());
        /* $req->validate([
            "id"           =>    "required|id",
            "password"        =>    "required|min:6"
        ]);
        User::select('id')->where([
            ['id', '=', $req->id],
            ['password', '=', $req->password]
        ])->get();
        $req->session()->put('logData', [$req->input()]);
        return redirect('/list');*/
        $this->validate($req, [
            'id'  => 'required',
            'password' => 'required|min:3'
        ]);
        $userdata = array(
            'id'   => $req->get('id'),
            'password' => $req->get('password')
        );
        print_r($userdata);
        if (Auth::attempt($userdata)) {
           return redirect('showloco');
        } else {
           return back()->with('error', 'Wrong Login Details');

        }
    }

    function createsubmit(Request $req)
    {
        $user = new User;
        $user->id = $req->id;
        $user->name = $req->name;
        $user->password = Hash::make($req->password);
        $user->email = $req->email;
        $user->phone = $req->phone;
        $result = $user->save();
        if ($result) {
            return redirect('/list');
        }
    }

    function locodetailssubmit(Request $req)
    {
        $locodetails = new LocoDetails;
        $locodetails->locono = $req->locono;
        $locodetails->trainno = $req->trainno;
        $locodetails->homeshed = $req->homeshed;
        $locodetails->source = $req->source;
        $locodetails->destination = $req->destination;
        $result = $locodetails->save();
        if ($result) {
            return redirect('/showloco')->with('success', 'Locodetails saved!');
        }
    }
}
