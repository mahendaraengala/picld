<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\ContactEnquiry;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Validator;

class ContactEnquiryController extends Controller
{
    /**
     * Handle Create Contact Enquiry
     *
     * @return RedirectResponse
     */
    public function handleCreateContactEnquiry(Request $request): RedirectResponse
    {
        try {

            $captcha = $request->input('g-recaptcha-response');

            // if (is_null($captcha)) {
            //     return redirect()->back()->with('message', [
            //         'status' => 'error',
            //         'title' => 'Invalid Captcha',
            //         'description' => 'Please verify the captcha in the form'
            //     ]);
            // }
            // else {
            //     $res = json_decode(file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".env('RECAPTCHA_SERVER_KEY')."&response=".$captcha."&remoteip=".$_SERVER['REMOTE_ADDR']));
            //     if($res->success === false){
            //         return redirect()->back()->with('message', [
            //             'status' => 'error',
            //             'title' => 'Invalid Captcha',
            //             'description' => 'Please verify the captcha in the form'
            //         ]);
            //     }
            // }

            $validation = Validator::make($request->all(), [
                'name' => ['required', 'string', 'min:1', 'max:100'],
                 'phone' => ['required', 'numeric', 'digits_between:10,12'],
                'email' => ['required', 'string', 'email', 'min:1', 'max:100'],
                 'subject' => ['required', 'string', 'min:1', 'max:250'],
                'message' => ['required', 'string', 'min:1', 'max:1000'],
                'document' => ['nullable', 'file', 'mimes:jpg,jpeg,png,pdf']
            ]);

            if ($validation->fails()) {
                return redirect()->back()->withErrors($validation)->withInput();
            }

            $contact_enquiry = new ContactEnquiry();
            $contact_enquiry->name = $request->input('name');
             $contact_enquiry->phone = $request->input('phone');
            $contact_enquiry->email = $request->input('email');
             $contact_enquiry->subject = $request->input('subject');
            $contact_enquiry->message = $request->input('message');
            if ($request->hasFile('document')) {
                $contact_enquiry->document = $request->file('document')->store('contact-enquiry-documents');
            }
           
            $contact_enquiry->save();

            Notification::route('mail', env('MAIL_TO'))->notify(new \App\Notifications\Web\ContactEnquiry($request->all()));
            return redirect()->route('view.thank-you');
            // return redirect()->back()->with('message', [
            //     'status' => 'success',
            //     'title' => 'Message Sent',
            //     'description' => 'Your message is successfully sent, we will get in touch with you soon'
            // ]);        
        } catch (Exception $exception) {
            return redirect()->back()->with('message', [
                'status' => 'error',
                'title' => 'An error occcured',
                'description' => $exception->getMessage()
            ]);
        }
    }


    /**
     * Handle Brochure Form Enquiry
     *
     * @return RedirectResponse
     */
    public function handleKubernetFormEnquiry(Request $request) 
    {
        try {

            // $captcha = $request->input('g-recaptcha-response');

            // if (is_null($captcha)) {
            //     return redirect()->back()->with('message', [
            //         'status' => 'error',
            //         'title' => 'Invalid Captcha',
            //         'description' => 'Please verify the captcha in the form'
            //     ]);
            // }
            // else {
            //     $res = json_decode(file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".env('RECAPTCHA_SERVER_KEY')."&response=".$captcha."&remoteip=".$_SERVER['REMOTE_ADDR']));
            //     if($res->success === false){
            //         return redirect()->back()->with('message', [
            //             'status' => 'error',
            //             'title' => 'Invalid Captcha',
            //             'description' => 'Please verify the captcha in the form'
            //         ]);
            //     }
            // }
            
            $validation = Validator::make($request->all(), [
                'form_subject' => ['required', 'string', 'min:1', 'max:250'],
                'name' => ['required', 'string', 'min:1', 'max:100'],
                'phone' => ['required', 'numeric', 'digits_between:10,12'],
                'email' => ['required', 'string', 'email', 'min:1', 'max:100'],
                'message' => ['required', 'string', 'min:1', 'max:1000']
            ]);

            if ($validation->fails()) {
                return redirect()->back()->withErrors($validation)->withInput();
            }

            Notification::route('mail', env('MAIL_TO'))->notify(new \App\Notifications\Web\CommonForm($request->all()));

            return redirect()->back()->with('message', [
                'status' => 'success',
                'title' => 'Message Sent',
                'description' => 'Your message is successfully sent, we will get in touch with you soon'
            ]); 

        } catch (Exception $exception) {
            return redirect()->back()->with('message', [
                'status' => 'error',
                'title' => 'An error occcured',
                'description' => $exception->getMessage()
            ]);
        }
    }


    /**
     * Handle Brochure Form Enquiry
     *
     * @return RedirectResponse
     */
    public function handleBrochureFormEnquiry(Request $request) 
    {
        try {

            // $captcha = $request->input('g-recaptcha-response');

            // if (is_null($captcha)) {
            //     return redirect()->back()->with('message', [
            //         'status' => 'error',
            //         'title' => 'Invalid Captcha',
            //         'description' => 'Please verify the captcha in the form'
            //     ]);
            // }
            // else {
            //     $res = json_decode(file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".env('RECAPTCHA_SERVER_KEY')."&response=".$captcha."&remoteip=".$_SERVER['REMOTE_ADDR']));
            //     if($res->success === false){
            //         return redirect()->back()->with('message', [
            //             'status' => 'error',
            //             'title' => 'Invalid Captcha',
            //             'description' => 'Please verify the captcha in the form'
            //         ]);
            //     }
            // }

            $validation = Validator::make($request->all(), [
                'form_subject' => ['required', 'string', 'min:1', 'max:250'],
                'name' => ['required', 'string', 'min:1', 'max:100'],
                'phone' => ['required', 'numeric', 'digits_between:10,12'],
                'email' => ['required', 'string', 'email', 'min:1', 'max:100'],
                'message' => ['required', 'string', 'min:1', 'max:1000'],
                'download_file' => ['nullable', 'string']
            ]);

            if ($validation->fails()) {
                return redirect()->back()->withErrors($validation)->withInput();
            }

            Notification::route('mail', env('MAIL_TO'))->notify(new \App\Notifications\Web\CommonForm($request->all()));

            return redirect($request->input('download_file'));

        } catch (Exception $exception) {
            return redirect()->back()->with('message', [
                'status' => 'error',
                'title' => 'An error occcured',
                'description' => $exception->getMessage()
            ]);
        }
    }

    /**
     * Handle Whitepapers Form Enquiry
     *
     * @return Response
     */
    public function handleWhitepaperFormEnquiry(Request $request): Response
    {
        try {

            $validation = Validator::make($request->all(), [
                'form_subject' => ['required', 'string', 'min:1', 'max:250'],
                'name' => ['required', 'string', 'min:1', 'max:100'],
                'phone' => ['required', 'numeric', 'digits_between:10,12'],
                'email' => ['required', 'string', 'email', 'min:1', 'max:100'],
                'message' => ['required', 'string', 'min:1', 'max:1000'],
                'download_file' => ['nullable', 'string']
            ]);

            if ($validation->fails()) {
                return $this->sendValidationError($validation->errors()->first(), $validation->errors()->getMessages());
            }

            Notification::route('mail', env('MAIL_TO'))->notify(new \App\Notifications\Web\CommonForm($request->all()));

            return $this->sendResponseOk("Message successfully submited", null);

        } catch (Exception $exception) {
            return $this->sendExceptionError($exception);
        }
    }
}
