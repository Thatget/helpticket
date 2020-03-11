<?php
namespace Emipro\Customapi\Api;
interface Gethighlight
{
    /**
     * @api
     * @param string $sku
     * @return array
     */
    public function gethighlightdata($sku);
}