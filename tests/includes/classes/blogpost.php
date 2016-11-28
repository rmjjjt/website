<?php

require(__DIR__ . "/../../../includes/classes/blogpost.php");

class blogTest extends PHPUnit_Framework_TestCase
{

//  testing that a new instance of the constructor is created correctly
    public function testConstructGood()
    {
        $testPost = new blogPost('stuff', 'image1.jpg', 'this is an image', 'this is the body of the blog post. It should be fairly long', 'this is just a summary. Short');
        $this->assertInstanceOf(blogPost::class, $testPost);
    }

//  testing the constructor does not accept incorrect data types - expecting an array to string conversion
    /**
     * @expectedException PHPUnit_Framework_Error
     */
    public function testConstructMal()
    {
        $testPost = new blogPost([1,2,3,4,5], 'image1.jpg', 'this is an image', 'this is the body of the blog post. It should be fairly long', 'this is just a summary. Short');

    }

//  testing that the title GETs correctly
    public function testGetTitleGood()
    {
        $testPost = new blogPost('stuff', 'image1.jpg', 'this is an image', 'this is the body of the blog post. It should be fairly long', 'this is just a summary. Short');
        $value1 = 'stuff';
        $value2 = $testPost->getTitle();
        $this->assertEquals($value1, $value2);

    }

//  testing that the title isn't pulling through incorrect information
    public function testGetTitleBad()
    {
        $testPost = new blogPost('pizza', 'image1.jpg', 'this is an image', 'this is the body of the blog post. It should be fairly long', 'this is just a summary. Short');
        $value1 = 'stuff';
        $value2 = $testPost->getTitle();
        $this->assertNotEquals($value1, $value2);

    }

//  testing that the image url GETs correctly
    public function testGetImageGood()
    {
        $testPost = new blogPost('stuff', 'stuff', 'this is an image', 'this is the body of the blog post. It should be fairly long', 'this is just a summary. Short');
        $value1 = 'stuff';
        $value2 = $testPost->getImage();
        $this->assertEquals($value1, $value2);

    }

//  testing that the image url isn't pulling through incorrect information
    public function testGetImageBad()
    {
        $testPost = new blogPost('stuff', 'image1.jpg', 'this is an image', 'this is the body of the blog post. It should be fairly long', 'this is just a summary. Short');
        $value1 = 'stuff';
        $value2 = $testPost->getImage();
        $this->assertNotEquals($value1, $value2);

    }

//  testing that the alt text for images GETs correctly
    public function testGetImageAltGood()
    {
        $testPost = new blogPost('stuff', 'image1.jpg', 'stuff', 'this is the body of the blog post. It should be fairly long', 'this is just a summary. Short');
        $value1 = 'stuff';
        $value2 = $testPost->getImageAlt();
        $this->assertEquals($value1, $value2);

    }

//  testing that the image alt text isn't pulling through incorrect information
    public function testGetImageAltBad()
    {
        $testPost = new blogPost('pizza', 'image1.jpg', 'this is an image', 'this is the body of the blog post. It should be fairly long', 'this is just a summary. Short');
        $value1 = 'stuff';
        $value2 = $testPost->getImageAlt();
        $this->assertNotEquals($value1, $value2);

    }

//  testing that the blog content GETs correctly
    public function testGetBodyGood()
    {
        $testPost = new blogPost('stuff', 'image1.jpg', 'this is an image', 'stuff', 'this is just a summary. Short');
        $value1 = 'stuff';
        $value2 = $testPost->getBody();
        $this->assertEquals($value1, $value2);

    }

//  testing that the blog body text isn't pulling through incorrect information
    public function testGetBodyBad()
    {
        $testPost = new blogPost('pizza', 'image1.jpg', 'this is an image', 'this is the body of the blog post. It should be fairly long', 'this is just a summary. Short');
        $value1 = 'stuff';
        $value2 = $testPost->getBody();
        $this->assertNotEquals($value1, $value2);

    }

//  testing that the blog summary GETs correctly
    public function testGetSummaryGood()
    {
        $testPost = new blogPost('stuff', 'image1.jpg', 'this is an image', 'this is the body of the blog post. It should be fairly long', 'stuff');
        $value1 = 'stuff';
        $value2 = $testPost->getSummary();
        $this->assertEquals($value1, $value2);

    }

//  testing that the blog summary text isn't pulling through incorrect information
    public function testGetSummaryBad()
    {
        $testPost = new blogPost('pizza', 'image1.jpg', 'this is an image', 'this is the body of the blog post. It should be fairly long', 'this is just a summary. Short');
        $value1 = 'stuff';
        $value2 = $testPost->getSummary();
        $this->assertNotEquals($value1, $value2);

    }
}

?>