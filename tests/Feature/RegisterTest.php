<?php

namespace Tests\Feature;

use App\Models\Admin;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class RegisterTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function user_bisa_register_apotek()
    {
        $response = $this->post('/apotek/register', [
            'username' => 'testuser',
            'email' => 'test@mail.com',
            'password' => 'password',
            'password_confirmation' => 'password',
            'nama_apotek' => 'Apotek Test',
        ]);

        // cek redirect
        $response->assertRedirect(route('login'));

        // cek data masuk ke DB
        $this->assertDatabaseHas('admin', [
            'username' => 'testuser',
            'email' => 'test@mail.com',
            'role' => 'admin_apotek',
        ]);

        $this->assertDatabaseHas('apotek', [
            'nama_apotek' => 'Apotek Sehat',
            'email' => 'test@mail.com',
        ]);
    }

    /** @test */
    public function register_gagal_jika_email_duplikat()
    {
        // buat data awal
        Admin::create([
            'username' => 'lama',
            'email' => 'test@mail.com',
            'password' => bcrypt('password'),
        ]);

        $response = $this->post('/register', [
            'username' => 'baru',
            'email' => 'test@mail.com', // duplicate
            'password' => 'password',
            'password_confirmation' => 'password',
            'nama_apotek' => 'Apotek Baru',
        ]);

        $response->assertSessionHasErrors('email');
    }
}
