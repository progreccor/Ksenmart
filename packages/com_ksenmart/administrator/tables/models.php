<?php 
/**
 * @copyright   Copyright (C) 2013. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
 
defined('_JEXEC') or die;

KSSystem::import('tables.ksentable');
class KsenmartTableModels extends KsenTable {
    
    public function __construct(&$_db) {
        parent::__construct('#__ksenmart_models', 'id', $_db);
    }
}