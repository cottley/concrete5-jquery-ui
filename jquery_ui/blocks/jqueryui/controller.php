<?php    
	defined('C5_EXECUTE') or die(_("Access Denied."));
	class JqueryuiBlockController extends BlockController {
		
		var $pobj;
		 
		protected $btTable = 'btJqueryui';
		protected $btInterfaceWidth = "400";
		protected $btInterfaceHeight = "230";
		
		public $theme = "cupertino";
    public $includespecificjquery = "false";
		
		/** 
		 * Used for localization. If we want to localize the name/description we have to include this
		 */
		public function getBlockTypeDescription() {
			return t("Lets you add a block that will allow access to jQuery UI widgets.");
		}
		
		public function getBlockTypeName() {
			return t("jQuery UI");
		}
				
		function __construct($obj = null) {		
			parent::__construct($obj);	
		}
    
    public function on_page_view() {
      $bv = new BlockView();
      $bv->setBlockObject($this->getBlockObject());
      $blockURL = $bv->getBlockURL();
      $pg = Page::getCurrentPage();
      if (!$pg->isEditMode()) {
        $html = Loader::helper('html');      
        $this->addHeaderItem($html->css("{$blockURL}/jquery-ui-1.9.2.custom/css/{$this->theme}/jquery-ui-1.9.2.custom.css"));
        if ($this->includespecificjquery == "true") {
          $this->addHeaderItem($html->javascript("{$blockURL}/jquery-ui-1.9.2.custom/js/jquery-1.8.3.js"));
        }
        $this->addHeaderItem($html->javascript("{$blockURL}/jquery-ui-1.9.2.custom/js/jquery-ui-1.9.2.custom.js"));
      }
      $this->set('isEditMode', $pg->isEditMode());
		}
    
		function view(){ 
			$this->set('theme', $this->theme);
      $this->set('includespecificjquery', $this->includespecificjquery);      
      $this->set('jscontent', $this->jscontent);      
		}
		
		function save($data) { 
			$args['theme'] = isset($data['theme']) ? trim($data['theme']) : '';
			$args['includespecificjquery'] = isset($data['includespecificjquery']) ? trim($data['includespecificjquery']) : 'false';
			$args['jscontent'] = isset($data['jscontent']) ? $data['jscontent'] : '';
			parent::save($args);
		}
		
	}
	
?>