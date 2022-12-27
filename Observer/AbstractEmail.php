<?php
/**
 * Risecommerce  EmailAttachments
 *
 * PHP version 7
 *
 * @category Risecommerce
 * @package  Risecommerce_EmailAttachments
 * @author   Risecommerce <magento@risecommerce.com>
 * @license  https://www.risecommerce.com  Open Software License (OSL 3.0)
 * @link     https://www.risecommerce.com
 */


namespace Risecommerce\EmailAttachments\Observer;

use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;
use Risecommerce\EmailAttachments\Model\Mail;

/**
 * Class AbstractEmail
 * @package Risecommerce\EmailAttachments\Observer
 */
class AbstractEmail implements ObserverInterface
{
    /**
     * @var Mail
     */
    private $mail;

    /**
     * TransportBuilder constructor.
     *
     * @param Mail $mail
     */
    public function __construct(Mail $mail)
    {
        $this->mail = $mail;
    }

    /**
     * @param Observer $observer
     */
    public function execute(Observer $observer)
    {
        $this->mail->setTemplateVars($observer->getTransport());
    }
}
