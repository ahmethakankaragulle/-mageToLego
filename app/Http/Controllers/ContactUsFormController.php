<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;


class ContactUsFormController extends Controller

{
    public function createForm(Request $request)
    {
        return view('welcome');
    }
    public function ContactUsForm(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);
        Contact::create($request->all());
        return back()->with('Başarılı', 'Mesajın için teşekkürler, ekibimiz en kısa sürede geri dönüş yapacaktır.');
    }
}
