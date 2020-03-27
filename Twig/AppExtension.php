<?php
namespace Hesam\ShamsiDate\Twig;

class AppExtension extends \Twig_Extension
{
    public function getFilters()
    {
        return array(
            new \Twig_SimpleFilter('price', array($this, 'priceFilter')),
        );
    }

    public function priceFilter($number, $decimals = 0, $decPoint = '.', $thousandsSep = ',')
    {


        return 'ss';
    }

    public function getName()
    {
        return 'app_extension';
    }
}
