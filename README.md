Students Import Module
======================

![screenshot](https://raw.githubusercontent.com/francoisjacquet/Students_Import/master/screenshot.png)

http://github.com/francoisjacquet/Students_Import

Version 1.3 - July, 2016

Author François Jacquet

License MIT

DESCRIPTION
-----------
Import Students from a CSV or Excel file.
Easily bulk upload your Students database to RosarioSIS.
Import Students info (general & custom fields), enroll them & eventually create accounts.
This module adds an entry to the Students menu.

Includes Help.
Translated in French & Spanish.
[Data processing reference](https://github.com/francoisjacquet/Students_Import/blob/master/DATA_PROCESSING.md).

Premium module features (coming soon):

- Import Addresses & Contacts (Father, Mother, Guardian...) and their information.
- Import Addresses & People custom fields.
- Generate generic Username & Password so Students can login.
- Change the default value ("Y") recognized as checked state: for example, "Yes" (for your _Checkbox_ type custom fields).

CONTENT
-------
Students
- Students Import

INSTALL
-------
Copy the `Students_Import/` folder (if named `Students_Import-master`, rename it) and its content inside the `modules/` folder of RosarioSIS.

Go to _School Setup > School Configuration > Modules_ and click "Activate".

Requires RosarioSIS 2.9+
Requires PHP `zip` extension installed.
