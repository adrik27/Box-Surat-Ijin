<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Divisi;
use App\Models\Role;
use App\Models\Status;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // user
        User::create([
            'Role_id' => 1,
            'Status_id' => 2,
            'nama' => 'Admin',
            'alamat' => 'Admin',
            'telp' => '0892838112',
            'email' => 'admin@gmail.com',
            'password' => 'admin123',
        ]);

        // Status
        Status::create([
            'nama'  => 'Kirim'
        ]);
        Status::create([
            'nama'  => 'Acc'
        ]);
        Status::create([
            'nama'  => 'Tolat'
        ]);

        // Divisi
        Divisi::create([
            'nama' => 'KABAG'
        ]);
        Divisi::create([
            'nama' => 'HRD'
        ]);
        Divisi::create([
            'nama' => 'Pegawai'
        ]);

        // Role
        Role::create([
            'nama' => 'Admin'
        ]);
        Role::create([
            'nama' => 'KABAG'
        ]);
        Role::create([
            'nama' => 'HRD'
        ]);
        Role::create([
            'nama' => 'Pegawai'
        ]);
    }
}
