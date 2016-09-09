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

    protected function getPriceAlertCommands() {
        return [
//            "PATEST" => '\Predis\Command\StringGet',
            "PATEST" => "\\Jiaojie\\Laravel\\StockAlert\\Predis\\Commands\\Test",
        ];
    }

    public static function __set_state($array) {
        return new static;
    }

}
