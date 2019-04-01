<?php

namespace spec\App\Entity\Shipping;

use App\Entity\Shipping\ShippingMethod;
use PhpSpec\ObjectBehavior;

class ShippingMethodSpec extends ObjectBehavior
{
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
