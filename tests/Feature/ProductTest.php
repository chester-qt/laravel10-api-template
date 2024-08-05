<?php


use App\Models\Product;

it('can show a list of products', function () {

    Product::factory(15)->create();

    $response = $this->getJson('/api/v1/products');

    expect($response)
        ->assertJsonPath('meta.total', 15);
});

it('can create a product', function () {

    $response = $this->postJson('/api/v1/products', [
        'name' => 'testproduct',
        'is_featured' => false,
        'description' => 'test description test',
        'price' => '20.00'
    ]);

    dd($response);

    expect($response)
        ->assertJsonPath('meta.total', 1);
});
