<?php

class ModelTest extends PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        // データセット
        $pdo = new PDO('sqlite::memory:');
        $pdo->query("CREATE TABLE users(id integer, name text)");
        $pdo->query("INSERT INTO users VALUES (1, 'Alice')");
        $pdo->query("INSERT INTO users VALUES (2, 'Bob')");

        // インスタンス生成
        $this->model = new App\Model($pdo);
    }

    /**
     * 存在しているテーブルの存在しているIDのデータを取得できるか
     */
    public function testFind()
    {
        $result = $this->model->find('users', 2);
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
