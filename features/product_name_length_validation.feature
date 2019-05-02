@create_product
Feature: Product name length validation
    In order to avoid creating product with too short name
    As an Administrator
    I want to be prevented from adding it with too short name

    Background:
        Given the store is available in "English (United States)"
        And I am logged in as an administrator
        And I want to create a new simple product

    @ui
    Scenario: Trying to add product with too short name
        And I specify its code as "Wooden_shield"
        And I name it "Wood sh" in "English (United States)"
        And I add it
        Then I should be notified that product name must be at least 10 characters long

    @ui
    Scenario: Adding product with valid name
        And I specify its code as "Wooden_shield"
        And I set its slug to "wooden-shield"
        And I name it "Wooden shield" in "English (United States)"
        And I add it
        Then I should be notified that it has been successfully created
