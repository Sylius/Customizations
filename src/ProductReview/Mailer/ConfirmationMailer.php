<?php

declare(strict_types=1);

namespace App\ProductReview\Mailer;

use Sylius\Component\Mailer\Sender\SenderInterface;
use Sylius\Component\Review\Model\ReviewInterface;

final class ConfirmationMailer implements ConfirmationMailerInterface
{
    /** @var SenderInterface */
    private $emailSender;

    public function __construct(SenderInterface $emailSender)
    {
        $this->emailSender = $emailSender;
    }

    public function sendEmail(ReviewInterface $review): void
    {
        $this->emailSender->send('review_confirmation',
            [$review->getAuthor()->getEmail()],
            ['productName' => $review->getReviewSubject()->getName()])
        ;
    }
}
