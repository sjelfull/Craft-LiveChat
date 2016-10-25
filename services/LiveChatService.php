<?php
/**
 * LiveChat plugin for Craft CMS
 *
 * LiveChat Service
 *
 * @author    Fred Carlsen
 * @copyright Copyright (c) 2016 Fred Carlsen
 * @link      http://sjelfull.no
 * @package   LiveChat
 * @since     1.0.0
 */

namespace Craft;

class LiveChatService extends BaseApplicationComponent
{
    protected $settings;

    public function init ()
    {
        parent::init();

        $plugin         = craft()->plugins->getPlugin('livechat');
        $this->settings = $plugin->getSettings();
    }

    /**
     */
    public function getTrackingCode ($settings = array())
    {
        $licenseNumber = $this->settings['licenseNumber'];
        $oldPath       = craft()->templates->getTemplatesPath();

        $mergedSettings = array_merge($this->settings->getAttributes(null, $flatten = true), $settings);

        //$oldMode  = craft()->templates->getTemplateMode();
        //craft()->templates->setTemplateMode(TemplateMode::CP);

        craft()->templates->setTemplatesPath(CRAFT_PLUGINS_PATH . 'livechat/templates/');

        $trackingCode = craft()->templates->render('LiveChat_TrackingCode', $mergedSettings);

        //craft()->templates->setTemplateMode($oldMode);
        craft()->templates->setTemplatesPath($oldPath);

        return $trackingCode;
    }

}