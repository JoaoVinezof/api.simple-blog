<?php namespace App\Entities;

use CodeIgniter\Entity;

class Seo extends Entity
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
     * @var string $owner_key
     */
    private string $owner_key;

    /**
     * @var string $thumbnail_key
     */
    private string $thumbnail_key;

    /**
     * @var string $title
     */
    private string $title;

    /**
     * @var string $description
     */
    private string $description;

    /**
     * @var string $charset
     */
    private string $charset;

    /**
     * @var string $author
     */
    private string $author;

    /**
     * @var string $copyright
     */
    private string $copyright;

    /**
     * @var string $keywoods
     */
    private string $keywoods;

    /**
     * @var string $robots
     */
    private string $robots;

    /**
     * @var string $dc_title
     */
    private string $dc_title;

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
    public function getOwnerKey(): string
    {
        return $this->owner_key;
    }

    /**
     * @param string $owner_key
     */
    public function setOwnerKey(string $owner_key): void
    {
        $this->owner_key = $owner_key;
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
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getCharset(): string
    {
        return $this->charset;
    }

    /**
     * @param string $charset
     */
    public function setCharset(string $charset): void
    {
        $this->charset = $charset;
    }

    /**
     * @return string
     */
    public function getAuthor(): string
    {
        return $this->author;
    }

    /**
     * @param string $author
     */
    public function setAuthor(string $author): void
    {
        $this->author = $author;
    }

    /**
     * @return string
     */
    public function getCopyright(): string
    {
        return $this->copyright;
    }

    /**
     * @param string $copyright
     */
    public function setCopyright(string $copyright): void
    {
        $this->copyright = $copyright;
    }

    /**
     * @return string
     */
    public function getKeywoods(): string
    {
        return $this->keywoods;
    }

    /**
     * @param string $keywoods
     */
    public function setKeywoods(string $keywoods): void
    {
        $this->keywoods = $keywoods;
    }

    /**
     * @return string
     */
    public function getRobots(): string
    {
        return $this->robots;
    }

    /**
     * @param string $robots
     */
    public function setRobots(string $robots): void
    {
        $this->robots = $robots;
    }

    /**
     * @return string
     */
    public function getDcTitle(): string
    {
        return $this->dc_title;
    }

    /**
     * @param string $c_title
     */
    public function setDcTitle(string $c_title): void
    {
        $this->dc_title = $c_title;
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