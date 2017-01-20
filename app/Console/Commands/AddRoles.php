<?php

namespace App\Console\Commands;

use App\Role;
use Illuminate\Console\Command;

class AddRoles extends Command
{
    /**
     * TODO Need to add to install script
     *  php artisan entrust:addRole admin --display_name="Admin" --description="Site administrator"
     *  php artisan entrust:addRole user --display_name="User" --description="Default user"
     *
     *  php artisan entrust:addPermission admin --display_name="Admin Permission" --description="Admin permissions"
     *  php artisan entrust:addPermission user --display_name="User Permission" --description="User permissions"
     *
     *  php artisan entrust:attachPermission admin admin
     *  php artisan entrust:attachPermission user user
     */



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
