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

    class FrameFiveSlider extends DataObject {

        private static $db = [
            'SortOrder' => 'Int',
            'H5Title' => 'Text',
            'H5Desc' => 'Text',
        ];

        private static $has_one = [
            'HomePage' => 'HomePage',
            'H5SliderImg' => Image::class,
        ];

        private static $owns = [

            'H5SliderImg'

        ];

        public function getThumbnail() {
            if ($this->H5SliderImg()->exists()) { 
                return $this->H5SliderImg()->ScaleWidth(50); 
            } else { 
                return '(No Image)'; 
            }
        }

        private static $summary_fields = [
            'SortOrder' => 'Sort Order',
            'Thumbnail' => 'Image',
            'H5Title' => 'Title',
        ];

        public function getCMSFields() {
            $fields = parent::getCMSFields();
            $fields->addFieldToTab('Root.Main', ReadonlyField::create('SortOrder', 'Sort Order'));
            $fields->addFieldToTab('Root.Main', TextField::create('H5Title', 'Title'));
            $fields->addFieldToTab('Root.Main', TextareaField::create('H5Desc', 'Description'));
            $fields->addFieldToTab('Root.Main', $upload = UploadField::create('H5SliderImg','Image'));

            $fields->removeByName('HomePageID');
            $fields->removeByName('SortOrder');

            # SET FIELD DESCRIPTION 
            $upload->setDescription('Max file size: 1MB | Dimension: At Least 600px x 380px');
            # Set destination path for the uploaded images.
            $upload->setFolderName('homepage/frame5');

            return $fields;
        }
    }
}
