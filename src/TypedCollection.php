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
class TypedCollection implements CollectionInterface
{

    /**
     * Storage for the verified array
     *
     * @internal
     * @var         array
     * @see         self::__construct   Setter
     * @see         self::toArray       Getter
     */
    private $Array;

    /**
     * The datatype of each element of the array
     *
     * @internal
     * @var     string
     * @see     self::__construct       Setter
     * @see     self::getCollectionType Getter
     */
    private $CollectionType;

    /**
     * {@inheritdoc}
     */
    static function verifyArray(string $DataType, array $Array)
    {
        foreach ($Array as $Element) {
            if(!$Element instanceof $DataType) {
                throw new \InvalidArgumentException(
                    'Supplied array contains item of wrong type' . PHP_EOL .
                    'Expected Type: ' . $DataType . PHP_EOL .
                    'Actual Type: ' . (
                        gettype($Element) == 'object'
                        ? get_class($Element)
                        : gettype($Element)
                    ),
                    CollectionInterface::ERROR_UNEXPECTEDTYPE
                );
            }
        }
    }

    /**
     * Construct object or throw exception if element is not of supplied type
     *
     * @param   string  CollectionType  The type each element must be
     * @param   array   Array           The array to verify
     * @throws  \InvalidArgumentException
     *                                  Thrown when an element is found that is
     *                                  not of the specified data type
     * @see     self::ERROR_UNEXPECTEDTYPE
     *                                  Exception code thrown
     * @see     self::CollectionType    Storage for datatype of elements in
     *                                  array
     * @see     self::Array             Storage for the verified array
     */
    public function __construct(string $CollectionType, array $Array) {
        self::verifyArray($CollectionType, $Array);
        $this->CollectionType = $CollectionType;
        $this->Array          = $Array;
    }

    /**
     * {@inheritdoc}
     */
    public final function toArray() : array
    {
        return $this->Array;
    }

    /**
     * {@inheritdoc}
     */
    public final function getCollectionType() : string
    {
        return $this->CollectionType;
    }

    /**
     * {@inheritdoc}
     */
    public function getIterator() : \ArrayIterator {
        return new \ArrayIterator($this->Array);
    }

    /**
     * {@inheritdoc}
     */
    public function count() : int {
        return count($this->Array);
    }

}
