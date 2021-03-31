<?php

/**
 * Backgrounds class for BNjunge_Console_Color.
 * 
 * PHP version 5.3
 *
 * @category  Console
 * @package   BNjunge_Console_Color
 * @author    Ivo Nascimento <ivo@o8o.com.br>
 * @license   http://www.gnu.org/copyleft/lesser.html LGPL License 2.1
 * @version   1.0.0
 * @link      http://BNjunge.php.net/BNjunge_Console_Color
 */
namespace BNjunge\Console\Color;

/**
 * This class has the possibles values to a Background Color.
 *
 * @category  Console
 * @package   BNjunge_Console_Color
 * @author    Ivo Nascimento <ivo@o8o.com.br>
 * @copyright 2011 Ivo Nascimento
 * @license   http://www.gnu.org/copyleft/lesser.html LGPL License 2.1
 * @link      http://BNjunge.php.net/BNjunge_Console_Color
 */
abstract class Backgrounds
{
    /**
     * Used at {@link \BNjunge\Console\Color::setBackground()} to specify that
     * the background color already in effect should be kept.
     */
    const KEEP    = null;

    /**
     * Used at {@link \BNjunge\Console\Color::setBackground()} to set the
     * background color to black/grey (implmementation defined).
     */
    const BLACK   = 40;

    /**
     * Used at {@link \BNjunge\Console\Color::setBackground()} to set the
     * background color to black/grey (implementation defined).
     */
    const GREY    = 40;

    /**
     * Used at {@link \BNjunge\Console\Color::setBackground()} to set the
     * background color to maroon/red (implementation defined).
     */
    const MAROON  = 41;

    /**
     * Used at {@link \BNjunge\Console\Color::setBackground()} to set the
     * background color to maroon/red (implementation defined).
     */
    const RED     = 41;

    /**
     * Used at {@link \BNjunge\Console\Color::setBackground()} to set the
     * background color to green/lime (implementation defined).
     */
    const GREEN   = 42;

    /**
     * Used at {@link \BNjunge\Console\Color::setBackground()} to set the
     * background color to green/lime (implementation defined).
     */
    const LIME    = 42;

    /**
     * Used at {@link \BNjunge\Console\Color::setBackground()} to set the
     * background color to brown/yellow (implementation defined).
     */
    const BROWN   = 43;

    /**
     * Used at {@link \BNjunge\Console\Color::setBackground()} to set the
     * background color to brown/yellow (implementation defined).
     */
    const YELLOW  = 43;

    /**
     * Used at {@link \BNjunge\Console\Color::setBackground()} to set the
     * background color to navy/blue (implementation defined).
     */
    const NAVY    = 44;

    /**
     * Used at {@link \BNjunge\Console\Color::setBackground()} to set the
     * background color to navy/blue (implementation defined).
     */
    const BLUE    = 44;

    /**
     * Used at {@link \BNjunge\Console\Color::setBackground()} to set the
     * background color to purple/magenta (implementation defined).
     */
    const PURPLE  = 45;

    /**
     * Used at {@link \BNjunge\Console\Color::setBackground()} to set the
     * background color to purple/magenta (implementation defined).
     */
    const MAGENTA = 45;

    /**
     * Used at {@link \BNjunge\Console\Color::setBackground()} to set the
     * background color to teal/cyan (implementation defined).
     */
    const TEAL    = 46;

    /**
     * Used at {@link \BNjunge\Console\Color::setBackground()} to set the
     * background color to teal/cyan (implementation defined).
     */
    const CYAN    = 46;

    /**
     * Used at {@link \BNjunge\Console\Color::setBackground()} to set the
     * background color to silver/white (implementation defined).
     */
    const SILVER  = 47;

    /**
     * Used at {@link \BNjunge\Console\Color::setBackground()} to set the
     * background color to silver/white (implementation defined).
     */
    const WHITE   = 47;

    /**
     * Used at {@link \BNjunge\Console\Color::setBackground()} to set the
     * background color to whatever the default one is.
     */
    const RESET   = 49;
}
