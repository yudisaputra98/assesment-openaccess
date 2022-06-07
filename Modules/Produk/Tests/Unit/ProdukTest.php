<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;

class ProdukTest extends TestCase
{
    use WithFaker;

    /** @test */
    public function user_can_create_produk()
    {
        $formData = [
            "nama" => $this->faker->name,
            "keterangan" => $this->faker->paragraph,
            "harga" => $this->faker->numberBetween(10000,100000),
            "persediaan" => $this->faker->numberBetween(0,100),
        ];
        $this->post(route('store'), $formData)->assertStatus(201);
    }

    /** @test */
    public function user_can_getall_produk()
    {
        $this->get(route('index'))->assertStatus(200);
        // $this->assertTrue(true);
    }

    /** @test */
    public function user_can_edit_existing_produk()
    {
        $formData = [
            "nama" => $this->faker->name,
            "keterangan" => $this->faker->paragraph,
            "harga" => $this->faker->numberBetween(10000,100000),
            "persediaan" => $this->faker->numberBetween(0,100),
        ];
        $this->put(route('update', 2), $formData)->assertStatus(200);
    }

    /** @test */
    public function user_can_delete_existing_produk()
    {
        $this->delete(route('destroy', 1))->assertStatus(200);
    }
}
