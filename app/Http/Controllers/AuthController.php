<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;


class AuthController extends Controller
{
     public function addemp(Request $request){

        $emp=Department::all();

        // dd($emp);

        return view('auth/register',compact('emp'));
     }


    Public function login(Request $request){
        
        return view('auth/login');
    }
    
    public function register(Request $request)
    {
       
        $confirm = $request->input('password_confirmation');

        $name=$request->input('name');
        $email=$request->input('email');
        $password=$request->input('password');
        $role_id=$request->input('role');
        $dept=$request->input('dept');

        if($password == $confirm){

            $a_data=array(
                'name'=>$name,
                'email'=>$email,
                'password'=>Crypt::encrypt($password),
                'department_no'=>$dept,
                'role_id'=>$role_id
            );
    
            // dd($a_data);
            DB::table('users')->insert($a_data);
    
            return redirect()->route('registered');

        }
        else{

            return back()->with('fail','password must be same');
        }
    }

Public function userLogin(Request $request){

    $user_data = $request->input();
    $password = $user_data['pass'];
    // $password = $user_data['pass'];

    // dd($password);
    $data = User::where('email',$user_data['email'])
        ->first();
    
    if($data){
        if($password=Crypt::decrypt($data['password'])){

            if($data->role_id == '1'){
            // dd($info['name']);
                $request->session()->put('LoggedUser',$data);
                return redirect()->route('adminhome');
            }
            elseif($data->role_id == '2'){
                
                $request->session()->put('LoggedUser',$data);
                // dd($data);
                return redirect()->route('dochome');
            }
        }
    }
    else
    {
        return view('loginFailure');
    }

    
}


    Public function logout(Request $request){

        if(session('LoggedUser')){

            // dd(session('LoggedUser'));

        
        session()->pull('LoggedUser');
        //  dd(session('LoggedUser'));
        $departments=Department::all();


        return redirect()->route('index');
        }
    }
}
