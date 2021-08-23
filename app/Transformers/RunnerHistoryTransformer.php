<?php

namespace App\Transformers;

use App\Core\Contracts\BaseTransformerInterface;

class RunnerHistoryTransformer implements BaseTransformerInterface
{
    private $runner;

    public function __construct($responseData)
    {
        $this->runner = $responseData;
    }

    public function format()
    {
        $raceArray = [];
        $generalArray = [];
        $lastRunArray = [];

        $x = 0;
        foreach ($this->runner['raceData'] as $race) {
            $raceArray[$x]['name'] = $race->race->name;
            $raceArray[$x]['meeting'] = $race->race->meeting->name;
            $x++;
        }

        $y = 0;
        foreach ($this->runner['runnerData']->runnerData as $runner) {
            $generalArray[$y]['place'] = $runner->place;
            $generalArray[$y]['marks'] = $runner->marks;
            $y++;
        }

        $z = 0;
        foreach ($this->runner['runnerData']->lastRun as $runner) {
            $lastRunArray[$z]['last_run_date'] = $runner->last_run_date;
            $z++;
        }

        return [
            'runner' => [
                'name' => $this->runner['runnerData']->name,
                'general' => $generalArray,
                'last_runs' => $lastRunArray
            ],
            'race' => $raceArray
        ];
    }
}
