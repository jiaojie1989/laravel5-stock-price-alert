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

namespace Jiaojie\Laravel\StockAlert\Predis\Commands;

use Predis\Command\ScriptCommand;

/**
 * Description of Test
 *
 * @encoding UTF-8 
 * @author jiaojie <jiaojie@staff.sina.com.cn> 
 * @since 2016-09-09 15:55 (CST) 
 * @version 0.1
 * @description 
 */
class Test extends ScriptCommand {

    public function getKeysCount() {
        return 0;
    }

    public function getScript() {
        return <<<LUA
return "Hello world!";
LUA;
    }

}
