# Data Processing

How is the CSV / Excel file data processed before it is imported into RosarioSIS database?

## All data
[Trimmed](http://php.net/trim) (spaces are stripped), examples:

- `  John ` => `John`
- `  ` => empty value (= NULL)

## Grade Levels

_In case you choose a column from your file_, the detection is based on the Grade Level **title** (see _School Setup > Grade Levels_), examples using the default Grade Levels coming with RosarioSIS:

- `Kindergarten` => detected
- `2nd` => detected
- `Random` => defaults to `Kindergarten`
- empty value => defaults to `Kindergarten`

## Field types

You can check the type of each field in the info tooltip (on the Import form) or in _Students > Student Fields_.

- **Text / Pull-down / Auto Pull-down / Edit Pull-down / Export Pull-down**: values are truncated if longer than 255 characters.
- **Long text**: values are truncated if longer than 5000 characters.
- **Number**: values are checked to be numeric (float, integer) and no longer than 22 digits.
- **Date**: [supported date formats](http://php.net/manual/en/datetime.formats.date.php).
- **Checkbox**: only `Y` values are considered valid for the _checked_ state. Any other value will be omitted. (Note that you can change the `Y` for a custom value in the Premium module).
- **Select Multiple from Options**: semi-colons (`;`) and pipes (`|`) are detected as values separators (examples: `Value 1;Value 2;Value 3` or `Value 1|Value 2|Value 3`).
