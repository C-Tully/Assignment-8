<?php
/**
 * This file is part of the Data package.
 *
 * For full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace GroupD\Data\LinkedLists;
require_once 'LinkedList.php';
require_once '../../../Data/LinkedLists/IDoublyLinkedList.php';

/**
 * ILinkedList is the interface implemented by the LinkedList class or
 * any class that wishes to operate as a Linked List.
 * 
 * @author Tom Eastwood
 * @package GroupD\Data\LinkedList
 * @version 1.0.0
 */
class DoublyLinkedList extends \GroupD\Data\LinkedLists\LinkedList implements \Data\LinkedLists\IDoublyLinkedList
{
    /**
     * IDoublyLinkedList is an alias or placeholder for specialized
     * methods that are to be implemented by a concrete implementation.
     *
     * However, at the moment, all IDoublyLinkedList implementations must perform
     * their own type check to ensure that the node types are of type IDoublyLinkedNode vs. ILinkedNode.
     * The reason for this is a result of IDoublyLinkedNodes having reference to the previous node in addition
     * to the next, whereas the ILinkedNode only knows of the next node in the sequence.
     */
}