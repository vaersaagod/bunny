<?php

namespace vaersaagod\bunny;

use Craft;
use craft\base\Plugin;

class Bunny extends Plugin
{

    /**
     * @var string
     */
    public $schemaVersion = '1.0.0';

    /**
     * @var bool
     */
    public $hasCpSettings = false;

    /**
     * @var bool
     */
    public $hasCpSection = false;

    /** @inheritdoc */
    public function init()
    {
        parent::init();

        Craft::info(
            Craft::t(
                'bunny',
                '{name} plugin loaded',
                ['name' => $this->name]
            ),
            __METHOD__
        );
    }

}
