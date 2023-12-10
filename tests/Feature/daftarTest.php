<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class daftarTest extends TestCase
{
    public function testDaftarSuccess() {
        $response = $this->post('/daftar', [
            'namaDepan' => 'rifki',
            'namaBelakang' => 'rahmadi',
            'email' => 'muhamadramadi335@gmail.com',
            'password' => 12345678
        ]);
        $response->assertStatus(200);
    }
}
