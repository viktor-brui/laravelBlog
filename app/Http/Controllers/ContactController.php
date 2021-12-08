<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function submit(ContactRequest $req) {
        $contact = new Contact();
        $contact->name = $req->input('name');
        $contact->email = $req->input('email');
        $contact->subject = $req->input('subject');
        $contact->message = $req->input('message');

        $contact->save();

        return redirect()->route('home')->with('success', 'Сообщение было доавлно');
    }

    public function allData() {
        $contact = new Contact;
        return view('messages', ['data' => $contact->all()]);

    }
    public function updateMessage($id) {
        $contact = new Contact;
        return view('update-messages', ['data' => $contact->find($id)]);
    }

    public function showOneMessage($id) {
        $contact = new Contact;
        return view('one-messages', ['data' => $contact->find($id)]);
    }

    public function updateMessageSubmit(ContactRequest $req, $id) {
        $contact = Contact::find($id);
        $contact->name = $req->input('name');
        $contact->email = $req->input('email');
        $contact->subject = $req->input('subject');
        $contact->message = $req->input('message');

        $contact->save();

        return redirect()->route('contact-data-one', $id)->with('success', 'Сообщение было обновлено');
    }

    public function deleteMessage($id) {
        Contact::find($id)->delete();
        return redirect()->route('contact-data')->with('success', 'Сообщение было удалено');
    }
}
