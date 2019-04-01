<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace ManishJoy\ProductImageSalesEmail\Block;

use Magento\Framework\View\Element\Template;
/**
 * Sales Order Email items default renderer
 *
 * @author     Magento Core Team <core@magentocommerce.com>
 */
class DefaultOrder extends \Magento\Sales\Block\Order\Email\Items\Order\DefaultOrder {
    /**
     * Get config
     *
     * @param string $path
     * @return string|null
     */
    public function getConfig($path)
    {
        return $this->_scopeConfig->getValue($path, \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }
}