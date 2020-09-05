<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    // public function getContact() {

    //     return view('contact');
    //   }

       public function saveContact(Request $request) {

         $this->validate($request, [
             'name' => 'required',
             'email' => 'required|email',
             'message' => 'required'
         ]);

         $contact = new Contact;

         $contact->name = $request->name;
         $contact->email = $request->email;
         $contact->message = $request->message;

         $contact->save();

         Mail::send('contact_email',
             array(
                 'name' => $request->get('name'),
                 'email' => $request->get('email'),
                 'user_message' => $request->get('message'),
             ), function($message) use ($request)
               {
                  $message->from($request->email);
                  $message->to('kevin@deployitwith.me');
               });

        //   return back()->with('success', 'Thank you for contact us!');
        return response()->json([$request->all()]);

    }
}
