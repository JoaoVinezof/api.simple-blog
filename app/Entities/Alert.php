<?php namespace App\Entities;

use CodeIgniter\Entity;

class Alert extends Entity
{
    private int $id;
    private string $id_key;
    private string $image_key;
    private string $title;
    private string $description;
    private string $type;
    private boolean $is_active;
    private int $order;
    private string $created_at;
    private string $updated_at;
}