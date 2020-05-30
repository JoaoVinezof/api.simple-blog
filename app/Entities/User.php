<?php namespace App\Entities;

use CodeIgniter\Entity;

class User extends Entity
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
     * @var string $private_key
     */
    private string $private_key;

    /**
     * @var string $public_key
     */
    private string $public_key;

    /**
     * @var string $avatar_key
     */
    private string $avatar_key;

    /**
     * @var string $cover_key
     */
    private string $cover_key;

    /**
     * @var string $slug
     */
    private string $slug;

    /**
     * @var string $name
     */
    private string $name;

    /**
     * @var string $email
     */
    private string $email;

    /**
     * @var string $password
     */
    private string $password;

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
    public function getAvatarKey(): string
    {
        return $this->avatar_key;
    }

    /**
     * @param string $avatar_key
     */
    public function setAvatarKey(string $avatar_key): void
    {
        $this->avatar_key = $avatar_key;
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
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword(string $password): void
    {
        $this->password = $password;
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