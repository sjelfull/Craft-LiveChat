<?php
/**
 * LiveChat plugin for Craft CMS
 *
 * Premium live chat software and help desk software for business.
 *
 * @author    Fred Carlsen
 * @copyright Copyright (c) 2016 Fred Carlsen
 * @link      http://sjelfull.no
 * @package   LiveChat
 * @since     1.0.0
 */

namespace Craft;

class LiveChatPlugin extends BasePlugin
{
    /**
     * @return mixed
     */
    public function init ()
    {
        $defaultSettings = array(
            // Maximizes the chat window (when using the embedded chat window) or opens the chat window (when using the pop-up window).
            'openOnLoad' => false,

            //Hide the chat window (not supported with the pop-up chat window).
            'hideWindow' => false,

            'disableSounds' => false,
        );

        craft()->templates->hook('livechat', function (&$context) {
            if ( craft()->request->isSiteRequest() ) {
                $locale   = craft()->language;
                $settings = isset($context['liveChatSettings']) ? $context['liveChatSettings'] : array();

                // Render tracking code
                $trackingCode = craft()->liveChat->getTrackingCode($settings);

                return $trackingCode;
            }
        });
    }


    /**
     * @return mixed
     */
    public function getName ()
    {
        return Craft::t('LiveChat');
    }

    /**
     * @return mixed
     */
    public function getDescription ()
    {
        return Craft::t('Premium live chat software and help desk software for business.');
    }

    /**
     * @return string
     */
    public function getDocumentationUrl ()
    {
        return 'https://github.com/sjelfull/Craft-LiveChat/blob/master/README.md';
    }

    /**
     * @return string
     */
    public function getReleaseFeedUrl ()
    {
        return 'https://raw.githubusercontent.com/sjelfull/Craft-LiveChat/master/releases.json';
    }

    /**
     * @return string
     */
    public function getVersion ()
    {
        return '1.0.0';
    }

    /**
     * @return string
     */
    public function getSchemaVersion ()
    {
        return '1.0.0';
    }

    /**
     * @return string
     */
    public function getDeveloper ()
    {
        return 'Fred Carlsen';
    }

    /**
     * @return string
     */
    public function getDeveloperUrl ()
    {
        return 'http://sjelfull.no';
    }

    /**
     * @return array
     */
    protected function defineSettings ()
    {
        return array(
            'enabled'           => array( AttributeType::Bool, 'label' => 'Enabled', 'default' => true ),
            'minimizeOnLoad'    => array( AttributeType::Bool, 'label' => 'Minimize on load', 'default' => true ),
            'hideChatWindow'    => array( AttributeType::Bool, 'label' => 'Hide chat window', 'default' => false ),
            'openOnLoad'        => array( AttributeType::Bool, 'label' => 'Open on load', 'default' => false ),
            'chatBetweenGroups' => array( AttributeType::Bool, 'label' => 'Chat between groups', 'default' => true ),
            'disableSounds'     => array( AttributeType::Bool, 'label' => 'Disable sounds', 'default' => false ),
            'licenseNumber'     => array( AttributeType::String, 'label' => 'License number', 'default' => '' ),
        );
    }

    /**
     * @return mixed
     */
    public function getSettingsHtml ()
    {
        return craft()->templates->render('livechat/LiveChat_Settings', array(
            'settings' => $this->getSettings()
        ));
    }

}
