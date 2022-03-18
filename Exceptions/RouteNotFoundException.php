<?php
namespace Exceptions;

class RouteNotFoundException extends \Exception
{
    protected $message  = "Cette page n'existe pas !";
}