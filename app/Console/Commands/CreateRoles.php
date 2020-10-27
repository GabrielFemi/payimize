<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Laravel\Jetstream\Role;
use Spatie\Permission\Models\Permission;

class CreateRoles extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:roles';

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
    public function handle()
    {
        $role = \Spatie\Permission\Models\Role::create(['name' => 'super_root']);
        $permission = Permission::create(['name' => 'can_create_institution_account']);
        $role->givePermissionTo($permission);
        return 0;
    }
}
