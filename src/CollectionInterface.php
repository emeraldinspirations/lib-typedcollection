<?php

namespace emeraldinspirations\library\typedCollection;

/**
 * A verified collection of a specific type
 *
 * An extended class can be used as a parameter, ensuring that the array passed
 * contains only the requested type.
 *
 * @author Matthew "Juniper" Barlett <emeraldinspirations@gmail.com>
 * @see             \IteratorAggregate  What this class implements
 * @see             \Countable          What this class implements
 */
interface CollectionInterface extends \IteratorAggregate, \Countable
{

    /**
     * The error number thrown when an element is of the wrong type
     *
     * @var     int
     * @see     self::verifyArray       Throwing function
     */
    const ERROR_UNEXPECTEDTYPE = 1485484450;

    /**
     * Iterate array, throw exception if any element is not of supplied type
     *
     * @param   string  DataType        The type each element must be
     * @param   array   Array           The array to iterate
     * @return  void
     * @throws  \InvalidArgumentException
     *                                  Thrown when an element is found that is
     *                                  not of the specified data type
     * @see     self::ERROR_UNEXPECTEDTYPE
     *                                  Exception code thrown
     */
    static function verifyArray(string $DataType, array $Array) ;

    /**
     * Return the verified array
     *
     * @return  array                   The verified array
     * @see     self::Array             Storage for the verified array
     */
    public function toArray() : array;

    /**
     * Return the datatype of all the elements in the contained array
     *
     * @return  string                  The datatype of all elements in
     *                                  contained array
     * @see     self::CollectionType    Storage for datatype
     */
    public function getCollectionType() : string;

    /**
     * Return an \ArrayIterator for the contents of this collection object
     *
     * Requried for For...Each to work
     *
     * @return  \ArrayIterator          Iterator for the contents of this
     *                                  collection
     * @see     \IteratorAggregate::getIterator
     *                                  What this function implements
     * @see     self::Array             Storage for the verified array
     */
    public function getIterator() : \ArrayIterator;

    /**
     * Return number of ControllerInterface objects in collection
     *
     * Required for \count() to work
     *
     * @return  int                     Number of objects in collection
     * @see     \Countable::count       What this function implements
     * @see     self::Array             Storage for the verified array
     */
    public function count() : int;

}
