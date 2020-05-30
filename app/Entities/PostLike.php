<?php namespace App\Entities;

use CodeIgniter\Entity;

class PostLike extends Entity
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
     * @var string $post_key
     */
    private string $post_key;

    /**
     * @var string $user_key
     */
    private string $user_key;

    /**
     * @var string $visitor_key
     */
    private string $visitor_key;

    /**
     * @var int $vote 1 = like | 0 = deslike
     */
    private int $vote;

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
    public function getPostKey(): string
    {
        return $this->post_key;
    }

    /**
     * @param string $post_key
     */
    public function setPostKey(string $post_key): void
    {
        $this->post_key = $post_key;
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
    public function getVisitorKey(): string
    {
        return $this->visitor_key;
    }

    /**
     * @param string $visitor_key
     */
    public function setVisitorKey(string $visitor_key): void
    {
        $this->visitor_key = $visitor_key;
    }

    /**
     * @return int
     */
    public function getVote(): int
    {
        return $this->vote;
    }

    /**
     * @param int $vote
     */
    public function setVote(int $vote): void
    {
        $this->vote = $vote;
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