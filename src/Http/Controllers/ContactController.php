<?php

namespace Matrivumiit\Contact\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Matrivumiit\Contact\Models\Contact;
use Matrivumiit\Contact\Mail\ContactMailable;

class ContactController extends Controller
{
    public function contactForm()
    {
        return view('contact::contact');
    }

    public function store(Request $request)
    {
        $model = Contact::firstOrCreate(['id' => $request->id], [
            'name' => $request->name,
            'message' => $request->message
        ]);

        $this->sendEmail($model);

        return redirect()->route('form')->with('success', 'Contact saved successfully.');
    }

    private function sendEmail($model)
    {
        Mail::to('im.moktar@gmail.com')->send(new ContactMailable($model->name, $model->message));
    }
}
