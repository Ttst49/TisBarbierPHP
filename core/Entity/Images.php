<?php

namespace Entity;


use Attributes\Table;
use Attributes\TargetRepository;
use Repositories\ImagesRepository;

#[Table(name: "images")]
#[TargetRepository(repositoryName: ImagesRepository::class)]
class Images extends AbstractEntity
{

    private int $id;
    private string $image;
    private string $alt;

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

    /**
     * @return string
     */
    public function getAlt(): string
    {
        return $this->alt;
    }

    /**
     * @param string $alt
     */
    public function setAlt(string $alt): void
    {
        $this->alt = $alt;
    }

}