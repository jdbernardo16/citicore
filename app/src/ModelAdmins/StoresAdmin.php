<?php

namespace {

	use SilverStripe\Admin\ModelAdmin;

	class StoreAdmin extends ModelAdmin {

		private static $managed_models = [
			Store::class,
		];

		private static $menu_title = 'Place Manager';
		private static $url_segment = 'place';
	}
}