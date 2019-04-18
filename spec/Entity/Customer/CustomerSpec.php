<?php

declare(strict_types=1);

namespace spec\App\Entity\Customer;

use App\Entity\Customer\Customer;
use PhpSpec\ObjectBehavior;

final class CustomerSpec extends ObjectBehavior
{
    function it_is_initializable(): void
    {
        $this->shouldHaveType(Customer::class);
    }

    function its_secondary_phone_number_are_mutable(): void
    {
        $this->setSecondaryPhoneNumber('555444333');
        $this->getSecondaryPhoneNumber()->shouldReturn('555444333');
    }
}
