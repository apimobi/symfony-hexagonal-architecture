<?php

namespace App\Domain;

use DateTimeInterface;
use Symfony\Component\Uid\Uuid;

class Offer
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
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     *
     * @return Post
     */
    public function setTitle(string $title): Post
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * @param string $content
     *
     * @return Post
     */
    public function setContent(string $content): Post
    {
        $this->content = $content;

        return $this;
    }


    public function toString(): string
    {
        return $this->title;
    }
}