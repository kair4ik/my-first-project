<?php
/**
 * Created by PhpStorm.
 * User: kairbay
 * Date: 11.12.18
 * Time: 14:01
 */
namespace App\Widgets;

use kair4ik\package\Contract\ContractWidget;

class TestWidget
{
    public function execute(){

        return view('Widgets::test');

    }
}