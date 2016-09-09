<?php

/*
 * Copyright (C) 2016 SINA Corporation
 *  
 *  
 * 
 * This script is firstly created at 2016-09-06.
 * 
 * To see more infomation,
 *    visit our official website http://app.finance.sina.com.cn/.
 */

namespace Jiaojie\Laravel\StockAlert;

use Illuminate\Support\ServiceProvider;
use Config;
use Jiaojie\Laravel\StockAlert\Predis\Options;

/**
 * Description of PriceAlertServiceProvider
 *
 * @encoding UTF-8 
 * @author jiaojie <jiaojie@staff.sina.com.cn> 
 * @since 2016-09-06 15:36 (CST) 
 * @version 0.1
 * @description 
 */
class PriceAlertServiceProvider extends ServiceProvider {

    protected static $booted = false;

    /**
     * 
     * @throws \UnexpectedValueException
     */
    public function boot() {
        if (static::$booted === false) {
            if (!Config::get("database.redis.options")) {
                Config::set("database.redis.options", new Options());
            } else {
                throw new \UnexpectedValueException("Configuration for `database.redis.options` has been defined !");
            }
            if ("cli" === php_sapi_name()) {
                static::$booted = true;
            }
        }
    }

    public function register() {
        
    }

}
