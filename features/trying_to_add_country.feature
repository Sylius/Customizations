@managing_countries
Feature: Trying to add country
    In order to view my changes
    As an Administrator
    I want to add a new country to the store

    Background:
        Given I am logged in as an administrator

    @ui
    Scenario: Adding country
        When I want to add a new country
        Then I should see my customization "My Custom Headline"
