<p align="center"><a href="https://docspen.ga" target="_blank"><img src="https://i1.wp.com/cdn.jsdelivr.net/npm/docspen-static@1.0.0-common/imgs/propic.png?h=150&quality=80"></a></p>

<p align="center">
<a href="https://travis-ci.org/DocsPen/DocsPen"><img src="https://travis-ci.org/DocsPen/DocsPen.svg" alt="Build Status"></a>
</p>

## DocsPen

**DocsPen** is a hub to publish your own documentation for projects through online, it is a right choice for Professors & Teachers for publishing the content, which provides a pleasant and simple out of the box experience. New users to an instance should find the experience intuitive and only basic word-processing skills should be required to get involved in creating content on DocsPen. The platform should provide advanced power features to those that desire it but they should not interfere with the core simple user experience.

## Development and Testing Guide for DocsPen

Check out [Setup Guide](docs/ServerSetup.md) for more information on how to install _DocsPen_.

## Contribute to DocsPen

Thank you for considering contributing to the DocsPen. To encourage active collaboration, DocsPen strongly encourages pull requests, not just bug reports. [DocsPen's Slack channel](https://docspen-slack.herokuapp.com) is created for developers to discuss DocsPen development concerns. If you have an idea (and not the code for it) you may contact us either with the we@docspen.com email address or submit it to [issues](https://github.com/DocsPen/DocsPen/issues/new) in GitHub.

Check out [CONTRIBUTING Guide](CONTRIBUTING.md) for more information on how to help with _DocsPen_.

## Code of Conduct

Help us keep `DocsPen` open and inclusive. Please read and follow our [Code of Conduct](https://github.com/DocsPen/DocsPen/blob/master/CODE_OF_CONDUCT.md).

## Translations

As part of DocsPen v1.0.0-beta support for translations has been built in. All text strings can be found in the `resources/lang` folder where each language option has its own folder. To add a new language you should copy the `en` folder to an new folder (eg. `fr` for french) then go through and translate all text strings in those files, leaving the keys and file-names intact. If a language string is missing then the `en` translation will be used. To show the language option in the user preferences language drop-down you will need to add your language to the options found at the bottom of the `resources/lang/en/settings.php` file. A system-wide language can also be set in the `.env` file like so: `APP_LANG=en`.

You will also need to add the language to the `locales` array in the `config/app.php` file.

There is a script available which compares translation content to `en` files to see what items are missing or redundant. This can be ran like so from your DocsPen install folder:

```bash
# Syntax
php resources/lang/check.php <lang>

# Examples
php resources/lang/check.php fr
php resources/lang/check.php pt_BR
```

Some strings have colon-prefixed variables in such as `:userName`. Leave these values as they are as they will be replaced at run-time.

## Workflow

See our Workflow in [GitHub Projects](http://bit.ly/dpworkflow).

## The Stack

These are some great open-source projects used to help build **DocsPen**

### Softwares and Backend
* [NGINX](https://nginx.org)
* [MySQL](https://mysql.com)
* [Redis](https://redis.io)
* [PHP](https://php.net)
* [Laravel](https://laravel.com/)

## License
**Apache License Version 2.0** © [DocsPen.](https://docspen.com)
