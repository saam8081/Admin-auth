<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contact;

class contactController extends Controller
{
    //
    public function contact(){
        return view('contact');
    }

    public function create(Request $request){
        $data = $request ->all();
        $contact = new contact;
        $contact->name = $request->name;
        $contact->subject = $request->subject;
        $contact->message = $request->message;
        $contact->save();
        return redirect()->back();
    }

}