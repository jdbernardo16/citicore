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

	class Article extends Page {

		private static $db = [
		
			/*News*/
			'NewsTitle' => 'Text',
			'FName' => 'Text',
			'Date' => 'Text',
			'Desc' => 'HTMLText',
			

		];

		private static $has_one = [
			'F1BG' => Image::class,
			'File1' => File::class,
		];

		private static $has_many = [
			
		];

		private static $owns = [
			'F1BG',
			'File1',
		];

		private static $allowed_children = 'none';

		private static $defaults = array(
			'PageName' => 'Article',
			'MenuTitle' => 'Article',
			'ShowInMenus' => true,
			'ShowInSearch' => true,
		);

		public function getCMSFields() {
			$fields = parent::getCMSFields();

			/*
			|-----------------------------------------------
			| @Frame1
			|----------------------------------------------- */
			$fields->addFieldsToTab('Root.ArticleDetails.Main', array(
				$uploadf1 = UploadField::create('F1BG','Banner'),
				new TextField('NewsTitle', 'Article Title'),
				new TextField('Date', 'Date'),
				new HTMLEditorField('Desc', 'Description'),
			));
			# SET FIELD DESCRIPTION 
			$uploadf1->setDescription('Max file size: 2MB | Dimension: 1366px x 768px');
			# Set destination path for the uploaded images.
			$uploadf1->setFolderName('Investor/Article');

			$fields->addFieldsToTab('Root.FileDownloadables.Main', array(
				new TextField('FName', 'File Name'),
				$uploadf2 = UploadField::create('File1','PDF File'),
			));

			# SET FIELD DESCRIPTION 
			$uploadf2->setDescription('Max file size: 20MB | PDF Only');
			# Set destination path for the uploaded images.
			$uploadf2->setFolderName('Investor/Downloadables');





			#Remove by tab
			$fields->removeFieldFromTab('Root.Main', 'Content');


			# SET FIELD DESCRIPTION 
			
			
			# Set destination path for the uploaded images.
			

			return $fields;
		}
	}

	class ArticlePageController extends PageController {
		
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
