<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // gudang
        $gudang = factory(User::class)->create([
            'name'     => 'Nanda',
            'email'    => 'Nanda@persediaan.com',
            'email_verified_at' => now(),
            'password' => bcrypt('persediaan'),
            'phone'    => '89672650972',
        ]);

        $gudang->assignRole('gudang');

        $this->command->info('>_ Here is your admin gudang details to login:');
        $this->command->warn($gudang->email);
        $this->command->warn('Password is "persediaan"');

        // pimpinan
        $pimpinan = factory(User::class)->create([
            'name'     => 'Julianti',
            'email'    => 'Julianti@persediaan.com',
            'email_verified_at' => now(),
            'password' => bcrypt('persediaan'),
            'phone'    => '89672650972',
        ]);

        $pimpinan->assignRole('pimpinan');

        $this->command->info('>_ Here is your pimpinan details to login:');
        $this->command->warn($pimpinan->email);
        $this->command->warn('Password is "persediaan"');

        // customer
        $customer = factory(User::class)->create([
            'name'     => 'Sri',
            'email'    => 'Sri@persediaan.com',
            'email_verified_at' => now(),
            'password' => bcrypt('persediaan'),
            'phone'    => '89672650972',
        ]);

        $customer->assignRole('customer');

        $this->command->info('>_ Here is your customer details to login:');
        $this->command->warn($customer->email);
        $this->command->warn('Password is "persediaan"');

        // bersihkan cache
        $this->command->call('cache:clear');
    }
}