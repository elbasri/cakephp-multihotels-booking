<?php
/** The name of the database */
define('db_name', 'cl26-data');

/** MySQL database username */
define('db_user', 'cl26-data');

/** MySQL database password */
define('db_password', 'deals123*deals');

/** MySQL hostname */
define('db_host', 'localhost');

/** Admin Login */
define('admin_pass', 'nasserox*');

/** Require Opt-in by email confirmation*/
define('EMAIL_CONFIRM','yes');

/** The name of the Email List */
define('LIST_NAME', '');

/** email address to send new ticket and registration notices FROM, etc  */
/** -> for best results, make sure this email address exists <- **/
define('FROM_EMAIL','newsletter@offredealshotels.com');

/** Use CAPTCHA with registration? yes or no (keep lowercase)*/
define('CAPTCHA_REGISTER','no');

/** Authentication
 * Change these to different unique phrases!
 * You can change these at any point in time to invalidate all pending confirmation links. */
define('AUTH_KEY','anadev');

//FUNCTIONS
function test_req($key, $default = '') {
    if(isset($_REQUEST[$key]) and
       !empty($_REQUEST[$key])) {
        return $_REQUEST[$key];
    } else {
        return $default;
    }
}