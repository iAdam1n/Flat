<?php
/**
 * SkinTemplate class for the Flat skin
 *
 * @ingroup Skins
 */
class SkinFlat extends SkinTemplate {
	public $skinname = 'Flat', $stylename = 'Flat',
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
			'skins.Flat'
		) );
/*		$out->addModules( array(
			'skins.Flat.js'
		) );*/
	}

	/**
	 * @param $out OutputPage
	 */
	function setupSkinUserCss( OutputPage $out ) {
		parent::setupSkinUserCss( $out );
	}
}
