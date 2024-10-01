<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactEnquiry;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;

interface ContactEnquiryInterface
{
    public function viewContactEnquiryList();
    public function viewContactEnquiryPreview($id);
    public function handleToggleContactEnquiryStatus(Request $request);
    public function handleContactEnquiryDelete($id);
}

class ContactEnquiryController extends Controller implements ContactEnquiryInterface
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin')->except('logout');
    }

    /**
     * View Contact Enquiry List
     *
     * @return mixed
     */
    public function viewContactEnquiryList(): mixed
    {
        try {

            $contact_enquiries = ContactEnquiry::all();

            return view('admin.pages.contact-enquiry.contact-enquiry-list', [
                'contact_enquiries' => $contact_enquiries,
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
     * View Contact Enquiry Preview
     *
     * @return mixed
     */
    public function viewContactEnquiryPreview($id): mixed
    {
        try {

            $contact_enquiry = ContactEnquiry::find($id);

            if (!$contact_enquiry) {
                return redirect()->back()->with('message', [
                    'status' => 'warning',
                    'title' => 'Contact enquiry not found',
                    'description' => 'Contact enquiry not found with specified ID'
                ]);
            }

            return view('admin.pages.contact-enquiry.contact-enquiry-preview', [
                'contact_enquiry' => $contact_enquiry
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
     * Handle Contact Enquiry Status
     *
     * @return Response
     */
    public function handleToggleContactEnquiryStatus(Request $request): Response
    {
        try {

            $validation = Validator::make($request->all(), [
                'contact_enquiry_id' => ['required', 'numeric', 'exists:contact_enquiries,id']
            ]);

            if ($validation->fails()) {
                return response([
                    'status' => false,
                    'message' => $validation->errors()->first(),
                    'error' => $validation->errors()->getMessages()
                ], 200);
            }

            $contact_enquiry = ContactEnquiry::find($request->input('contact_enquiry_id'));
            $contact_enquiry->is_read = !$contact_enquiry->is_read;
            $contact_enquiry->update();
  
            return response([
                'status' => true,
                'message' => "Status successfully updated",
                'data' => $contact_enquiry
            ], 200);
        } catch (Exception $exception) {
            return response([
                'status' => false,
                'message' => "An error occcured",
                'error' => $exception->getMessage()
            ], 500);
        }
    }

    /**
     * Handl Contact Enquiry Delete
     *
     * @return RedirectResponse
     */
    public function handleContactEnquiryDelete($id): RedirectResponse
    {
        try {

            $contact_enquiry = ContactEnquiry::find($id);

            if (!$contact_enquiry) {
                return redirect()->back()->with('message', [
                    'status' => 'warning',
                    'title' => 'Contact enquiry not found',
                    'description' => 'Contact enquiry not found with specified ID'
                ]);
            }

            $contact_enquiry->delete();

            return redirect()->route('admin.view.contact.enquiry.list')->with('message', [
                'status' => 'success',
                'title' => 'Contact enquiry deleted',
                'description' => 'The contact enquiry is successfully deleted.'
            ]);
        } catch (Exception $exception) {
            return redirect()->back()->with('message', [
                'status' => 'error',
                'title' => 'An error occcured',
                'description' => $exception->getMessage()
            ]);
        }
    }
}