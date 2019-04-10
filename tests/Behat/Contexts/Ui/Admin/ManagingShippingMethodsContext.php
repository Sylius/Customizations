<?php

declare(strict_types=1);

namespace App\Tests\Behat\Contexts\Ui\Admin;

use App\Entity\Shipping\ShippingMethod;
use App\Tests\Behat\Page\ShippingMethod\UpdatePageInterface;
use Behat\Behat\Context\Context;
use Webmozart\Assert\Assert;

final class ManagingShippingMethodsContext implements Context
{
    /** @var UpdatePageInterface */
    private $updatePage;

    public function __construct(UpdatePageInterface $updatePage)
    {
        $this->updatePage = $updatePage;
    }

    /**
     * @When I add the estimated delivery time of :stimatedDeliveryTime
     */
    public function iAddTheEstimatedDeliveryTimeOf(string $stimatedDeliveryTime): void
    {
        $this->updatePage->addEstimatedDeliveryTime($stimatedDeliveryTime);
    }

    /**
     * @Given I am editing the :shippingMethod shipping method
     */
    public function iAmEditingTheShippingMethod(ShippingMethod $shippingMethod)
    {
        $this->updatePage->open(['id' => $shippingMethod->getId()]);
    }

    /**
     * @Then I should see that this shipping method has the estimated delivery time of :stimatedDeliveryTime
     */
    public function iShouldSeeThatThisShippingMethodHasTheEstimatedDeliveryTimeOf(string $stimatedDeliveryTime): void
    {
        Assert::same($stimatedDeliveryTime,$this->updatePage->getEstimatedDeliveryTime());
    }
}
