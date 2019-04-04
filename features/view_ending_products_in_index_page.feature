@homepage
Feature: View ending products on Homepage
    In order to view ending products
    As a Customer
    I want to see Clearance items in Homepage

    Background:
        Given the store operates on a single channel in "United States"
        And the store has a product "PHP mug"
        And there are 20 units of product "PHP mug" available in the inventory
        And the store has a product "Github mug"
        And there are 15 units of product "Github mug" available in the inventory
        And the store has a product "Java mug"
        And there are 10 units of product "Java mug" available in the inventory

    @ui
    Scenario: viewing products with less pieces in storage
        When I am on the homepage
        Then I should see product "Java mug"
        And I should see product "Github mug"
        And I should not see product "PHP mug"
