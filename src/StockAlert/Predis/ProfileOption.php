<?php

/*
 * Copyright (C) 2016 SINA Corporation
 *  
 *  
 * 
 * This script is firstly created at 2016-09-09.
 * 
 * To see more infomation,
 *    visit our official website http://app.finance.sina.com.cn/.
 */

namespace Jiaojie\Laravel\StockAlert\Predis;

use Predis\Configuration\ProfileOption as PredisProfileOption;
use Predis\Profile\Factory;

/**
 * Description of ProfileOption
 *
 * @encoding UTF-8 
 * @author jiaojie <jiaojie@staff.sina.com.cn> 
 * @since 2016-09-09 11:38 (CST) 
 * @version 0.1
 * @description 
 */
class ProfileOption extends PredisProfileOption {

    public function getDefault(\Predis\Configuration\OptionsInterface $options) {
        Factory::define("3.0-priceAlert", "\\Jiaojie\\Laravel\\StockAlert\\Predis\\Profile");
        $profile = Factory::get("3.0-priceAlert");
        $this->setProcessors($options, $profile);
        return $profile;
    }

}
