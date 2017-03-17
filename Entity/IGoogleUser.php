<?php

/**
 * IGoogleUser
 *
 * This source file is subject to The MIT Licence
 * For the full copyright and license information, please view the LICENSE.md
 * file distributed with this source code.
 *
 * @copyright  Copyright (c) 2001-2017 Bolser Digital Agency (https://www.bolser.co.uk)
 * @license    The MIT Licence
 */

namespace Bolser\LoginBundle\Entity;

/**
 * Interface IGoogleUser
 *
 * @package Bolser\LoginBundle\Entity
 */
interface IGoogleUser
{
    /**
     * Get Google ID
     *
     * @return string
     */
    public function getGoogleId();

    /**
     * Set Google ID
     *
     * @param string $googleId
     */
    public function setGoogleId(string $googleId);

    /**
     * Get forename
     *
     * @return string
     */
    public function getForename();

    /**
     * Set forename
     *
     * @param string $forename
     */
    public function setForename(string $forename);

    /**
     * Get surname
     *
     * @return string
     */
    public function getSurname();

    /**
     * Set surname
     *
     * @param string $surname
     */
    public function setSurname(string $surname);
}