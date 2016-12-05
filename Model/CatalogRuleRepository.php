<?php

namespace Flows\ApiExtension\Model;

use Flows\ApiExtension\Api\CatalogRuleRepositoryInterface;
use Magento\CatalogRule\Model\ResourceModel\Rule\Collection;
use Magento\CatalogRule\Model\RuleFactory;
use Magento\Framework\App\ObjectManager;

class CatalogRuleRepository extends \Magento\CatalogRule\Model\CatalogRuleRepository implements CatalogRuleRepositoryInterface
{
    /**
     * @var \Magento\Framework\ObjectManagerInterface
     */
    protected $objectManager;

    /**
     * @param \Magento\CatalogRule\Model\ResourceModel\Rule $ruleResource
     * @param RuleFactory $ruleFactory
     */
    public function __construct(
        \Magento\CatalogRule\Model\ResourceModel\Rule $ruleResource,
        \Magento\CatalogRule\Model\RuleFactory $ruleFactory,
        \Magento\Framework\ObjectManagerInterface $objectManager
    ) {
        parent::__construct($ruleResource, $ruleFactory);
        $this->objectManager = $objectManager;
    }

    /**
     * {@inheritdoc}
     */
    public function getList()
    {
        $catalogPriceRule = $this->objectManager->get('Magento\CatalogRule\Model\Rule');
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

    /**
     * {@inheritdoc}
     */
    public function applyAll()
    {
        /** @var \Magento\CatalogRule\Model\Rule\Job $catalogPriceRuleJob */
        $catalogPriceRuleJob = $this->objectManager->get('Magento\CatalogRule\Model\Rule\Job');
        $catalogPriceRuleJob->applyAll();
        return true;
    }

}