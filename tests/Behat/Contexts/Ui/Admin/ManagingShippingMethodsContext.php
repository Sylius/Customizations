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
     * @Given I am editing the :shippingMethod shipping method
     */
    public function iAmEditingTheShippingMethod(ShippingMethod $shippingMethod): void
    {
        $this->updatePage->open(['id' => $shippingMethod->getId()]);
    }

    /**
     * @When I add the delivery condition of :deliveryCondition
     */
    public function iAddTheDeliveryConditionOf(string $deliveryCondition): void
    {
        $this->updatePage->setDeliveryConditions($deliveryCondition);
    }

    /**
     * @Then I should see that this shipping method has the delivery condition of :deliveryCondition
     */
    public function iShouldSeeThatThisShippingMethodHasTheDeliveryConditionOf(string $deliveryCondition): void
    {
        Assert::same($deliveryCondition,$this->updatePage->getDeliveryConditions());
    }
}
