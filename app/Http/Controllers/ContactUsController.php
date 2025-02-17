<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactUsRequest;
use App\Mail\ContactUsMail;
use App\Traits\ApiResponseTrait;
use Illuminate\Http\Request;
use Mail;

class ContactUsController extends Controller
{
    use ApiResponseTrait;

    public function store(ContactUsRequest $request)
    {
        try {
            $data = $request->only(['name', 'email', 'message']);

            Mail::to(env('CONTACT_US_EMAIL'))->send(new ContactUsMail($data));

            return $this->successResponse(null, "Your message has been sent successfully!");
        } catch (\Exception $e) {
            return $this->errorResponse("Failed to send message", 500);
        }
    }
}
