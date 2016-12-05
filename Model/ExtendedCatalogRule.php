<?php

namespace Flows\ApiExtension\Model;

use Flows\ApiExtension\Api\Data\ExtendedCatalogRuleInterface;

class ExtendedCatalogRule extends \Magento\CatalogRule\Model\Rule implements ExtendedCatalogRuleInterface
{
    /**
     * Get a list of websites the rule applies to
     *
     * @return int[]
     */
    public function getWebsiteIds()
    {
        return parent::__call('getWebsiteIds', []);
    }

    /**
     * Set the websites the rule applies to
     *
     * @param int[] $websiteIds
     *
     * @return $this
     */
    public function setWebsiteIds(array $websiteIds)
    {
        return parent::__call('setWebsiteIds', [$websiteIds]);
    }

    /**
     * Get ids of customer groups that the rule applies to
     *
     * @return int[]
     */
    public function getCustomerGroupIds()
    {
        return parent::__call('getCustomerGroupIds', []);
    }

    /**
     * Set the customer groups that the rule applies to
     *
     * @param int[] $customerGroupIds
     *
     * @return $this
     */
    public function setCustomerGroupIds(array $customerGroupIds)
    {
        return parent::__call('setCustomerGroupIds', [$customerGroupIds]);
    }
}
