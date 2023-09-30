<?php

namespace App\Http\Controllers;

use App\Mail\ContactSendTeikimail;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class ContactController extends Controller
{
    public function teikiConfirm(Request $request)
    {
        $request->validate([
            'entry_event' => 'required',
            'name' => 'required',
            'address' => 'required',
            'email' => 'required|email',
            'tel' => 'required',
            'shop_name' => 'required',
            'genre' => 'required',
            'image' => 'required',
            'entry_market' => 'required',
            'visited_market' => '',
            'questions' => '',
        ]);

        $inputs = $request->all();

        $file_name = $request->file('image')->getClientOriginalName();
        $image = $request->file('image');
        $extension = $image->getClientOriginalExtension();
        $new_file_name = uniqid() . '.' . $extension;
        // $image_path = Storage::putFileAs(
        //     'image', $request->file('image'), $new_file_name
        // );
        $image_path = $request->file('image')->storeAs('public', $new_file_name);

        // dd($image_path);
        return view('contacts.teiki.confirm', compact('inputs', 'file_name', 'new_file_name', 'extension'));
    }

    public function teikiSend(Request $request)
    {
        $action = $request->input('action');
        $inputs = $request->except('action');

        if($action !== 'submit') {
            return redirect()->route('contact.teiki')->withInput($inputs);
        } else {
            \Mail::to($inputs['email'])->send(new ContactSendTeikimail($inputs));
            \Mail::to('skai.bluesea@gmail.com')->send(new ContactSendTeikimail($inputs));
            $request->session()->regenerateToken();

            return view('contacts.teiki.thanks');
        }
    }
}
