<?php

/*
 * One-liner to shutdown remote host 
 * https://linuxcommando.blogspot.com/2013/04/one-liner-to-shutdown-remote-host.html
 */

function shutdownRaspi($ip) {
    echo "Shutdown: " . $ip . "\n";
    $adminUser = "pi";
    $shutdownCommand = exec("ssh -t $adminUser@" . $ip ." 'sudo shutdown -h now'", $output, $result);

    return $result; 
}


/*
 * Get all Raspberry Pi connected to the local network
 * https://serverfault.com/questions/786136/how-to-view-dnsmasq-client-mac-addresses-dynamically
 */

function getAllRaspi() {
    echo "Get all Raspi Ip\n";
    $getAllRaspiCommand = exec("cat /var/lib/misc/dnsmasq.leases", $allRaspiArr);

    return $allRaspiArr;
}


/*
 *
 * https://stackoverflow.com/questions/13283674/how-to-ping-ip-addresses-in-php-and-give-results
 */

function ping($ip) {
    echo "ping: ". $ip . "\n";
    $pingCommand = exec("ping -c 2 $ip", $output, $result);
    return $result;
}


/*
 * Process shutdown of all Raspi
 */

function shutdownAllRaspi() {
    $allRaspiArr = getAllRaspi();

    foreach($allRaspiArr as $raspi) {
        $data = explode(" ", $raspi);
        $ip = $data[2];
 
        echo "- Raspi: " . $ip . "\n";

        if(ping($ip) == 0 ) {       
            shutdownRaspi($ip);
        } else {
            echo "Raspi not connected\n";
        }
    }
}


/*
 * Main
 */

shutdownAllRaspi();

?>
