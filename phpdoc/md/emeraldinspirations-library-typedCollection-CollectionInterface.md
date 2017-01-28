emeraldinspirations\library\typedCollection\CollectionInterface
===============

A verified collection of a specific type

An extended class can be used as a parameter, ensuring that the array passed
contains only the requested type.


* Interface name: CollectionInterface
* Namespace: emeraldinspirations\library\typedCollection
* This is an **interface**
* This interface extends: IteratorAggregate, Countable

Constants
----------


### ERROR_UNEXPECTEDTYPE

    const ERROR_UNEXPECTEDTYPE = 1485484450







Methods
-------


### verifyArray

    void emeraldinspirations\library\typedCollection\CollectionInterface::verifyArray(string $DataType, array $Array)

Iterate array, throw exception if any element is not of supplied type



* Visibility: **public**
* This method is **static**.


#### Arguments
* $DataType **string** - &lt;p&gt;DataType        The type each element must be&lt;/p&gt;
* $Array **array** - &lt;p&gt;Array           The array to iterate&lt;/p&gt;



### toArray

    array emeraldinspirations\library\typedCollection\CollectionInterface::toArray()

Return the verified array



* Visibility: **public**




### getCollectionType

    string emeraldinspirations\library\typedCollection\CollectionInterface::getCollectionType()

Return the datatype of all the elements in the contained array



* Visibility: **public**




### getIterator

    \ArrayIterator emeraldinspirations\library\typedCollection\CollectionInterface::getIterator()

Return an \ArrayIterator for the contents of this collection object

Requried for For...Each to work

* Visibility: **public**




### count

    integer emeraldinspirations\library\typedCollection\CollectionInterface::count()

Return number of ControllerInterface objects in collection

Required for \count() to work

* Visibility: **public**



