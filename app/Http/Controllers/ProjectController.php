<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Department;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
     //admin
     public function admin(Request $request){
        $departments=Department::all();
        return view('admin/adminindex',compact('departments'));
    }
    public function addDetails(Request $request){

        $name = $request->input('name');
        $description = $request->input('description');
        $image = $request->input('image');
        $dept_no = $request->input('dept_no');

        $addDetails=array(
            'department_name'=>$name,
            'description'=>$description,
            'image'=>$image,
            'department_no'=> $dept_no
        );
        DB::table('departments')->insert($addDetails);
        $departments=Department::all();
        // dd($departments);
        return view('admin/adminindex',compact('departments'));


    }

    //all
    public function getData(Request $request){
         $departments=Department::all();
        // dd($departments);
        return view('user/index',compact('departments'));
    }


    public function docView(Request $request){
            
            $attendees= $request->session()->get('LoggedUser');


            // dd($attendees);

            $doctor = Appointment::rightjoin('departments','appointments.department_name','=','departments.department_name')
            ->get()->where('department_no',$attendees['department_no']);

            // dd($doctor);
            
            return view ('doctor/details',compact('doctor'));       
    }

    //user
    public function bookAppointment(Request $request){

        $name=$request->input('name');
        $problem=$request->input('problem');
        $age=$request->input('age');
        $gender=$request->input('gender');
        $contact=$request->input('contact');
        $email=$request->input('email');
        $ref_no= random_int(100,10000);

        $a_data=array(
            'name'=>$name,
            'problem'=>$problem,
            'age'=>$age,
            'gender'=>$gender,
            'contact'=>$contact,
            'email'=>$email,
            'ref_no'=>$ref_no
        );

        // dd($a_data);
        DB::table('appointments')->insert($a_data);

        return view('user/bookingSuccess',compact('a_data'));
    }


    //public //doctor
    Public function searchAttendees(Request $request){

        $ref_no = $request->input('ref_no');
        $email = $request->input('email');

        // dd($ref_no);

        $info_attendee = DB::table('appointments')
        ->Where('ref_no',$ref_no)
        ->Where('email',$email)
        ->first();
        

        // dd($info_attendee);

        return view('user/viewAttendeesinfo',compact('info_attendee'));
    }



    //admin
    public function deleteAttendee(Request $request){

        $id=request('id');
        $user=Appointment::find($id);
        $user->delete();
        $attendees=Appointment::all();

        return view ('admin/details',compact('attendees'));
        
    }
    public function deleteEmployee(Request $request){

        $id=request('id');
        $user=User::find($id);
        $user->delete();
        $users=User::all();

        return redirect()->route('view');
        
    }



    //admin
    public function app_view(Request $request){

        $id=request('id');
        // dd($id);
        $app_data = Appointment::find($id);
        // dd($app_data);
        return view('admin/app_view',compact('app_data',));
    }
    public function docapp_view(Request $request){

        $id=request('id');
        // dd($id);
        $app_data = Appointment::find($id);
        // dd($app_data);
        return view('doctor/docapp_view',compact('app_data'));
    }

    //admin //doctor
    Public function editAttendees(Request $request){

        $id=request('id');
        $attendees=Appointment::find($id);

        $dept = Department::all();
        // dd($dept);
        return view ('admin/editAttendees',compact('attendees','dept'));
    }
    

    //admin //doctor
    public function saveEdits(Request $request){

        $id=request('id');
        $attendees=Appointment::find($id);

        $name=$request->input('name');
        $problem=$request->input('problem');
        $age=$request->input('age');
        $gender=$request->input('gender');
        $contact=$request->input('contact');
        $email=$request->input('email');
        $d_name=$request->input('dept');
        
        $date=$request->input('date');
       
        $e_data=array(
            'name'=>$name,
            'problem'=>$problem,
            'age'=>$age,
            'gender'=>$gender,
            'contact'=>$contact,
            'email'=>$email,
            'department_name'=>$d_name,
            'date'=> $date
        );

        DB::table('appointments')->where('id',$id)->update($e_data);

        $app_data=Appointment::find($id);

        return view ('admin/app_view',compact('app_data'));
    }
    public function docsaveEdits(Request $request){

        $id=request('id');
        // dd($id);
        $attendees=Appointment::find($id);

 
        $disease=$request->input('disease');
        $medicine=$request->input('med');
        $visitdate=$request->input('visitdate');
        $doctor=$request->input('doc');
        
        $e_data=array(

            'disease'=>$disease,
            'medicine'=>$medicine,
            'next_visiting_date'=>$visitdate,
            'doctors_name'=>$doctor
        );

        DB::table('appointments')->where('id',$id)->update($e_data);

        $app_data=DB::table('appointments')->where('id',$id)->first();
        // dd($id);

        return redirect()->route('docviewattendees');
    }


    Public function att_view(Request $request){
        $attendees=Appointment::all();

        return view ('admin/details',compact('attendees'));
    }

    Public function emp_view(Request $request){
        $users=User::join('roles','users.role_id','=','roles.role_id')
        ->join('departments','users.department_no','=','departments.department_no')
        ->get()->all();


        // dd($users);
        return view ('admin/empdetails',compact('users'));
    }

}

// $doctor = Appointment::rightjoin('departments','appointments.department_name','=','departments.department_name')
// ->get()->where('department_no',$attendees['department_no']);
