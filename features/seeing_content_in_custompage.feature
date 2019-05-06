@homepage
Feature: Seeing content in custom page
    In order to view page
    As a Customer
    I want to be able to view a content

    Background:
        Given the store operates on a single channel in "United States"

    @ui
    Scenario: Viewing content
        When I am on the custom page
        Then I should see "CustomHomepageController" in page
