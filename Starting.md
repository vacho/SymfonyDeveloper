# Starting guide

## Install
```bash
curl -1sLf 'https://dl.cloudsmith.io/public/symfony/stable/setup.deb.sh' | sudo -E bash
sudo apt install symfony-cli

# Validate if the environment is ready to use symfony.
symfony check:req
```

## Manage the first app
```bash
# Creates a new app
symfony new app_name

# Creates a new app with a lot of dependencies to develop a webapp
symfony new app_name --version="7.1.*" --webapp

# Start to run the app.
symfony serve
symfony server:stop

# Install twig
composer require symfony/twig-bundle
# Install maker code
composer require --dev symfony/maker-bundle
# it is the same
composer require maker --dev 
```

## Maker console
```bash
# Two ways to acces the console commands.
php bin/console make:controller
bin/console help make:controller

# Create a controller.
 bin/console make:controller
```


## References
- How to install: https://symfony.com/download
- How to use templates: https://symfony.com/doc/current/templates.html#installation
