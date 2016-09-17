<?php

namespace App;

use PDO;

/**
 * データベースアクセス
 */
class Model
{
    protected $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    /**
     * テーブルとIDを指定し、1件のデータを取ってくる
     *
     * @param  string $table テーブル
     * @param  int    $id    ID
     * @return array         結果セット
     */
    public function find(string $table, int $id): array
    {
        if (!in_array($table, ['users', 'items'])) { // アクセスできるテーブルを限定する
            return [];
        }

        // クエリー実行
        $stmt = $this->pdo->prepare('SELECT * FROM ' . $table . ' WHERE `id` = :id');
        $stmt->execute([':id' => $id]);

        return (array)$stmt->fetch(PDO::FETCH_ASSOC);
    }
}
