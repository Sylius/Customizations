@managing_product_reviews
Feature: Receiving confirmation email after adding review
    In order to send email with confirmation after review accepted
    As an Administrator
    I want to send email to reviewer

    Background:
        Given the store has customer "Mike Ross" with email "ross@teammike.com"
        And the store has a product "Lamborghini Gallardo Model"
        And this product has a new review titled "Awesome" and rated 4 added by customer "castiel@heaven.com"
        And I am logged in as an administrator

    @ui
    Scenario: send email after accepting a product review
        When I want to browse product reviews
        And I accept the "Awesome" product review
        Then I should be notified that it has been successfully accepted
        And this product review status should be "accepted"
        And an email with review confirmation should be sent to "castiel@heaven.com"
