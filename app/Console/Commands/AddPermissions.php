<?php

namespace App\Console\Commands;

use App\Permission;
use Illuminate\Console\Command;

class AddPermissions extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'entrust:addPermission {name} {--display_name=} {--description=}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Add new permission';

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
        $permission = new Permission();
        $permission->name         = $this->argument('name');
        $permission->display_name = $this->option('display_name');     // optional
        $permission->description  = $this->option('description');            // optional
        $permission->save();
    }
}
