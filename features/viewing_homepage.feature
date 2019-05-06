@homepage
Feature: Viewing homepage
    In order to be up-to-date with the news
    As a Customer
    I want to be able to view a new changes

    Background:
        Given the store operates on a single channel in "United States"

    @ui
    Scenario: Viewing news in homepage
        When I check homepage
        Then I should see "Test Block Title"
