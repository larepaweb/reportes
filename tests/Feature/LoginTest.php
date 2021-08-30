<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class LoginTest extends TestCase
{
    /**
     *   user can view a login form
     *
     * @return void
     */
    public function test_user_can_view_a_login_form()
    {
        $response = $this->get('/login');

        $response->assertStatus(200);
        $response->assertSee(['Email', 'Password']);
    }


    /**
     * user cannot view a login form when authenticated
     *
     * @return void
     */
    public function test_user_view_dashboard_after_authenticated()
    {
        $user = User::make([
                'name' => 'user',
                'email' => 'user@email.com',
                'password' => bcrypt('secret'),]
        );

        // $user = factory(User::class)->make();

        $response = $this->actingAs($user)->get('/login');

        $response->assertRedirect('/dashboard');

    }

    /**
     * user can login with correct credentials
     *
     * @return void
     */


     // OJO enfocarse en las unitarias primero


    // public function test_user_can_login_with_correct_credentials()
    // {
    //     $user = User::create([
    //             'name' => 'user',
    //             'email' => 'user50@email.com',
    //             'password' => bcrypt('secret'),]
    //     );

    //     $response = $this->post('/login', [
    //         'email' => 'user50@email.com',
    //         'password' => 'secret',
    //     ]);

    //     $response->assertRedirect('/dashboard');
    //     $this->assertAuthenticatedAs($user);
    // }




    // user gets a correct remember-me cookie, if chooses to be remembered
    // user cannot login with a non-existent email
    // user cannot login with incorrect password
    // user can logout, when already authenticated
    // user cannot attempt to login more than five times in one minute (default behavior)
}
