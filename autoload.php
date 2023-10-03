<?php
    // Start a new PHP session or resume the existing session.
    session_start();

    // Turn on output buffering to capture output before sending it to the browser.
    ob_start();

    // Require the Composer autoload file to autoload PHP dependencies.
    require_once realpath(__DIR__ . '/vendor/autoload.php');

    // Import the Dotenv class from the Dotenv package.
    use Dotenv\Dotenv;

    // Create a new instance of the Dotenv class with the current directory (__DIR__).
    $dotenv = Dotenv::createImmutable(__DIR__);

    // Load environment variables from a .env file located in the current directory.
    $dotenv->load();

    // Require the conn.php file located in the 'db' directory.
    require realpath(__DIR__ . '/db/conn.php');