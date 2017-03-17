<?php

/**
 * AbstractUserHandler
 *
 * This source file is subject to The MIT Licence
 * For the full copyright and license information, please view the LICENSE.md
 * file distributed with this source code.
 *
 * @copyright  Copyright (c) 2001-2017 Bolser Digital Agency (https://www.bolser.co.uk)
 * @license    The MIT Licence
 */

namespace Bolser\LoginBundle\Handler;

/**
 * Interface IHandler
 *
 * @package Bolser\LoginBundle\Handler
 */
interface IHandler
{
    /**
     * Get an Entry.
     *
     * @param mixed $id
     *
     * @return Entity
     */
    public function get(int $id);

    /**
     * Get a single entry by a field
     *
     * @param $field
     * @param $value
     *
     * @return Entity
     */
    public function getOneBy($field, $value);

    /**
     * Get a list of Entries.
     *
     * @param null $sortBy
     * @param int  $limit
     * @param int  $offset
     *
     * @return array
     */
    public function all($sortBy = null, int $limit = 10, int $offset = 0): array;

    /**
     * Get a list of Entries by a certain criteria
     *
     * @param array $criteria
     * @param null  $sortBy
     * @param int   $limit
     * @param int   $offset
     *
     * @return array
     */
    public function allBy($criteria = [], $sortBy = null, $limit = null, $offset = null): array;
}