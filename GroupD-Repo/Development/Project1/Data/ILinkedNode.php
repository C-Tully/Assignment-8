<?php
/**
 * This file is part of the Data package.
 *
 * For full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Data;

/**
 * The ILinkedNode interface is implemented by all nodes that are to be linked.
 *
 * @author Aaron McGowan <a_mcgowan43905@fanshawec.ca>
 * @package McGowanCorp\Data
 * @version 1.0.0
 */
interface ILinkedNode extends INode
{
    /**
     * Returns the next ILinkedNode.
     *
     * @access public
     * @return ILinkedNode|null Returns the next ILinkedNode instance if it exists, otherwise returns NULL.
     */
    public function getNext();
    
    /**
     * Sets the next ILinkedNode instance.
     *
     * The `next` ILinkedNode should be the ILinkedNode instance that comes after
     * this instance within a List.
     *
     * @access public
     * @param ILinkedNode The ILinkedNode instance that is next.
     */
    public function setNext(ILinkedNode $next);
}