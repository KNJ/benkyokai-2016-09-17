<?php

class UserTest extends PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        // データセット
        $pdo = new PDO('sqlite::memory:');
        $pdo->query("CREATE TABLE users(id integer, name text)");
        $pdo->query("INSERT INTO users VALUES (1, 'Alice')");
        $pdo->query("INSERT INTO users VALUES (2, 'Bob')");

        // インスタンス生成
        $this->user = new \App\User($pdo);
    }

    public function testGet()
    {
        $result = $this->user->get(2);
        $this->assertArraySubset([
            'id' => 2,
            'name' => 'Bob',
        ], $result);
    }

    public function tearDown()
    {
        unset($pdo);
    }
}
