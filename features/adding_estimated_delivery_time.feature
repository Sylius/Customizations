@managing_shipping_methods
Feature: Adding estimated delivery time
    In order to make customers aware of how long will it take to deliver their orders
    As an Administrator
    I want to be able to add estimated delivery time to a shipping method

    Background:
        Given the store operates on a single channel in "United States"
        And the store is available in "English (United States)"
        And the store allows shipping with "UPS Carrier" identified by "UPS_CARRIER"
        And I am logged in as an administrator

    @ui
    Scenario: Adding estimated delivery time to shipping method details
        Given I am editing the "UPS Carrier" shipping method
        When I add the estimated delivery time of "3 days"
        And I save my changes
        Then I should see that this shipping method has the estimated delivery time of "3 days"
