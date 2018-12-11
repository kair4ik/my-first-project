<?php
/**
 * Created by PhpStorm.
 * User: kairbay
 * Date: 11.12.18
 * Time: 12:44
 */

namespace kair4ik\package;

class Widget
{

    protected $widgets; //массив доступных виджетов config/widgets.php


    public function __construct(){
        $this->widgets = config('widgets');
    }


    public function show($obj, $data =[]){

        //Есть ли такой виджет
        if(isset($this->widgets[$obj])){

            //создаем его объект передавая параметры в конструктор
            $obj = new $this->widgets[$obj]($data);

            //возвращаем результат выполнения
            return $obj->execute();
        }

    }

}