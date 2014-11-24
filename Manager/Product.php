<?php

namespace BisonLab\SugarCrmBundle\Manager;

use BisonLab\NosqlBundle\Manager\BaseManager;

class Product extends BaseManager
{

  // The MongoDB Collection name, should be the same as the base model name.
  protected static $_collection = 'Products';
  protected static $_model       = '\BisonLab\SugarCrmBundle\Model\Account';

    public function __construct($access_service, $options = array())
    {
        $options['model'] = self::$_model;
        $options['entity_resource'] = $options['new_entity_resource'] = self::$_collection;
        $options['collection_resource'] = self::$_collection;

        parent::__construct($access_service, $options);
    }
}
