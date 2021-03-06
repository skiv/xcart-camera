<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\XC\Camera51\View;


/**
 * Configuration instructions widget for SocialLogin
 */
class Instructions extends \XLite\View\FormField\Label\ALabel
{
    /**
     * Register CSS files
     *
     * @return array
     */
    public function getCSSFiles()
    {
        $list[] = [];
     //   $list = parent::getCSSFiles();

     //   $list[] = 'modules/CDev/SocialLogin/style.css';

        return $list;
    }

    /**
     * Process all occurencies of WEB_LC_ROOT
     *
     * @param mixed $str Input string
     *
     * @return string
     */
    public function processUrls($str)
    {

        return str_replace(
            \XLite\Model\Base\Catalog::WEB_LC_ROOT,
            htmlentities(\XLite\Core\Auth::getInstance()->getProfile()->getLogin()),
            $str
        );
    }

    /**
     * Return field template
     *
     * @return string
     */
    protected function getFieldTemplate()
    {
        return 'modules/XC/Camera51/form_field/instructions.twig';
    }

    /**
     * Return widget default template
     *
     * @return string
     */
    protected function getDefaultTemplate()
    {
        return 'modules/XC/Camera51/form_field/instructions.twig';
    }
}
