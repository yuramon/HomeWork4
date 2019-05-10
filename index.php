<?php

include_once "header.php";
include_once "fileWithArrayOfBooks.php";
include_once "myFunctions.php";

issetButton($books);

//print_r($_SERVER['REQUEST_URI']);
//echo "http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
include_once "footer.php";


























































/*function bs_set_filter_cookie()
{
    if ($_GET['sortPrice'] == 'Price') {
        // if theres filter request, update cookie
        if (isset($_GET['sortPrice'])) {
            $query = http_build_query($_GET);
            setcookie('bs_tickets_filter', $query, time() + 3600 * 24 * 100, COOKIEPATH, COOKIE_DOMAIN, false);
        }
    }
}

if (!isset($_GET['status'])) {
    parse_str($_COOKIE["bs_tickets_filter"], $output);
    foreach ($output as $key => $val) {
        $_GET[$key] = $val;
    }

}
add_action( 'init', 'bs_set_filter_cookie');
*/
/*if (isset($_GET['sortPrice'])) {
    myPage($books);
}
else {
    myPage($books);
}


$cookie_name = 'user';
$cookie_value = 'cookie user';
setcookie($cookie_name, $cookie_value, time() + 86400);

if (!isset($_COOKIE[$cookie_name])){
    echo "cookie named $cookie_name";
    echo "cookie value $cookie_value";
} else {
    echo "disable cookie";
}
*/

/*if (isset($_GET['done'])) {
    $search = $_GET['find'];

}*/
/*echo $_SESSION['SEARCH'];


$text = "Sample sentence from KomunitasWeb, regex has become popular in web programming. Now we learn regex. According to wikipedia, Regular expressions (abbreviated as regex or regexp, with plural forms regexes, regexps, or regexen) are written in a formal language that can be interpreted by a regular expression processor";
$text = preg_replace("/b(regex)b/i", '<span style="background:#5fc9f6">1</span>', $text);
echo $text;

$myUri = $_SERVER['REQUEST_URI'];
$page = file_get_contents ( "$myUri" );
$count_words = preg_match_all ( "/$search/i", $page, $matches );
echo 'Count of find word: ', $count_words, '<br />';
print_r ( $matches );

echo $_SERVER['REQUEST_URI'];*/
//$a=file_get_contents("https://www.php.net/manual/ru/function.stristr.php");
//echo $a;
/*$find = 'php';
$a = str_replace($find, "<span style='color : #f00;'>{$find}</span>", $a);
echo $a;
*/
/*function search($books)
{
    foreach ($books as &$value) {
        $search = $_GET['find'];
        $search = strtolower($search);
        $myBook = strtolower($value['name']);
        if (strpos($myBook, $search) !== false) {
            echo $value['name'] . "<br />";
            $link = (string)$value['poster'];
            echo "<figure class='fig'><img src = \"$link\" alt=\"Book for programming\"></figure>" . '<br/>';
        }
    }
}*/


