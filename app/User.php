<?php

namespace App;

/**
 * usersテーブルアクセス
 */
class User extends Model
{
    /**
     * usersテーブルからIDを指定してデータを1件取ってくる
     *
     * @param  int   $id ユーザーID
     * @return array     結果セット
     */
    public function get(int $id): array
    {
        return $this->find('users', $id);
    }
}
