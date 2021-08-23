<?php

namespace App\Contracts\Repositories;

use App\Core\Contracts\BaseRepositoryInterface;

interface RunnerRepositoryInterface extends BaseRepositoryInterface
{
    public function getRunnerHistory($runnerId);
}
