<?php

/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */

/**
 * This file is part of the BNjunge\Console\CommandLine package.
 *
 * PHP version 5
 *
 * LICENSE: This source file is subject to the MIT license that is available
 * through the world-wide-web at the following URI:
 * http://opensource.org/licenses/mit-license.php
 *
 * @category  Console
 * @package   BNjunge\Console\CommandLine
 * @author    David JEAN LOUIS <izimobil@gmail.com>
 * @copyright 2007-2009 David JEAN LOUIS
 * @license   http://opensource.org/licenses/mit-license.php MIT License
 * @version   0.2.3
 * @link      http://BNjunge.php.net/BNjunge_Console_CommandLine
 * @since     File available since release 0.1.0
 *
 * @filesource
 */

namespace BNjunge\Console\CommandLine\Action;

use BNjunge\Console\CommandLine;

/**
 * Class that represent the StoreString action.
 *
 * The execute method store the value of the option entered by the user as a
 * string in the result option array entry.
 *
 * @category  Console
 * @package   BNjunge\Console\CommandLine
 * @author    David JEAN LOUIS <izimobil@gmail.com>
 * @copyright 2007-2009 David JEAN LOUIS
 * @license   http://opensource.org/licenses/mit-license.php MIT License
 * @link      http://BNjunge.php.net/BNjunge_Console_CommandLine
 * @since     Class available since release 0.1.0
 */
class StoreString extends CommandLine\Action
{
    // execute() {{{

    /**
     * Executes the action with the value entered by the user.
     *
     * @param mixed $value  The option value
     * @param array $params An array of optional parameters
     *
     * @return string
     */
    public function execute($value = false, $params = array())
    {
        $this->setResult((string)$value);
    }
    // }}}
}
