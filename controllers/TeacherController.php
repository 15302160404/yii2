<?php
namespace app\controllers;

use yii\web\Controller;
class TeacherController extends Controller
{
    public function actionIndex()
    {
        $data = [
            'name'=>'a',
            'age'=>18
        ];
//        p($data);
        $request = \Yii::$app->request;
        $data = $request->userIP;
//        p($data);
        return $this->renderPartial('index');
    }
}