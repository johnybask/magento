<?php


namespace Sobol\ModifyPriceModule\Plugins;


class ModifyPrice
{
    public function afterGetName(\Magento\Catalog\Model\Product $subject, $result)
    {
        $price = $subject->getPrice();

        return ($price > 2000) ? $result." too expensive!" : $result." too cheap!";
    }
}
