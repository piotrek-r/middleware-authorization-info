<?php
declare(strict_types=1);

namespace OwlLabs\AuthorizationInfo\Middleware;

use Psr\Container\ContainerInterface;

/**
 * Class AuthorizationInfoFactory
 * @package OwlLabs\AuthorizationInfo\Middleware
 */
class AuthorizationInfoFactory
{
    /**
     * @param ContainerInterface $container
     * @return AuthorizationInfoMiddleware
     */
    public function __invoke(ContainerInterface $container): AuthorizationInfoMiddleware
    {
        return new AuthorizationInfoMiddleware();
    }
}
