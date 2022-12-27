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

namespace Risecommerce\EmailAttachments\Model;

/**
 * Class Mail
 * @package Risecommerce\EmailAttachments\Model
 */
class Mail
{
    /**
     * @var array
     */
    private $templateVars;

    /**
     * @param array $templateVars
     */
    public function setTemplateVars($templateVars)
    {
        $this->templateVars = $templateVars;
    }

    /**
     * @return mixed
     */
    public function getTemplateVars()
    {
        return $this->templateVars;
    }
}
