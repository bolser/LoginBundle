<?php

/**
 * AbstractHandler
 *
 * This source file is subject to The MIT Licence
 * For the full copyright and license information, please view the LICENSE.md
 * file distributed with this source code.
 *
 * @copyright  Copyright (c) 2001-2017 Bolser Digital Agency (https://www.bolser.co.uk)
 * @license    The MIT Licence
 */

namespace Bolser\LoginBundle\Handler;

use Bolser\LoginBundle\Repository\AbstractRepository;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\ORM\Mapping\Entity;
use Symfony\Component\Form\FormFactoryInterface;

/**
 * Class AbstractHandler
 *
 * @package Bolser\LoginBundle\Handler
 */
abstract class AbstractHandler implements IHandler
{
    /**
     * @var ObjectManager $om
     */
    protected $om;

    /**
     * @var Entity
     */
    protected $entityClass;

    /**
     * @var AbstractRepository $repository
     */
    protected $repository;

    /**
     * AbstractHandler constructor.
     *
     * @param ObjectManager        $om
     * @param                      $entityClass
     * @param FormFactoryInterface $formFactory
     * @param                      $formType
     */
    public function __construct
    (
        ObjectManager $om,
        $entityClass,
        FormFactoryInterface $formFactory,
        $formType
    ) {
        $this->om = $om;
        $this->entityClass = $entityClass;
        $this->repository = $this->om->getRepository($this->entityClass);
    }

    /**
     * {@inheritDoc}
     */
    public function get(int $id)
    {
        return $this->repository->find($id);
    }

    /**
     * {@inheritDoc}
     */
    public function getOneBy($field, $value)
    {
        return $this->repository->findOneBy([$field => $value]);
    }

    /**
     * {@inheritDoc}
     */
    public function all($sortBy = null, int $limit = 10, int $offset = 0): array
    {
        return $this->repository->findBy([], $sortBy, $limit, $offset);
    }

    /**
     * {@inheritDoc}
     */
    public function allBy($criteria = [], $sortBy = null, $limit = null, $offset = null): array
    {
        return $this->repository->findBy($criteria, $sortBy, $limit, $offset);
    }
}
