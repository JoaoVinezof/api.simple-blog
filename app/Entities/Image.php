<?php namespace App\Entities;

use CodeIgniter\Entity;

class Image extends Entity
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
     * @var string $name
     */
    private string $name;

    /**
     * @var string $original_name
     */
    private string $original_name;

    /**
     * @var string $full_path
     */
    private string $full_path;

    /**
     * @var string $relative_path
     */
    private string $relative_path;

    /**
     * @var int $order
     */
    private int $order;

    /**
     * @var int $is_active
     */
    private int $is_active;

    /**
     * @var int $is_public
     */
    private int $is_public;

    /**
     * @var string $title
     */
    private string $title;

    /**
     * @var string $description
     */
    private string $description;

    /**
     * @var string $alt
     */
    private string $alt;

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
    public function getOriginalName(): string
    {
        return $this->original_name;
    }

    /**
     * @param string $original_name
     */
    public function setOriginalName(string $original_name): void
    {
        $this->original_name = $original_name;
    }

    /**
     * @return string
     */
    public function getFullPath(): string
    {
        return $this->full_path;
    }

    /**
     * @param string $full_path
     */
    public function setFullPath(string $full_path): void
    {
        $this->full_path = $full_path;
    }

    /**
     * @return string
     */
    public function getRelativePath(): string
    {
        return $this->relative_path;
    }

    /**
     * @param string $relative_path
     */
    public function setRelativePath(string $relative_path): void
    {
        $this->relative_path = $relative_path;
    }

    /**
     * @return int
     */
    public function getOrder(): int
    {
        return $this->order;
    }

    /**
     * @param int $order
     */
    public function setOrder(int $order): void
    {
        $this->order = $order;
    }

    /**
     * @return int
     */
    public function getIsActive(): int
    {
        return $this->is_active;
    }

    /**
     * @param int $is_active
     */
    public function setIsActive(int $is_active): void
    {
        $this->is_active = $is_active;
    }

    /**
     * @return int
     */
    public function getIsPublic(): int
    {
        return $this->is_public;
    }

    /**
     * @param int $is_public
     */
    public function setIsPublic(int $is_public): void
    {
        $this->is_public = $is_public;
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
    public function getAlt(): string
    {
        return $this->alt;
    }

    /**
     * @param string $alt
     */
    public function setAlt(string $alt): void
    {
        $this->alt = $alt;
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