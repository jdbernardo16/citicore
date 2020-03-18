<?php
namespace {
	use SilverStripe\Admin\ModelAdmin;
	use SilverStripe\CMS\Model\SiteTree;
	use Page;  
	use PageController;
	use SilverStripe\Forms\TextField;
	use SilverStripe\Forms\TextareaField;
	use SilverStripe\Forms\HTMLEditor\HTMLEditorField;
	use SilverStripe\Forms\HTMLEditor;
	use SilverStripe\AssetAdmin\Forms\UploadField;
	use SilverStripe\Assets\Image;
	use SilverStripe\Assets\File;
	use SilverStripe\Forms\TabSet;
	use SilverStripe\Forms\Tab;
	use SilverStripe\ORM\DataObject;
	use SilverStripe\Forms\FieldList;
	use SilverStripe\Forms\GridField\GridField;
	use SilverStripe\Forms\GridField\GridFieldConfig_RecordEditor;
	use SilverStripe\Core\Injector\InjectionCreator;

	class CareerAdmin extends ModelAdmin {
		private static $managed_models = array(
		    'Application' => [
				'title' => 'Application'
			],
		);

		public function getEditForm($id = null, $fields = null) {
			$form = parent::getEditForm($id, $fields);
				

			if($this->modelClass == 'TheRide' && $gridField = $form->Fields()->dataFieldByName($this->sanitiseClassName($this->modelClass))) {

	            if($gridField instanceof GridField) {
	                $gridField->getConfig()->addComponent(new GridFieldSortableRows('SortOrder'));
	            }
	        }
	        
			return $form;
		}

		private static $url_segment = 'Application';
		private static $menu_title = 'Applications';
	}
}