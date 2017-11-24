<?php
/**
 * Created by PhpStorm.
 * User: pogho
 * Date: 11/17/2017
 * Time: 2:27 AM
 */

namespace app\models;
use yii\db\ActiveRecord;


class Category extends ActiveRecord
{
    public  static function tableName()
    {
        return 'category';
    }

    public function getProducts() {
        return $this->hasMany(Product::className(), ['category_id' => 'id' ]);
    }
}