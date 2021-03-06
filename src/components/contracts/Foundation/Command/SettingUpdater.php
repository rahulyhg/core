<?php

/**
 * Part of the Antares package.
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
 * @author     Antares Team
 * @license    BSD License (3-clause)
 * @copyright  (c) 2017, Antares
 * @link       http://antaresproject.io
 */
 namespace Antares\Contracts\Foundation\Command;

use Antares\Contracts\Foundation\Listener\SettingUpdater as Listener;

interface SettingUpdater
{
    /**
     * View setting page.
     *
     * @param  \Antares\Contracts\Foundation\Listener\SettingUpdater  $listener
     *
     * @return mixed
     */
    public function edit(Listener $listener);

    /**
     * Update setting.
     *
     * @param  \Antares\Contracts\Foundation\Listener\SettingUpdater  $listener
     * @param  array $input
     *
     * @return mixed
     */
    public function update(Listener $listener, array $input);
}
