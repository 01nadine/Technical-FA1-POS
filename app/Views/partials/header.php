<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= esc($title ?? 'POS System') ?></title>

    <style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        background-color: #fff0f5;
        color: #4a2535;
    }

    nav {
        background-color: #c2185b;
        padding: 15px 30px;
    }

    nav a {
        color: white;
        text-decoration: none;
        margin-right: 20px;
    }

    main {
        max-width: 1000px;
        min-height: 70vh;
        margin: 30px auto;
        padding: 25px;
        background-color: white;
        border: 2px solid #f8bbd0;
        border-radius: 8px;
        box-shadow: 0 4px 12px rgba(194, 24, 91, 0.15);
    }

    h1 {
        color: #ad1457;
    }

    table {
        width: 100%;
        margin-top: 20px;
        border-collapse: collapse;
    }

    th,
    td {
        padding: 12px;
        border: 1px solid #f48fb1;
        text-align: left;
    }

    th {
        color: white;
        background-color: #d81b60;
    }

    tr:nth-child(even) {
        background-color: #fce4ec;
    }

    footer {
        padding: 20px;
        color: white;
        text-align: center;
        background-color: #c2185b;
    }
</style>
</head>

<body>

<nav>
    <a href="<?= site_url('/') ?>">Home</a>
    <a href="<?= site_url('about') ?>">About</a>
    <a href="<?= site_url('customers') ?>">Customer Accounts</a>
    <a href="<?= site_url('users') ?>">User Accounts</a>
</nav>

<!-- <nav>
    <a href="/">Home</a> |
    <a href="/about">About</a> |
    <a href="/customers">Customer Accounts</a> |
    <a href="/users">User Accounts</a>
</nav> -->

<main>