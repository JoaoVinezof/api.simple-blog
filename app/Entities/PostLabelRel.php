<?php namespace App\Entities;

use CodeIgniter\Entity;

class PostLabelRel extends Entity
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
     * @var int $id_post
     */
    private int $id_post;

    /**
     * @var int $id_label
     */
    private int $id_label;

    /**
     * @var string $created_at
     */
    private string $created_at;

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
    public function getIdPost(): int
    {
        return $this->id_post;
    }

    /**
     * @param int $id_post
     */
    public function setIdPost(int $id_post): void
    {
        $this->id_post = $id_post;
    }

    /**
     * @return int
     */
    public function getIdLabel(): int
    {
        return $this->id_label;
    }

    /**
     * @param int $id_label
     */
    public function setIdLabel(int $id_label): void
    {
        $this->id_label = $id_label;
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
}