<?php
namespace app\models;

use \yii\db\ActiveRecord;
/**
 * 教师
 */
class User extends ActiveRecord
{
    public function getBanji()
    {
        return $this->hasOne(Banji::className(),['id'=>'class_id']);
    }
}
