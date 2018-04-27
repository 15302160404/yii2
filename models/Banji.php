<?php
namespace app\models;

use \yii\db\ActiveRecord;
/**
 * 班级
 */
class Banji extends ActiveRecord
{
    public function getUsers()
    {
        return $this->hasMany(User::className(),['class_id'=>'id'])->asArray();
    }
}
