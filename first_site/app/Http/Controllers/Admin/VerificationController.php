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

//        $this->redirectTo = route('verification.notice');
        $this->redirectTo = route('admin.index');
    }


    public function sendVerificationEmail()
    {
        $user = Auth::user();

        try {
            if ($user->hasVerifiedEmail()) {
                return response(['message' => 'Email already verified.'], 422);
            }

            // Use the user's email as the sender address
            Mail::to($user->email)
                ->from(config('burulaiurbaeva7@gmail.com'), config('Email verification'))
                ->send(new VerificationEmail($user));

            return back()->with('message', 'Verification email sent!');
        } catch (TransportException $e) {
            // Log or handle the exception as needed
            return back()->with('error', 'Error sending verification email: ' . $e->getMessage());
        }
    }


}
