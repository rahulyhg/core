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
 * @version    0.9.2
 * @author     Antares Team
 * @license    BSD License (3-clause)
 * @copyright  (c) 2017, Antares
 * @link       http://antaresproject.io
 */

namespace Antares\Datatables\Http\Controllers;

use Antares\Datatables\Adapter\ColumnFilterAdapter as ColumnFilter;
use Antares\Foundation\Http\Controllers\AdminController;

class DatatablesController extends AdminController
{

    /**
     * {@inheritdoc}
     */
    public function setupMiddleware()
    {
        $this->middleware('web');
    }

    /**
     * Saves colum filtering options
     * 
     * @param ColumnFilter $filter
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(ColumnFilter $filter)
    {
        return $filter->save(inputs());
    }

}
