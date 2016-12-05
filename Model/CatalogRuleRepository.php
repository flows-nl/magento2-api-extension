<?php

namespace Flows\ApiExtension\Model;

use Flows\ApiExtension\Api\CatalogRuleRepositoryInterface;
use Flows\ApiExtension\Api\Data\ExtendedCatalogRuleInterface;
use Magento\CatalogRule\Model\ResourceModel\Rule\Collection;
use Magento\Framework\App\ObjectManager;
use Magento\Framework\Exception\CouldNotSaveException;
use Magento\Framework\Exception\ValidatorException;

class CatalogRuleRepository extends \Magento\CatalogRule\Model\CatalogRuleRepository implements CatalogRuleRepositoryInterface
{
    /**
     * {@inheritdoc}
     */
    public function getList()
    {
        $objectManager = ObjectManager::getInstance();
        $catalogPriceRule = $objectManager->get('Magento\CatalogRule\Model\Rule');
        /** @var Collection $collection */
        $collection = $catalogPriceRule->getCollection();
        $collection->load();

        return $collection->getItems();
    }

    /**
     * {@inheritdoc}
     */
    public function getExtended($ruleId)
    {
        return parent::get($ruleId);
    }

    /**
     * {@inheritdoc}
     */
    public function saveExtended(\Flows\ApiExtension\Api\Data\ExtendedCatalogRuleInterface $rule)
    {
        return parent::save($rule);
    }

    /**
     * {@inheritdoc}
     */
    public function deleteExtended(\Flows\ApiExtension\Api\Data\ExtendedCatalogRuleInterface $rule)
    {
        return parent::delete($rule);
    }

    /**
     * {@inheritdoc}
     */
    public function deleteById($ruleId)
    {
        return parent::deleteById($ruleId);
    }

}