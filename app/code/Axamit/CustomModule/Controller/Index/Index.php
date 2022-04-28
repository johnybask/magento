<?php
namespace Axamit\CustomModule\Controller\Index;

class Index extends \Magento\Framework\App\Action\Action
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
        $block = $page->getLayout()->getBlock('custommodule');
        $block->setData('custom_parameter', $this->getRequest()->getParam('custom_param'));

        return $page;
    }
}
