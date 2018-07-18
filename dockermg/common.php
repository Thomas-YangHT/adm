 <?php
 function runcmd($cmdline){
	     #echo "start...";
       $descriptorspec = array(
   			0 => array("pipe", "r"), 
   			1 => array("pipe", "w"), 
			2 => array("pipe", "w") 
   		#	1 => array("file", "/root/test.log", "a"), 
   		#	2 => array("file", "/root/test.log", "a")
   			);
       $process = proc_open($cmdline, $descriptorspec,$pipes); 
       $var = proc_get_status($process); 
       print_r($var);	 
       global $pid;
       $pid = intval($var['pid']); 
       echo "$pid";
       
       $fp = fopen("/root/dk.pid", "w");      
       if($fp) {                              
          fwrite($fp,$pid); 
       }                                      
       else {                                 
          echo "打开文件/root/dk.pid失败";                 
       }                                      
       fclose($fp);
       
       fclose($pipes[0]);
       #echo stream_get_contents($pipes[1]);
       #echo stream_get_contents($pipes[2]);
       fclose($pipes[1]); 
       fclose($pipes[2]);
       $outcode = proc_close($process);
       if($outcode!=0){
           print_r("执行错误:proc_close".$outcode);
        }else{
           print_r("Successful\n"); 
       }
}

function updatedb($sql){
	$conn=mysql_connect("localhost","root","")	or die("无法连接数据库，请重来");
    mysql_select_db("docker",$conn);
    mysql_query("SET NAMES UTF8");
    $res=mysql_query($sql,$conn);
	if ( $res === FALSE) { echo "<br>执行失败：".$sql;}
	else{echo "<br>更新成功：".$sql;}
}

function  writelog($logstr){
         $fp = fopen("/root/dk.log", "a");      
          if($fp) {                              
            fwrite($fp,$logstr."\n");                              
          }else {                                 
            echo "打开文件失败:/root/dk.log";
          }
          fclose($fp);
}
?>