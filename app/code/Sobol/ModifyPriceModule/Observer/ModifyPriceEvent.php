<?php


namespace Sobol\ModifyPriceModule\Observer;

use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;

class ModifyPriceEvent implements ObserverInterface
{
    public function execute(Observer $observer)
    {
        $productsCollection = $observer->getCollection();
        foreach ($productsCollection->getItems() as $key => $product) {
            $defaultName = $product->getName();
            $price = $product->getPrice();

            $modifiedName = ($price > 2000) ? $defaultName." too expensive!" : $defaultName." too cheap!";

            $product->setName($modifiedName);
        }
    }
}
