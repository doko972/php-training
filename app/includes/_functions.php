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
     * Get from an array a HTML list string
     * @param array $array your array you want in HTML list
     * @return string the HTML list
     */
    function getArrayAsHTMLList(array $array): string
    {
        // $values = '';
        // foreach($array as $value){
        //     $values .= "<li>{$value}</li>";
        // }
    
        return '<ul>' . implode(array_map(fn($v) => "<li>{$v}</li>", $array)) . '</ul>';
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
    //exercice 2
    /**
     * Takes an array of integers as parameter and returns only even values
     *
     * @param array $array
     * @return string Display array values ​​as an HTML list.
     */
    function getEvenValues(array $intArray): array
    {
        // foreach ($intArray as $value) {
        //     if (is_int($value) && $value % 2 === 0) {
        //         $intList[] = $value;
        //     }
        // }
        // return $intList;
    
        return array_filter($intArray, fn($v) => is_int($v) && $v % 2 === 0);
    }
    //exercice 3
    function getValueEvenIndex(array $array): array
    {
        // $valuesInt = [];
        // foreach ($array as $key => $value) {
        //     if(is_int($key) && $key % 2 === 0 && is_int($value)) {
        //         $valuesInt[$key] = $value;
        //     }
        // }
        // return $valuesInt;
        return array_filter(
            $array,
            fn($v, $k) => is_int($k) && $k % 2 === 0 && is_int($v),
            ARRAY_FILTER_USE_BOTH
        );
    }

    /**
     * Get array values and multiply by 2
     *
     * @param array $array the array you want to double values from
     * @return array new array with doubled values
     */
    function doubleArrayValues(array $array): array
    {
        $arrayResult = [];
        foreach ($array as $value) {
            if (is_int($value)) {
                $arrayResult[] = $value * 2;
            }
        }
        return $arrayResult;
    }

    /**
     * Get array values and divide by divider
     *
     * @param array $array the array you want to divide values from
     * @param int $divider the divider
     * @return array new array with divided values
     */
    function divideArrayValues(array $array, int $divider = 2): array
    {
        $arrayResult = [];
        foreach ($array as $value) {
            if (is_int($value)) {
                $arrayResult[] = $value / $divider;
            }
        }
        return $arrayResult;
    }
    /**
     * Excludes duplicates of an array
     *
     * @param array $array - array of integers or strings
     * @return array - array without duplicates
     */
    function excludeDuplicates(array $array): array
    {
        // return array_unique($array, SORT_REGULAR);
        $result = [];
        foreach ($array as $key => $value) {
            if (!in_array($value, $result)) {
                $result[$key] = $value;
            }
        }
        return $result;
    }

    /**
     * get intersection between two arrays.
     * @param array $array an array.
     * @param array $arrayA an array.
     * @return array the intersection array.
     */
    function getIntersection(array $array, array $arrayA): array
    {
        // return array_intersect($array, $arrayA);
        $result = [];
        foreach ($array as $key => $value) {
            if (in_array($value, $arrayA)) {
                $result[$key] = $value;
            }
        }
        return $result;
    }
    /*
     * Get values from the first array different from second array
     *
     * @param array $array1 the array you want the values from
     * @param array $array2 the array to compare
     * @param boolean $unique - if true, removes duplicates
     * @return array Array containing first array values that are different from the second one.
     */
    function getArrayDiff(array $array1, array $array2, bool $unique = false): array
    {
        // return array_diff($array1, $array2);
    
        $newArray = array_filter($array1, fn($v) => !in_array($v, $array2));

        if ($unique)
            return excludeDuplicates($newArray);

        return $newArray;
    }

    /**
     * Get the first $nb values from the given array.
     *
     * @param array $array the array
     * @param integer $nb the number of values to extract
     * @return array an array with $nb values. Or the given array if $nb is bigger than the array length. 
     */
    function getFirstElements(array $array, int $nb): array
    {
        // return array_slice($array, 0, $nb, true);
    
        $newArray = [];
        // foreach ($array as $key => $value) {
        //     if (count($newArray) >= $nb) break;
    
        //     $newArray[$key] = $value;
        // }
    
        while (count($newArray) < $nb && count($array) > 0) {
            $newArray[] = array_shift($array);
        }

        return $newArray;
    }


    /**
     * get the platform from the series data.
     *
     * @param array $seriesData the array entry
     * @return array the list of platform
     */
    function getPlatformsFromSeries(array $seriesData): array
    {
        $platforms = [];

        foreach ($seriesData as $show) {
            $platforms[] = $show["availableOn"];
        }

        $platforms = excludeDuplicates($platforms);
        sort($platforms);

        return $platforms;
    }

    /**
     * Generate and return HTML code to display the show with the details in parameter.
     *
     * @param array $show An array containing show details
     * @return string HTML code to display the show
     */
    function generateShow(array $show): string
    {
        return '<li>'
            . '<a href="exo5.php?serie=' . $show['id'] . '#question4">'
            . '<h3>' . $show['name'] . '</h3>'
            . "<img src='" . $show['image'] . "' alt='" . $show['id'] . "' /></a></li>";
    }
/**
 * Get show informations from its ID.
 *
 * @param array $dataSeries The array containing series data.
 * @param integer $id Show's ID you want the information of.
 * @return array|null Show informations or null if no ID found.
 */
function getShowInformationsFromId(array $dataSeries, int $id = 1): ?array
{
    foreach ($dataSeries as $show) {
        if ($show['id'] === $id) {
            return $show;
        }
    }
    return null;
}

    ?>

</body>

</html>