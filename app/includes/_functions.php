<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <?php
    /**
     * Takes an array as a parameter and returns the character string
     *
     * @param array $array
     * @return string values ​​of the array to be displayed in the form of a list
     */
    //exercice 1 
    function getArrayAsHtmlList(array $array)
    {
        $html = "<ul>";
        foreach ($array as $key) {
            $html .= "<li>" . $key . "</li>";
        }
        $html .= "</ul>";
        return $html;
    }
//exercice 1 another possibility
    /**
     * Get from an array a HTML list string
     * @param array $array your array you want in HTML list
     * @return string the HTML list
     */
    function getArrayAsHTMLList2(array $array): string
    {
        return '<ul>' . implode(array_map(fn($value) => "<li>{$value}</li>", $array)) . '</ul>';
    }
    //////////////////////////////////////////////////////////////////////
    /**
     * Takes an array of integers as parameter and returns only even values
     * @param {number} array
     * @returns {number} Display array values ​​as an HTML list.
     */

    function arrayValue(array $array)
    {
        $arrayVal = [];
        foreach ($array as $number) {
            if ($number % 2 == 0) {
                $arrayVal[] = $number;
            }
        }
        return $arrayVal;
    }
    /**
     * Takes an array of integers as parameter. Return the array values ​​multiplied by 2.
     * @param {number} array
     * @returns {number} Return the array values ​​multiplied by 2.
     */
    function multiplyByTwo($array)
    {
        $arrayVal = [];
        foreach ($array as $number) {
            $arrayVal[] = $number * 2;
        }
        return $arrayVal;
    }
    /**
     * Takes an array of integers and an integer as parameters. Return the array values ​​divided by the second parameter
     * @param {number} array
     * @returns {number} Return the array values ​​divided by the second parameter
     */
    function divideArrayBy($array, $divider)
    {
        $divide = [];
        foreach ($array as $value) {
            $divide[] = $value / $divider;
        }
        return $divide;
    }
    /**
     * Takes 2 arrays as parameters and returns an array representing the intersection of the 2
     * @param {number} array
     * @returns {number} Return  the array without duplicates
     */
    function noDuplicate($array)
    {
        return array_unique($array);
    }
    /**
     * Takes 2 arrays as parameters and returns an array representing the intersection of the 2
     * @param {number} array1 array2
     * @returns {number} Return an array representing the intersection of the 2
     */
    function intersectionArray($array1, $array2)
    {
        return array_intersect($array1, $array2);
    }
    /**
     * Takes 2 arrays as parameters and returns an array of values ​​from the first array that are not in the second
     * @param {number} array1 array2
     * @returns {number} Return an array of values ​​from the first array that are not in the second
     */
    function notInSecArray($array1, $array2)
    {
        return array_diff($array1, $array2);
    }
    /**
     * Declare a function that takes an array and an integer as parameters
     * @param {number} array1 n
     * @returns {number}  Returns the first n elements of the array.
     */
    function getFirstElements($array, $n)
    {
        return array_slice($array, 0, $n);
    }

    ?>

</body>

</html>