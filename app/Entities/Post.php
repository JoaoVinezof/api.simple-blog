<?php namespace App\Entities;

use CodeIgniter\Entity;

class Post extends Entity
{
    /**
     * @var int $id
     */
    private int $id;

    /**
     * @var string $id_key
     */
    private string $id_key;

    /**
     * @var string $user_key
     */
    private string $user_key;

    /**
     * @var string $cover_key
     */
    private string $cover_key;

    /**
     * @var string $thumbnail_key
     */
    private string $thumbnail_key;

    /**
     * @var string $color
     */
    private string $color;

    /**
     * @var string $category
     */
    private string $category;

    /**
     * @var string $title
     */
    private string $title;

    /**
     * @var string $slug
     */
    private string $slug;

    /**
     * @var string $text
     */
    private string $text;

    /**
     * @var int $published 1 = published | 0 = not published
     */
    private int $published;

    /**
     * @var string $published_at
     */
    private string $published_at;

    /**
     * @var string $created_at
     */
    private string $created_at;

    /**
     * @var string $updated_at
     */
    private string $updated_at;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getIdKey(): string
    {
        return $this->id_key;
    }

    /**
     * @param string $id_key
     */
    public function setIdKey(string $id_key): void
    {
        $this->id_key = $id_key;
    }

    /**
     * @return string
     */
    public function getUserKey(): string
    {
        return $this->user_key;
    }

    /**
     * @param string $user_key
     */
    public function setUserKey(string $user_key): void
    {
        $this->user_key = $user_key;
    }

    /**
     * @return string
     */
    public function getCoverKey(): string
    {
        return $this->cover_key;
    }

    /**
     * @param string $cover_key
     */
    public function setCoverKey(string $cover_key): void
    {
        $this->cover_key = $cover_key;
    }

    /**
     * @return string
     */
    public function getThumbnailKey(): string
    {
        return $this->thumbnail_key;
    }

    /**
     * @param string $thumbnail_key
     */
    public function setThumbnailKey(string $thumbnail_key): void
    {
        $this->thumbnail_key = $thumbnail_key;
    }

    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * @param string $color
     */
    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    /**
     * @return string
     */
    public function getCategory(): string
    {
        return $this->category;
    }

    /**
     * @param string $category
     */
    public function setCategory(string $category): void
    {
        $this->category = $category;
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
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getSlug(): string
    {
        return $this->slug;
    }

    /**
     * @param string $slug
     */
    public function setSlug(string $slug): void
    {
        $this->slug = $slug;
    }

    /**
     * @return string
     */
    public function getText(): string
    {
        return $this->text;
    }

    /**
     * @param string $text
     */
    public function setText(string $text): void
    {
        $this->text = $text;
    }

    /**
     * @return int
     */
    public function getPublished(): int
    {
        return $this->published;
    }

    /**
     * @param int $published
     */
    public function setPublished(int $published): void
    {
        $this->published = $published;
    }

    /**
     * @return string
     */
    public function getPublishedAt(): string
    {
        return $this->published_at;
    }

    /**
     * @param string $published_at
     */
    public function setPublishedAt(string $published_at): void
    {
        $this->published_at = $published_at;
    }

    /**
     * @return string
     */
    public function getCreatedAt(): string
    {
        return $this->created_at;
    }

    /**
     * @param string $created_at
     */
    public function setCreatedAt(string $created_at): void
    {
        $this->created_at = $created_at;
    }

    /**
     * @return string
     */
    public function getUpdatedAt(): string
    {
        return $this->updated_at;
    }

    /**
     * @param string $updated_at
     */
    public function setUpdatedAt(string $updated_at): void
    {
        $this->updated_at = $updated_at;
    }
}