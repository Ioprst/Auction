<?php
/**
 * Created by PhpStorm.
 * User: reglobbe
 * Date: 12/8/15
 * Time: 7:08 PM
 */

namespace auction\components;

use yii\base\Event;

class Events extends Event{

    const CREATE_DEALER='create_dealer';

    const CREATE_COMPANY='create_company';

    const USER_LOGIN='user_login';

}