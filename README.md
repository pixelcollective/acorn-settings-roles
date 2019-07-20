# Acorn Roles

Provides Acorn projects with configuration options for cached WordPress role and capability management.

## Requirements

[Sage](https://github.com/roots/sage) >= 10.0

[PHP](https://secure.php.net/manual/en/install.php) >= 7.3

[Composer](https://getcomposer.org)

## Installation

Install via composer:

```bash
composer require tiny-pixel/acorn-settings-roles
```

After installation run the following command to publish the starter configuration file to your application:

```bash
wp acorn vendor:publish
```

## Regenerating cache

Roles are cached with no expiration. If you make changes to your configuration you will need to regenerate the cache in order for them to take effect.

Run the following command to regenerate the cache:

```bash
wp acorn optimize:clear
```

Happy permissions'ing!
