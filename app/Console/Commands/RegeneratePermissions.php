<?php

/**
 * Copyright (c) 2017-present, DocsPen.
 * All rights reserved.
 *
 * This source code is licensed under the license found in the
 * LICENSE file in the root directory of this source tree.
 */

namespace DocsPen\Console\Commands;

use Illuminate\Console\Command;
use DocsPen\Services\PermissionService;

class RegeneratePermissions extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'docspen:permissions {--database= : The database connection to use.}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Regenerate all system permissions';

    /**
     * The service to handle the permission system.
     *
     * @var PermissionService
     */
    protected $permissionService;

    /**
     * Create a new command instance.
     *
     * @param PermissionService $permissionService
     */
    public function __construct(PermissionService $permissionService)
    {
        $this->permissionService = $permissionService;
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $connection = \DB::getDefaultConnection();
        if ($this->option('database') !== null) {
            \DB::setDefaultConnection($this->option('database'));
            $this->permissionService->setConnection(\DB::connection($this->option('database')));
        }

        $this->permissionService->buildJointPermissions();

        \DB::setDefaultConnection($connection);
        $this->comment('Permissions regenerated');
    }
}
