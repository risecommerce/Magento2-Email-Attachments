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

namespace Risecommerce\EmailAttachments\Helper;

use Risecommerce\EmailAttachments\Helper\AbstractData;

class Data extends AbstractData
{
    const CONFIG_MODULE_PATH = 'mp_email_attachments';

    /**
     * @param null $store
     *
     * @return array
     */
    public function getCcTo($store = null)
    {
        $ccTo = $this->getConfigGeneral('cc_to', $store);

        return $ccTo ? explode(',', trim($ccTo)) : [];
    }

    /**
     * @param null $store
     *
     * @return array
     */
    public function getBccTo($store = null)
    {
        $bccTo = $this->getConfigGeneral('bcc_to', $store);

        return $bccTo ? explode(',', trim($bccTo)) : [];
    }

    /**
     * @param null $store
     *
     * @return bool
     */
    public function isEnabledAttachPdf($store = null)
    {
        return (bool)$this->getConfigGeneral('is_enabled_attach_pdf', $store);
    }

    /**
     * @param null $store
     *
     * @return array
     */
    public function getAttachPdf($store = null)
    {
        $attachPdf = $this->getConfigGeneral('attach_pdf', $store);

        return explode(',', $attachPdf);
    }

    /**
     * @param null $store
     *
     * @return bool
     */
    public function isEnabledAttachTac($store = null)
    {
        return (bool)$this->getConfigGeneral('is_enabled_attach_tac', $store);
    }

    /**
     * @param null $store
     *
     * @return array
     */
    public function getAttachTac($store = null)
    {
        $attachTaC = $this->getConfigGeneral('attach_tac', $store);

        return explode(',', $attachTaC);
    }

    /**
     * @param null $store
     *
     * @return string
     */
    public function getTacFile($store = null)
    {
        return $this->getConfigGeneral('tac_file', $store);
    }

    /**
     * @return bool
     */
    public function checkPdfInvoiceIsEnable()
    {
        return $this->_moduleManager->isEnabled('Risecommerce_PdfInvoice')
            && $this->getConfigValue('pdfinvoice/general/enabled');
    }
}
