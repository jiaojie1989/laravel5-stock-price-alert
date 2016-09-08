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
use Predis\Configuration\OptionInterface;

/**
 * Description of Profile
 *
 * @encoding UTF-8 
 * @author jiaojie <jiaojie@staff.sina.com.cn> 
 * @since 2016-09-08 14:33 (CST) 
 * @version 0.1
 * @description 
 */
class Profile {

    public function __construct() {
        
    }

    public function __invoke(OptionInterface $options) {
        $profile = $options->getDefault('profile');
        $profile->defineCommand('hahaha', '\\Predis\\Command\\StringGet');
        return $profile;
    }

}
