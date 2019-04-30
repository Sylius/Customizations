<?php

declare(strict_types=1);

namespace App\Tests\Behat\Context\Ui;

use Behat\Behat\Context\Context;
use Sylius\Component\Core\Test\Services\EmailCheckerInterface;
use Webmozart\Assert\Assert;

final class EmailContext implements Context
{
    /** @var EmailCheckerInterface */
    private $emailChecker;

    public function __construct(EmailCheckerInterface $emailChecker)
    {
        $this->emailChecker = $emailChecker;
    }

    /**
     * @Then an email with review confirmation should be sent to :emailAddress
     */
    public function anEmailWithReviewConfirmationShouldBeSentTo(string $emailAddress): void
    {
        Assert::true($this->emailChecker->hasMessageTo('Your review has been added Yeah !', $emailAddress));
    }
}
