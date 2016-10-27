<?php
namespace Riari\Forum\Support;

use Pionl\Laravel\Support\Loader\ClassGate;

/**
 * Class ClassGate
 *
 * Enables to get class representation from the config file and call static methods on it
 *
 * @package Riari\Forum\Support
 */
class ConfigModel extends ClassGate
{
    static protected $configPath = "forum.integration.models";
}