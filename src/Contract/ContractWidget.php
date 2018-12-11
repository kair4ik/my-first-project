<?php
/**
 * Created by PhpStorm.
 * User: kairbay
 * Date: 11.12.18
 * Time: 12:47
 */

namespace kair4ik\package\Contract;

interface ContractWidget
{
    /**
     * Основной метод любого виджета, который должен возвращать вывод шаблона:
     *  return view('Widgets::NameWidget', [
     *'data' => $data
     * ]);
     */
    public function execute();

}