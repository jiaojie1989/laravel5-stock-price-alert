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
 * @deprecated since version 0.1
 */
class Options extends PredisOptions {

    protected function getHandlers() {
        return array(
            'cluster' => 'Predis\Configuration\ClusterOption',
            'connections' => 'Predis\Configuration\ConnectionFactoryOption',
            'exceptions' => 'Predis\Configuration\ExceptionsOption',
            'prefix' => 'Predis\Configuration\PrefixOption',
            'profile' => 'Jiaojie\Laravel\StockAlert\Predis\ProfileOption',
            'replication' => 'Predis\Configuration\ReplicationOption',
        );
    }

}
