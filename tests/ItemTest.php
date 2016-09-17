<?php

class ItemTest extends PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        // データセット
        $pdo = new PDO('sqlite::memory:');
        $pdo->query("CREATE TABLE items(id integer, name text)");
        $pdo->query("INSERT INTO items VALUES (1, 'mouse')");
        $pdo->query("INSERT INTO items VALUES (2, 'keyboard')");

        // インスタンス生成
        $this->item = new \App\Item($pdo);
    }

    public function testGet()
    {
        $result = $this->item->get(2);
        $this->assertArraySubset([
            'id' => 2,
            'name' => 'keyboard',
        ], $result);
    }

    public function tearDown()
    {
        unset($pdo);
    }
}
