<?php

namespace App\Repositories\Api\V2;

use App\Contracts\ProductRepositoryInterface;

class ProductRepository
{
    public function __construct(
      ProductRepositoryInterface $productRepository
    ) {}
}
