<?php

namespace Untek\Develop\Bundle\Domain\Services;

use Untek\Develop\Bundle\Domain\Interfaces\Services\DomainServiceInterface;
use Untek\Model\EntityManager\Interfaces\EntityManagerInterface;
use Untek\Develop\Bundle\Domain\Interfaces\Repositories\DomainRepositoryInterface;
use Untek\Model\Service\Base\BaseCrudService;
use Untek\Develop\Bundle\Domain\Entities\DomainEntity;

/**
 * @method
 * DomainRepositoryInterface getRepository()
 */
class DomainService extends BaseCrudService implements DomainServiceInterface
{

    public function __construct(EntityManagerInterface $em)
    {
        $this->setEntityManager($em);
    }

    public function getEntityClass() : string
    {
        return DomainEntity::class;
    }


}

