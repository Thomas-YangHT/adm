<?php
//����mysql����
$MysqlHost="192.168.254.110";
$MysqlUser="yanght";
$MysqlPass="yanght";
$mondb="moninfo";

//����ʱ��
date_default_timezone_set("PRC");

//׼������ļ�
$qin_logpath="/root/";
$qinlog_file   = $qin_logpath."qinmonitor.log";

if( !file_exists($qinlog_file) )   {exec("sudo -u root touch ".$qinlog_file,$tmp,$tmpout);    exec("sudo -u root chmod 666 ".$qinlog_file,$tmp,$tmpout);}



?>