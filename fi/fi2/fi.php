<?php
    if (isset($_GET['page']) && $_GET['page'] !== 'test.txt') {
        @include $_GET['page'].".php";
        echo $_GET['page'].".php";
    } else {
        @include('test.txt');
    }
?>