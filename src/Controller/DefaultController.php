<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;

class DefaultController
{
    public function index(): JsonResponse
    {
        throw new \DomainException('Exception logger test 8');
    }
}
