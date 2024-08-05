<?php

namespace App\Repositories\Api\V1;

use App\Contracts\ProductRepositoryInterface;
use App\Http\Resources\ProductResource;
use App\Models\Product;
use Illuminate\Support\Facades\Cache;

class ProductRepository implements ProductRepositoryInterface
{
    public function __construct(
        private Product $product
    )
    {
    }

    public function getAllProducts()
    {
        $page = request('page', 1);
        $cachePage = "products_page_$page";

        if (Cache::has($cachePage)) {
            $products = Cache::get($cachePage);
        } else {
            $products = Cache::remember($cachePage, 3600, function () {
                return $this->product->paginate();
            });
        }

        return ProductResource::collection($products);

    }

    public function findProduct(int $id)
    {
        // TODO: Implement findProduct() method.
    }

    public function createProduct(array $data)
    {
        Product::create($data);


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
