<?php

namespace App\Http\Controllers\V1;

use App\Core\BaseController;
use App\Services\RunnerService;
use App\Transformers\RunnerHistoryTransformer;

class RunnerController extends BaseController
{
    /**
     * @var RunnerService
     */
    private $runner;

    /**
     * @param RunnerService $runner
     */
    public function __construct(RunnerService $runner)
    {
        $this->runner = $runner;
    }

    /**
     * @param $runnerId
     * @return \Illuminate\Http\JsonResponse
     */
    public function getRunnerHistory($runnerId)
    {
        $history = $this->runner->getRunnerHistory($runnerId);

        if (!$history) {
            return $this->errorResponse('No runner found');
        }
        return $this->successResponse(
            'Runner history',
            200,
            (new RunnerHistoryTransformer($history))->format()
        );

    }
}
