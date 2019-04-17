@homepage
Feature: Seeing products that are running out on homepage
    In order to buy products that are soon going to be sold out
    As a Customer
    I want to see clearance items in homepage

    Background:
        Given the store operates on a single channel in "United States"
        And the store has a product "PHP mug"
        And there are 20 units of product "PHP mug" available in the inventory
        And the store has a product "Github mug"
        And there are 16 units of product "Github mug" available in the inventory
        And the store has a product "Python mug"
        And there are 15 units of product "Python mug" available in the inventory
        And the store has a product "Ruby mug"
        And there are 14 units of product "Ruby mug" available in the inventory
        And the store has a product "Java mug"
        And there are 10 units of product "Java mug" available in the inventory

    @ui
    Scenario: Viewing products that are running out sorted by the leas items available in the inventory
        When I am on the homepage
        Then I should see product "Java mug" as the first one in the list
        And I should see products "Github mug", "Python mug", "Ruby mug"
        But I should not see product "PHP mug"
