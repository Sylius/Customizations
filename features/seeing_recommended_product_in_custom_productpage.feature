@homepage
Feature: Seeing recommended product in custom product page
    In order to buy recommended product
    As a Customer
    I want to see product in custom product page

    Background:
        Given the store operates on a single channel in "United States"
        And the store has a product "PHP mug"
        And there are 5 units of product "PHP mug" available in the inventory

    @ui
    Scenario: Viewing recommended products that is stored in the inventory
        When I am on the custom recommended product page
        Then I should see product "PHP mug" in the site
