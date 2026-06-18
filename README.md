# Silverstripe Elemental Embedded Code

A block to embed code like iFrames or Javascript on a page

[![CI](https://github.com/dynamic/silverstripe-elemental-embedded-code/actions/workflows/ci.yml/badge.svg)](https://github.com/dynamic/silverstripe-elemental-embedded-code/actions/workflows/ci.yml) [![Sponsors](https://img.shields.io/badge/GitHub-Sponsors-ff69b4?logo=github)](https://github.com/sponsors/dynamic)

[![Latest Stable Version](https://poser.pugx.org/dynamic/silverstripe-elemental-embedded-code/v/stable)](https://packagist.org/packages/dynamic/silverstripe-elemental-embedded-code)
[![Total Downloads](https://poser.pugx.org/dynamic/silverstripe-elemental-embedded-code/downloads)](https://packagist.org/packages/dynamic/silverstripe-elemental-embedded-code)
[![Latest Unstable Version](https://poser.pugx.org/dynamic/silverstripe-elemental-embedded-code/v/unstable)](https://packagist.org/packages/dynamic/silverstripe-elemental-embedded-code)
[![License](https://poser.pugx.org/dynamic/silverstripe-elemental-embedded-code/license)](https://packagist.org/packages/dynamic/silverstripe-elemental-embedded-code)

## Requirements

* dnadesign/silverstripe-elemental: ^6
* silverstripe/framework: ^6
* silverstripe/vendor-plugin: ^3

## Installation

`composer require dynamic/silverstripe-elemental-embedded-code`

## Example usage

Adds a block to display embeddable code on a page. Useful for iFrames or Javascript embeds, like MailChimp sign up forms.

## Screen Shots

#### Front End sample of an Embed Code Element
![Front End sample of an Embed Code Element](./readme-images/embed-block-sample.jpg)

#### CMS - Embed Code Element Main Tab
![CMS - Embed Code Element Main Tab](./readme-images/embed-block-cms.jpg)

## Getting more elements

See [Elemental modules by Dynamic](https://github.com/orgs/dynamic/repositories?q=elemental&type=all&language=&sort=)

## Configuration

To hide the `Content` field (leaving only the embed code field), set `hide_content_field`:

```yml
---
After:
  - '#silverstripeelemental-embedded-codeconfig'
---
Dynamic\Elements\Embedded\Elements\ElementEmbeddedCode:
  hide_content_field: true
```

See [SilverStripe Elemental Configuration](https://github.com/dnadesign/silverstripe-elemental#configuration)

## Translations

The translations for this project are managed via [Transifex](https://www.transifex.com/dynamicagency/silverstripe-elemental-embedded-code/)
and are updated automatically during the release process. To contribute, please head to the link above and get
translating!

## Maintainers

 *  [Dynamic](https://www.dynamicagency.com) (<dev@dynamicagency.com>)

## Bugtracker

Bugs are tracked in the issues section of this repository. Before submitting an issue please read over existing issues to ensure yours is unique.

If the issue does look like a new bug:

 - Create a new issue
 - Describe the steps required to reproduce your issue, and the expected outcome. Unit tests, screenshots and screencasts can help here.
 - Describe your environment as detailed as possible: SilverStripe version, Browser, PHP version, Operating System, any installed SilverStripe modules.

Please report security issues to the module maintainers directly. Please don't file security issues in the bugtracker.

## Development and contribution

If you would like to make contributions to the module please ensure you raise a pull request and discuss with the module maintainers.

## License

See [License](LICENSE.md)
