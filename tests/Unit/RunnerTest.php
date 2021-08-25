<?php

namespace Tests\Unit;

use App\Models\Runner;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use App\Services\RunnerService;

class RunnerTest extends TestCase
{
    use DatabaseTransactions;

    public function setUp(): void
    {
        parent::setUp();

    }

    /**
     * @throws \Illuminate\Contracts\Container\BindingResolutionException
     */
    public function test_runnerHistory()
    {
        $runner = Runner::factory()->count(1)->create();
        $runnerService = $this->app->make(RunnerService::class);
        $exist = $runnerService->getRunnerHistory($runner[0]->id);
        $this->assertTrue(true == $exist);
    }
}
