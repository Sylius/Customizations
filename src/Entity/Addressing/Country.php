<?php

declare(strict_types=1);

namespace App\Entity\Addressing;

use Doctrine\ORM\Mapping as ORM;
use Sylius\Component\Addressing\Model\Country as BaseCountry;
use Sylius\Component\Addressing\Model\CountryInterface;

/**
 * @ORM\Entity()
 * @ORM\Table(name="sylius_country")
 */
class Country extends BaseCountry implements CountryInterface
{
    /** @ORM\Column(type="string", nullable=true) */
    private $flag;

    public function getFlag(): ?string
    {
        return $this->flag;
    }

    public function setFlag(string $flag): void
    {
        $this->flag = $flag;
    }
}
