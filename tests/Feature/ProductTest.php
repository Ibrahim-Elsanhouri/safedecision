<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\DatabaseMigrations;

use Tests\TestCase;

class ProductTest extends TestCase
{
use DatabaseMigrations;
   // use DatabaseMigrations; 
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function tests_user_can_read_all_products()
    {
        $product = factory('App\Models\Product')->create(); 
        $response = $this->get('/products'); 
        $response->assertSee($product->name);
    }
}
