<?php

namespace Sobol\IsInStockModule\Controller\Index;


use Magento\Framework\App\Action\Action;

class Index extends Action
{
    /**
     * @var \Magento\Framework\View\Result\PageFactory
     */
    protected $_pageFactory;

    /**
     * @param \Magento\Framework\App\Action\Context $context
     */
    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $pageFactory
    )
    {
        $this->_pageFactory = $pageFactory;
        return parent::__construct($context);
    }
    /**
     * View page action
     *
     * @return \Magento\Framework\Controller\ResultInterface
     */
    public function execute()
    {
        $page = $this->_pageFactory->create();

        /** @var Template $block */
        $block = $page->getLayout()->getBlock('isinstockpage');
        $block->setData('custom_parameter', $this->getRequest()->getParam('custom_param'));

        return $page;
    }
}
