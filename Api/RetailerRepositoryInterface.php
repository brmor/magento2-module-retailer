<?php
/**
 * DISCLAIMER
 * Do not edit or add to this file if you wish to upgrade this module to newer
 * versions in the future.
 *
 * @category  Smile
 * @package   Smile\Retailer
 * @author    Romain Ruaud <romain.ruaud@smile.fr>
 * @copyright 2016 Smile
 * @license   Open Software License ("OSL") v. 3.0
 */

namespace Smile\Retailer\Api;

use Smile\Seller\Api\SellerRepositoryInterface;

/**
 * Retailer Repository interface
 *
 * @category Smile
 * @package  Smile\Retailer
 * @author   Romain Ruaud <romain.ruaud@smile.fr>
 */
interface RetailerRepositoryInterface extends SellerRepositoryInterface
{
    /**
     * Get info about retailer by seller id
     *
     * @param int $retailerId The retailer Id
     * @param int $storeId    The store Id
     *
     * @return \Smile\Retailer\Api\Data\RetailerInterface
     *
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     */
    public function get($retailerId, $storeId = null);
}
