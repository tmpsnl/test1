<?php
/**
 * This is a file doc comment.
 *
 * @package     Test
 * @since               1.0
 */

/**
 * Test class title goes here.
 *
 * This is a description of this class.
 *
 * @since 1.0
 */
class Test {

	/**
	 * Variable description.
	 *
	 * @var string $var Comment with full stop.
	 */
	public $var;

	/**
	 * Constructor.
	 *
	 * @param array $var Comment with full stop.
	 */
	public function __construct( $var ) {
			$this->var = $var;
	}
}

function testing() {
//34
echo 'No tabs';
//34//34
	echo 'This is 1 tab';
//34//34//34
		echo 'This is 2 tabs';
//34
echo 'No tabs';
	//34
	echo 'This is 1 tab';
		//34
		echo 'This is 2 tabs';
}
