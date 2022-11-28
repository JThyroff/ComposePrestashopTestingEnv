# Module programming and debugging

This tutorial provides instructions and tips how to get started with Prestashop module programming and debugging.

## Getting started

Install Prestashop locally. You can follow this [tutorial](../compose/README.md).

In the modules -> module manager tab in the backoffice (localhost/admin123) you can manage installed tabs. This is where you need to upload your module.zip in order to install it.

Have a look for the [HelloWorld](helloworld.zip) module and try to install it.

For more example modules check out this [repository](https://github.com/PrestaShop/example-modules).

## Documenentation, Tips and Debugging

- Checkout the official getting started Prestashop tutorial [here](https://devdocs.prestashop-project.org/8/modules/creation/).

- Checkout the symfony debug bar at the very bottom of your store. It provides useful information.

- Jetbrains [PHPStorm](https://www.jetbrains.com/phpstorm/) works well for me as an IDE. Download [Prestashop](https://www.prestashop.com/en/versions) and open the root folder of the project. You can easily navigate the source code by following classes with a ```strg + click```. In the modules folder is where you have to put the code for your module.

- In case of ownership and permission errors connect to the commandline of the prestashop container in Portainer and use ```chmod``` and ```chown``` to fix the problem.

- If a ```ClassNotFoundException``` appears, check the namespaces in your class file and in ```composer.json``` and rerun ```composer install``` in the modules directory to install dependencies and generate the ```autoload.php``` file.

## Useful Links

- **Hooklist:** <https://devdocs.prestashop-project.org/1.7/modules/concepts/hooks/list-of-hooks/>

- **Prestashop Developer Docs:** <https://devdocs.prestashop-project.org/>

- **Prestashop UI Kit:** <https://build.prestashop-project.org/prestashop-ui-kit/>

- **Example modules:** <https://github.com/PrestaShop/example-modules>
