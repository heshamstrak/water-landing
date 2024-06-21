<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Newsletter;
class NewsletterController extends Controller
{
    
    public function store(Request $request) {
        $requestData = $request->validate([
            'email'         => 'required|email',
        ]);

        if ($requestData) {
            Newsletter::create($requestData);
            return response()->json(['success' => 'Send Successfully']);
        } else {
            return response()->json(['errors' => $requestData->errors()], 422); // 422 is the HTTP status code for unprocessable entity
        }
    }
}
