<?php

namespace App\Http\Controllers;

use Mail;
use Validator;
use App\Mail\ContactUs;
use Illuminate\Http\Request;

class HomeController extends Controller
{
	public function contact (Request $request) {


        $validator = Validator::make($request->all(), [
            'name' 		=> 'required',
            'email' 	=> 'required',
            'message_text' 	=> 'required',
            'subject' 	=> 'required'
        ]);

        if ($validator->fails()) {

            $response = [
                'status' 	=> 'error',
                'code' 		=> 422,
                'payload' 	=> $validator->errors()
            ];

            return response()->json($response);
        }

		Mail::to("syednazir13@gmail.com")->send(new ContactUs($request->except('_token')));
		
		return response()->json([
			'status'	=> 'success',
			'code'		=> 200,
			'message'	=> 'You message has been sent.'
		]);
	}

	public function test (Request $request) {

		return response()->json($request->all());
	}

}
