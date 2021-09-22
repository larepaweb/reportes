<?php

namespace App\Imports;

use App\Models\User;
use App\Models\Profile;
use App\Mail\WelcomeMail;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Maatwebsite\Excel\Concerns\ToModel;

class UsersImport implements ToModel
{

    private $numRows = 0;


    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        ++$this->numRows;

        $user = new User;

        $user->email = $row[0];
        $user->role_name = $row[1];
        $random_pass  = Str::random(8);
        $user->password = Hash::make( $random_pass );
        $user->save();

        $profile = new Profile;

        $profile->contact_name = $row[2];
        $profile->phone = $row[3];
        $profile->user_id = $user['id'];

        $profile->nit  = $row[5];
        $profile->business_name  = $row[4];
        $profile->address  = $row[6];
        $profile->payment_method  = $row[7];
        $profile->contact_name = $row[2];
        $profile->isr  = $row[8] = "si" ? 1 : 0;

        $user->profile()->save($profile);

        // email data
        $email_data = array(
                'name' => $profile->contact_name,
                'email' => $user->email,
                'password' => $user->password,
        );

        if($user->role_name != "cliente"){
            Mail::queue( new WelcomeMail($email_data));
        }


        return $user;

    }

    public function getRowCount(): int
    {
            return $this->numRows;
    }
}
