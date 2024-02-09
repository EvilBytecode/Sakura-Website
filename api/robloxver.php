<?php
$robloxapiurldeploy = "http://setup.roblox.com/DeployHistory.txt";
$cnt = file_get_contents($robloxapiurldeploy);

if ($cnt !== false) {
    $gay = explode("\n", $cnt);
    foreach (array_reverse($gay) as $line) {
        if (preg_match('/New WindowsPlayer version-([a-f0-9]+)/', $line, $matches)) {
            $veruwu = $matches[1];
            echo "[+] Updated for latest Roblox update (version-$veruwu)";
            return;
        }
    }
}
?>
