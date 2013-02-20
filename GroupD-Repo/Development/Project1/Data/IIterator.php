<?php
/**
 * This file is part of the Data package.
 *
 * For full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Data;

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
 * @author Aaron McGowan <a_mcgowan43905@fanshawec.ca>
 * @package Data
 * @version 1.0.0
 */
interface IIterator extends \Iterator
{
    /**
     * Sets the iterator mode type.
     *
     * @access public
     * @param int Contains an IteratorMode const value.
     */
    public function setMode($mode);
    
    /**
     * Returns the iterator mode type.
     *
     * @access public
     * @return int
     */
    public function getMode();
}