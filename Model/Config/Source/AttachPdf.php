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


namespace Risecommerce\EmailAttachments\Model\Config\Source;

use Magento\Framework\Data\OptionSourceInterface;

/**
 * Class AttachPdf
 * @package Risecommerce\EmailAttachments\Model\Config\Source
 */
class AttachPdf implements OptionSourceInterface
{
    const INVOICE = 'invoice';
    const SHIPMENT = 'shipment';
    const CREDIT_MEMO = 'creditmemo';

    /**
     * Retrieve option array
     *
     * @return string[]
     */
    public static function getOptionArray()
    {
        return [
            self::INVOICE => __('Invoice'),
            self::SHIPMENT => __('Shipment'),
            self::CREDIT_MEMO => __('Credit Memo')
        ];
    }

    /**
     * Retrieve option array with empty value
     *
     * @return string[]
     */
    public function toOptionArray()
    {
        $result = [];

        foreach (self::getOptionArray() as $index => $value) {
            $result[] = ['value' => $index, 'label' => $value];
        }

        return $result;
    }
}
