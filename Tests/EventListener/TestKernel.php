<?php

namespace LoftDigital\SymfonyRestBundle\Tests\EventListener;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\HttpKernelInterface;

/**
 * Class TestKernel
 *
 * @copyright Loft Digital <http://weareloft.com>, 2015
 * @package LoftDigital\SymfonyRestBundle\Tests\EventListener
 *
 * @SuppressWarnings(PHPMD)
 */
class TestKernel implements HttpKernelInterface
{
    /**
     * {@inhertidoc}
     */
    public function handle(Request $request, $type = self::MASTER_REQUEST, $catch = true)
    {
        return new Response('foo');
    }
}
