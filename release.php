<?php
$command = "git checkout master && git status  && git pull";
(exec($command, $return));
echo implode("\n", $return) . "\n";
$command = "cp inc_config_online.php inc_config.php  && ls";
(exec($command, $return));
echo implode("\n", $return) . "\n";
unset($return);
