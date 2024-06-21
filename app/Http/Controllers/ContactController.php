<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
class ContactController extends Controller
{
    public function index() {
<<<<<<< HEAD
        return view('frontend.contact.contact');
    }

    public function sendMessage(Request $request) {
        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message,
        ]);
        return redirect()->back()->with('success', 'send is successfily');
=======
        return view('frontend.contacts.cantact');
    }

    public function store(Request $request) {
        $requestData = $request->validate([
            'email'         => 'required|email',
            'name'          => 'required',
            'phone'         => 'required',
            'message'       => 'required',
        ]);

        if ($requestData) {
            Contact::create($requestData);
            return response()->json(['success' => 'Send Successfully']);
        } else {
            return response()->json(['errors' => $requestData->errors()], 422); // 422 is the HTTP status code for unprocessable entity
        }
    
        
>>>>>>> 5ef127c (update)
    }
}
