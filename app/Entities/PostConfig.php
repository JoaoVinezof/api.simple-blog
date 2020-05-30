<?php namespace App\Entities;

use CodeIgniter\Entity;

class PostConfig extends Entity
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
     * @var int $allow_comments
     */
    private int $allow_comments;

    /**
     * @var int $allow_likes
     */
    private int $allow_likes;

    /**
     * @var string $permanent_link
     */
    private string $permanent_link;

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
     * @return int
     */
    public function getAllowComments(): int
    {
        return $this->allow_comments;
    }

    /**
     * @param int $allow_comments
     */
    public function setAllowComments(int $allow_comments): void
    {
        $this->allow_comments = $allow_comments;
    }

    /**
     * @return int
     */
    public function getAllowLikes(): int
    {
        return $this->allow_likes;
    }

    /**
     * @param int $allow_likes
     */
    public function setAllowLikes(int $allow_likes): void
    {
        $this->allow_likes = $allow_likes;
    }

    /**
     * @return string
     */
    public function getPermanentLink(): string
    {
        return $this->permanent_link;
    }

    /**
     * @param string $permanent_link
     */
    public function setPermanentLink(string $permanent_link): void
    {
        $this->permanent_link = $permanent_link;
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