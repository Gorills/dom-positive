<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ResetCache extends Command
{
	/**
	 * The name and signature of the console command.
	 *
	 * @var string
	 */
	protected $signature = 'app:resetCache';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Reset Cache';

	/**
	 * Execute the console command.
	 *
	 * @return mixed
	 */
	public function handle()
	{
		$this->call('config:cache');
		$this->call('cache:clear');
		$this->call('view:clear');
		$this->call('route:cache');
	}
}