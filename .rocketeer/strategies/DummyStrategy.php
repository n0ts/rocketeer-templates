<?php

/*
 * This file is not part of Rocketeer
 *
 */
namespace Rocketeer\Strategies\Dependencies;

use Rocketeer\Abstracts\Strategies\AbstractPolyglotStrategy;
use Rocketeer\Interfaces\Strategies\DependenciesStrategyInterface;

class DummyStrategy extends AbstractPolyglotStrategy implements DependenciesStrategyInterface
{
    /**
     * @type string
     */
    protected $description = 'Dummy';

    /**
     * The various strategies to call.
     *
     * @type array
     */
    protected $strategies = [];

    /**
     * Install the dependencies.
     *
     * @return boolean[]
     */
    public function install()
    {
        return '';
    }

    /**
     * Update the dependencies.
     *
     * @return boolean[]
     */
    public function update()
    {
        return '';
    }
}
