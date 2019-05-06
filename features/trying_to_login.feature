@customer_login
Feature: Trying to login
    In order to view my changes
    As a Customer
    I want to login in customer account

    Background:
        Given the store operates on a single channel in "United States"

    @ui
    Scenario: Login in account
        When I want to login
        Then I should see my new title "This Is My Headline"
