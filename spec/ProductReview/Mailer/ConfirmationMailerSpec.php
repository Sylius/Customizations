<?php

declare(strict_types=1);

namespace spec\App\Productreview\Mailer;

use App\ProductReview\Mailer\ConfirmationMailerInterface;
use PhpSpec\ObjectBehavior;
use Sylius\Component\Mailer\Sender\SenderInterface;
use Sylius\Component\Review\Model\ReviewableInterface;
use Sylius\Component\Review\Model\ReviewerInterface;
use Sylius\Component\Review\Model\ReviewInterface;

final class ConfirmationMailerSpec extends ObjectBehavior
{
    function let(SenderInterface $sender): void
    {
        $this->beConstructedWith($sender);
    }

    function it_is_sender_instance(): void
    {
        $this->shouldImplement(ConfirmationMailerInterface::class);
    }

    function it_sends_email(SenderInterface $sender, ReviewInterface $review, ReviewerInterface $reviewer, ReviewableInterface $product): void
    {
        $review->getAuthor()->willReturn($reviewer);
        $review->getReviewSubject()->willReturn($product);
        $product->getName()->willReturn('butter');
        $reviewer->getEmail()->willReturn("customer@sylius.com");

        $sender->send("review_confirmation", ["customer@sylius.com"], ['productName' => 'butter'])->shouldBeCalled();

        $this->sendEmail($review);
    }
}

