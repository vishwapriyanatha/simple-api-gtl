<?php

namespace App\Services;

use App\Contracts\Services\RunnerServiceInterface;
use App\Core\BaseAppService;
use App\Repositories\RunnerRepository;

class RunnerService extends BaseAppService implements RunnerServiceInterface
{
    /**
     * @var RunnerRepository
     */
    private $runner;

    /**
     * @param RunnerRepository $runner
     */
    public function __construct(RunnerRepository $runner)
    {
        $this->runner = $runner;
    }

    /**
     * @param $runnerId
     */
    public function getRunnerHistory($runnerId)
    {
        return $this->runner->getRunnerHistory($runnerId);
    }
}
