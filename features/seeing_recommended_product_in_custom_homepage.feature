@homepage
Feature: Seeing recommended products page in custom homepage
    In order to be up-to-date with the newest products
    As a Customer
    I want to be able to view a latest product list

    Background:
        Given the store operates on a single channel in "United States"
        And this channel has "Belvedere Vodka", "Coconaut Liqeur", "Chopin Chocolate Liquer" and "Capitan Morgan White Rum" products

    @ui
    Scenario: Viewing latest products
        When I am on the custom homepage
        Then I should see 4 products in the homepage
