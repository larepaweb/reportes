<?php

namespace App\Http\Controllers\Profiles;

use App\Models\User;
use App\Models\Profile;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Snowfire\Beautymail\Beautymail;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\Profiles\ProfileCreateRequest;

class ProfileController extends Controller
{


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProfileCreateRequest $request)
    {

        $request = $request->validated();

        $user = new User;

        $user->email = $request['useremail'];
        $user->role_name = $request['userrole'];
        $random_pass  = Str::random(8);
        $user->password = Hash::make( $random_pass );
        $user->save();

        $profile = new Profile;

        $profile->contact_name = $request['username'];
        $profile->phone = $request['userphone'];
        $profile->user_id = $user['id'];

        $profile->nit = $request['usernit'];
        $profile->business_name = $request['userbusiness'];
        $profile->address = $request['useraddress'];
        $profile->payment_method = $request['userpayment'] ? $request['userpayment']: "";
        $profile->contact_name = $request['username'];
        $profile->isr = $request['userisr'] ? 1 : 0;

        $user->profile()->save($profile);

        // email data
            $email_data = array(
                'name' => $profile->contact_name,
                'email' => $user->email,
                'password' => $user->password,
            );


            $beautymail = app()->make( \Snowfire\Beautymail\Beautymail::class);
            $beautymail->send('emails.welcome', ['email_data' => $email_data], function($message) use ($email_data) {
                $message->to($email_data['email'], $email_data['name'])
                    ->subject('Bienvenidos a DexData Expertr')
                    ->from('info@reportes.com', 'soporte');
            });



        Alert::success('Usuario Creado', 'Se creo exitosamente el usuario');
        return redirect()->route('usuarios');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
           return view('users.show', ['user'=>$user]);

    //    return view('profile', ['user'=>$user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
           return view('users.edit', ['user'=>$user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        $user = User::find($request->user);

        $user->email = $request->useremail;
        $user->role_name = $request->userrole;

        $user->profile->contact_name = $request->username;
        $user->profile->phone = $request->userphone;
        $user->profile->nit = $request->usernit;
        $user->profile->business_name = $request->userbusiness;
        $user->profile->address = $request->useraddress;
        $user->profile->payment_method = $request->userpayment;
        $user->profile->contact_name = $request->username;
        $user->profile->isr = $request->userisr ? 1 : 0;
        $user->profile->save();
        $user->save();

        Alert::success('Usuario Actualizado', 'Se actualizo exitosamente el usuario');
        return redirect()->route('usuarios');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::destroy($id);

        Alert::success('Usuario Eliminado', 'Se elimino exitosamente el usuario');
        return redirect()->route('usuarios');

    }
}
