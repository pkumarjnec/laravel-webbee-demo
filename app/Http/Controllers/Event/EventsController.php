<?php

namespace App\Http\Controllers\Event;

use App\Models\Event;
use App\Services\EventsService;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Date;

class EventsController extends BaseController
{
    /**
     * Assign event service object
     *
     * @var object
     **/
    protected $service;
    /**
     * Create a new login service instance
     *
     * @param EventsService object $eventService login service object
     *
     * @return void
     **/
    public function __construct(EventsService $eventService)
    {
        $this->service = $eventService;
    }

    public function getEventsWithWorkshops() {
        $events = $this->service->search();
    }

    public function getFutureEventsWithWorkshops() {
        throw new \Exception('not implemented');
    }
}
