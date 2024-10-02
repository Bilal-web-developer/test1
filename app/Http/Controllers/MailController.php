<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\UserMail;

class MailController extends Controller
{
    public function sendEmail(Request $request)
    {
        // Assuming $user is retrieved from your database or passed in
        $user = $request->email; // or however you retrieve the user

        try {
            // Attempt to send the email
            Mail::to($user)->send(new UserMail($user));
            return response()->json(['message' => 'Email sent successfully!'], 200);
        } catch (\Exception $e) {
            // Handle the error
            return response()->json(['message' => 'Email could not be sent.', 'error' => $e->getMessage()], 500);
        }
    }
}
