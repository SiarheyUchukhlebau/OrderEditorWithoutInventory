<?php
/**
 * Copyright © MageWorx. All rights reserved.
 * See LICENSE.txt for license details.
 */
declare(strict_types = 1);

namespace MageWorx\OrderEditorWithoutInventory\Model\Stock;


use MageWorx\OrderEditor\Api\StockManagerInterface;

class NoCatalogInventoryManager implements StockManagerInterface
{

    /**
     * @param \Magento\Sales\Api\Data\OrderItemInterface $item
     * @param float $qty
     */
    public function registerReturn(\Magento\Sales\Api\Data\OrderItemInterface $item, float $qty): void
    {
        return;
    }

    /**
     * @param int $productId
     * @param float $qty
     * @param int $websiteId
     */
    public function registerReturnByProductId(int $productId, float $qty, int $websiteId): void
    {
        return;
    }

    /**
     * @param \Magento\Sales\Api\Data\OrderItemInterface $item
     * @param float $qty
     */
    public function registerSale(\Magento\Sales\Api\Data\OrderItemInterface $item, float $qty): void
    {
        return;
    }
}
