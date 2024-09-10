<?php

namespace App\Adapters\Api\Adapter;

use DateTimeInterface;
use Symfony\Component\Serializer\Annotation\Groups;


class DTOffer
{
    private int $id;
    private string $title;
    private string $content;
    private ?DateTimeInterface $publishedAt;


    /**
     * Post constructor.
     */
    public function __construct(int $id, string $title, string $content, ?DateTimeInterface $publishedAt)
    {
        $this->id = $id;
        $this->title = $title;
        $this->content = $content;
        $this->publishedAt = $publishedAt;
    }

    /**
     * @return int
     */
    #[Groups(['group1'])]
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    #[Groups(['group1', 'group2'])]
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return string
     */
    #[Groups(['group1', 'group2'])]
    public function getContent(): string
    {
        return $this->content;
    }

    public function toString(): string
    {
        return $this->title;
    }
}