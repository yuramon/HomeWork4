<?php
//бд роутер і шаблонізатор


// array_filter ($books function($item){})
function search($books)
{
    foreach ($books as &$value) {
        $myUri = $_SERVER['REQUEST_URI'];
        $pieces = explode('?', $myUri);
        $piecesOfPieces = explode('=',$pieces[1]);
        if ($piecesOfPieces[0] == 'find') {
            $search = $_GET['find'];
        } else {
            $search = $pieces[1];
        }
        $search = strtolower($search);
        $myBook = strtolower($value['name']);
        if (strpos($myBook, $search) !== false) {
            echo $value['name'] . "<br />";
            $link = (string)$value['poster'];
            echo "<figure class='fig'><img src = \"$link\" alt=\"Book for programming\"></figure>" . '<br/>';
        }
    }
}

function sortMultiArray($books, $key)
{
    $sortBooks = [];
    foreach ($books as &$value) {
        $sortBooks[] = &$value[$key];
    }
    array_multisort($sortBooks, $books);
    return $books;
}
function outputMyPage($books, $from, $limit, $page)
{
    foreach (array_slice($books, $from, $limit) as &$value) {
    echo $value['name'] . "<br />";
    $link = (string)$value['poster'];
    echo "<figure class='fig'><img src = \"$link\" alt=\"Book for programming\"></figure>" . '<br/>';
}
    echo "<br />";
    $countOfPages = ceil(count($books) / $limit);
    for ($i = 1; $i <= $countOfPages; $i++) {
        if ($page == $i) {
            echo "<a href=\"?index=$i\" class=\"active\"> $i <a/>";

        } else {
            echo "<a href=\"?index=$i\"> $i <a/>";
        }
    }
}

function myPagenation($books)
{
    //$books = sortMultiArray($books);
    if (isset($_GET['index'])) {
        $page = $_GET['index'];
    } else {
        $page = 1;
    }
    $limit = 2;
    $from = ($page * $limit) - $limit;
    if ($from < 0) {
        $from = 0;
    }
    outputMyPage($books, $from, $limit, $page);

}

function issetButton($books)
{
    if (isset($_GET['sortPrice'])) {
        //header("Location:index.php");
        $books = sortMultiArray($books, 'price');
        myPagenation($books);
        //print_r($_SERVER['REQUEST_URI']);
        //header("Location:sortPage.php");
    } elseif (isset($_GET['sortName'])) {
        $books = sortMultiArray($books, 'name');
        myPagenation($books);
        //header("Location:sortName.php");
    } elseif (isset($_GET["filter"])) {
        if ($_GET["vendors1"]) {
            $books = booksFilter($books, 'php');
            setcookie('vendor', serialize($books), time() + 84600);
            myPagenation($books);
        } elseif ($_GET["vendors2"]) {
            setcookie('vendor', serialize($books), time() + 84600);
            $books = booksFilter($books, 'mysql');
            myPagenation($books);
        } elseif ($_GET["vendors3"]) {
            setcookie('vendor', serialize($books), time() + 84600);
            $books = booksFilter($books, 'jquery');
            myPagenation($books);
        } elseif ($_GET["vendors4"]) {
            setcookie('vendor', serialize($books), time() + 84600);
            $books = booksFilter($books, 'wordpress');
            myPagenation($books);
        } elseif ($_GET["vendors5"]) {
            setcookie('vendor', serialize($books), time() + 84600);
            $books = booksFilter($books, 'laravel');
            myPagenation($books);

        } /*elseif (isset($_COOKIE["vendor"])) {
            $books = unserialize($_COOKIE['vendor']);
            myPage($books);
        }*/
    } else {
        myPagenation($books);
    }

    if (isset($_GET["done"])) {
        $search = $_GET['find'];
        header("Location:search.php?$search");

    }

}

function booksFilter($books, $tags)
{
    $filteredMassive = [];
    foreach ($books as &$value) {
        if (isset($value['tags'])) {
            for ($i = 0; $i < count($value['tags']); $i++) {
                if (isset($value['tags'][$i])) {
                    if ($value['tags'][$i] === $tags) {
                        array_push($filteredMassive, $value);
                    }
                }
            }
        }
    }
    return $filteredMassive;
}

function tagsFilter($books)
{

}