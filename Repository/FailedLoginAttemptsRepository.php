<?php

/**
 * FailedLoginAttemptsRepository
 *
 * This source file is subject to The MIT Licence
 * For the full copyright and license information, please view the LICENSE.md
 * file distributed with this source code.
 *
 * @copyright  Copyright (c) 2001-2017 Bolser Digital Agency (https://www.bolser.co.uk)
 * @license    The MIT Licence
 */

namespace Bolser\LoginBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * Class FailedLoginAttemptsRepository
 *
 * @package Bolser\LoginBundle\Repository
 */
class FailedLoginAttemptsRepository extends EntityRepository
{
    /**
     * Gets the number of times a user has failed to login to the system
     *
     * @param int $userId The user ID to check
     *
     * @return int
     */
    public function getFailedLoginCountByUser(int $userId)
    {
        return $this->createQueryBuilder('q')
            ->select('count(q)')
            ->where('q.userId = :userId')
            ->setParameter('userId', $userId)
            ->getQuery()
            ->getSingleScalarResult();
    }

    /**
     * Gets the number of times an IP Address has failed to login to the system
     *
     * @param string $ipAddress The IP Address to check
     *
     * @return int
     */
    public function getFailedLoginCountByIpAddress(string $ipAddress)
    {
        return $this->createQueryBuilder('q')
            ->select('count(q)')
            ->where('q.ipAddress = :ipAddress')
            ->setParameter('ipAddress', $ipAddress)
            ->getQuery()
            ->getSingleScalarResult();
    }
}