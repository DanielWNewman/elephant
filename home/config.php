# admin/config.php 
    <?php  
    // DB Settings 
    define('FROM_EMAIL', 'no_reply@ohyeahemail.com'); 
    define('FROM_NAME', 'oh yeah email!'); 
  
  
    session_start(); 
    require_once 'classes.php'; 
    $mini = false; 
    $nonav = false; 
    error_reporting(0);
