@managing_product_variants
Feature: Checking the new label in the channel pricing
    In order to sell different variations of a single product
    As an Administrator
    I want to add a new product variant to the shop

    Background:
        Given the store operates on a single channel in "United States"
        And the store has a "Wyborowa Vodka" configurable product
        And this product has option "Taste" with values "Orange" and "Melon"
        And the store has "Fragile" shipping category
        And I am logged in as an administrator

    @ui
    Scenario: Check the new label in the channel pricing
        When I want to create a new variant of this product
        Then I see new channel pricing label "My other code label"
