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

    class FrameSlider extends DataObject {

        private static $db = [
            'SortOrder' => 'Int',
            'H1Title' => 'Text',
            'H1Desc' => 'Text',
            'H1BtnText' => 'Text',
            'H1BtnLink' => 'Text',
        ];

        private static $has_one = [
            'HomePage' => 'HomePage',
            'H1SliderImg' => Image::class,
        ];

        private static $owns = [

            'H1SliderImg'

        ];

        public function getThumbnail() {
            if ($this->H1SliderImg()->exists()) { 
                return $this->H1SliderImg()->ScaleWidth(50); 
            } else { 
                return '(No Image)'; 
            }
        }

        private static $summary_fields = [
            'SortOrder' => 'Sort Order',
            'Thumbnail' => 'Image',
            'H1Title' => 'Title',
        ];

        public function getCMSFields() {
            $fields = parent::getCMSFields();
            $fields->addFieldToTab('Root.Main', ReadonlyField::create('SortOrder', 'Sort Order'));
            $fields->addFieldToTab('Root.Main', TextField::create('H1Title', 'Title'));
            $fields->addFieldToTab('Root.Main', TextareaField::create('H1Desc', 'Description'));
            $fields->addFieldToTab('Root.Main', TextField::create('H1BtnText', 'Button Text'));
            $fields->addFieldToTab('Root.Main', TextField::create('H1BtnLink', 'Button Link To'));
            $fields->addFieldToTab('Root.Main', $upload = UploadField::create('H1SliderImg','Image'));

            $fields->removeByName('HomePageID');
            $fields->removeByName('SortOrder');

            # SET FIELD DESCRIPTION 
            $upload->setDescription('Max file size: 1MB | Dimension: At Least 1300px x 637px');
            # Set destination path for the uploaded images.
            $upload->setFolderName('homepage/frame1');

            return $fields;
        }
    }
}
