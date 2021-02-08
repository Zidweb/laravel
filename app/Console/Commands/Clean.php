<?php

declare(strict_types=1);

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class Clean extends Command
{
	private array $files = [
		'nova.zip',
		'.php_cs.cache',
		'_ide_helper.php',
		'.phpstorm.meta.php',
		'.phpunit.result.cache',
	];

	/**
	 * The name and signature of the console command.
	 *
	 * @var string
	 */
	protected $signature = 'clean';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Delete temporary files';

	/**
	 * Create a new command instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * Execute the console command.
	 *
	 * @return int
	 */
	public function handle(): int
	{
		foreach ($this->files as $file) {
			File::delete($file);
		}
		return 0;
	}
}
