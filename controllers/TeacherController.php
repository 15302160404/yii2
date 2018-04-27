<?php
namespace app\controllers;

use app\models\Banji;
use app\models\User;
use yii\web\Controller;
class TeacherController extends Controller
{
    public function actionIndex()
    {
//        $sql = 'select * from User';//不使用框架
//        $t = User::findBySql($sql)->all();
//        dd($t);
//        $data = [
//            'name'=>'a',
//            'age'=>18
//        ];
////        p($data);
//        $request = \Yii::$app->request;
//        $data = $request->userIP;
////        p($data);
//
////        return $this->renderPartial('index',['data'=>$data]);
//        return $this->render('index',['data'=>$data]);
//        $request = \Yii::$app->request;
//        $id = $request->get('id');
//        echo $id;
//        $sql = 'select * from User WHERE id=:id';//不使用框架
//        $t = User::findBySql($sql,[':id'=>$id])->all();//占位符赋值
//        dd($t);
//        //获取全部数据
//        $result = User::find()->all();
//        //查询单条数据
//        $result = User::find()->where(['id'=>5])->all();
//        //查询id>3
//        $result = User::find()->where(['>','id',3])->all();
//        //2<=id<=5
//        $result = User::find()->where(['between','id',2,5])->all();
//        //name含有四的老师
//        $result = User::find()->where(['like','name','四'])->all();
//        //one方法
//        $result = User::find()->where(['like','name','四'])->one();//取request数组中的一条数据
//        //findOne()方法,如果where条件是主键则可以直接使用findOne()方法
//        $result = User::findOne(3);
//        //查询多条数据
//        $result = User::findAll([3,4,5]);
//        //asArray对象变数组
//        //$result = User::find()->asArray()->all();
//        foreach ( User::find()->batch(2) as $batch )
//        {
//            //echo count($batch);
//            $result[] = $batch;
//        }
//        dd($result);
        //数据添加
//        $User = new User();
//        $User->name = '马九';
//        $User->email = '7@qq.com';
//        $User->password = '123';
//        $result = $User->save();
//        //获取保存数据的id
//        $id = $User->attributes['id'];
        //dd($id);
        //数据的修改
//        $result = User::findOne(9);
//        $result->name = '十全十美';
//        $result->email = '9@qq.com';
        //update方法修改数据
        //$id = $result->update();
        //save方法修改数据
//        $id = $result->save();
        //数据修改---有些数据修改时不变,有些则变化(单条数据修改)
//        $id = User::updateAllCounters(['password'=>1],['id'=>9]);

        //数据的删除（删除单条）
        //$result = User::findOne(8);
        //delete方法是对象的方法，如果用findAll()方法则不能用delete方法，真要使用可以用$result[0]->delete()进行删除;
        //$id = $result->delete();
        //deleteAll()方法删除数据表的所有数据，deleteAll('id=1')/delete('id = :id',[':id'=>1])可删除单条数据
        //deleteAll()方法的条件筛选delete('id = :id And num<:num',[':id'=>1,':num' => 100])

        //关联表查询
        //$banji = Banji::findOne(1);
        //没有关联关系的查询方式
        //$users = User::find()->where(['class_id'=>$banji->attributes['id']])->all();
        //一对多多表查询1
        //$users = $banji->hasMany('app\models\User',['class_id'=>'id'])->all();
        //一对多多表查询2
        //getUsers()不会执行all()方法,所以在模型里需要引用all()方法
//        $users = $banji->getUsers();
        //模型中定义了getUsers方法 控制器引用是用users---它的执行过程：先执行__get()方法-》找到模型中的getUsers方法-》执行all()方法，所以模型不需要引用all()方法
        //$users = $banji->users;
        //dd($users);

        //一对一查询
        //$user = User::findOne(2);
//        $banji = $user->hasOne('app\models\Banji',['id'=>'class_id'])->all();
        //$banji = $user->banji;
        //dd($banji);
        //return $this->render('index',['id'=>$id]);
        //多条数据查询
//        $users = User::find()->all();
        //dd($user);
        //适用数据比较少的
//        foreach ($users as $user)
//        {
//            $banji[] = $user->banji;
//        }
        //适用大量数据
        $users = User::find()->with('banji')->asArray()->all();
        dd($users);

    }
}