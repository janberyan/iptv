 <?php
    /*
    Blogspot IP address blocker.
    */
    $iplist = array(“94.221.169.44″,”IP Address 2″,”IP Address 3″); // the list of banned IPs
    $ip = getenv(“REMOTE_ADDR”); // get the visitors IP address
    // echo “$ip”;
    $found = false;
    foreach ($iplist as $value) { // scan the list
    if (strpos($ip, $value) === 0){
    $found = true;
    }
    }
    if ($found == true) {
    echo “top.location = “error.html”;n”; // page to divert to
    }
    ?>
