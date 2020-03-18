<?php

namespace {
    use SilverStripe\CMS\Model\SiteTree;
    use SilverStripe\ORM\DataObject;
    
    use SilverStripe\Forms\TabSet;
    use SilverStripe\Forms\Tab;
    use SilverStripe\Forms\TextField;
    use SilverStripe\Forms\TextareaField;
    use SilverStripe\Forms\CheckboxField;
    use SilverStripe\Forms\DateField;
    use SilverStripe\Forms\ReadonlyField;
    use SilverStripe\Forms\DropdownField;
    use SilverStripe\Forms\HTMLEditor\HTMLEditorField;

    use SilverStripe\Forms\GridField\GridField;
    use SilverStripe\Forms\GridField\GridFieldConfig_RecordEditor;
    use UndefinedOffset\SortableGridField\Forms\GridFieldSortableRows;
    use Bummzack\SortableFile\Forms\SortableUploadField;

    use SilverStripe\AssetAdmin\Forms\UploadField;
    use SilverStripe\Assets\Image;
    use SilverStripe\Assets\File;

    use SilverStripe\Versioned\Versioned;
    use SilverStripe\Control\Controller;
    use SilverStripe\Control\HTTPRequest;

    class SocialLink extends DataObject {

        private static $db = [
            'SortOrder' => 'Int',
            'SlIcon' => 'Text',
            'SlLink' => 'Text',
        ];

        private static $has_one = [
            'HeaderFooter' => 'HeaderFooter',
        ];

        private static $owns = [

        ];

        private static $summary_fields = [
            'SortOrder' => 'Sort Order',
            'SlLink' => 'Title',
        ];

        public function getCMSFields() {
            $fields = parent::getCMSFields();
            $fields->addFieldToTab('Root.Main', ReadonlyField::create('SortOrder', 'Sort Order'));
            $fields->addFieldToTab('Root.Main', $fontawesome = TextField::create('SlIcon','Icon'));
            $fields->addFieldToTab('Root.Main', TextField::create('SlLink', 'Link'));

            $fields->removeByName('HeaderFooterID');
            $fields->removeByName('SortOrder');

            # SET FIELD DESCRIPTION 
            $fontawesome->setDescription('Use icons from https://fontawesome.com/');

            return $fields;
        }
    }
}
