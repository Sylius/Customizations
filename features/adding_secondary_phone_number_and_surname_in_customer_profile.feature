@customer_account
Feature: Adding secondary phone number and surname in customer profile
    In order to storage more information about me
    As a Customer
    I want to add new information in customer profile

    Background:
        Given the store operates on a single channel in "United States"
        And there is a customer "Francis Underwood" identified by an email "francis@underwood.com" and a password "whitehouse"
        And I am logged in as "francis@underwood.com"

    @ui
    Scenario: Add a contact hours and a surname in my profile
        When I want to modify my profile
        And I specify my surname as "Snow"
        And I specify my secondary phone number as "666555444"
        And I save my changes
        Then I should see that my surname is "Snow"
        And I should see that my secondary phone number is "666555444"
