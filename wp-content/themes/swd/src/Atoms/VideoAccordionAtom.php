<?php

namespace Swd\Atoms;

use Swd\Util;

class VideoAccordionAtom {
	function init( $block_data ): void {
		$this->render( $block_data );
	}
	public function __construct(
		public Util $util,
	) {}

	public function render( $block_data ) {
		require SWD_ATOM_BLOCKS_TEMPLATE . 'video-accordion-block.php';
	}
}
