<?php
/**
 * Created by PhpStorm.
 * User: caoshiwei
 * Date: 2018/9/13
 * Time: 下午4:49
 */
namespace App\Http\Controllers;


class TestController extends Controller{

    public function show($id)
    {

    }

    public function learn()
    {
        echo "<h1>Tank you !</h1>";
    }

    public function any()
    {
        echo "<h1>This is any option test!</h1>";
    }

    public function match()
    {
        echo "<h1>This is match option test!</h1>";
    }

    public function message($name,$age)
    {
        return view('msg',['name'=>$name,'age'=>$age]);
    }

    public function profile($id)
    {
        $a = route('profile',array('id'=>$id));
        var_dump($id);
        var_dump($a);
    }

}