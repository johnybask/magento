<?php


namespace Sobol\ModifyPriceModule\Plugins;


class ModifyPrice
{
    public function afterGetName(\Magento\Catalog\Model\Product $subject, $result)
    {
        $price = $subject->getPrice();

        if($price > 2000) return $result." too expensive!";
        if($price < 2000) return $result." too cheap!";

        return $result;
    }
}
