<?php

namespace DatabaseDynamicMenu;

/**
 * Database Dynamic Menu
 * 
 * @category   Database Dynamic Menu
 * @version    1.0.0
 * @package    viniciuspugliesi/database-dynamic-menu
 * @copyright  Copyright (c) 2017 Vinicius Pugliesi (http://www.viniciuspugliesi.com)
 * @author     Vinicius Pugliesi <vinicius_pugliesi@outlook.com>
 * @license    MIT
 */
class DatabaseDynamicMenu
{
    /**
     * The Dynamic Menu version.
     *
     * @var string
     */
    const VERSION = '1.0.0';
    
    /**
     * New instance of class.
     * 
     * @return void
     */ 
    public function __construct()
    {
        // 
    }
    
    /**
     * Get the version number of the package.
     *
     * @return string
     */
    public function version()
    {
        return static::VERSION;
    }
}