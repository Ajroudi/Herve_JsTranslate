<?php
/**
 * Translation sample controller
 *
 * @category	Herve
 * @package		Herve_JsTranslate
 * @copyright	Copyright (c) 2012 Hervé Guétin. (http://www.herveguetin.com)
 * @license		http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 * @author		Hervé G. - Twitter : @vrnet
 */
class Herve_JsTranslate_TranslateController extends Mage_Core_Controller_Front_Action {
	
	/**
	 * Example!
	 */
	public function exampleAction() {
		$this->loadLayout();
		$this->renderLayout();
	}
}