<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class GuestViewTest extends TestCase
{
    /**
     * @assert () == true
     */
    public function testMainPage(){
        $res = $this->call('GET', '/');

        $this->assertResponseOk();
        $this->assertViewHas('articles');

        $lastProductOnView = $res->original['articles'];
        $this->assertEquals(10, count($lastProductOnView));

    }

    /**
     * Testing trying to view profile from guest user
     */
    public function testProfileView(){
        $id = mt_rand(0,100);
        $this->visit('/profile/'.$id)->seePageIs('/login');
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
     * Test news view page
     */
    public function testNewsView(){
        $article = \App\Article::first();
        $res = $this->call('GET', '/news/'.$article->id);

        $this->assertResponseOk();
        $this->assertViewHas('news');
        $this->assertViewHas('comments');
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
