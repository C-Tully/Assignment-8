<?php
/**
 * This file is part of the Data package.
 *
 * For full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Data;

/**
 * The IteratorMode class is used to operate as an ENUM data
 * type allow for the mode options to be specified.
 *
 * @author Aaron McGowan <a_mcgowan43905@fanshawec.ca>
 * @package McGowanCorp\Data
 * @version 1.0.0
 */
class IteratorMode
{
    const KEEP      = 1;
    const DELETE    = 2;
    const FIFO      = 4;
    const LIFO      = 8;
}