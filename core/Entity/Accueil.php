<?php

namespace Entity;


use Attributes\Table;
use Attributes\TargetRepository;
use Repositories\AccueilRepository;

#[Table(name: "images")]
#[TargetRepository(repositoryName: AccueilRepository::class)]
class Accueil extends AbstractEntity
{

    private int $id;
    private string $image;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getImage(): string
    {
        return $this->image;
    }

    /**
     * @param string $image
     */
    public function setImage(string $image): void
    {
        $this->image = $image;
    }

}