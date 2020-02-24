<?php

namespace app\models;
use yii\db\ActiveRecord;

class Test extends ActiveRecord{
    public static function tableName(){
        // return "yii_test"; 返回我们的表名称
        return "fdz_admin";
    }
}