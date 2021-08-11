<?php

namespace App\Http\Controllers;

use Mail;
use Exception;
use Validator;
use App\Mail\ContactUs;
use Illuminate\Http\Request;

class HomeController extends Controller
{
	public function contact (Request $request) {

        try {

            $validator = Validator::make($request->all(), [
                'name'      => 'required',
                'email'     => 'required|email',
                'message_text'  => 'required',
                'subject'   => 'required'
            ]);

            if ($validator->fails()) {

                $response = [
                    'status'    => 'error',
                    'code'      => 422,
                    'payload'   => $validator->errors()
                ];

                return response()->json($response);
            }

            $email = $request->get('email');

            Mail::to($email)->send(new ContactUs($request->except('_token')));
            
            return response()->json([
                'status'    => 'success',
                'code'      => 200,
                'message'   => 'You message has been sent.'
            ]);

        } catch (Exception $ex) {

            return response()->json([
                'status'    => 'error',
                'code'      => 500,
                'message'   => $ex->getMessage()
            ]);
        }
	}

	public function test (Request $request) {

		return response()->json($request->all());
	}

}
