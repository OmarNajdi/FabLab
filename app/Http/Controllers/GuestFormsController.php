<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class GuestFormsController extends BaseController {

    public function show() {
        return view( 'public.form' );
    }

    public function store( Request $request ) {
        $request->validate( [
            'name'  => 'required',
            'email' => 'required|email',
            'phone' => '',
        ] );

        $form = new \App\Models\Form();

        $form->name  = $request->name;
        $form->email = $request->email;
        $form->phone = $request->phone;

        $form->save();

        return redirect()->route( 'thankyou' );
    }
}
