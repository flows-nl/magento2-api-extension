<?php

namespace Flows\ApiExtension\Api\Data;

interface ExtendedCatalogRuleInterface extends \Magento\CatalogRule\Api\Data\RuleInterface
{
    /**
     * Get a list of websites the rule applies to
     *
     * @return int[]
     */
    public function getWebsiteIds();

    /**
     * Set the websites the rule applies to
     *
     * @param int[] $websiteIds
     *
     * @return $this
     */
    public function setWebsiteIds(array $websiteIds);

    /**
     * Get ids of customer groups that the rule applies to
     *
     * @return int[]
     */
    public function getCustomerGroupIds();

    /**
     * Set the customer groups that the rule applies to
     *
     * @param int[] $customerGroupIds
     *
     * @return $this
     */
    public function setCustomerGroupIds(array $customerGroupIds);
}