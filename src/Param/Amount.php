<?php

/**
 * This file is part of the Pixidos package.
 *
 *  (c) Ondra Votava <ondra@votava.dev>
 *
 *  For the full copyright and license information, please view the LICENSE
 *  file that was distributed with this source code.
 *
 */

declare(strict_types=1);

namespace Pixidos\GPWebPay\Param;

use Pixidos\GPWebPay\Enum\Param;
use Pixidos\GPWebPay\Exceptions\InvalidArgumentException;

class Amount implements IParam
{
    /**
     * @var int
     */
    private $amount;

    /**
     * Amount constructor.
     *
     * @param int $amount Amount in cents/pennies (i.e. 100 Kč = 10000)
     *
     * @throws InvalidArgumentException
     */
    public function __construct(int $amount)
    {
        $this->amount = $amount;
    }


    /**
     * @return string
     */
    public function getParamName(): string
    {
        return Param::AMOUNT;
    }

    /**
     * @return int
     */
    public function getValue(): int
    {
        return $this->amount;
    }


    /**
     * @return string
     */
    public function __toString(): string
    {
        return (string)$this->amount;
    }
}
