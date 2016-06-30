<?php
/**
 * Menu.php file
 *
 * Required
 * - Add Menu entries to other modules
 *
 * @package Students Import module
 */

// Use dgettext() function instead of _() for Module specific strings translation.
// See locale/README file for more information.
$module_name = dgettext( 'Students_Import', 'Students Import' );

// Add a Menu entry to the Students module.
if ( $RosarioModules['Students'] ) // Verify Students module is activated.
{
	$menu['Students']['admin'] += array(
		'Students_Import/StudentsImport.php' => dgettext( 'Students_Import', 'Students Import' ),
	);
}
