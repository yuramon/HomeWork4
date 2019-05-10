<!DOCTYPE html>
<html lang="">
<meta charset="UTF-8">
<head>
    <title>Books store</title>
    <link href="./css/style.css" rel="stylesheet" type="text/css">
</head>
<body>

<header>
    <a class="left" href="http://localhost/WebPage/index.php">BOOKS</a>
    <form name="test" action="" method="get" class="form-search" >

        <label>Find in page:</label><br />
        <label>
            <input type="text" name="find" placeholder="What are you find?" required/>
        </label>
        <input type= "submit" name = "done" value ="Search" />
    </form>
</header>
<form class="sorting" method="get">
    <p>Sort by:</p>
    <p><input name="sortPrice" type="submit" value="Price"/></p>
    <p><input name="sortName" type="submit" value="Name" /></p>
</form>
<form method="get" name="form" class="sorting">
        Tags:
    <label>
        <input name="vendors1" type="checkbox"/>
    </label>PHP
    <label>
        <input name="vendors2" type="checkbox" />
    </label>MySQL
    <label>
        <input name="vendors3" type="checkbox" />
    </label>JQuery
    <label>
        <input name="vendors4" type="checkbox" value="WordPres"/>
    </label>WordPress
    <label>
        <input name="vendors5" type="checkbox" />
    </label>Laravel
    <input name="filter" type="submit" value="Choose"/>
</form>

