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

	class HeaderFooter extends Page {

		private static $db = [

			'SEO' => 'Text',
			/*'Description' => 'Text',*/

			'FtrTitle1' => 'Text',
			'FtrDesc1' => 'Text',

			'FtrTitle2' => 'Text',

			'FtrTitle3' => 'Text',
			'FtrAdd' => 'Text',
			'FtrAddLink' => 'Text',
			'FtrNum' => 'Text',
			'FtrEmail' => 'Text',

			'FtrCopyright' => 'Text',

		];

		private static $has_one = [

			'HeaderLogo' => Image::class,
			'Favicon' => Image::class,

		];

		private static $has_many = [
			'SocialLinks' => SocialLink::class,
		];

		private static $owns = [
	        'HeaderLogo',
	        'Favicon'
	    ];

		private static $defaults = array(
			'PageName' => 'Header & Footer',
			'MenuTitle' => 'Header & Footer',
			'ShowInMenus' => false,
			'ShowInSearch' => false,
		);

		public function getCMSFields() {
			$fields = parent::getCMSFields();

			$fields->addFieldToTab('Root.Header', $upload = UploadField::create('Favicon','Favicon'));
			$fields->addFieldToTab('Root.Header', $upload1 = UploadField::create('HeaderLogo','Logo'));

			$fields->addFieldToTab('Root.SEO Keywords', $desc = TextareaField::create('SEO', 'SEO Keywords'));
			/*$fields->addFieldToTab('Root.Description', TextareaField::create('Description', 'Site Description'));*/

			/*
			|-----------------------------------------------
			| @Social Links
			|----------------------------------------------- */
			$fields->addFieldToTab('Root.SocialLink', new TabSet('SocialLinkSets',
				new Tab('List',
					GridField::create('SocialLinks', 'Social Medias', 
						$this->SocialLinks(), 
					GridFieldConfig_RecordEditor::create(10)
					->addComponent(new GridFieldSortableRows('SortOrder'))
					)
				)
			));

			/*
			|-----------------------------------------------
			| @Footer
			|----------------------------------------------- */
			$fields->addFieldToTab('Root.Footer', new TabSet('FooterSets',
				new Tab('1st Column',
					TextField::create('FtrTitle1', 'Title'),
					TextareaField::create('FtrDesc1', 'Description')
				),
				new Tab('2nd Column',
					TextField::create('FtrTitle2', 'Title')
				),
				new Tab('3st Column',
					TextField::create('FtrTitle3', 'Title'),
					TextField::create('FtrAdd', 'Address'),
					TextField::create('FtrAddLink', 'Address Waze Link'),
					TextField::create('FtrNum', 'Number'),
					TextField::create('FtrEmail', 'Email')
				),
				new Tab('Copyright',
					TextField::create('FtrCopyright', 'Copyright Text')
				)
			));

			#Description
			/*$desc->setDescription('Separate each descriptions with comma (,)');*/
			$upload->setDescription('Max file size: 1MB');
			$upload1->setDescription('Max file size: 1MB');

			$upload->setFolderName('headerfooter/');
			$upload1->setFolderName('headerfooter/');
			
			/*
			* Remove by tab
			*/
			$fields->removeFieldFromTab('Root.Main', 'Content');

			return $fields;
		}
	}

	class HeaderFooterController extends PageController {

	}
}
