<?php
    $is_error = false;
    $messages[] = "";

    // Check if POST method has been called
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $is_submitted = true;
        /**
         * Remove any HTML tags to sanitize
         */
        $first_name_sanitized = strip_tags($_POST['contact_first']);
        $last_name_sanitized = strip_tags($_POST['contact_last']);
        $email_sanitized = strip_tags($_POST['contact_eamil']);
        $message_sanitized = strip_tags($_POST['contact_message']);
    }

    // Validate only alpha chars entered for first name
    $first_name_input = trim($first_name_sanitized);
    if (!preg_match('/^[a-zA-Z]*$/', $first_name_input)) {
        $is_error = true;
        $messages[] = 'Please enter a valid first name (a-z or A-Z)';
    }

    // Validate only alpha chars entered for first name
    $last_name_input = trim($last_name_sanitized);
    if (!preg_match('/^[a-zA-Z]*$/', $last_name_input)) {
        $is_error = true;
        $messages[] = 'Please enter a valid first name (a-z or A-Z)';
    }

    header("Location: " . $_SERVER['HTTP_REFERER'] . "?is_submitted=$is_submitted");