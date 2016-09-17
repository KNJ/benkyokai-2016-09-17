<?php

namespace App;

/**
 * itemsテーブルアクセス
 */
class Item extends Model
{
    /**
     * itemsテーブルからIDを指定してデータを1件取ってくる
     *
     * @param  int   $id アイテムID
     * @return array     結果配列
     */
    public function get(int $id): array
    {
        return $this->find('items', $id);
    }
}
