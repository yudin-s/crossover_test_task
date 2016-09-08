<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Support\Facades\Input;

class GuestLogicTest extends TestCase
{
    /**
     * Testing guest use case for registration
     */
    public function testRegistrationCase(){
        $generator =  Faker\Factory::create();
        $email = $generator->freeEmail;


        $this->visit('/login')
            ->type($email, 'invite')
            ->press('Send Link')
            ->seePageIs('/');


        $uc = \App\UsersCode::where('email','=',$email)->get();

        $this->visit("invite/reg/$email/{$uc[0]->code}")
            ->type('Test user','name')
            ->type('123456','password')
            ->type('123456','password_confirmation')
            ->press('Register')
            ->seePageIs('/home');

        //Model created
        $this->assertNotNull($uc);

        $this->assertTrue(Auth::check());

        //Clear after test finished;
        \App\UsersCode::where('email','=',$email)->delete();
        Auth::user()->delete();
    }

    /**
     * Guest can't write comments
     */
    public function testCommentWrite(){
        $this->post('comment/create',[])->assertResponseStatus(302);
    }


}
