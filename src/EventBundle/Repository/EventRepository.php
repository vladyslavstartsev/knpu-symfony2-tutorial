<?php

namespace EventBundle\Repository;
use Proxies\__CG__\UserBundle\Entity\Users;

/**
 * EventRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class EventRepository extends \Doctrine\ORM\EntityRepository
{
    public function getUpcomingEvents()
    {
        return $this->createQueryBuilder('e')
            ->addOrderBy('e.time', 'ASC')
            ->andWhere('e.time > :now')
            ->setParameter('now', new \DateTime())
            ->getQuery()
            ->execute();
    }
}
