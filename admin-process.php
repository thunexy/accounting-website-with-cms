<?php
include "framework/otherClasses.php";
if(isset($_POST["saveBtn"])){
    $welcome = addslashes($_POST["welcome"]);
    $mission = addslashes($_POST["mission"]);
    $support = addslashes($_POST["support"]);
    $fixed = addslashes($_POST["fixed"]);
    $tax = addslashes($_POST["tax"]);
    $name1 = addslashes($_POST["name1"]);
    $name2 = addslashes($_POST["name2"]);
    $name3 = addslashes($_POST["name3"]);
    $test1 = addslashes($_POST["test1"]);
    $test2 = addslashes($_POST["test2"]);
    $test3 = addslashes($_POST["test3"]);



    DatabaseQuery::update("home", "value = '$welcome'", "id=1");
    DatabaseQuery::update("mission", "value = '$mission'", "id=1");
    DatabaseQuery::update("professional_services", "value = '$support'", "id=1");
    DatabaseQuery::update("professional_services", "value = '$fixed'", "id=2");
    DatabaseQuery::update("professional_services", "value = '$tax'", "id=3");
    DatabaseQuery::update("testimony", "name = '$name1', value='$test1'", "id=1");
    DatabaseQuery::update("testimony", "name = '$name2', value='$test2'", "id=2");
    DatabaseQuery::update("testimony", "name = '$name3', value='$test3'", "id=3");
    redirect("dashboard");
}

if(isset($_POST["saveAbout"])){
    $who = addslashes($_POST["who"]);
    $team = addslashes($_POST["team"]);
    $solution = addslashes($_POST["solution"]);



    DatabaseQuery::update("about", "value = '$who'", "id=1");
    DatabaseQuery::update("about", "value = '$team'", "id=2");
    DatabaseQuery::update("about", "value = '$solution'", "id=3");
    redirect("admin_about");
}

if(isset($_POST["saveServices"])){
    $services = str_replace(" ", " ", addslashes($_POST["services"]));
    $accounting = str_replace(" ", " ", addslashes($_POST["accounting"]));
    $tax = str_replace(" ", " ", addslashes($_POST["tax"]));
    $business = str_replace(" ", " ", addslashes($_POST["business"]));
    $finance = str_replace(" ", " ", addslashes($_POST["finance"]));
    $review = str_replace(" ", " ", addslashes($_POST["review"]));



    DatabaseQuery::update("services", "value = '$services'", "id=1");
    DatabaseQuery::update("services", "value = '$accounting'", "id=2");
    DatabaseQuery::update("services", "value = '$tax'", "id=3");
    DatabaseQuery::update("services", "value = '$business'", "id=4");
    DatabaseQuery::update("services", "value = '$finance'", "id=5");
    DatabaseQuery::update("services", "value = '$review'", "id=6");
    redirect("admin_services");
}
if(isset($_GET["logout"])){
    redirect("admin");
}