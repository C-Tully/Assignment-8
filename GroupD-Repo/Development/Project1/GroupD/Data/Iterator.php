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

require_once 'LinkedLists/LinkedList.php';
require_once __DIR__ . '/../../Data/IIterator.php';

/**
 * The IIterator interface is the base external iterator interface.
 *
 * All external iterators within the Data package implement the IIterator
 * interface to ensure that the container can be traversed in a variety of ways. These
 * are known as "modes" and the IteratorMode class specifies these.
 *
 * The IteratorMode::FIFO and IteratorMode::LIFO constants are used to define
 * the direction of the iteration to occur, whether this is forward or reverse.
 * Additionally, the IteratorMode also defines KEEP and DELETE options that allow for
 * the iterator to remove items or keep items as the container is traversed over.
 *
 * Multiple options can be specified at once using BITWISE operators.
 *
 * @author Tom Eastwood
 * @package GroupD\Data
 * @version 1.0.0
 */
class Iterator implements \Data\IIterator
{
    /**
     * a variable representing the first node in the list
     * 
     * @access private
     */
    private $f_node;

    /**
     * a variable representing the last node in the list
     * 
     * @access private
     */
    private $l_node;

    /**
     * a variable representing the current node the iterator is on
     * 
     * @access private
     */
    private $c_node;

    /**
     * a constructor method for the iterator whoch iterates over the LinkedList or DoublyLinkedList objects
     *
     * @access public
     * @param object $obj a LinkedList or DoublyLinkedList object
     */
    public function __construct(ILinkedList $obj)
    {
        $this->f_node = $obj->getFirst();
        $this->l_node = $obj->getLast();
        $this->c_node = $obj->getFirst();
    }

    //SAVING MODE STUFF FOR LATER
    
    /**
     * Sets the iterator mode type.
     *
     * @access public
     * @param int Contains an IteratorMode const value.
     */
    public function setMode($mode)
    {

    }
    
    /**
     * Returns the iterator mode type.
     *
     * @access public
     * @return int
     */
    public function getMode()
    {

    }

    /**
     * return the current node.  This is very useful for returning nodes in the LinkedList or DoublyLinkedList when required
     *
     * @access public
     * @return  The current node
     */
    public function currentNode()
    {
        return $this->c_node;
    }

    /**
     * starts the current node off at the first node within the DoublyLinkedList of LinkedList
     *
     * @access  public
     * @return void 
     */
    public function rewind()
    {
        $this->c_node = $this->f_node;
    }

    /**
     * retrieves the key from the current node
     *
     * @access  public
     * @return  the key of the current node in the iteration
     */
    public function key()
    {
        return $this->c_node->getKey();
    }

    /**
     * retrives the current node
     *
     * @access  public
     * @return  the current node in the iteration
     */
    public function current()
    {
        return $this->c_node;
    }

    /**
     * locates the next node in the ieration
     *
     * @access public
     * @return  void
     */
    public function next()
    {
        $this->c_node = $this->c_node->getNext();
    }

    /**
     * ensures that you have not reached the end of the iteration but ensuring the 'next' property in the LinkedNode has an object init
     *
     * @access public
     * @return  a boolean value which will indicate whether or not the node has an object in its 'next' property
     */
    public function valid()
    {
        return $this->c_node->getNext != NULL;
    }

}