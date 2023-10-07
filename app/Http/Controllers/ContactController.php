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
            'agreement' => 'required',
        ]);

        $inputs = $request->all();

        $file_name = $request->file('image')->getClientOriginalName();
        $image = $request->file('image');
        $extension = $image->getClientOriginalExtension();
        $new_file_name = uniqid() . '.' . $extension;
        $image_path = $image->storeAs('public/contact', $new_file_name);

        return view('contacts.teiki.confirm', compact('inputs', 'file_name', 'new_file_name', 'extension'));
    }

    public function teikiSend(Request $request)
    {
        $action = $request->input('action');
        $inputs = $request->except('action');

        if($action === 'back') {
            return redirect()->route('contact.teiki')->withInput($inputs);
        } elseif ($action === 'submit') {
            \Mail::to($inputs['email'])->send(new ContactSendTeikimail($inputs));
            \Mail::to('skai.bluesea@gmail.com')->send(new ContactSendTeikimail($inputs));
            $request->session()->regenerateToken();

            return view('contacts.teiki.thanks');
        }
    }

    public function akiuConfirm(Request $request)
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
            'agreement' => 'required',
        ]);

        $inputs = $request->all();

        $file_name = $request->file('image')->getClientOriginalName();
        $image = $request->file('image');
        $extension = $image->getClientOriginalExtension();
        $new_file_name = uniqid() . '.' . $extension;
        $image_path = $image->storeAs('public/contact', $new_file_name);

        return view('contacts.akiu.confirm', compact('inputs', 'file_name', 'new_file_name', 'extension'));
    }

    public function akiuSend(Request $request)
    {
        $action = $request->input('action');
        $inputs = $request->except('action');

        if ($action === 'back') {
            return redirect()->route('contact.akiu')->withInput($inputs);
        } elseif ($action === 'submit') {
            \Mail::to($inputs['email'])->send(new ContactSendAkiumail($inputs));
            \Mail::to('skai.bluesea@gmail.com')->send(new ContactSendAkiumail($inputs));
            $request->session()->regenerateToken();

            return view('contacts.akiu.thanks');
        }
    }

    public function itakuConfirm(Request $request)
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
            'agreement' => 'required',
        ]);

        $inputs = $request->all();

        $file_name = $request->file('image')->getClientOriginalName();
        $image = $request->file('image');
        $extension = $image->getClientOriginalExtension();
        $new_file_name = uniqid() . '.' . $extension;
        $image_path = $image->storeAs('public/contact', $new_file_name);

        return view('contacts.itaku.confirm', compact('inputs', 'file_name', 'new_file_name', 'extension'));
    }

    public function itakuSend(Request $request)
    {
        $action = $request->input('action');
        $inputs = $request->except('action');

        if ($action === 'back') {
            return redirect()->route('contact.itaku')->withInput($inputs);
        } elseif ($action === 'submit') {
            \Mail::to($inputs['email'])->send(new ContactSendItakumail($inputs));
            \Mail::to('skai.bluesea@gmail.com')->send(new ContactSendItakumail($inputs));
            $request->session()->regenerateToken();

            return view('contacts.itaku.thanks');
        }
    }

    public function toTop()
    {
        return redirect()->route('top');
    }
}
