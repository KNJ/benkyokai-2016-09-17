<?php

namespace App;

/**
 * テーブルアクセス
 */
class TableAccess extends Model
{
    /**
     * usersテーブルからIDを指定してデータを1件取ってくる
     *
     * @param  int   $id ユーザーID
     * @return array
     */
    public function findUser(int $id): array
    {
        $user = new User($this->pdo);
        return $user->get($id);
    }

    /**
     * itemsテーブルからIDを指定してデータを1件取ってくる
     *
     * @param  int   $id アイテムID
     * @return array
     */
    public function findItem(int $id): array
    {
        $item = new Item($this->pdo);
        return $item->get($id);
    }
}
