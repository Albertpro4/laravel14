

public function review_check(Request $req){
        $valid = $req->validate([
        
        ]);


        

        $review = new Contact();
         $review->email = $req->input('email');
            $review->subject = $req->input('subject');
               $review->message = $req->input('message');

               $review->save();

             

               return redirect()->route('review');
               

    }
 
