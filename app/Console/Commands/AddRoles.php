<?php

namespace App\Console\Commands;

use App\Role;
use Illuminate\Console\Command;

class AddRoles extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'entrust:addRole {name} {--display_name=} {--description=}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create new role';

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
     * @return mixed
     */
    public function handle()
    {
        $role = new Role();
        $role->name         = $this->argument('name');
        $role->display_name = $this->option('display_name');     // optional
        $role->description  = $this->option('description');      // optional
        $role->save();
    }
}
