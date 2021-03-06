<?php

/*
 * Copyright (C) 2016 SINA Corporation
 *  
 *  
 * 
 * This script is firstly created at 2016-09-08.
 * 
 * To see more infomation,
 *    visit our official website http://app.finance.sina.com.cn/.
 */

namespace Jiaojie\Laravel\StockAlert\Predis;

//use Closure;
use Predis\Profile\RedisVersion300;

/**
 * Description of Profile
 *
 * @encoding UTF-8 
 * @author jiaojie <jiaojie@staff.sina.com.cn> 
 * @since 2016-09-08 14:33 (CST) 
 * @version 0.1
 * @description 
 */
class Profile extends RedisVersion300 {

    /**
     * {@inheritdoc}
     */
    public function getVersion() {
        return '3.0-priceAlert';
    }

    /**
     * {@inheritdoc}
     */
    public function getSupportedCommands() {
        return array_merge(parent::getSupportedCommands(), $this->getPriceAlertCommands());
    }

    /**
     * Price alert redis-lua commands
     * @return array
     */
    protected function getPriceAlertCommands() {
        return [
            "TEST" => "\\Jiaojie\\Laravel\\StockAlert\\Predis\\Commands\\Test",
            "DISTRIBUTEHQPRICE" => "\\Jiaojie\\Laravel\\StockAlert\\Predis\\Commands\\DistriHqMsg",
            "COMPAREPRICE" => "\\Jiaojie\\Laravel\\StockAlert\\Predis\\Commands\\DistriHqMsg",
        ];
    }

    /**
     * Revert from var_export()
     * @param array $array
     * @return Jiaojie\Laravel\StockAlert\Predis\Profile
     */
    public static function __set_state($array = []) {
        return new static;
    }

}
