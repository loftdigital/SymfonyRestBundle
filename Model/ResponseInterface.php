<?php

namespace LoftDigital\SymfonyRestBundle\Model;

/**
 * Response Interface
 *
 * @author Lukas Hajdu <lukas@loftdigital.com>
 * @copyright Loft Digital <http://weareloft.com>, 2015
 * @package LoftDigital\SymfonyRestBundle\Model
 */
interface ResponseInterface
{
    /**
     * Returns response data
     *
     * @return array
     */
    public function getData();

    /**
     * Returns response headers
     *
     * @return array
     */
    public function getHeaders();

    /**
     * Returns response status code
     *
     * @return int
     */
    public function getStatusCode();
}
