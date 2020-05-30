<?php namespace App\Entities;

use CodeIgniter\Entity;

class ApiKey extends Entity
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
     * @var string $public_key
     */
    private string $public_key;

    /**
     * @var string $private_key
     */
    private string $private_key;

    /**
     * @var string $description
     */
    private string $description;

    /**
     * @var string $site_url
     */
    private string $site_url;

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
    public function getPublicKey(): string
    {
        return $this->public_key;
    }

    /**
     * @param string $public_key
     */
    public function setPublicKey(string $public_key): void
    {
        $this->public_key = $public_key;
    }

    /**
     * @return string
     */
    public function getPrivateKey(): string
    {
        return $this->private_key;
    }

    /**
     * @param string $private_key
     */
    public function setPrivateKey(string $private_key): void
    {
        $this->private_key = $private_key;
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
    public function getSiteUrl(): string
    {
        return $this->site_url;
    }

    /**
     * @param string $site_url
     */
    public function setSiteUrl(string $site_url): void
    {
        $this->site_url = $site_url;
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