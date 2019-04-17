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

    function it_does_not_have_estimated_delivery_time_by_default()
    {
        $this->getEstimatedDeliveryTime()->shouldBeNull();
    }

    function its_estimated_delivery_time_is_mutable(): void
    {
        $this->setEstimatedDeliveryTime('3days');
        $this->getEstimatedDeliveryTime()->shouldReturn('3days');
    }
}
