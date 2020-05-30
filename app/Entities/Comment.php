<?php namespace App\Entities;

use CodeIgniter\Entity;

class Comment extends Entity
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
     * @var string $visitor_key
     */
    private string $visitor_key;

    /**
     * @var string $name
     */
    private string $name;

    /**
     * @var string $description
     */
    private string $description;

    /**
     * @var string $is_active
     */
    private string $is_active;

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
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
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
    public function getIsActive(): string
    {
        return $this->is_active;
    }

    /**
     * @param string $is_active
     */
    public function setIsActive(string $is_active): void
    {
        $this->is_active = $is_active;
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