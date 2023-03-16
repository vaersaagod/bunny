<?php

namespace vaersaagod\bunny;

use Craft;
use craft\base\Plugin;
use craft\services\Plugins;

use vaersaagod\bunny\models\Settings;
use vaersaagod\bunny\web\twig\Extension;

use yii\base\Event;

class Bunny extends Plugin
{

    /**
     * @var string
     */
    public string $schemaVersion = '1.0.0';

    /**
     * @var bool
     */
    public bool $hasCpSettings = false;

    /**
     * @var bool
     */
    public bool $hasCpSection = false;

    /** @inheritdoc */
    public function init()
    {
        parent::init();

        // Add in our Twig extensions
        Craft::$app->getView()->registerTwigExtension(new Extension());

        Craft::info(
            Craft::t(
                'bunny',
                '{name} plugin loaded',
                ['name' => $this->name]
            ),
            __METHOD__
        );
    }

    /**
     * @return Settings
     */
    public function getSettings(): Settings
    {
        return parent::getSettings();
    }

    /**
     * @return Settings
     */
    protected function createSettingsModel(): Settings
    {
        return new Settings();
    }

}
