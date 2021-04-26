<?php
/**
 * EventsService Class Doc Comment
 *
 * PHP version 7.3
 *
 * @category  Events
 * @package   Events
 * @author    Pankaj <pkjnec@gmail.com>
 * @copyright 2021 Test
 * @license   http://opensource.org/licenses/gpl-license.php GNU Public License
 * @version   GIT: <git_id>
 * @link      https://www.test.com/
 */
namespace App\Services;

use App\Model\Account;
use App\Models\Event;
use Basic\Rules\Cookies;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Lang;

/**
 * This class hold login service
 *
 * @category Events
 * @package  Events
 * @author   Pankaj <pkjnec@gmail.com>
 * @license  http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link     https://www.test.com/
 */
class EventsService
{

    /**
     * Fetch Events
     *
     * @return array
     */
    public function search() : array
    {
        $events = Event::fetchLiveEvent();
        if(!empty($events)){
            return $events->toArray();
        }else {
            return array();
        }
    }



}


?>