<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function review_check(Request $req){
        $valid = $req->validate([
        'email' => 'required',
         'subject' => 'required',
         'message' => 'required'
        ]);


        

        $review = new Contact();
         $review->email = $req->input('email');
            $review->subject = $req->input('subject');
               $review->message = $req->input('message');

               $review->save();

             

               return redirect()->route('review');
               

    }
 

}
