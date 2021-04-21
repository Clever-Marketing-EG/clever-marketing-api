<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Mail\JobApplicationMail;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailsController extends Controller
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
            'data' => trans('utils.contact-us-thanks')
        ]);
    }

    public function jobApplication(Request $request): JsonResponse
    {
        $data = $request->validate([
            'job_title' => 'required|string|min:3',
            'from' => 'required|string|min:3',
            'email' => 'required|email|string|min:3',
            'message' => 'nullable|string'
        ]);


        Mail::to(MAIL_TO)->send(new JobApplicationMail($data));

        return response()->json([
            'success' => true,
            'data' => trans('utils.job-application-confirmation')
        ]);
    }
}
