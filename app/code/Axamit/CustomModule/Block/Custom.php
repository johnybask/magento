<?php
/**
 *
 * @package     magento2
 * @author      Evgeniy Baskov
 */

namespace Axamit\CustomModule\Block;

use Magento\Framework\View\Element\Template;

class Custom extends Template
{
    public function getName() {
        return "Welcome to custom module.";
    }
}