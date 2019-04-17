<?php

declare(strict_types=1);

namespace spec\App\Entity\Shipping;

use App\Entity\Shipping\ShippingMethod;
use PhpSpec\ObjectBehavior;

final class ShippingMethodSpec extends ObjectBehavior
{
    function it_is_initializable(): void
    {
        $this->shouldHaveType(ShippingMethod::class);
    }

    function it_checks_delivery_condition(): void
    {
        $this->setCurrentLocale('en_US');
        $this->setDeliveryConditions('delivered');
        $this->getDeliveryConditions()->shouldReturn('delivered');
    }
}
