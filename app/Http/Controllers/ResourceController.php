<?php

namespace App\Http\Controllers;

use ReflectionClass;
use RouteResource;

class ResourceController extends Controller
{

    public function index()
    {

        $reflex = new ReflectionClass(RouteResource::class);

        return $reflex->getProperties()[0];
    }
}
