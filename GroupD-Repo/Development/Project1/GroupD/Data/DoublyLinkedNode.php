<?php
/**
 * This file is part of the Data package.
 *
 * For full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace GroupD\Data;

require_once 'LinkedNode.php';
require_once '../../Data/IDoublyLinkedNode.php';

/**
 * The IDoublyLinkedNode interface is implemented by doubly linked nodes.
 *
 * IDoublyLinkedNodes have knowledge of both the next and previous nodes within
 * a specific sequence or list. The ILinkedNode interface only knows
 * of the next node in the sequence.
 *
 * @author Tom Eastwood
 * @package Data
 * @version 1.0.0
 */
class DoublyLinkedNode extends \GroupD\Data\LinkedNode implements \Data\IDoublyLinkedNode
{
    /**
     * a reference to the previous node in memory
     *
     * @access private
     */
    private $previous;

    /**
     * a constructor method for the DoublyLinkedNode
     *
     * @access public
     * @param mixed $value the value in the node object
     * @param int $key the key associated with that particular node
     * @param object $next the container of the next object in the DoublyLinkedList
     * @param object $previous the container to the previous object in the DoublyLinkedList
     */
    public function __construct($value, $key, $next = NULL, $previous = NULL)
    {
        parent::__construct($value, $key, $next);
        $this->setPrevious($previous);
    }

    /**
     * Returns the previously linked node.
     *
     * @access public
     * @return IDoublyLinkedNode|null Returns the previously linked node. Will return null
     *   if no previous node exists.
     */
    public function getPrevious()
    {
        return $this->previous;
    }
    
    /**
     * Sets the previous node.
     *
     * @access public
     * @param IDoublyLinkedNode The previously linked node.
     */
    public function setPrevious(\Data\IDoublyLinkedNode &$previous)
    {
        $this->previous = $previous;
    }

    /**
     * removes a reference to the next object when there is no longer a 'next' object
     *
     * @access  public
     */
    public function clearPrevious()
    {
        unset($this->previous);
    }
}