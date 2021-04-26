<?php

namespace App\Http\Controllers;

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
     * Create a new event service instance
     *
     * @param EventsService object $eventService login service object
     *
     * @return void
     **/
    public function __construct(EventsService $eventService)
    {
        $this->service = $eventService;
    }

    /**
     * Get Event List with Workshop
     *
     * @return array
     **/
    public function getEventsWithWorkshops() {
        $events = $this->service->search();
        return $events;
    }

    public function getFutureEventsWithWorkshops() {
        throw new \Exception('not implemented');
    }
}
