<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\Admin;
use App\Models\Apotek;

class HomeTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function halaman_home_bisa_diakses()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertViewIs('home');
    }

    /** @test */
    public function hanya_menampilkan_apotek_yang_disetujui()
    {
        // apotek disetujui
        $apotek1 = Apotek::factory()->create([
            'alamat' => 'Bandung'
        ]);

        Admin::factory()->create([
            'id_apotek' => $apotek1->id_apotek,
            'status' => 'Disetujui'
        ]);

        // apotek belum disetujui
        $apotek2 = Apotek::factory()->create([
            'alamat' => 'Jakarta'
        ]);

        Admin::factory()->create([
            'id_apotek' => $apotek2->id_apotek,
            'status' => 'menunggu'
        ]);

        $response = $this->get('/');

        $response->assertSee($apotek1->nama_apotek);
        $response->assertDontSee($apotek2->nama_apotek);
    }

    /** @test */
    public function filter_lokasi_berjalan()
    {
        $apotek = Apotek::factory()->create([
            'alamat' => 'Bandung'
        ]);

        Admin::factory()->create([
            'id_apotek' => $apotek->id_apotek,
            'status' => 'Disetujui'
        ]);

        $response = $this->get('/?lokasi=Bandung');

        $response->assertSee($apotek->nama_apotek);
    }
}