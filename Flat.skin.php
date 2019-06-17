<?php
/**
 * SkinTemplate class for the Flat skin
 *
 * @ingroup Skins
 */
class SkinFlat extends SkinTemplate {
	public $skinname = 'flat', $stylename = 'Flat',
		$template = 'FlatTemplate', $useHeadElement = true;

	/**
	 * Add CSS via ResourceLoader
	 *
	 * @param $out OutputPage
	 */
	public function initPage( OutputPage $out ) {

		$out->addModuleStyles( array(
			'mediawiki.skinning.interface',
			'mediawiki.skinning.content.externallinks',
			'skins.flat'
		) );
/*		$out->addModules( array(
			'skins.flat.js'
		) );*/
	}

	/**
	 * @param $out OutputPage
	 */
	function setupSkinUserCss( OutputPage $out ) {
		parent::setupSkinUserCss( $out );
	}
}
