# LiveChat plugin for Craft CMS

Premium live chat software and help desk software for business.

![Screenshot](resources/screenshots/plugin_logo.png)

## Installation

To install LiveChat, follow these steps:

1. Download & unzip the file and place the `livechat` directory into your `craft/plugins` directory
2.  -OR- do a `git clone https://github.com/sjelfull/Craft-LiveChat.git livechat` directly into your `craft/plugins` folder.  You can then update it with `git pull`
3.  -OR- install with Composer via `composer require sjelfull/Craft-LiveChat`
4. Install plugin in the Craft Control Panel under Settings > Plugins
5. The plugin folder should be named `livechat` for Craft to see it.  GitHub recently started appending `-master` (the branch name) to the name of the folder for zip file downloads.

LiveChat works on Craft 2.4.x and Craft 2.5.x.

## LiveChat Overview

-Insert text here-

## Configuring LiveChat

You can configure the plugin from the Plugin settings screen -OR- set any of the following values before the hook:
`{% set liveChatSettings = {
    licenseNumber: '',
    enabled: false,
    minimizeOnLoad: false,
    openOnLoad: false,
    hideChatWindow: false,
    chatBetweenGroups: true,
    disableSounds: false,
} %}`

## Using LiveChat

Insert the following snippet right before `</head>` in your template.
`{% hook 'livechat' %}`

## LiveChat Roadmap

* Add custom variables for Craft Commerce

## LiveChat Changelog

### 1.0.0 -- 2016.10.17

* Initial release

Brought to you by [Fred Carlsen](http://sjelfull.no)