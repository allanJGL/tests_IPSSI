<?php

use PHPUnit\Framework\TestCase;

require "User.php";

class UserTest extends TestCase
{

    public function testIsValidUsername()
    {
        $user = new User("test", "test", "mail", 15);
        $this->assertEquals($user->isNameValid(), true, "User's name isn't valid");
        $this->assertEquals($user->isFirstnameValid(), true, "User's firstname isn't valid");
    }

    public function testIsAgeValid()
    {
        $user = new User("test", "test", "mail", 15);
        $this->assertEquals($user->isAgeValid(), true, "User's age isn't valid");
    }

    public function testIsEmailValid()
    {
        $user = new User("test", "test", "mail@mail.fr", 10);
        $this->assertEquals($user->isEmailValid(), true, "User's email isn't valid");
    }

    public function testIsValid() {
        $user = new User("test", "test", "mail@mail.fr", 15);
        $this->assertEquals($user->isValid(), true, "User's isn't valid");
    }

}
