<?php


namespace Sobol\GetQtyModule\Block;

use Magento\Framework\View\Element\Template;

class GetQty extends Template
{
    protected $_registry;
    protected $_stockRegistry;

    public function __construct(
        \Magento\Framework\Registry $registry,
        \Magento\CatalogInventory\Api\StockRegistryInterface $stockRegistry,
        Template\Context $context,
        array $data = []
    )
    {
        $this->_registry = $registry;
        $this->_stockRegistry = $stockRegistry;
        parent::__construct($context, $data);
    }

    public function getQty() {
        $productStock = $this->_stockRegistry->getStockItem($this->getProduct()->getId());
        return $productStock->getQty();
    }

    function getProduct()
    {
        return $this->_registry->registry('product');
    }
}
