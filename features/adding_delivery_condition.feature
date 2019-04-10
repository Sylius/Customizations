@managing_shipping_methods
Feature: Adding delivery condition
    In order to make customers aware of the delivery condition
    As an Administrator
    I want to be able to add delivery condition to a shipping method

    Background:
        Given the store operates on a single channel in "United States"
        And the store is available in "English (United States)"
        And the store allows shipping with "UPS Carrier" identified by "UPS_CARRIER"
        And I am logged in as an administrator

    @ui
    Scenario: Adding delivery condition to shipping method details
        Given I am editing the "UPS Carrier" shipping method
        When I add the delivery condition of "shipment only on Friday"
        And I save my changes
        Then I should see that this shipping method has the delivery condition of "shipment only on Friday"
