<?php if ( ! defined( 'ABSPATH' ) ) exit;
/**
 * Text Field Type Class.
 * 
 * @package     Ninja Forms
 * @subpackage  Classes/Fields
 * @copyright   Copyright (c) 2015, WPNINJAS
 * @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
 * @since       3.0
*/

class NF_Fields_SubmitButton extends NF_Fields_BaseField
{

	/**
	 * Get things rolling
	 * @since 3.0
	 */
	function __construct() {
		parent::__construct();
		$this->name = __( 'Submit Button', 'ninja-forms' );

		unset( $this->edit_sections['calculations'] );
		unset( $this->edit_sections['restrictions'] );

		unset( $this->edit_settings['basic']['label_pos'] );
		unset( $this->edit_settings['advanced']['admin_label'] );
	}
}