<?php

/**
 * FailedLoginAttempts
 *
 * This source file is subject to The MIT Licence
 * For the full copyright and license information, please view the LICENSE.md
 * file distributed with this source code.
 *
 * @copyright  Copyright (c) 2001-2017 Bolser Digital Agency (https://www.bolser.co.uk)
 * @license    The MIT Licence
 */

namespace Bolser\LoginBundle\Entity;

use Bolser\LoginBundle\Traits\TimestampableEntity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class FailedLoginAttempts
 *
 * @ORM\Table(name="failed_login_attempts")
 * @ORM\Entity(repositoryClass="Bolser\LoginBundle\Repository\FailedLoginAttemptsRepository")
 * @ORM\HasLifecycleCallbacks()
 *
 * @package Bolser\LoginBundle\Entity
 */
class FailedLoginAttempts
{
    use TimestampableEntity;

    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="integer", unique=true)
     * @var int $userId
     */
    private $userId;

    /**
     * @ORM\Column(type="string", unique=false)
     * @var int $ipAddress
     */
    private $ipAddress;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     *
     * @return FailedLoginAttempts
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return int
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @param int $userId
     *
     * @return FailedLoginAttempts
     */
    public function setUserId(int $userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * @return int
     */
    public function getIpAddress()
    {
        return $this->ipAddress;
    }

    /**
     * @param int $ipAddress
     *
     * @return FailedLoginAttempts
     */
    public function setIpAddress(int $ipAddress)
    {
        $this->ipAddress = $ipAddress;

        return $this;
    }
}