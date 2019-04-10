@managing_countries
Feature: Adding a flag to a country
    In order to identify countries by their flags
    As an Administrator
    I want to add a flag to a country

    Background:
        Given I am logged in as an administrator

    @ui
    Scenario: Add a flag in to a country
        Given I am adding the "United States" country
        When I specify the image URL of this country's flag
        And I save my changes
        Then I should see that this country has a flag
