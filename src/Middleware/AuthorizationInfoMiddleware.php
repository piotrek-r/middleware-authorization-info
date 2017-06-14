<?php
declare(strict_types=1);

namespace OwlLabs\AuthorizationInfo\Middleware;

use Interop\Http\ServerMiddleware\DelegateInterface;
use Interop\Http\ServerMiddleware\MiddlewareInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

/**
 * Class AuthorizationInfoMiddleware
 * @package OwlLabs\AuthorizationInfo\Middleware
 */
class AuthorizationInfoMiddleware implements MiddlewareInterface
{
    /**
     * @param ServerRequestInterface $request
     * @param DelegateInterface $delegate
     * @return ResponseInterface
     */
    public function process(ServerRequestInterface $request, DelegateInterface $delegate)
    {
        // todo insert some logic...
        return $delegate->process($request);
    }
}
