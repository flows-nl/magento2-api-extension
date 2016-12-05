<?php

namespace Flows\ApiExtension\Api;

/**
 * Interface CatalogRuleRepositoryInterface
 *
 * @api
 */
interface CatalogRuleRepositoryInterface
{
    /**
     * @return \Flows\ApiExtension\Api\Data\ExtendedCatalogRuleInterface[]
     */
    public function getList();

    /**
     * @param int $ruleId
     *
     * @return \Flows\ApiExtension\Api\Data\ExtendedCatalogRuleInterface
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     */
    public function getExtended($ruleId);

    /**
     * @param \Flows\ApiExtension\Api\Data\ExtendedCatalogRuleInterface $rule
     *
     * @return \Flows\ApiExtension\Api\Data\ExtendedCatalogRuleInterface
     * @throws \Magento\Framework\Exception\CouldNotSaveException
     */
    public function saveExtended(\Flows\ApiExtension\Api\Data\ExtendedCatalogRuleInterface $rule);

    /**
     * @param \Flows\ApiExtension\Api\Data\ExtendedCatalogRuleInterface $rule
     *
     * @return bool
     * @throws \Magento\Framework\Exception\CouldNotDeleteException
     */
    public function deleteExtended(\Flows\ApiExtension\Api\Data\ExtendedCatalogRuleInterface $rule);

    /**
     * @param int $ruleId
     *
     * @return bool
     * @throws \Magento\Framework\Exception\CouldNotDeleteException
     */
    public function deleteById($ruleId);
}