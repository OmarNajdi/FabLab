<?php

namespace App\Http\Controllers;

use App\Models\Form;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class FormsController extends \TCG\Voyager\Http\Controllers\VoyagerBaseController {

    public function approve( Request $request, $id ) {

        $form = Form::find( $id );

        $data = [];

        if ( $form->approved ) { // The User has already been approved
            $data = [
                'message'    => $form->name . " has already been approved",
                'alert-type' => 'success',
            ];
        } else { // Approve The User
            $form->approved = 1;


            $user = User::firstOrNew(
                [ 'email' => $form->email ],
                [ 'active' => 1, 'name' => $form->name, 'password' => Hash::make( Str::random( 8 ) ) ]
            );

            if ( $user->exists ) {
                $user->active = 1;
            }

            $user->save();
            $form->save();

            $data = [
                'message'    => $form->name . " has been approved",
                'alert-type' => 'success',
            ];
        }


        return redirect()->route( "voyager.forms.index" )->with( $data );
    }
}
