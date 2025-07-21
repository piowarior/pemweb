<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Jalankan RoleSeeder terlebih dahulu
        $this->call([
            RoleSeeder::class,
            IuranSeeder::class,
            LaporanSeeder::class,
            PembayaranSeeder::class,
        ]);

        // Cek apakah user dengan email ini sudah ada
        $existing = User::where('email', 'superadmin@admin.com')->first();

        if (!$existing) {
            $user = User::create([
                'name' => 'Super Admin',
                'email' => 'superadmin@admin.com',
                'email_verified_at' => now(),
                'password' => bcrypt('password'), // ganti sesuai kebutuhan
            ]);

            $user->assignRole('super_admin');
        }
    }
}
