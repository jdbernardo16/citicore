<?php

namespace {
	use SilverStripe\CMS\Model\SiteTree;

	use Page;  
	use PageController;

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

	use SilverStripe\ORM\PaginatedList;
	use SilverStripe\ORM\DataObject;
	use SilverStripe\ORM\ArrayList;
	use SilverStripe\ORM\GroupedList;

	use SilverStripe\View\Requirements;
	use SilverStripe\View\ArrayData;

	use SilverStripe\Control\HTTPRequest;

	class HomePage extends Page {

		private static $db = [
		
			/*Frame 2*/
			'Fr2FrameTitle' => 'Text',
			'Fr2Title' => 'Text',
			'Fr2Desc' => 'Text',
			'Fr2BtnText' => 'Text',
			'Fr2BtnLink' => 'Text',

			/*Frame 3*/
			'Fr3Title' => 'Text',
			'Fr3Desc' => 'Text',

			'Fr3Title1' => 'Text',
			'Fr3Decs1' => 'Text',
			'Fr3LinkText1' => 'Text',
			'Fr3LinkTo1' => 'Text',

			'Fr3Title2' => 'Text',
			'Fr3Decs2' => 'Text',
			'Fr3LinkText2' => 'Text',
			'Fr3LinkTo2' => 'Text',

			'Fr3Title3' => 'Text',
			'Fr3Decs3' => 'Text',
			'Fr3LinkText3' => 'Text',
			'Fr3LinkTo3' => 'Text',

			/*Frame 4*/
			'Fr4Title' => 'Text',

			/*Frame 5*/
			'Fr5FrameTitle' => 'Text',
			'Fr5Title' => 'Text',
			'Fr5Desc' => 'Text',
			'Fr5BtnText' => 'Text',
			'Fr5BtnLink' => 'Text',

			/*Frame 6*/
			'Fr6Title1' => 'Text',
			'Fr6Title2' => 'Text',
			'Fr6Title3' => 'Text',

			'Fr6CntTitle1' => 'Text',
			'Fr6CntName1' => 'Text',
			'Fr6CntNum1' => 'Text',
			'Fr6CntMail1' => 'Text',

			'Fr6CntTitle2' => 'Text',
			'Fr6CntName2' => 'Text',
			'Fr6CntNum2' => 'Text',
			'Fr6CntMail2' => 'Text',

			'Fr6CntTitle3' => 'Text',
			'Fr6CntName3' => 'Text',
			'Fr6CntNum3' => 'Text',
			'Fr6CntMail3' => 'Text',

		];

		private static $has_one = [

			'Fr3BG' => Image::class,
			'Fr3Img1' => Image::class,
			'Fr3Img2' => Image::class,
			'Fr3Img3' => Image::class,

			'Fr5BG' => Image::class,
			'Fr5Img1' => Image::class,

			'Fr6Logo' => Image::class,
			'Fr6Img1' => Image::class,
			'Fr6Img2' => Image::class,
			'Fr6Img3' => Image::class,

		];

		private static $has_many = [
			'FrameSliders' => FrameSlider::class,
			'FrameFiveSliders' => FrameFiveSlider::class,
		];

		private static $owns = [

			'Fr3BG',
			'Fr3Img1',
			'Fr3Img2',
			'Fr3Img3',

			'Fr5BG',
			'Fr5Img1',

			'Fr6Logo',
			'Fr6Img1',
			'Fr6Img2',
			'Fr6Img3',

		];

		private static $allowed_children = "none";

		private static $defaults = array(
			'PageName' => 'Home Page',
			'MenuTitle' => 'Home',
			'ShowInMenus' => true,
			'ShowInSearch' => true,
		);

		public function getCMSFields() {
			$fields = parent::getCMSFields();

			/*
			|-----------------------------------------------
			| @Frame 1
			|----------------------------------------------- */
			$fields->addFieldToTab('Root.Frame1', new TabSet('Frame1Sets',
				new Tab('List',
					GridField::create('FrameSliders', 'Frame 1 Slider', 
						$this->FrameSliders(), 
					GridFieldConfig_RecordEditor::create(10)
					->addComponent(new GridFieldSortableRows('SortOrder'))
					)
				)
			));


			/*
			|-----------------------------------------------
			| @Frame 2
			|----------------------------------------------- */
			$fields->addFieldToTab('Root.Frame2', new TabSet('Frame2Sets',
				new Tab('General',
					TextField::create('Fr2FrameTitle', 'Frame Title'),
					TextField::create('Fr2Title', 'Title'),
					TextareaField::create('Fr2Desc', 'Description')
				),
				new Tab('Button',
					TextField::create('Fr2BtnText', 'Button Text'),
					TextField::create('Fr2BtnLink', 'Button Link')
				)
			));


			/*
			|-----------------------------------------------
			| @Frame 3
			|----------------------------------------------- */
			$fields->addFieldToTab('Root.Frame3', new TabSet('Frame3Sets',
				new Tab('General',
					TextField::create('Fr3Title', 'Title'),
					TextareaField::create('Fr3Desc', 'Description'),
					$uploadf3 = UploadField::create('Fr3BG','Background Image')
				),
				new Tab('Left Container',
					TextField::create('Fr3Title1', 'Title'),
					TextareaField::create('Fr3Decs1', 'Description'),
					TextField::create('Fr3LinkText1', 'Button Text'),
					TextField::create('Fr3LinkTo1', 'Button Link'),
					$uploadf3_1 = UploadField::create('Fr3Img1','Image')
				),
				new Tab('Middle Container',
					TextField::create('Fr3Title2', 'Title'),
					TextareaField::create('Fr3Decs2', 'Description'),
					TextField::create('Fr3LinkText2', 'Button Text'),
					TextField::create('Fr3LinkTo2', 'Button Link'),
					$uploadf3_2 = UploadField::create('Fr3Img2','Image')
				),
				new Tab('Right Container',
					TextField::create('Fr3Title3', 'Title'),
					TextareaField::create('Fr3Decs3', 'Description'),
					TextField::create('Fr3LinkText3', 'Button Text'),
					TextField::create('Fr3LinkTo3', 'Button Link'),
					$uploadf3_3 = UploadField::create('Fr3Img3','Image')
				)
			));


			/*
			|-----------------------------------------------
			| @Frame 4
			|----------------------------------------------- */
			$fields->addFieldToTab('Root.Frame4', new TabSet('Frame4Sets',
				new Tab('General',
					TextField::create('Fr4Title', 'Title')
				)
			));


			/*
			|-----------------------------------------------
			| @Frame 5
			|----------------------------------------------- */
			$fields->addFieldToTab('Root.Frame5', new TabSet('Frame5Sets',
				new Tab('General',
					$uploadf5_1 = UploadField::create('Fr5Img1','Logo'),
					TextField::create('Fr5FrameTitle', 'Frame Title'),
					TextField::create('Fr5Title', 'Title'),
					TextareaField::create('Fr5Desc', 'Description'),
					$uploadf5 = UploadField::create('Fr5BG','Background Image')
				),
				new Tab('Button',
					TextField::create('Fr5BtnText', 'Button Text'),
					TextField::create('Fr5BtnLink', 'Button Link')
				),
				new Tab('Slider',
					GridField::create('FrameFiveSliders', 'Frame 5 Slider', 
						$this->FrameFiveSliders(), 
					GridFieldConfig_RecordEditor::create(10)
					->addComponent(new GridFieldSortableRows('SortOrder'))
					)
				)
			));

			/*
			|-----------------------------------------------
			| @Frame 6
			|----------------------------------------------- */
			$fields->addFieldToTab('Root.Frame6', new TabSet('Frame6Sets',
				new Tab('List 1',
					TextField::create('Fr6Title1', 'Title'),
					$uploadf6_1 = UploadField::create('Fr6Img1','Background Image')
				),
				new Tab('List 2',
					TextField::create('Fr6Title2', 'Title'),
					$uploadf6_2 = UploadField::create('Fr6Img2','Background Image')
				),
				new Tab('List 3',
					TextField::create('Fr6Title3', 'Title'),
					$uploadf6_3 = UploadField::create('Fr6Img3','Background Image')
				),
				new Tab('Contact List 1',
					TextField::create('Fr6CntTitle1', 'Contact Title'),
					TextField::create('Fr6CntName1', 'Contact Name'),
					TextField::create('Fr6CntNum1', 'Contact Number'),
					TextField::create('Fr6CntMail1', 'Contact Email')
				),
				new Tab('Contact List 2',
					TextField::create('Fr6CntTitle2', 'Contact Title'),
					TextField::create('Fr6CntName2', 'Contact Name'),
					TextField::create('Fr6CntNum2', 'Contact Number'),
					TextField::create('Fr6CntMail2', 'Contact Email')
				),
				new Tab('Contact List 3',
					TextField::create('Fr6CntTitle3', 'Contact Title'),
					TextField::create('Fr6CntName3', 'Contact Name'),
					TextField::create('Fr6CntNum3', 'Contact Number'),
					TextField::create('Fr6CntMail3', 'Contact Email')
				)

			));


			#Remove by tab
			$fields->removeFieldFromTab('Root.Main', 'Content');
			

			/**
			* EMAIL RECEIPIENT : Text Field
			* - Flexibility purpose; to change email with ease.
			*/
			/*$fields->addFieldsToTab('Root.Email Recipient', array(
				$desc = new TextField('Test', 'Email Address'),
			));*/

			# SET FIELD DESCRIPTION 
			$uploadf3->setDescription('Max file size: 1MB | Dimension: At Least 1300px x 600px');
			$uploadf3_1->setDescription('Max file size: 1MB | Dimension: At Least 360px x 300px');
			$uploadf3_2->setDescription('Max file size: 1MB | Dimension: At Least 360px x 300px');
			$uploadf3_3->setDescription('Max file size: 1MB | Dimension: At Least 360px x 300px');

			$uploadf5->setDescription('Max file size: 1MB | Dimension: At Least 1300px x 800px');
			$uploadf5_1->setDescription('Max file size: 1MB | Dimension: Within 350px x 200px');

			$uploadf6_1->setDescription('Max file size: 1MB | Dimension: At Least 600px x 200px');
			$uploadf6_2->setDescription('Max file size: 1MB | Dimension: At Least 600px x 200px');
			$uploadf6_3->setDescription('Max file size: 1MB | Dimension: At Least 600px x 200px');
			/*$desc->setDescription('Sample format: email@sample.com, email_2@sample.com');*/
			
			# Set destination path for the uploaded images.
			$uploadf3->setFolderName('homepage/frame3');
			$uploadf3_1->setFolderName('homepage/frame3');
			$uploadf3_2->setFolderName('homepage/frame3');
			$uploadf3_3->setFolderName('homepage/frame3');

			$uploadf5->setFolderName('homepage/frame5');
			$uploadf5_1->setFolderName('homepage/frame5');

			$uploadf6_1->setFolderName('homepage/frame6');
			$uploadf6_2->setFolderName('homepage/frame6');
			$uploadf6_3->setFolderName('homepage/frame6');

			return $fields;
		}
	}

	class HomePageController extends PageController {
		
	}
}
