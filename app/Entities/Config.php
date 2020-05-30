<?php namespace App\Entities;

use CodeIgniter\Entity;

class Config extends Entity
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
     * @var string $brand_key
     */
    private string $brand_key;

    /**
     * @var string $banner_key
     */
    private string $banner_key;

    /**
     * @var string $site_url
     */
    private string $site_url;

    /**
     * @var string $title
     */
    private string $title;

    /**
     * @var string $descripiton
     */
    private string $descripiton;

    /**
     * @var string $slogan
     */
    private string $slogan;

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
    public function getBrandKey(): string
    {
        return $this->brand_key;
    }

    /**
     * @param string $brand_key
     */
    public function setBrandKey(string $brand_key): void
    {
        $this->brand_key = $brand_key;
    }

    /**
     * @return string
     */
    public function getBannerKey(): string
    {
        return $this->banner_key;
    }

    /**
     * @param string $banner_key
     */
    public function setBannerKey(string $banner_key): void
    {
        $this->banner_key = $banner_key;
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
    public function getDescripiton(): string
    {
        return $this->descripiton;
    }

    /**
     * @param string $descripiton
     */
    public function setDescripiton(string $descripiton): void
    {
        $this->descripiton = $descripiton;
    }

    /**
     * @return string
     */
    public function getSlogan(): string
    {
        return $this->slogan;
    }

    /**
     * @param string $slogan
     */
    public function setSlogan(string $slogan): void
    {
        $this->slogan = $slogan;
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