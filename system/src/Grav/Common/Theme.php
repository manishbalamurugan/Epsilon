<?php

/**
 * @package    Grav\Common
 *
 * @copyright  Copyright (C) 2015 - 2019 Trilby Media, LLC. All rights reserved.
 * @license    MIT License; see LICENSE file for details.
 */

namespace Grav\Common;

use Grav\Common\Page\Interfaces\PageInterface;
use Grav\Common\Config\Config;
use RocketTheme\Toolbox\File\YamlFile;

class Theme extends Plugin
{
    /**
     * Constructor.
     *
     * @param Grav   $grav
     * @param Config $config
     * @param string $name
     */
    public function __construct(Grav $grav, Config $config, $name)
    {
        parent::__construct($name, $grav, $config);
    }

    /**
     * Get configuration of the plugin.
     *
     * @return array
     */
    public function config()
    {
        return $this->config["themes.{$this->name}"] ?? [];
    }

    /**
     * Persists to disk the theme parameters currently stored in the Grav Config object
     *
     * @param string $theme_name The name of the theme whose config it should store.
     *
     * @return bool
     */
    public static function saveConfig($theme_name)
    {
        if (!$theme_name) {
            return false;
        }

        $grav = Grav::instance();
        $locator = $grav['locator'];
        $filename = 'config://themes/' . $theme_name . '.yaml';
        $file = YamlFile::instance($locator->findResource($filename, true, true));
        $content = $grav['config']->get('themes.' . $theme_name);
        $file->save($content);
        $file->free();

        return true;
    }

    /**
     * Override the mergeConfig method to work for themes
     */
    protected function mergeConfig(PageInterface $page, $deep = 'merge', $params = [], $type = 'themes')
    {
        return parent::mergeConfig($page, $deep, $params, $type);
    }

    /**
     * Simpler getter for the theme blueprint
     *
     * @return mixed
     */
    public function getBlueprint()
    {
        if (!$this->blueprint) {
            $this->loadBlueprint();
        }
        return $this->blueprint;
    }

    /**
     * Load blueprints.
     */
    protected function loadBlueprint()
    {
        if (!$this->blueprint) {
            $grav = Grav::instance();
            $themes = $grav['themes'];
            $this->blueprint = $themes->get($this->name)->blueprints();
        }
    }
}
