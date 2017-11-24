<?php
/**
 * Created by PhpStorm.
 * User: pogho
 * Date: 11/17/2017
 * Time: 2:27 AM
 */

namespace app\models;
use yii\db\ActiveRecord;


class Product extends ActiveRecord
{
    public  static function tableName()
    {
        return 'product';
    }

    public function getCategory() {
        return $this->hasOne(Category::className(), ['id' => 'category_id' ]);
    }
}