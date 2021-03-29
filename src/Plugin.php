<?php
declare(strict_types=1);

namespace PgSearch;

use Cake\Core\BasePlugin;
use Cake\Core\PluginApplicationInterface;
use Cake\Database\TypeFactory;
use PgSearch\Database\Type\TsvectorType;

/**
 * Plugin for PgSearch
 */
class Plugin extends BasePlugin
{
    /**
     * Load all the plugin configuration and bootstrap logic.
     *
     * The host application is provided as an argument. This allows you to load
     * additional plugin dependencies, or attach events.
     *
     * @param \Cake\Core\PluginApplicationInterface $app The host application
     * @return void
     */
    public function bootstrap(PluginApplicationInterface $app): void
    {
        if (TypeFactory::getMap('tsvector') === null) {
            TypeFactory::map('tsvector', TsvectorType::class);
        }
    }
}
