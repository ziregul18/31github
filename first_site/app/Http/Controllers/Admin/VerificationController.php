<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\VerificationEmail;
use App\Models\User;
use Illuminate\Foundation\Auth\VerifiesEmails;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class VerificationController extends Controller
{
    use VerifiesEmails;

    protected $redirectTo = '/home';

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('signed')->only('verify');
        $this->middleware('throttle:6,1')->only('verify', 'resend');

        $this->redirectTo = route('verification.notice'); // Add this line
    }

    public function sendVerificationEmail()
    {
        $user = Auth::user();

        if ($user->hasVerifiedEmail()) {
            return response(['message' => 'Email already verified.'], 422);
        }
        Mail::to($user->email)->send(new VerificationEmail($user));

        return back()->with('message', 'Verification email sent!');
    }

//    public function verifyEmail($token)
//    {
//        $user = User::where('verification_token', $token)->first();
//        if (!$user) {
//            return response(['message' => 'Invalid token.'], 422);
//        }
//        $user->markEmailAsVerified();
//        return response(['message' => 'Email successfully verified.']);
//    }


}
