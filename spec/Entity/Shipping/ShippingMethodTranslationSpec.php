<?php

declare(strict_types=1);

namespace spec\App\Entity\Shipping;

use App\Entity\Shipping\ShippingMethodTranslation;
use PhpSpec\ObjectBehavior;

final class ShippingMethodTranslationSpec extends ObjectBehavior
{
    function it_is_initializable(): void
    {
        $this->shouldHaveType(ShippingMethodTranslation::class);
    }

    function it_checks_delivery_condition(): void
    {
        $this->setDeliveryConditions('delivered');
        $this->getDeliveryConditions()->shouldReturn('delivered');
    }
}
