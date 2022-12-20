<?php

namespace Tests;

use App\Models\User;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    public function testSetNameGetName()
    {
        $user = new User();
        $name = "Luis";

        $user->setName($name);
        $this->assertEquals($name, $user->getName());
    }

    public function testSetIdGetId()
    {
        $user = new User();
        $id = 1;

        $user->setId($id);
        $this->assertEquals($id, $user->getId());
    }

    public function testSetEmailGetEmail()
    {
        $user = new User;
        $email = "serranol82@gmail.com";

        $user->setEmail($email);
        $this->assertEquals($email, $user->getEmail());
    }

    public function testSetPasswordGetPassword()
    {
        $user = new User();
        $password = "Asdasdasd";
        
        $user->setPassword($password);
        $this->assertEquals($password, $user->getPassword());
    }

    public function testEmpty()
    {
        $stack = [];
        $this->assertEmpty($stack);

        return $stack;
    }
}
