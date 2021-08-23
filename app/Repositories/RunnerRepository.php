<?php

namespace App\Repositories;

use App\Contracts\Repositories\RunnerRepositoryInterface;
use App\Core\BaseRepository;
use App\Models\Runner;
use App\Models\RaceRunner;

class RunnerRepository extends BaseRepository implements RunnerRepositoryInterface
{
    /**
     * @var RaceRunner
     */
    private $raceRunner;
    /**
     * @var Runner
     */
    private $runner;

    /**
     * @param RaceRunner $raceRunner
     * @param Runner $runner
     */
    public function __construct(
        RaceRunner $raceRunner,
        Runner     $runner
    )
    {
        $this->raceRunner = $raceRunner;
        $this->runner = $runner;
    }

    /**
     * @param $runnerId
     * @return array|false
     */
    public function getRunnerHistory($runnerId)
    {
        $runnerData = $this->runner
            ->with(['runnerData', 'lastRun'])
            ->where('id', $runnerId)
            ->first();

        if (!$runnerData) {
            return false;
        }

        $return['runnerData'] = $runnerData;
        $return['raceData'] = $this->raceRunner
            ->where('runner_id', $runnerId)
            ->with(['race', 'race.meeting'])
            ->get();

        return $return;
    }
}
