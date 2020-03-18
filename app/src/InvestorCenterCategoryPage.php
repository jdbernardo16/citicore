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

	class InvestorCenterCategoryPage extends Page {

		private static $db = [
		
			

		];

		private static $has_one = [

			

		];

		private static $has_many = [
			
		];

		private static $owns = [

			

		];

		private static $allowed_children = array(
			'InvestorCenterSubCategoryPage',
		);

		private static $defaults = array(
			'PageName' => 'Investor Center Category Page',
			'MenuTitle' => 'Investor Center Category',
			'ShowInMenus' => true,
			'ShowInSearch' => true,
		);

		public function getCMSFields() {
			$fields = parent::getCMSFields();

			/*
			|-----------------------------------------------
			| @Frame 1
			|----------------------------------------------- */
			





			#Remove by tab
			$fields->removeFieldFromTab('Root.Main', 'Content');


			# SET FIELD DESCRIPTION 
			
			
			# Set destination path for the uploaded images.
			

			return $fields;
		}
	}

	class InvestorCenterCategoryPageController extends PageController {
		
		public function init() {
			parent::init();


			/*REDIRECT TO CHILDREN*/

			// if (empty($this->Content)) {
			// 	if($this->Children()->Count()){
			// 		return $this->redirect($this->Children()->First()->AbsoluteLink());
			// 	}
			// }
			
		}
	}
}
