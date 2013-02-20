<?php
/**
 * This file is part of the Data package.
 *
 * For full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Data;

/**
 * The base node interface that defines the basic interface methods.
 *
 * @author Aaron McGowan <a_mcgowan43905@fanshawec.ca>
 * @package Data
 * @version 1.0.0
 */
interface INode
{
    /**
     * Returns the key value for this node.
     *
     * @access public
     * @return mixed Returns the key value.
     */
    public function getKey();
    
    /**
     * Sets the key value for this node.
     *
     * @access public
     * @param mixed The key value.
     */
    public function setKey($key);
    
    /**
     * Returns the value of this node (the real value assigned).
     *
     * @access public
     * @return mixed The value.
     */
    public function getValue();
    
    /**
     * Sets the value for this node.
     *
     * @access public
     * @param mixed The value.
     */
    public function setValue($value);
}