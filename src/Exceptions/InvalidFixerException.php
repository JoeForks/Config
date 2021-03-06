<?php

/*
 * This file is part of StyleCI Config.
 *
 * (c) Graham Campbell <graham@mineuk.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace StyleCI\Config\Exceptions;

use InvalidArgumentException;

/**
 * This is the invalid fixer exception class.
 *
 * @author Graham Campbell <graham@mineuk.com>
 */
class InvalidFixerException extends InvalidArgumentException implements ConfigExceptionInterface
{
    //
}
