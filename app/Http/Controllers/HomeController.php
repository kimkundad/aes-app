<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cusday;
use Illuminate\Support\Facades\Validator;
use Auth;
use Redirect;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
      //  $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (Auth::check()) {
            return Redirect::to('admin/dashboard');
       } else {
            return view('welcome');
       }
    }

    public function post_add_data(Request $request){

        // $this->validate($request, [
        //     'name' => 'required',
        //     'surname' => 'required',
        //     'clinicname' => 'required',
        //     'email' => 'required',
        // ]);

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'surname' => 'required',
            'clinicname' => 'required',
            'email' => 'required',
       ]);

        $invID = cusday::count();
        $invID++;

        $characters = 'AF'.$request['day'].str_pad($invID, 4, '0', STR_PAD_LEFT);

        //dd($characters);

           $email = $request['email'];
           $email = filter_var($email, FILTER_SANITIZE_EMAIL);

           if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
           $check_mail = cusday::where('email', $request['email'])->count();

           if($check_mail == 0){

            if($request['type'] == 1){
                $type_2 = 'online';
            }else{
                $type_2 = 'onground';
            }

            $objs = new cusday();
            $objs->name = $request['name'];
            $objs->surname = $request['surname'];
            $objs->clinic_name = $request['clinicname'];
            $objs->email = $request['email'];
            $objs->code = $characters;
            $objs->day = $request['day'];
            $objs->type = $request['type'];
            $objs->type_2 = $type_2;
            $objs->save();

            $details = [
                'qrcode' => $characters,
                'day' => $request['day'],
                ];

                $data['characters'] = $characters;


            if($request['type'] == 1){
                \Mail::to($request['email'])->send(new \App\Mail\MyTestMail2($details));
                return view('13online_4', $data)->with('success','คุณทำการเพิ่มอสังหา สำเร็จ');
            }else{
                \Mail::to($request['email'])->send(new \App\Mail\MyTestMail($details));
                return view('13onground_4', $data)->with('success','คุณทำการเพิ่มอสังหา สำเร็จ');
            }
    

           }else{
               return Redirect::back()->withErrors($validator)->withInput()->with('error', 'อีเมลของคุณได้ทำการลงทะเบียนไปแล้ว');
           }

            }else{
                return Redirect::back()->withErrors($validator)->withInput()->with('email_error', 'อีเมลของคุณได้ทำการลงทะเบียนไปแล้ว');
            }
           


    }

    public function post_add_data_14(Request $request){


        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'surname' => 'required',
            'clinicname' => 'required',
            'email' => 'required',
       ]);

        $invID = cusday::count();
        $invID++;

        $characters = 'AF'.$request['day'].str_pad($invID, 4, '0', STR_PAD_LEFT);

        //dd($characters);

        $email = $request['email'];
           $email = filter_var($email, FILTER_SANITIZE_EMAIL);

           if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

           $check_mail = cusday::where('email', $request['email'])->count();

           if($check_mail == 0){

            if($request['type'] == 1){
                $type_2 = 'online';
            }else{
                $type_2 = 'onground';
            }

            $objs = new cusday();
            $objs->name = $request['name'];
            $objs->surname = $request['surname'];
            $objs->clinic_name = $request['clinicname'];
            $objs->email = $request['email'];
            $objs->code = $characters;
            $objs->day = $request['day'];
            $objs->type = $request['type'];
            $objs->type_2 = $type_2;
            $objs->save();

            $details = [
                'qrcode' => $characters,
                'day' => $request['day'],
                ];

                $data['characters'] = $characters;

           
            if($request['type'] == 1){
                \Mail::to($request['email'])->send(new \App\Mail\MyTestMail2($details));
                return view('14online.14online_4', $data)->with('success','คุณทำการเพิ่มอสังหา สำเร็จ');
            }else{
                \Mail::to($request['email'])->send(new \App\Mail\MyTestMail($details));
                return view('14onground.14onground_4', $data)->with('success','คุณทำการเพิ่มอสังหา สำเร็จ');
            }
    

           }else{
            return Redirect::back()->withErrors($validator)->withInput()->with('error', 'อีเมลของคุณได้ทำการลงทะเบียนไปแล้ว');
           }

        }else{
            return Redirect::back()->withErrors($validator)->withInput()->with('email_error', 'อีเมลของคุณได้ทำการลงทะเบียนไปแล้ว');
        }

    }
}
