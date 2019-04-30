# Config Split Platform.sh Export

Drush 9 alter hook to use production config during the config:export command on platform.sh environment.
only works with [Psh-toolbelt](https://github.com/wearewondrous/psh-toolbelt) setup!

## Requirements

This Drush Command needs to live in `drush/Commands/contrib` in order to be discovered by composer autoload.
So make sure the `installer-paths` are correctly set in your root `composer.json`-file:

```json
{
    "installer-paths": {
        "drush/Commands/contrib/{$name}": [
            "type:drupal-drush"
        ]
    }
}
```

## Installation

No need to directly install this module. Follow install instructions here:
[https://github.com/wearewondrous/psh-toolbelt](https://github.com/wearewondrous/psh-toolbelt)
