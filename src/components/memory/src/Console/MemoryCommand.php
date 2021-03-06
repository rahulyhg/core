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
 * @author     Original Orchestral https://github.com/orchestral
 * @author     Antares Team
 * @license    BSD License (3-clause)
 * @copyright  (c) 2017, Antares
 * @link       http://antaresproject.io
 */


namespace Antares\Memory\Console;

use Illuminate\Console\Command;

class MemoryCommand extends Command
{

    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'memory:migrate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Run migration for antares/memory package.';

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {
        $path = 'src/memory/resources/database/migrations';

        $this->call('migrate', ['--path' => $path]);
    }

}
