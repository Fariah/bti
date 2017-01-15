<?php

namespace App\Console\Commands;

use App\Permission;
use App\Role;
use Illuminate\Console\Command;

class AttachPermissions extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'entrust:attachPermission {permission : Permission} {role : Role}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Attach permission to the role';

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
        $permission_name = $this->argument('permission');
        $role_name = $this->argument('role');
        $permission = Permission::where('name', $permission_name)->first();
        $role = Role::where('name', $role_name)->first();
        $role->attachPermission($permission);
    }
}
