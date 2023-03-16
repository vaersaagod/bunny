# Bunny plugin for Craft CMS 4.x

## Requirements

This plugin requires Craft CMS 4.0.0 or later.

## Installation

To install the plugin, follow these instructions.

1. Open your terminal and go to your Craft project:

        cd /path/to/project

2. Then tell Composer to load the plugin:

        composer require vaersaagod/bunny

3. In the Control Panel, go to Settings → Plugins and click the “Install” button for Bunny.

## Configuration

```
<?php

return [
    'pullingEnabled' => true,
    'pullZones' => [
        'default' => [
            'hostname' => 'https://snohetta.b-cdn.net',
            'enabled' => true,
        ],
    ],
    'defaultPullZone' => 'default',
];
```

## Usage

```
{{ bunnyPullUrl('/lorem/ipsum') }}
{{ bunnyPullUrl('/lorem/ipsum', 'anotherZone') }}
```

## Price, license and support

The plugin is released under the MIT license. It's made for Værsågod and friends, and no support
is given. Submitted issues are resolved if it scratches an itch.

## Changelog

See [CHANGELOG.MD](https://raw.githubusercontent.com/vaersaagod/bunny/master/CHANGELOG.md).


Brought to you by [Værsågod](https://vaersaagod.no)
