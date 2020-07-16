<?php

namespace Test;

use PHPUnit\Framework\TestCase;
use App\User;


class UserTest extends TestCase
{

    public function testIsValidName()
    {
        $user = new User("test", "test", "mail", 15);
        $this->assertEquals($user->isNameValid(), true, "User's name isn't valid");
    }

    public function testIsNotValidName()
    {
        $user = new User("", "test", "mail", 15);
        $this->assertNotEquals($user->isNameValid(), true, "User's name is valid");
    }

    public function testIsValidFirstname()
    {
        $user = new User("test", "test", "mail", 15);
        $this->assertEquals($user->isFirstnameValid(), true, "User's firstname isn't valid");
    }

    public function testIsNotValidFirstname()
    {
        $user = new User("test", "", "mail", 15);
        $this->assertNotEquals($user->isFirstnameValid(), true, "User's firstname is valid");
    }

    public function testIsAgeValid()
    {
        $user = new User("test", "test", "mail", 15);
        $this->assertEquals($user->isAgeValid(), true, "User's age isn't valid");
    }

    public function testIsNotValidAge()
    {
        $user = new User("test", "test", "mail", 10);
        $this->assertNotEquals($user->isAgeValid(), true, "User's age is valid");
    }

    public function testIsValidEmail()
    {
        $user = new User("test", "test", "mail@mail.fr", 10);
        $this->assertEquals($user->isEmailValid(), true, "User's email isn't valid");
    }

    public function testIsNotValidEmail()
    {
        $user = new User("test", "test", "mail.fr", 10);
        $this->assertNotEquals($user->isEmailValid(), true, "User's email is valid");
    }

    public function testIsEmptyEmail()
    {
        $user = new User("test", "test", "", 10);
        $this->assertNotEquals($user->isEmailValid(), true, "User's email is valid");
    }

    public function testIsValid() {
        $user = new User("test", "test", "mail@mail.fr", 15);
        $this->assertEquals($user->isValid(), true, "User's isn't valid");
    }

    public function testIsNotValid() {
        $user = new User("", "test", "mail@mail.fr", 15);
        $this->assertNotEquals($user->isValid(), true, "User's isn't valid");
    }

}
