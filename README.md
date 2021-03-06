Apigee Edge Drupal module
---

The Apigee Edge module enables you to integrate Drupal 8 with Apigee Edge.

**Note**: The Apigee Edge module requires Drupal 8.6.x or higher and PHP 7.1 or higher.

### Installing

> The Apigee Edge module may require Drupal core or contributed module
patches to be able to work properly. These patches can be applied
automatically when Apigee Edge module gets installed but for that your
Drupal installation must fulfill the following requirements:
> 1. [cweagans/composer-patches](https://packagist.org/packages/cweagans/composer-patches) >= 1.6.5 has to be installed.
> 1. ["Allowing patches to be applied from dependencies
"](https://github.com/cweagans/composer-patches/tree/1.6.5#allowing-patches-to-be-applied-from-dependencies)
has to be enabled Drupal's composer.json.
> 1. Proper [patch level](https://github.com/cweagans/composer-patches/pull/101#issue-104810467)
for drupal/core has to be set in Drupal's composer.json.
>
> You can find the currently required patches in the Apigee Edge module's [composer.json](https://github.com/apigee/apigee-edge-drupal/blob/8.x-1.x/composer.json)
and in the Apigee Edge PHP API Client's [composer.json](https://github.com/apigee/apigee-client-php/blob/2.x/composer.json).
>
> **If you do not have all required patches applied in your Drupal
installation you may experience some problems with the Apigee Edge
module.**

1. Install the Apigee Edge module using [Composer](https://getcomposer.org/).
  Composer will download the Apigee Edge module and all its dependencies.
  **Note**: Composer must be executed at the root of your Drupal installation.
  For example:
   ```
   cd /path/to/drupal/root
   composer require drupal/apigee_edge
   ```

    For more information about installing contributed modules using composer, see [the official documentation](https://www.drupal.org/docs/develop/using-composer/using-composer-to-manage-drupal-site-dependencies#managing-contributed)
1. Click **Extend** in the Drupal administration menu.
1. Select the **Apigee Edge** module.
1. Click **Install**.

**Note**: If you do not configure the connection between Drupal and Apigee Edge, you will not be able to register developers on the site and may cause other issues with Drupal core functions. If you do not plan to configure the connection between Drupal and Apigee Edge, you should uninstall the Apigee Edge module.

### Requirements

* Drupal 8's minimum requirement is phpdocumentor/reflection-docblock:2.0.4 but at least 3.0 is required by this module. If you get the error  "Your requirements could not be resolved to an installable set of packages" it may be because you are running reflection-docblock version 2. You can update `phpdocumentor/reflection-docblock` with the following command: `composer update phpdocumentor/reflection-docblock --with-dependencies`.
* **Please check [composer.json](https://github.com/apigee/apigee-edge-drupal/blob/8.x-1.x/composer.json) for required patches.** Patches prefixed with "(For testing)" are only required for running tests. Those are not necessary for using this module. Patches can be applied with the [cweagans/composer-patches](https://packagist.org/packages/cweagans/composer-patches) the plugin automatically or manually.
* (For developers) The locked commit from `behat/mink` library is required otherwise tests may fail. This caused by a Drupal core [bug](https://www.drupal.org/project/drupal/issues/2956279). Please see the related pull request for behat/mink [here](https://github.com/minkphp/Mink/pull/760).

### Troubleshooting

* **[File entity](https://www.drupal.org/project/file_entity) module.** If you installed the File entity module then you are going to need the latest patch from [this issue](https://www.drupal.org/project/file_entity/issues/2977747) otherwise you can run into some problems.
* **[Key](https://www.drupal.org/project/key) module.** If you are using OAuth then you are going to need the latest patch from [this issue](https://www.drupal.org/project/key/issues/2982124) otherwise you can run into some problems.

### Development

Development is happening in our [GitHub repository](https://github.com/apigee/apigee-edge-drupal). The drupal.org issue queue is disabled, we use the [Github issue queue](https://github.com/apigee/apigee-edge-drupal/issues) to coordinate development.

### Disclaimer

This is not an officially supported Google product.
