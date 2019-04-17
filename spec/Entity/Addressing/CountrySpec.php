<?php

namespace spec\App\Entity\Addressing;

use App\Entity\Addressing\Country;
use PhpSpec\ObjectBehavior;

final class CountrySpec extends ObjectBehavior
{
    function it_is_initializable(): void
    {
        $this->shouldHaveType(Country::class);
    }

    function its_flag_is_mutable(): void
    {
        $this->setFlag('test_flag');
        $this->getFlag()->shouldReturn('test_flag');
    }
}
