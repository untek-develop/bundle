<?php

namespace Untek\Develop\Bundle\Domain\Services;

use Untek\Develop\Bundle\Domain\Interfaces\Services\BundleServiceInterface;
use Untek\Domain\EntityManager\Interfaces\EntityManagerInterface;
use Untek\Develop\Bundle\Domain\Interfaces\Repositories\BundleRepositoryInterface;
use Untek\Domain\Service\Base\BaseCrudService;
use Untek\Develop\Bundle\Domain\Entities\BundleEntity;

/**
 * @method BundleRepositoryInterface getRepository()
 */
class BundleService extends BaseCrudService implements BundleServiceInterface
{

    public function __construct(EntityManagerInterface $em)
    {
        $this->setEntityManager($em);
    }

    public function getEntityClass() : string
    {
        return BundleEntity::class;
    }


}

