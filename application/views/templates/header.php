<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=base_url('assets/css/bootstrap.css') ?>">
    <title><?=$title ?></title>
</head>
<body>
    <!-- Header -->
    <div class="container px-3 bg-dark rounded shadow">
        <ul class="nav m-3 p-3">
            <h1 class="text-light">Sakila</h1>
            <li class="nav-item">
                <a class="nav-link text-white" href="<?=base_url('client/liste') ?>">Client</a>
            </li>
            <form class="d-flex" action="<?=base_url('client/search') ?>" method="post">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="customer_name">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </ul>
    </div>
    <!-- Header -->