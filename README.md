# PHP: Unexpected Behavior in Array Average Calculation with Non-Numeric Values

This repository demonstrates a potential issue in a PHP function designed to calculate the average of an array of numbers. The function handles empty arrays gracefully but doesn't explicitly check for non-numeric values in the input array.  This can lead to unexpected results or errors.

The `bug.php` file contains the original code with example usage showcasing the unexpected behavior when non-numeric values (strings, boolean, etc) are present. The `bugSolution.php` file demonstrates a corrected version that handles these cases appropriately, providing more robust and reliable average calculation.
