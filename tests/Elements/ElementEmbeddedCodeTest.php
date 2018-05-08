<?php

namespace Dynamic\Elements\Embedded\Tests;

use Dynamic\Elements\Embedded\Elements\ElementEmbeddedCode;
use SilverStripe\Core\Injector\Injector;
use SilverStripe\Dev\SapphireTest;
use SilverStripe\Forms\FieldList;

/**
 * Class ElementEmbeddedCodeTest.
 */
class ElementEmbeddedCodeTest extends SapphireTest
{
    /**
     * @var string
     */
    protected static $fixture_file = '../fixtures.yml';

    /**
     *
     */
    public function testGetCMSFields()
    {
        $object = $this->objFromFixture(ElementEmbeddedCode::class, 'one');
        $fields = $object->getCMSFields();
        $this->assertInstanceOf(FieldList::class, $fields);
    }

    /**
     *
     */
    public function testGetType()
    {
        $object = $this->objFromFixture(ElementEmbeddedCode::class, 'one');
        $this->assertEquals($object->getType(), 'Embedded Code');
    }
}
