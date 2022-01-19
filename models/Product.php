<?php

class Product
{

    public const DB_TABLE_NAME = "products";

    private ?int $id;
    private string $name;
    private string $sku;
    private ?string $categories;
    private ?int $price;

    public function __construct(?int $id, string $name, string $sku, ?string $categories, int $price)
    {
        $this->id = $id;
        $this->name = $name;
        $this->sku = $sku;
        $this->categories = $categories;
        $this->price = $price;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getSku(): string
    {
        return $this->sku;
    }

    public function getCategories(): ?string
    {
        return $this->categories;
    }

    public function getPrice(): ?int
    {
        return $this->price;
    }


    public function skuGenerator() : string
    {
        $string = "ABCDEFGHIJK123456";
        $random = str_shuffle($string);
        $this->sku = $random;
        return $random;

    }
}