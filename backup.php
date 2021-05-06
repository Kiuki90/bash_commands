<?php
 
ini_set("max_execution_time",'999999990');
 
echo exec("tar -zcvf backup_hosting_beneventolongobarda.it.tar.gz * --exclude backup_hosting_beneventolongobarda.it.tar.gz");

?>
