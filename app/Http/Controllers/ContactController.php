<?php

  

namespace App\Http\Controllers;

  

use Illuminate\Http\Request;

use App\Models\Contact;

  

class ContactController extends Controller

{

    /**

     * Write code on Method

     *

     * @return response()

     */

  

    /**

     * Write code on Method

     *

     * @return response()

     */

    public function store(Request $request)

    {

        $request->validate([
            'name' => 'required',
            'contact' => 'required',
            'message' => 'required',
            'g-recaptcha-response' => 'required|recaptchav3:register,0.5'
        ]);

  

        Contact::create($request->all());

  

        return redirect()->back()

                         ->with(['success' => 'Dziękujemy za wiadomość, wrócimy z odpowiedzią tak szybko jak to możliwe.']);

    }
}