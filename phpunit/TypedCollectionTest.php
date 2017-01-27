<?php

namespace emeraldinspirations\library\typedCollection;

/**
 * @author Matthew "Juniper" Barlett <emeraldinspirations@gmail.com>
 */
class TypedCollectionTest extends \PHPUnit_Framework_TestCase
{

    static $PrepConstruct_Object;
    static $PrepConstruct_Test1;
    static $PrepConstruct_Test2;
    static $PrepConstruct_Array;

    public function prepConstruct() {
        if(!isset(self::$PrepConstruct_Object)) {
            self::$PrepConstruct_Array = [
                self::$PrepConstruct_Test1 = new MockImplementer(microtime()),
                self::$PrepConstruct_Test2 = new MockImplementer(microtime()),
                new MockImplementer(microtime()),
            ];

            self::$PrepConstruct_Object = new TypedCollection(
                MockInterface::class,
                self::$PrepConstruct_Array
            );
        }

    }

    /**
     * @covers TypedCollection::__construct()
     * @covers TypedCollection::verifyArray()
     * @covers TypedCollection::toArray()
     */
    public function testConstruct_Pass()
    {
        $this->prepConstruct();

        $this->assertSame(
            self::$PrepConstruct_Array,
            self::$PrepConstruct_Object->toArray()
        );
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionCode 1485484450
     */
    public function testVerifyArray_Fail()
    {
        TypedCollection::verifyArray(
            MockInterface::class,
            [
                new MockImplementer(),
                new MockNonImplementer(microtime()),
                new MockImplementer(),
            ]
        );
    }

    /**
     * @covers TypedCollection::getCollectionType()
     */
    public function testGetCollectionType()
    {
        $this->prepConstruct();

        $this->assertEquals(
            MockInterface::class,
            self::$PrepConstruct_Object->getCollectionType()
        );
    }

    /**
     * Verify unit tester working
     */
    public function testAssertSame()
    {
        $this->prepConstruct();

        $this->assertNotSame(
            [self::$PrepConstruct_Test1, self::$PrepConstruct_Test2],
            [self::$PrepConstruct_Test2, self::$PrepConstruct_Test1]
        );
    }

    /**
     * @covers TypedCollection::count()
     */
    public function testCount()
    {
        $this->prepConstruct();

        $this->assertEquals(3, self::$PrepConstruct_Object->count());
    }

    /**
     * @covers TypedCollection::getIterator()
     */
    public function testGetIterator()
    {
        $this->prepConstruct();

        $IterationCount = 0;

        foreach (self::$PrepConstruct_Object as $Element) {
            $IterationCount ++;
        }

        $this->assertEquals(3, $IterationCount);
    }

}

interface MockInterface
{
    public function mockFunction() : MockInterface;
}

class MockImplementer implements MockInterface
{
    public function mockFunction() : MockInterface
    {

    }
}

class MockNonImplementer
{
    public $ID;

    public function mockFunction() : MockInterface
    {

    }

    public function __construct($ID) {
        $this->ID = $ID;
    }

}
