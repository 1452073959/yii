<?php

namespace app\controllers;


use app\models\Test;
use app\models\User;
use yii\web\Controller;


class HomeController extends Controller
{
    public $layout='test';//定义父模板
    public function actionAbout()
    {
       $data=['a=>1','b=2'];
        p($data);
    }

    public function actionIndex()
    {
//        echo $id;
        $request = \Yii::$app->request;
        //获取get参数,设置默认值
        $idq = $request->get('id', 5);
        $ip = $request->userIP;

        $data = array('heading' => 'My Heading', 'message' => 'My Message1111111111111111');
        $str="hello world<script>alert(123) </script>";
//        return $this->renderPartial('index', ['data' => $data]);//不会加载布局（也不能载入框架自带的jquery等）
        return $this->render('index', compact(['data','str']));//不会加载布局（也不能载入框架自带的jquery等）
//        return $this->render('index', ['data' => $data]);//会加载布局

    }
    public function actionModel()
    {
//        $a=Test::find()->where(['userid'=>1])->all();
//        $a=Test::find()->where(['>','userid',2])->all();
//        $a=Test::find()->where(['between','userid',2,5])->all();
        $a=Test::findOne(1);
        $a=Test::findAll([1,5]);
        $a=Test::find()->asArray()->all();//转数组
       dd($a);
    }
}
