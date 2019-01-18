<?php

namespace Dynamic\Elements\Embedded\Elements;

use DNADesign\Elemental\Models\BaseElement;
use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\TextareaField;

/**
 * Class ElementEmbededCode.
 */
class ElementEmbeddedCode extends BaseElement
{
    /**
     * @var string
     */
    private static $icon = 'code-icon';

    /**
     * @var string
     */
    private static $singular_name = 'Embedded Code Element';

    /**
     * @var string
     */
    private static $plural_name = 'Embedded Code Elements';

    /**
     * @var array
     */
    private static $db = [
        'Code' => 'HTMLText',
    ];

    /**
     * @var string
     */
    private static $table_name = 'ElementEmbeddedCode';

    /**
     * @return FieldList
     */
    public function getCMSFields()
    {
        $fields = parent::getCMSFields();
        $fields->replaceField(
            'Code',
            TextareaField::create('Code')
                ->setTitle('Embed Code')
        );

        return $fields;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return _t(__CLASS__.'.BlockType', 'Embedded Code');
    }

    /**
     * @return DBHTMLText
     */
    public function getSummary()
    {
        return DBField::create_field('HTMLText', $this->Code)->Summary(20);
    }

    /**
     * @return array
     */
    protected function provideBlockSchema()
    {
        $blockSchema = parent::provideBlockSchema();
        $blockSchema['content'] = $this->getSummary();
        return $blockSchema;
    }

}
