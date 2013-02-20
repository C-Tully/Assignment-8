<?php
/**
 * This file is part of the GroupD\Data package.
 *
 * For full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace GroupD\Data;

require_once 'Node.php';
require_once __DIR__ . '/../../Data/ILinkedNode.php';

/**
 * The ILinkedNode interface is implemented by all nodes that are to be linked.
 *
 * @author Tom Eastwood
 * @package GroupD\Data
 * @version 1.0.0
 */
class LinkedNode extends \GroupD\Data\Node implements \Data\ILinkedNode
{
    /**
     * a reference to the next node in memory
     *
     * @access private
     */
    private $next;

    /**
     * a constructor function for a linked node
     *
     * @access public
     * @param mixed $value the value in the node object
     * @param int $key the key associated with that particular node
     * @param object $next the container of the next object in the LinkedList
     */
    public function __construct($value, $key, $next = NULL)
    {
        $this->setValue($value);
        $this->setKey($key);
        $this->setNext($next);
    }

    /**
     * Returns the next ILinkedNode.
     *
     * @access public
     * @return ILinkedNode|null Returns the next ILinkedNode instance if it exists, otherwise returns NULL.
     */
    public function getNext()
    {
        return $this->next;
    }
    
    /**
     * Sets the next ILinkedNode instance.
     *
     * The `next` ILinkedNode should be the ILinkedNode instance that comes after
     * this instance within a List.
     *
     * @access public
     * @param ILinkedNode The ILinkedNode instance that is next.
     */
    public function setNext(\Data\ILinkedNode $next)
    {
        $this->next = $next;
    }

    /**
     * removes a reference to the next object when there is no longer a 'next' object
     *
     * @access  public
     */
    public function clearNext()
    {
        unset($this->next);
    }
}