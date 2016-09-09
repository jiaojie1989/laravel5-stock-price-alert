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

use Predis\Configuration\Options as PredisOptions;

/**
 * Description of Options
 *
 * @encoding UTF-8 
 * @author jiaojie <jiaojie@staff.sina.com.cn> 
 * @since 2016-09-08 18:06 (CST) 
 * @version 0.1
 * @description 
 */
class Options extends PredisOptions {

    protected function getHandlers() {
        return array_merge(parent::getHandlers(), $this->getPriceAlertHandler());
    }

    protected function getPriceAlertHandler() {
        return [
            "MYTEST" => "\\Predis\\Commands\\StringGet",
        ];
    }

}
