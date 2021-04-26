<?php
/**
 * EventsService Class Doc Comment
 *
 * PHP version 7.3
 *
 * @category  Menu
 * @package   Menu
 * @author    Pankaj <pkjnec@gmail.com>
 * @copyright 2021 Test
 * @license   http://opensource.org/licenses/gpl-license.php GNU Public License
 * @version   GIT: <git_id>
 * @link      https://www.test.com/
 */
namespace App\Services;

use App\Model\Account;
use App\Models\Event;
use App\Models\MenuItem;
use Basic\Rules\Cookies;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Lang;

/**
 * This class hold login service
 *
 * @category Menu
 * @package  Menu
 * @author   Pankaj <pkjnec@gmail.com>
 * @license  http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link     https://www.test.com/
 */
class MenuService
{

    /**
     * Fetch Events
     *
     * @return array
     */
    public function menuList() : array
    {
        $events = MenuItem::search();
        if(!empty($events)){
            return $events->toArray();
        }else {
            return array();
        }
    }



}


?>