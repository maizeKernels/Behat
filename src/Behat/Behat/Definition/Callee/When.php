<?php

namespace Behat\Behat\Definition\Callee;

/*
 * This file is part of the Behat.
 * (c) Konstantin Kudryashov <ever.zet@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
use Behat\Behat\Definition\Callee\Definition;

/**
 * "When" definition.
 *
 * @author Konstantin Kudryashov <ever.zet@gmail.com>
 */
class When extends Definition
{
    /**
     * Initializes definition.
     *
     * @param string      $pattern
     * @param string      $regex
     * @param Callable    $callback
     * @param null|string $description
     */
    public function __construct($pattern, $regex, $callback, $description = null)
    {
        parent::__construct('When', $pattern, $regex, $callback, $description);
    }
}
