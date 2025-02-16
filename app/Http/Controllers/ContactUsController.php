<?php

namespace App\Http\Controllers;

use App\Mail\ContactUsMail;
use App\Traits\ApiResponseTrait;
use Illuminate\Http\Request;
use Mail;

class ContactUsController extends Controller
{
    use ApiResponseTrait;

    public function send(Request $request)
    {
        $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email',
            'message' => 'required|string|min:10',
        ]);

        try {
            $data = $request->only(['name', 'email', 'message']);

            Mail::to('sara666.s47@gmail.com')->send(new ContactUsMail($data));

            return $this->successResponse(null, "Your message has been sent successfully!");
        } catch (\Exception $e) {
            return $this->errorResponse("Failed to send message", 500);
        }
    }
}
