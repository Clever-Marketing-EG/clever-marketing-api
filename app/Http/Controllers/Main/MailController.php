<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Mail\ContactMail;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function contactUs(Request $request): JsonResponse
    {
        $data = $request->validate([
            'email' => 'required|min:3|email|string',
            'message' => 'required|min:3|string',
            'from' => 'required|min:3|string',
            'subject' => 'required|min:3|string'
        ]);

        Mail::to(MAIL_TO)->send(new ContactMail($data));

        return response()->json([
            'success' => true,
            'data' => 'Thanks for contacting us!'
        ]);
    }
}
