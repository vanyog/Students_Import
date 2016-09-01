# Data Processing

How is the CSV / Excel data processed before it is imported into RosarioSIS database?

## Excel files

Excel files are automatically converted to CSV format.
Note: Only the first spreadsheet is saved.

## All data
[Trimmed](http://php.net/trim) (spaces are stripped), examples:

- "  John " => "John"
- "  " => empty value (= `NULL`)

## Field types

You can double-check the type of each field in the info tooltip (on the Import form) or in _Students > Student Fields_.

- **Text / Pull-down / Auto Pull-down / Edit Pull-down / Export Pull-down**: values are truncated if longer than 255 characters.
- **Long text**: values are truncated if longer than 5000 characters.
- **Number**: values are checked to be numeric (float, integer) and no longer than 22 digits.
- **Date**: [supported date formats](http://php.net/manual/en/datetime.formats.date.php).
- **Checkbox**: only `Y` values are considered valid for the _checked_ state. Any other value will be omitted. (Note that you can change the `Y` for a custom value in the Premium module).
- **Select Multiple from Options**: semi-colons (`;`) and pipes (`|`) are detected as values separators (examples: `Value 1;Value 2;Value 3` or `Value 1|Value 2|Value 3`).

## Grade Levels

In case you choose a _column of your file_, the detection is based on the Grade Level **title** (see _School Setup > Grade Levels_), examples using the default Grade Levels coming with RosarioSIS:

- `Kindergarten` => detected
- `2nd` => detected
- `Random` => defaults to `Kindergarten`
- empty value => defaults to `Kindergarten`
