<?php
/**
 * This file is part of the Data package.
 *
 * For full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Data;

/**
 * The IDoublyLinkedNode interface is implemented by doubly linked nodes.
 *
 * IDoublyLinkedNodes have knowledge of both the next and previous nodes within
 * a specific sequence or list. The ILinkedNode interface only knows
 * of the next node in the sequence.
 *
 * @author Aaron McGowan <a_mcgowan43905@fanshawec.ca>
 * @package Data
 * @version 1.0.0
 */
interface IDoublyLinkedNode extends ILinkedNode
{
    /**
     * Returns the previously linked node.
     *
     * @access public
     * @return IDoublyLinkedNode|null Returns the previously linked node. Will return null
     *   if no previous node exists.
     */
    public function getPrevious();
    
    /**
     * Sets the previous node.
     *
     * @access public
     * @param IDoublyLinkedNode The previously linked node.
     */
    public function setPrevious(IDoublyLinkedNode &$previous);
}