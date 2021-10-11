<?php

namespace vaersaagod\bunny\models;

use craft\base\Model;

class Settings extends Model
{

    /** @var bool */
    public $pullingEnabled = true;

    /** @var array[] */
    public $pullZones = [];

    /** @var string */
    public $defaultPullZone;

}
