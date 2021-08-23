<?php

namespace App\Contracts\Services;

use App\Core\Contracts\BaseServiceInterface;

interface RunnerServiceInterface extends BaseServiceInterface
{
    public function getRunnerHistory($runnerId);
}
