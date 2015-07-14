<?php
namespace App\Model\Behavior;

use Cake\ORM\Behavior;
use Cake\ORM\Table;

use Cake\Utility\Inflector;

/**
 * Sluggable behavior
 */
class SluggableBehavior extends Behavior
{

    /**
     * Default configuration.
     *
     * @var array
     */
    protected $_defaultConfig = [];

	public function slug($value)
	{
	    return Inflector::slug($value, $this->_config['replacement']);
	}
}
