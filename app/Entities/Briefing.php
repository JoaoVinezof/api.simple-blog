<?php namespace App\Entities;

use CodeIgniter\Entity;

class Briefing extends Entity
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
     * @var string $visit_key
     */
    private string $visit_key;

    /**
     * @var string $contractor_name
     */
    private string $contractor_name;

    /**
     * @var string $contractor_phone
     */
    private string $contractor_phone;

    /**
     * @var string $contractor_email
     */
    private string $contractor_email;

    /**
     * @var string $contractor_city
     */
    private string $contractor_city;

    /**
     * @var string $contractor_state
     */
    private string $contractor_state;

    /**
     * @var string $product_type
     */
    private string $product_type;

    /**
     * @var string $product_name
     */
    private string $product_name;

    /**
     * @var string $product_description
     */
    private string $product_description;

    /**
     * @var string $product_term
     */
    private string $product_term;

    /**
     * @var int $has_answer
     */
    private int $has_answer;

    /**
     * @var string $created_at;
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
    public function getVisitKey(): string
    {
        return $this->visit_key;
    }

    /**
     * @param string $visit_key
     */
    public function setVisitKey(string $visit_key): void
    {
        $this->visit_key = $visit_key;
    }

    /**
     * @return string
     */
    public function getContractorName(): string
    {
        return $this->contractor_name;
    }

    /**
     * @param string $contractor_name
     */
    public function setContractorName(string $contractor_name): void
    {
        $this->contractor_name = $contractor_name;
    }

    /**
     * @return string
     */
    public function getContractorPhone(): string
    {
        return $this->contractor_phone;
    }

    /**
     * @param string $contractor_phone
     */
    public function setContractorPhone(string $contractor_phone): void
    {
        $this->contractor_phone = $contractor_phone;
    }

    /**
     * @return string
     */
    public function getContractorEmail(): string
    {
        return $this->contractor_email;
    }

    /**
     * @param string $contractor_email
     */
    public function setContractorEmail(string $contractor_email): void
    {
        $this->contractor_email = $contractor_email;
    }

    /**
     * @return string
     */
    public function getContractorCity(): string
    {
        return $this->contractor_city;
    }

    /**
     * @param string $contractor_city
     */
    public function setContractorCity(string $contractor_city): void
    {
        $this->contractor_city = $contractor_city;
    }

    /**
     * @return string
     */
    public function getContractorState(): string
    {
        return $this->contractor_state;
    }

    /**
     * @param string $contractor_state
     */
    public function setContractorState(string $contractor_state): void
    {
        $this->contractor_state = $contractor_state;
    }

    /**
     * @return string
     */
    public function getProductType(): string
    {
        return $this->product_type;
    }

    /**
     * @param string $product_type
     */
    public function setProductType(string $product_type): void
    {
        $this->product_type = $product_type;
    }

    /**
     * @return string
     */
    public function getProductName(): string
    {
        return $this->product_name;
    }

    /**
     * @param string $product_name
     */
    public function setProductName(string $product_name): void
    {
        $this->product_name = $product_name;
    }

    /**
     * @return string
     */
    public function getProductDescription(): string
    {
        return $this->product_description;
    }

    /**
     * @param string $product_description
     */
    public function setProductDescription(string $product_description): void
    {
        $this->product_description = $product_description;
    }

    /**
     * @return string
     */
    public function getProductTerm(): string
    {
        return $this->product_term;
    }

    /**
     * @param string $product_term
     */
    public function setProductTerm(string $product_term): void
    {
        $this->product_term = $product_term;
    }

    /**
     * @return int
     */
    public function getHasAnswer(): int
    {
        return $this->has_answer;
    }

    /**
     * @param int $has_answer
     */
    public function setHasAnswer(int $has_answer): void
    {
        $this->has_answer = $has_answer;
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