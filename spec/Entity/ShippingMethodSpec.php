<?php

namespace spec\App\Entity;

use App\Entity\ShippingMethod;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ShippingMethodSpec extends ObjectBehavior
{
    function let(): void
    {
        $this->beConstructedWith();
    }

    function it_is_initializable(): void
    {
        $this->shouldHaveType(ShippingMethod::class);
    }

    function it_checks_estimated_delivery_time(): void
    {
        $this->setEstimatedDeliveryTime('3days');
        $this->getEstimatedDeliveryTime()->shouldReturn('3days');
    }
}
