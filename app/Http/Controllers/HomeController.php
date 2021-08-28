<?php

namespace App\Http\Controllers;

use Mail;
use Exception;
use Validator;
use App\Models\Page;
use App\Mail\ContactUs;
use Illuminate\Http\Request;
use App\Models\GeneralInformation;

class HomeController extends Controller
{

    public function index () {

        $general_information = GeneralInformation::where('site_name', config('app.name'))
                                                    ->first();

        $page = Page::where('name', 'about')->first();

        $data = [
            'page'  => $page,
            'general_information'   => $general_information
        ];

        // dd($data);

        return view('index', $data);
    }

	public function contact (Request $request) {

        try {

            $validator = Validator::make($request->all(), [
                'name'      => 'required',
                'email'     => 'required|email',
                'message_text'  => 'required',
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

            $domain_email = config('mail.domain_email');

            Mail::to($domain_email)->cc(config('mail.cc'))
                            ->send(new ContactUs($request->except('_token')));
            
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
