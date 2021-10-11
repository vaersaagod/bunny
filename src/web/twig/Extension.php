<?php

namespace vaersaagod\bunny\web\twig;

use Craft;

use Twig\Extension\AbstractExtension;
use Twig\Extension\GlobalsInterface;
use Twig\TwigFunction;

use vaersaagod\bunny\helpers\BunnyHelper;

class Extension extends AbstractExtension
{

    /**
     * @return TwigFunction[]
     */
    public function getFunctions()
    {
        return [
            new TwigFunction('bunnyPullUrl', [BunnyHelper::class, 'bunnyPullUrl']),
        ];
    }

}
