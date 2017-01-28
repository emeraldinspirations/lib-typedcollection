emeraldinspirations\library\typedCollection\TypedCollection
===============

A verified collection of a specific type

An extended class can be used as a parameter, ensuring that the array passed
contains only the requested type.


* Class name: TypedCollection
* Namespace: emeraldinspirations\library\typedCollection
* This class implements: [emeraldinspirations\library\typedCollection\CollectionInterface](emeraldinspirations-library-typedCollection-CollectionInterface.md)






Methods
-------


### verifyArray

    void emeraldinspirations\library\typedCollection\CollectionInterface::verifyArray(string $DataType, array $Array)

Iterate array, throw exception if any element is not of supplied type



* Visibility: **public**
* This method is **static**.
* This method is defined by [emeraldinspirations\library\typedCollection\CollectionInterface](emeraldinspirations-library-typedCollection-CollectionInterface.md)


#### Arguments
* $DataType **string** - &lt;p&gt;DataType        The type each element must be&lt;/p&gt;
* $Array **array** - &lt;p&gt;Array           The array to iterate&lt;/p&gt;



### __construct

    mixed emeraldinspirations\library\typedCollection\TypedCollection::__construct(string $CollectionType, array $Array)

Construct object or throw exception if element is not of supplied type



* Visibility: **public**


#### Arguments
* $CollectionType **string** - &lt;p&gt;CollectionType  The type each element must be&lt;/p&gt;
* $Array **array** - &lt;p&gt;Array           The array to verify&lt;/p&gt;



### toArray

    array emeraldinspirations\library\typedCollection\CollectionInterface::toArray()

Return the verified array



* Visibility: **public**
* This method is defined by [emeraldinspirations\library\typedCollection\CollectionInterface](emeraldinspirations-library-typedCollection-CollectionInterface.md)




### getCollectionType

    string emeraldinspirations\library\typedCollection\CollectionInterface::getCollectionType()

Return the datatype of all the elements in the contained array



* Visibility: **public**
* This method is defined by [emeraldinspirations\library\typedCollection\CollectionInterface](emeraldinspirations-library-typedCollection-CollectionInterface.md)




### getIterator

    \ArrayIterator emeraldinspirations\library\typedCollection\CollectionInterface::getIterator()

Return an \ArrayIterator for the contents of this collection object

Requried for For...Each to work

* Visibility: **public**
* This method is defined by [emeraldinspirations\library\typedCollection\CollectionInterface](emeraldinspirations-library-typedCollection-CollectionInterface.md)




### count

    integer emeraldinspirations\library\typedCollection\CollectionInterface::count()

Return number of ControllerInterface objects in collection

Required for \count() to work

* Visibility: **public**
* This method is defined by [emeraldinspirations\library\typedCollection\CollectionInterface](emeraldinspirations-library-typedCollection-CollectionInterface.md)



