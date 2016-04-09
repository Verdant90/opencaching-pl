<?php

namespace lib\Controllers;

use lib\Objects\GeoCache\GeoCacheLog;

class EmailController
{

    /**
     * Sending email to log owner that log was deleted.
     *
     * @param GeoCacheLog $log
     * @param array $request
     */
    public static function sendRemoveLogNotification(GeoCacheLog $log, $request, $loggedUser)
    {
        $emailContent = read_file(__DIR__ . '/../../tpl/stdstyle/email/removed_log.email');
        $message = isset($request['logowner_message']) ? $request['logowner_message'] : '';
        if ($message != '') { //message to logowner
            $message = tr('removed_message_title') . ":\n---" . "\n" . $message . "\n" . "---";
        }
        $emailContent = mb_ereg_replace('{log_owner}', $log->getUser()->getUserName(), $emailContent);
        $emailContent = mb_ereg_replace('{waypointId}', $log->getGeoCache()->getWaypointId(), $emailContent);
        $emailContent = mb_ereg_replace('{serviceUrl}', \lib\Objects\ApplicationContainer::Instance()->getOcConfig()->getSiteName(), $emailContent);
        $emailContent = mb_ereg_replace('{logRemover}', $loggedUser->getUserName(), $emailContent);
        $emailContent = mb_ereg_replace('{logRemoverId}', $loggedUser->getUserId(), $emailContent);
        $emailContent = mb_ereg_replace('{cache_name}', $log->getGeoCache()->getCacheName(), $emailContent);
        $emailContent = mb_ereg_replace('{log_entry}', $log->getText(), $emailContent);
        $emailContent = mb_ereg_replace('{comment}', $message, $emailContent);
        $emailContent = mb_ereg_replace('{removedLog_01}', tr('removedLog_01'), $emailContent);
        $emailContent = mb_ereg_replace('{removedLog_02}', tr('removedLog_02'), $emailContent);
        $emailContent = mb_ereg_replace('{removedLog_03}', tr('removedLog_03'), $emailContent);
        $emailContent = mb_ereg_replace('{octeamEmailsSignature}', \lib\Objects\ApplicationContainer::Instance()->getOcConfig()->getOcteamEmailsSignature(), $emailContent);
        $emailContent = mb_ereg_replace('{removedLog_04}', tr('removedLog_04'), $emailContent);
        $emailaddr = \lib\Objects\ApplicationContainer::Instance()->getOcConfig()->getNoreplyEmailAddress();

        $emailheaders = 'MIME-Version: 1.0' . "\r\n";
        $emailheaders .= 'Content-Type: text/html; charset=utf-8' . "\r\n";
        $emailheaders .= 'From: "' . \lib\Objects\ApplicationContainer::Instance()->getOcConfig()->getSiteName() . '" <' . $emailaddr . '>';

        mb_send_mail($log->getUser()->getEmail(), tr('removed_log_title'), $emailContent, $emailheaders);
    }

    /**
     * @param $username
     * @param $email
     * @param $country_name
     * @param $code
     * @param $uid
     */
    public static function sendActivationLink($username, $email, $country_name, $code, $uid)
    {
        $emailContent = read_file(__DIR__ . '/../../tpl/stdstyle/email/user_activation.email');
        $emailContent = mb_ereg_replace('{server}', \lib\Objects\ApplicationContainer::Instance()->getOcConfig()->getAbsolute_server_URI(), $emailContent);
        $emailContent = mb_ereg_replace('{registermail01}', tr('registermail01'), $emailContent);
        $emailContent = mb_ereg_replace('{registermail02}', tr('registermail02'), $emailContent);
        $emailContent = mb_ereg_replace('{registermail10}', tr('registermail10'), $emailContent);
        $emailContent = mb_ereg_replace('{registermail11}', tr('registermail11'), $emailContent);
        $emailContent = mb_ereg_replace('{registermail12}', tr('registermail12'), $emailContent);
        $emailContent = mb_ereg_replace('{registermail13}', tr('registermail13'), $emailContent);
        $emailContent = mb_ereg_replace('{registermail16}', tr('registermail16'), $emailContent);
        $emailContent = mb_ereg_replace('{registermail17}', tr('registermail17'), $emailContent);
        $emailContent = mb_ereg_replace('{user}', $username, $emailContent);
        $emailContent = mb_ereg_replace('{useruid}', $uid, $emailContent);
        $emailContent = mb_ereg_replace('{email}', $email, $emailContent);
        $emailContent = mb_ereg_replace('{country}', $country_name, $emailContent);
        $emailContent = mb_ereg_replace('{code}', $code, $emailContent);
        $emailContent = mb_ereg_replace('{octeamEmailsSignature}', \lib\Objects\ApplicationContainer::Instance()->getOcConfig()->getOcteamEmailsSignature(), $emailContent);

        $emailAddr = \lib\Objects\ApplicationContainer::Instance()->getOcConfig()->getNoreplyEmailAddress();

        $emailHeaders = 'MIME-Version: 1.0' . "\r\n";
        $emailHeaders .= 'Content-Type: text/html; charset=utf-8' . "\r\n";
        $emailHeaders .= 'From: "' . \lib\Objects\ApplicationContainer::Instance()->getOcConfig()->getSiteName() . '" <' . $emailAddr . '>';

        $subject = tr('register_email_subject')." ".\lib\Objects\ApplicationContainer::Instance()->getOcConfig()->getSiteName();

        mb_send_mail($email, $subject, $emailContent, $emailHeaders);
    }

    /**
     * @param $username
     * @param $email
     */
    public static function sendPostActivationMail($username, $email)
    {
        $emailContent = read_file(__DIR__ . '/../../tpl/stdstyle/email/post_activation.email');
        $emailContent = mb_ereg_replace('{server}', \lib\Objects\ApplicationContainer::Instance()->getOcConfig()->getAbsolute_server_URI(), $emailContent);
        $emailContent = mb_ereg_replace('{registermail01}', tr('registermail01'), $emailContent);
        $emailContent = mb_ereg_replace('{registermail02}', tr('registermail02'), $emailContent);
        $emailContent = mb_ereg_replace('{registermail03}', tr('registermail03'), $emailContent);
        $emailContent = mb_ereg_replace('{registermail05}', tr('registermail05'), $emailContent);
        $emailContent = mb_ereg_replace('{registermail06}', tr('registermail06'), $emailContent);
        $emailContent = mb_ereg_replace('{registermail07}', tr('registermail07'), $emailContent);
        $emailContent = mb_ereg_replace('{registermail08}', tr('registermail08'), $emailContent);
        $emailContent = mb_ereg_replace('{user}', $username, $emailContent);
        $wikiLinks = \lib\Objects\ApplicationContainer::Instance()->getOcConfig()->getWikiLinks();
        $emailContent = mb_ereg_replace('{wikiaddress}', $wikiLinks['forBeginers'], $emailContent);
        $emailContent = mb_ereg_replace('{octeamEmailsSignature}', \lib\Objects\ApplicationContainer::Instance()->getOcConfig()->getOcteamEmailsSignature(), $emailContent);

        $emailAddr = \lib\Objects\ApplicationContainer::Instance()->getOcConfig()->getNoreplyEmailAddress();

        $emailHeaders = 'MIME-Version: 1.0' . "\r\n";
        $emailHeaders .= 'Content-Type: text/html; charset=utf-8' . "\r\n";
        $emailHeaders .= 'From: "' . \lib\Objects\ApplicationContainer::Instance()->getOcConfig()->getSiteName() . '" <' . $emailAddr . '>';

        $subject = tr('post_activation_email_subject')." ".\lib\Objects\ApplicationContainer::Instance()->getOcConfig()->getSiteName()."!";

        mb_send_mail($email, $subject, $emailContent, $emailHeaders);
    }

}
