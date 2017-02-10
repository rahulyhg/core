<?php

/**
 * Part of the Antares Project package.
 *
 * NOTICE OF LICENSE
 *
 * Licensed under the 3-clause BSD License.
 *
 * This source file is subject to the 3-clause BSD License that is
 * bundled with this package in the LICENSE file.
 *
 * @package    Antares Core
 * @version    0.9.0
 * @author     Original Orchestral https://github.com/orchestral
 * @author     Antares Team
 * @license    BSD License (3-clause)
 * @copyright  (c) 2017, Antares Project
 * @link       http://antaresproject.io
 */


namespace Antares\Notifier;

use Illuminate\Support\Manager;
use Antares\Notifier\Adapter\FastSmsAdapter;

class SmsManager extends Manager
{

    /**
     * Create Antares driver.
     *
     * @return \Antares\Contracts\Notification\Notification
     */
    protected function createFastSmsDriver()
    {
        $config = $this->app->make('config')->get('antares/notifier::sms.adapters.fastSms');
        return new FastSmsAdapter($config);
    }

    /**
     * Get the default driver.
     *
     * @return string
     */
    public function getDefaultDriver()
    {
        return $this->app->make('config')->get('antares/notifier::sms.adapters.default');
    }

    /**
     * Set the default driver.
     *
     * @param  string  $name
     *
     * @return string
     */
    public function setDefaultDriver($name)
    {
        $this->app->make('config')->set('antares/notifier::sms.adapters.default.model', $name);
    }

}