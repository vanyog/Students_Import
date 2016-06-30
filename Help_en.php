<?php
/**
 * English Help texts
 *
 * Texts are organized by:
 * - Module
 * - Profile
 *
 * Please use this file as a model to translate the texts to your language
 * The new resulting Help file should be named after the following convention:
 * Help_[two letters language code].php
 *
 * @author François Jacquet
 *
 * @uses Heredoc syntax
 * @see  http://php.net/manual/en/language.types.string.php#language.types.string.syntax.heredoc
 *
 * @package Students Import module
 * @subpackage Help
 */

// STUDENTS IMPORT ---.
if ( User( 'PROFILE' ) === 'admin' ) :

	$help['Students_Import/StudentsImport.php'] = <<<HTML
<p>
	<i>Students Import</i> allows you to import a students database contained in an <b>Excel</b> spreadsheet or a <b>CSV</b> file.
</p>
<p>
	First thing, it is recommended to <b>backup your database</b> in case something goes wrong.
</p>
<p>
	First, select the Excel (.xls, .xlsx) or CSV (.csv) file containing your students data using the "Select CSV or Excel file".
	Then, click the "Submit" button to upload the file.
	Please note that if you select an Excel file, only the first spreadsheet will be uploaded.
</p>
<p>
	On the next screen, you will be able to associate a column to each Student Field.
	Also set the Enrollment options that will apply to every student.
	Please note that the fields in <span style="color:red;">red</span> are mandatory.
	Check the "Import first row" checkbox at the top of the screen if your file's first row contains student data instead of column labels.
	Please also note that the <i>Checkbox</i> fields checked state is <i>Y</i>.
	Once you are set, click the "Import Students" button.
</p>

HTML;

endif;
