<?php
/**
 * This file is part of the GroupD\Data package.
 *
 * For full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace GroupD\Data;

ini_set('display_errors', 'ON');
error_reporting(E_ALL | E_STRICT);

require_once __DIR__ . '/../../Data/INode.php';

/**
 * The base node class that defines the basic node class methods.
 *
 * @author Tom Eastwood
 * @package GroupD\Data
 * @version 1.0.0
 */
class Node implements \Data\INode
{
    /**
     * a key value which acts as an index for the nodes
     *
     * @access  private
     */
    private $key;

    /**
     * the value of this node
     *
     * @access  private
     */
    private $value;

    /**
     * Returns the key value for this node.
     *
     * @access public
     * @return mixed Returns the key value.
     */
    public function getKey()
    {
        return $this->key;
    }
    
    /**
     * Sets the key value for this node.
     *
     * @access public
     * @param mixed The key value.
     */
    public function setKey($key)
    {
        $this->key = $key;
    }
    
    /**
     * Returns the value of this node (the real value assigned).
     *
     * @access public
     * @return mixed The value.
     */
    public function getValue()
    {
        return $this->value;
    }
    
    /**
     * Sets the value for this node.
     *
     * @access public
     * @param mixed The value.
     */
    public function setValue($value)
    {
        $this->value = $value;
    }
}