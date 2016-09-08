<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Support\Facades\Input;

class GuestTest extends TestCase
{


    /**
     * @assert () == true
     */
   public function testTenArticles(){
       $res = $this->call('GET', '/');

       $this->assertResponseOk();
       $this->assertViewHas('articles');

       $lastProductOnView = $res->original['articles'];
       $this->assertEquals(10, count($lastProductOnView));

   }

    /**
     * Testing not exist pdf document
     * @assert () == true
     */
   public function testPDF404Get(){
        $res = $this->call('GET','/pdf/article/fail');
        $this->assertResponseStatus(404);
   }

    /**
     * Testing trying to view profile from guest user
     */
    public function testProfileView(){
        $id = mt_rand(0,100);
        $this->visit('/profile/'.$id)->seePageIs('/login');
    }

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
     * Test rss feed for exist and valid XML
     */
    public function testRSSView(){
        $this->visit('/rss')->seeHeader('Content-type', 'application/rss+xml');

        $content = $this->call('GET','/rss')->getContent();
        $this->assertTrue($this->validateXml($content));
    }

    /**
     * Validate file
     * @param $content xml string
     * @return bool
     */
    protected function validateXml( $content){
        $file = 'tests/temp/validate.xml';
        file_put_contents($file, $content);
        $xmlReader = new XMLReader();
        $xmlReader->open($file);
        $xmlReader->setParserProperty($xmlReader::VALIDATE, true);
        $result =  $xmlReader->isValid();
        $xmlReader->close();
        unlink($file);
        return $result;
    }

}
