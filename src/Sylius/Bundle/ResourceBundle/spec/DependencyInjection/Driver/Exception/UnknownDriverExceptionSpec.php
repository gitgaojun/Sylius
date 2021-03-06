<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace spec\Sylius\Bundle\ResourceBundle\DependencyInjection\Driver\Exception;

use PhpSpec\ObjectBehavior;
use Sylius\Bundle\ResourceBundle\DependencyInjection\Driver\Exception\UnknownDriverException;

/**
 * @author Arnaud Langlade <aRn0D.dev@gmail.com>
 */
final class UnknownDriverExceptionSpec extends ObjectBehavior
{
    function let(): void
    {
        $this->beConstructedWith('driver');
    }

    function it_extends_exception(): void
    {
        $this->shouldHaveType(\Exception::class);
    }

    function it_has_a_message(): void
    {
        $this->getMessage()->shouldReturn('Unknown driver "driver".');
    }
}
