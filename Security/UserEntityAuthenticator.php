<?php

/**
 * UserEntityAuthenticator
 *
 * This source file is subject to The MIT Licence
 * For the full copyright and license information, please view the LICENSE.md
 * file distributed with this source code.
 *
 * @copyright  Copyright (c) 2001-2017 Bolser Digital Agency (https://www.bolser.co.uk)
 * @license    The MIT Licence
 */

namespace Bolser\LoginBundle\Security;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\Security\Guard\AbstractGuardAuthenticator;

/**
 * Class UserEntityAuthenticator
 *
 * @package Bolser\LoginBundle\Security
 */
class UserEntityAuthenticator extends AbstractGuardAuthenticator
{
    /**
     * @param Request                      $request
     * @param AuthenticationException|null $authException
     *
     * @return mixed
     */
    public function start(Request $request, AuthenticationException $authException = null)
    {
        // TODO: Implement start() method.
    }

    /**
     * @param Request $request
     *
     * @return mixed
     */
    public function getCredentials(Request $request)
    {
        // TODO: Implement getCredentials() method.
    }

    /**
     * @param mixed                 $credentials
     * @param UserProviderInterface $userProvider
     *
     * @return mixed
     */
    public function getUser($credentials, UserProviderInterface $userProvider)
    {
        // TODO: Implement getUser() method.
    }

    /**
     * @param mixed         $credentials
     * @param UserInterface $user
     *
     * @return mixed
     */
    public function checkCredentials($credentials, UserInterface $user)
    {
        // TODO: Implement checkCredentials() method.
    }

    /**
     * @param Request                 $request
     * @param AuthenticationException $exception
     *
     * @return mixed
     */
    public function onAuthenticationFailure(Request $request, AuthenticationException $exception)
    {
        // TODO: Implement onAuthenticationFailure() method.
    }

    /**
     * @param Request        $request
     * @param TokenInterface $token
     * @param string         $providerKey
     *
     * @return mixed
     */
    public function onAuthenticationSuccess(Request $request, TokenInterface $token, $providerKey)
    {
        // TODO: Implement onAuthenticationSuccess() method.
    }

    /**
     * @return mixed
     */
    public function supportsRememberMe()
    {
        return false;
    }
}