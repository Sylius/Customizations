<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace App\ProductReview\Mailer;

use Sylius\Component\Review\Model\ReviewInterface;

interface ConfirmationMailerInterface
{
    public function sendEmail(ReviewInterface $review): void;
}
