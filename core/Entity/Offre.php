<?php

namespace Entity;


use Attributes\Table;
use Attributes\TargetRepository;
use Repositories\OffreRepository;

#[Table(name: "offres")]
#[TargetRepository(repositoryName: OffreRepository::class)]
class Offre extends AbstractEntity
{

    private int $id;
    private int $price;
    private string $content;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return int
     */
    public function getPrice(): int
    {
        return $this->price;
    }

    /**
     * @param int $price
     */
    public function setPrice(int $price): void
    {
        $this->price = $price;
    }

    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }

}