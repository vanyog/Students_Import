
/**********************************************************
 delete.sql file
 Required if install.sql file present
 - Delete profile exceptions
***********************************************************/

--
-- Delete profile exceptions
--

DELETE FROM profile_exceptions WHERE modname='Students_Import/StudentsImport.php';

