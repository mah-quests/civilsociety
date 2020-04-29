<!DOCTYPE html>
<html lang="en">
<?php
include("connection/connect.php");  //include connection file
error_reporting(0);  // using to hide undefine undex errors
session_start(); //start temp session until logout/browser closed

?>

<!doctype html>
<html lang="en">
<head>
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="South African coronavirus news and information portal for civil society. In association with The South African National Aids Council Civil Society Forum and NEDLAC">
    <meta name="keywords" content="Community Constituency COVID-19 Front South Africa">
    <meta name="url" content="http://communityconstituency.org.za/">
    <meta name="author" content="MaH Quests Enterprises">
    <title>COVID-19 South African coronavirus news and information for civil society.</title>
    
    <!-- Styles -->
    <link rel='stylesheet' href='assets/css/bootstrap.min.css'>
    <link rel='stylesheet' href='assets/css/animate.min.css'>
    <link rel='stylesheet' href="assets/css/font-awesome.min.css"/>
    <link rel='stylesheet' href="assets/css/style.css"/>
    
    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Raleway:200,300,400,500,600,700,800' rel='stylesheet' type='text/css'>
            
    <!-- Favicon -->
    <link rel="shortcut icon" href="#">

    <style>
    * {
      box-sizing: border-box;
    }

    /* Create three equal columns that floats next to each other */
    .column {
      float: left;
      width: 33.33%;
      padding: 15px;
      height: 100%; /* Should be removed. Only for demonstration */
    }

    /* Clear floats after the columns */
    .row:after {
      content: "";
      display: table;
      clear: both;
    }
    </style>

    <style>
    div.a {
      word-wrap: normal;
    }

    div.b {
        word-wrap: break-word;
        width: 100%;
        max-width: 100%;
    }
    </style>

    <style>
    * {
      box-sizing: border-box;
    }

    /* Create two equal columns that floats next to each other */
    .column {
      float: left;
      width: 50%;
      padding: 20px;
      height: 100%; /* Should be removed. Only for demonstration */
    }

    /* Clear floats after the columns */
    .row:after {
      content: "";
      display: table;
      clear: both;
    }

    /* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
    @media screen and (max-width: 600px) {
      .column {
        width: 100%;
      }
    }
    </style>

    </style>    
    <!-- a helper script for vaidating the form-->
    <script language="JavaScript" src="scripts/gen_validatorv31.js" type="text/javascript"></script>

<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v6.0"></script>

</head>


