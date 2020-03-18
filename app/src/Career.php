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

	class Career extends Page {

		private static $db = [
			#Specialty
			'SortID' => 'Int',
			'JobTitle' => 'Text',
			'JobLoc' => 'Text',
			'ResDesc' => 'HTMLText',
			'ReqDesc' => 'HTMLText',

		];

		private static $has_one = [

			

		];

		private static $has_many = [
			
		];

		private static $owns = [

			

		];

		private static $allowed_children = "none";

		private static $defaults = array(
			'PageName' => 'Career',
			'MenuTitle' => 'Career',
			'ShowInMenus' => true,
			'ShowInSearch' => true,
		);

		public function getCMSFields() {
			$fields = parent::getCMSFields();

			/*
			|-----------------------------------------------
			| @Frame1
			|----------------------------------------------- */
			$fields->addFieldsToTab('Root.Career.Main', array(
				new TextField('JobTitle', 'Job Title'),
				new TextField('JobLoc', 'Job Location'),
				new HTMLEditorField('ResDesc', 'Responsibilities'),
				new HTMLEditorField('ReqDesc', 'Requirements'),
			));


			#Remove by tab
			$fields->removeFieldFromTab('Root.Main', 'Content');

			return $fields;
		}
	}

	class CareerController extends PageController {
		public function init() {
			parent::init();
		}
	}
}
