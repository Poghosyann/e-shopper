<?php
/**
 * Created by PhpStorm.
 * User: pogho
 * Date: 11/19/2017
 * Time: 5:46 AM
 */

namespace app\controllers;
use app\models\Category;
use app\models\Product;
use Yii;
use yii\web\HttpException;

class ProductController extends AppController
{

    public function actionView($id) {
        $product = Product::findOne($id);
        if (empty($product))
            throw new HttpException(404, 'The product not found');
        $hits = Product::find()->where(['hit' => '1'])->limit(6)->all();
        $this->setMeta('E-SHOPPER | ' . $product->name, $product->keywords, $product->description);
        return $this->render('view', compact('product', 'hits'));
    }

}