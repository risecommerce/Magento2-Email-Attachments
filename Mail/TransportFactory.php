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

namespace Risecommerce\EmailAttachments\Mail;

use Magento\Framework\Mail\TransportInterfaceFactory;
use Risecommerce\EmailAttachments\Model\MailEvent;
use Zend_Pdf_Exception;

/**
 * Class TransportFactory
 * @package Risecommerce\EmailAttachments\Mail
 */
class TransportFactory
{
    /**
     * @var MailEvent
     */
    private $mailEvent;

    /**
     * TransportFactory constructor.
     *
     * @param MailEvent $mailEvent
     */
    public function __construct(MailEvent $mailEvent)
    {
        $this->mailEvent = $mailEvent;
    }

    /**
     * @param TransportInterfaceFactory $subject
     * @param array $data
     *
     * @return mixed
     * @throws Zend_Pdf_Exception
     */
    public function beforeCreate(TransportInterfaceFactory $subject, array $data = [])
    {
        if (isset($data['message'])) {
            $this->mailEvent->dispatch($data['message']);
        }

        return [$data];
    }
}
