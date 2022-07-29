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

namespace Pixidos\GPWebPay\Tests\Param;

use PHPUnit\Framework\TestCase;
use Pixidos\GPWebPay\Exceptions\InvalidArgumentException;
use Pixidos\GPWebPay\Param\Amount;

class AmountTest extends TestCase
{

    /**
     * @throws InvalidArgumentException
     */
    public function testSuccessCreate(): void
    {
        $amount = new Amount(1000); // 10.00 Kč or €

        self::assertSame(1000, $amount->getValue());
        self::assertSame('1000', (string)$amount);
    }

    public function testAccurateValue(): void
    {
        self::assertSame(1890, (new Amount(1890))->getValue());
        self::assertSame(1990, (new Amount(1990))->getValue());
        self::assertSame(2040, (new Amount(2040))->getValue());
    }
}
