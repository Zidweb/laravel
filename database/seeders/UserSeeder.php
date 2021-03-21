<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run(): void
	{
		$count = $this->command->ask('How many users you wish to seed?', '20');
		User::factory()->count((int) $count)->create();
		User::factory()->create([
			'name' => 'Admin',
			'email' => 'admin@laravel.dev',
		]);
	}
}
