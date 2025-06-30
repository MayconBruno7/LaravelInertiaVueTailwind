<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use Inertia\Inertia;

class EmailVerificationsController extends Controller
{
    public function notice()
    {
        return Inertia::render('Auth/VerifyEmail', [
            'status' => session('status')
        ]);
    }

    public function handler(EmailVerificationRequest $request)
    {
        $request->fullfill();
        return redirect()->route('home');
    }

    public function resend(Request $request)
    {
        $request->user()->sendEmailVerificationNotification();
        return back()->with('status', 'Verification link sent!');
    }
}
