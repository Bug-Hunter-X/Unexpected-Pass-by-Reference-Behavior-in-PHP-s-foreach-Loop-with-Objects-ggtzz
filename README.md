# PHP foreach Loop and Pass-by-Reference with Objects

This example demonstrates a subtle but important issue related to pass-by-reference in PHP's `foreach` loop when dealing with objects.  While pass-by-reference generally works as expected with arrays of simple types, it behaves differently with arrays of objects.

The `bug.php` file shows how modifying an array of objects within a `foreach` loop using pass-by-reference doesn't modify the original objects. The solution `bugSolution.php` shows how to correctly modify the objects.  This is a common pitfall for PHP developers working with complex data structures.