<?php

namespace App\Services\Api\V1;

use App\Contracts\ProductRepositoryInterface;

class ProductService implements ProductRepositoryInterface
{
    public function __construct(
      private ProductRepositoryInterface $productRepository
    ) {}

    public function getAllProducts()
    {
        return $this->productRepository->getAllProducts();
    }

    public function findProduct(int $id)
    {
        // TODO: Implement findProduct() method.
    }

    public function createProduct(array $data)
    {
        // TODO: Implement createProduct() method.
    }

    public function updateProduct(int $id, array $data)
    {
        // TODO: Implement updateProduct() method.
    }

    public function deleteProduct(int $id)
    {
        // TODO: Implement deleteProduct() method.
    }
}
