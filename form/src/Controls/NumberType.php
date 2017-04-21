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
 * @package        Antares Core
 * @version        0.9.0
 * @author         Antares Team
 * @author         Mariusz Jucha <mariuszjucha@gmail.com>
 * @license        BSD License (3-clause)
 * @copyright  (c) 2017, Antares Project
 * @link           http://antaresproject.io
 */

namespace Antares\Form\Controls;

class NumberType extends AbstractType
{
    
    /** @var string */
    protected $type = 'number';
    
    /**
     * @param $minValue
     * @return NumberType
     */
    public function setMinValue(float $minValue): NumberType
    {
        return $this->setAttribute('min', $minValue);
    }
    
    /**
     * @param $maxValue
     * @return NumberType
     */
    public function setMaxValue(float $maxValue): NumberType
    {
        return $this->setAttribute('max', $maxValue);
    }
    
    /**
     * @param $step
     * @return NumberType
     */
    public function setStep(float $step): NumberType
    {
        return $this->setAttribute('step', $step);
    }
    
}
