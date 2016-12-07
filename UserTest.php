<?php
use PHPUnit\Framework\TestCase;

require_once "User.php";

class UserTest extends TestCase
{
    protected $user;
    protected function setUp() {
        $this->user = new User();
        $this->user->setName("Tom");
    }
    protected function tearDown() {
        unset($this->user);
    }
    // test the talk method
    public function testTalk() {
        $expected = "Hello world!";
        $actual = $this->user->talk();
        $this->assertEquals($expected, $actual);
    }
    // test getName
    public function testgetName() {
        $expected = "Tom";
        $actual = $this->user->getName();
        $this->assertEquals($expected, $actual);
    }
}