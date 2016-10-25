# LiveChat plugin for Craft CMS

Easily insert and configure the [LiveChat](http://www.livechatinc.com/?a=PV5ClSpB3Ly&utm_source=PP&utm_medium=link&utm_campaign=default_link) widget in Craft.

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

LiveChat is a simple online chat solution that allows customer service agents to contact customers directly on their website.

## Configuring LiveChat

First [signup with LiveChat](http://www.livechatinc.com/?a=PV5ClSpB3Ly&utm_source=PP&utm_medium=link&utm_campaign=default_link) and get your license number.
You can configure the plugin from the Plugin settings screen -OR- set any of the following values before the hook:
```twig
{% set liveChatSettings = {
    licenseNumber: '',
    enabled: false,
    minimizeOnLoad: false,
    openOnLoad: false,
    hideChatWindow: false,
    chatBetweenGroups: true,
    disableSounds: false,
} %}
```

## Using LiveChat

Insert `{% hook 'livechat' %}` right before `</head>` in your template.

## LiveChat Roadmap

* Add custom variables for Craft Commerce

## LiveChat Changelog

### 1.0.0 -- 2016.10.17

* Initial release

Brought to you by [Fred Carlsen](http://sjelfull.no)
