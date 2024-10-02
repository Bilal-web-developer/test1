<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;


class myController extends Controller
{
    public function insert_view(){
        return view('insert');
    }

    public function insert_data(Request $req){
        $data = $req->validate([
            'name' => 'required',
            'email' => 'required|unique:users,email',
            'password' => 'required',
        ]);

        $q = DB::table('users')->insert([
            'name' => $req->name,
            'email' => $req->email,
            'password' => $req->password,
        ]);

        if ($q) {
            return redirect()->route('login_file');
        } else {
            echo '2222222';
        }
    }

    public function login_view(){
        return view('login');
    }

    public function login_check(Request $req){
        $data2 = DB::table('users')->where('email', $req->email)->where('password', $req->password)->first();
        if ($data2) {
            session()->put('my_session', $req->email);
            return redirect()->route('table_file');
        } else {
            return redirect()->route('login_file');
        }
    }

    public function table(){
        $user = DB::table('users')->get();
        $my = session()->get('my_session');
        if ($my) {
            return view('table', compact('user'));
        } else {
            return redirect()->route('login_file');
        }
    }

    public function delete($id){
        DB::table('users')->where('id', $id)->delete();
        return redirect()->route('table_file');
    }

    public function update_show($id){
        $update = DB::table('users')->where('id', $id)->first();
        return view('update', compact('update'));
    }

    public function update_data(Request $req, $id){
        $upd = DB::table('users')->where('id', $id)->update([
            'name' => $req->name,
            'email' => $req->email,
            'password' => $req->password,
        ]);

        if ($upd) {
            return redirect()->route('table_file');
        } else {
            echo '123';
        }
    }

    public function forget(){
        return view('forget');
    }

    public function sendEmail(Request $req){
        $qry = DB::table('users')->where('email', $req->email)->first();
        if ($qry) {
        $to = $req->email;
        $subject = 'Verify Now';
        $token = rand(0, 1000000);
        $message = "$token";
        session()->put('token', $token);
        $token_ins = DB::table('users')->where('email',$req->email)->update([
            'pin' => $token
        ]);
        try{
            Mail::raw($message, function ($msg) use ($to, $subject) {
                $msg->to($to)->subject($subject);
            });

            

        }catch (\Exception $e) {
            // Log the exception message
            Log::error('Failed to send email: ' . $e->getMessage());
            echo "Failed to send email: " . $e->getMessage();
        }
        return view('verify');
        }
        else{
            echo "Invalid email";        }
    }

    public function verify_code(Request $req){
       $pin=session()->get('token');
       if ($pin==$req->code) {
        echo'123';
       }
       else{
        echo'2222';
       }

    }
}
