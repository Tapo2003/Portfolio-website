<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Contact;

class HomeController extends Controller
{
    public function index($value = ''){
        return view('index');
    }

    public function contact(Request $request){
        $contact = new Contact();
        if($request->method() == 'POST'){
            $data['name']           = $request->input('name');
            $data['email']          = $request->input('email');
            $data['message']        = $request->input('message');
            $data['title']          = $request->input('message');
            $data['created_at']     = date("Y-m-d H:i:s");
            $data['updated_at']     = date("Y-m-d H:i:s");

            if($contact->insert($data)){
                echo 1;
            }else{
                echo 'Error Uploading Record';
            }
        }
        
    }
}
