
<html>
<head>
<meta http-equiv='Content-Type' content='text/html' charset='utf-8'>
<!-- <meta http-equiv="refresh" content="300"> -->
<title>NGX_CONF </title>
<script type="text/javascript" src="jquery.2.0.3.min.js"></script> 
<script type="text/javascript" src="jquery.sha1.js"></script> 

<script type="text/javascript">
      $(function () {
            if ($.browser.msie && $.browser.version.substr(0, 1) < 7) {
                $('li').has('ul').mouseover(function () {
                    $(this).children('ul').show();
                }).mouseout(function () {
                    $(this).children('ul').hide();
                })
            }
        });      
 
function ShowHidden(obj1){
	//alert("obj1"+obj1);
if(obj1.style.display==""){
	obj1.style.display = "none";
	if (obj1.id=="info"){
	    var a=document.body.clientWidth-15;  //取得iframe框架的实际宽度
        document.getElementById("rightdiv").style.width=a+"px";
		document.getElementById("up").style.width=a+"px";
		document.getElementById("bottom").style.width=a+"px";
		document.getElementById("upframe").style.width=a+"px";
		document.getElementById("top").style.width=a+"px";
    }
}else{
	obj1.style.display = "";
	if (obj1.id=="info"){
	    var a=document.body.clientWidth-240;  //取得iframe框架的实际宽度
	    document.getElementById("rightdiv").style.width=a+"px";
		document.getElementById("up").style.width=a+"px";
		document.getElementById("bottom").style.width=a+"px";
		document.getElementById("upframe").style.width=a+"px";
		document.getElementById("top").style.width=a+"px";
    }
}
}
</script>
   <style>
        body
        {
            width: 100%;
            margin: 0px auto;
        }
        
        /* Main menu */
        
        #menu
        {
            width:220px;
			height: 100%;
            margin: 0;
            padding: 10px 0 0 0;
            list-style: none;
   /*<!--         background: #111;
            background: -moz-linear-gradient(#444, #111);
            background: -webkit-gradient(linear,left bottom,left top,color-stop(0, #111),color-stop(1, #444));
            background: -webkit-linear-gradient(#444, #111);
            background: -o-linear-gradient(#444, #111);
            background: -ms-linear-gradient(#444, #111);
            background: linear-gradient(#444, #111);
            -moz-border-radius: 50px;
            border-radius: 50px;
            -moz-box-shadow: 0 2px 1px #9c9c9c;
            -webkit-box-shadow: 0 2px 1px #9c9c9c;
            box-shadow: 0 2px 1px #9c9c9c;
	-->	*/	
			background: #444;
            background: -moz-linear-gradient(#444, #111);
            background: -webkit-gradient(linear,left bottom,left top,color-stop(0, #111),color-stop(1, #444));
            background: -webkit-linear-gradient(#444, #111);
            background: -o-linear-gradient(#444, #111);
            background: -ms-linear-gradient(#444, #111);
            background: linear-gradient(#444, #111);
            -moz-box-shadow: 0 0 2px rgba(255,255,255,.5);
            -webkit-box-shadow: 0 0 2px rgba(255,255,255,.5);
            box-shadow: 0 0 2px rgba(255,255,255,.5);
            -moz-border-radius: 5px;
            border-radius: 5px;
        }
        
        #menu li
        {
            float: left;
            padding: 0 0 10px 0;
            position: relative;
            line-height: 0;  
            display: block;
            -moz-box-shadow: 0 1px 0 #111111, 0 2px 0 #777777;
            -webkit-box-shadow: 0 1px 0 #111111, 0 2px 0 #777777;
            box-shadow: 0 1px 0 #111111, 0 2px 0 #777777;
        }
        
        #menu a
        {
		    width: 130px;
			
            float: left;
            height: 25px;
            padding: 0 25px;
            color: #999;
            text-transform: uppercase;
            font: bold 12px/25px Arial, Helvetica;
            text-decoration: none;
            text-shadow: 0 1px 0 #000;
        }
        
        #menu li:hover > a
        {
            color: #fafafa;
        }
        
        *html #menu li a:hover /* IE6 */
        {
            color: #fafafa;
        }
        
        #menu li:hover > ul
        {
            display: block;
        }
        
        /* Sub-menu */
        
        #menu ul
        {
            list-style: none;
            margin: 0;
            padding: 0;
            display: none;
            position: absolute;
            top: 10px;
            left: 120px;
            z-index: 99999;
            background: #444;
            background: -moz-linear-gradient(#444, #111);
            background: -webkit-gradient(linear,left bottom,left top,color-stop(0, #111),color-stop(1, #444));
            background: -webkit-linear-gradient(#444, #111);
            background: -o-linear-gradient(#444, #111);
            background: -ms-linear-gradient(#444, #111);
            background: linear-gradient(#444, #111);
            -moz-box-shadow: 0 0 2px rgba(255,255,255,.5);
            -webkit-box-shadow: 0 0 2px rgba(255,255,255,.5);
            box-shadow: 0 0 2px rgba(255,255,255,.5);
            -moz-border-radius: 5px;
            border-radius: 5px;
        }
        
        #menu ul ul
        {
            top: 0;
            left: 200px;

        }
        
        #menu ul li
        {
     		float: none;
            margin: 0;
            padding: 0;
            display: block;
            -moz-box-shadow: 0 1px 0 #111111, 0 2px 0 #777777;
            -webkit-box-shadow: 0 1px 0 #111111, 0 2px 0 #777777;
            box-shadow: 0 1px 0 #111111, 0 2px 0 #777777;
        }
        
        #menu ul li:last-child
        {
            -moz-box-shadow: none;
            -webkit-box-shadow: none;
            box-shadow: none;
        }
        
        #menu ul a
        {
            padding: 10px;
            height: 10px;
            width: 130px;
            height: auto;
            line-height: 1;
            display: block;
            white-space: nowrap;
            float: none;
            text-transform: none;
        }
        
        *html #menu ul a /* IE6 */
        {
            height: 10px;
        }
        
        *:first-child + html #menu ul a /* IE7 */
        {
            height: 10px;
        }
        
        #menu ul a:hover
        {
            background: #0186ba;
            background: -moz-linear-gradient(#04acec,  #0186ba);
            background: -webkit-gradient(linear, left top, left bottom, from(#04acec), to(#0186ba));
            background: -webkit-linear-gradient(#04acec,  #0186ba);
            background: -o-linear-gradient(#04acec,  #0186ba);
            background: -ms-linear-gradient(#04acec,  #0186ba);
            background: linear-gradient(#04acec,  #0186ba);
        }
        
        #menu ul li:first-child > a
        {
            -moz-border-radius: 5px 5px 0 0;
            border-radius: 5px 5px 0 0;
        }
        
        #menu ul li:first-child > a:after
        {
            content: '';
            position: absolute;
            left: 30px;
            top: -8px;
            width: 0;
            height: 0;
            border-left: 5px solid transparent;
            border-right: 5px solid transparent;
            border-bottom: 8px solid #444;
        }
        
        #menu ul ul li:first-child a:after
        {
            left: -8px;
            top: 12px;
            width: 0;
            height: 0;
            border-left: 0;
            border-bottom: 5px solid transparent;
            border-top: 5px solid transparent;
            border-right: 8px solid #444;
        }
        
        #menu ul li:first-child a:hover:after
        {
            border-bottom-color: #04acec;
        }
        
        #menu ul ul li:first-child a:hover:after
        {
            border-right-color: #04acec;
            border-bottom-color: transparent;
        }
        
        
        #menu ul li:last-child > a
        {
            -moz-border-radius: 0 0 5px 5px;
            border-radius: 0 0 5px 5px;
        }
        
        /* Clear floated elements */
        #menu:after
        {
            visibility: hidden;
            display: block;
            font-size: 0;
            content: " ";
            clear: both;
            height: 0;
        }
        
        * html #menu
        {
            zoom: 1;
        }
        /* IE6 */
        *:first-child + html #menu
        {
            zoom: 1;
        }
        /* IE7 */


    </style>

</head>
<script type="text/javascript">
 window.onload=function(){
   var a=document.body.clientWidth-220;  //取得iframe框架的实际宽度
   document.getElementById("right").style.width=a+"px";
 }
 </script>

<body>

<div id='info' style='width:220px;float:left;height:100%;position: relative;Z-INDEX: 12;' >
<!--example:noresize
    <ul id="menu">
        <li><a href="#">Categories</a>
            <ul>
                <li><a href="#">CSS</a>
                    <ul>
                        <li><a href="#">Item 11</a></li>
                    </ul>
                </li>
            </ul>
        </li>
     </ul> 
-->
    <ul id="menu">
        

<?php
     //echo "<li><a href='open.php?file=' target='upframe'>conf6</a><li>";
	 include_once("config.inc.php");
	 GET_STATUS();
	 echo "<li><a href='open.php?file=".$DEFAULT_FILE."' target='upframe'>".$DEFAULT_FILE."</a><li>";
	 $cmd="sudo -u root sh ./get_ngxconf.sh ".$CONF;
     exec($cmd,$tmp,$tmpout);
     foreach ($tmp as $a){
        echo $a."</br>";
     }
?>	 
<!---insert here--->
 <!---       <li>
<form action="" method="POST" id="myform">		
<button type="submit" name="test" value="Submit" >&nbsp&nbsp&nbsp&nbsp测试&nbsp&nbsp&nbsp&nbsp</button>
<button type="submit" name="restart" value="Submit" >&nbsp&nbsp&nbsp&nbsp重启&nbsp&nbsp&nbsp&nbsp</button>
</br>
</form>	
        </li>
        <li>
        </li>	--->	
     </ul> 
</div>	
<div id='left' onClick='ShowHidden(info)' style='float:left;writing-mode:tb-rl;text-align:center;line-height:12px;height:100%;width:10px;cursor:hand;background:#678;font-size:8px;color:#fff' >
   OPEN / CLOSE</div>
<div id='up' style='width:100%;height:70%;'>
<iframe id="upframe" style="position: absolute;Z-INDEX: 2; height:70%; VISIBILITY: inherit; WIDTH: 90%;" name="upframe" scrolling="auto"  src="open.php">  </iframe> 
</div>
<div id='top' onClick='ShowHidden(up)' style='float:up;writing-mode:tb-rl;text-align:center;line-height:12px;height:10px;width:90%;cursor:hand;background:#678;font-size:8px;color:#fff' >
   OPEN / CLOSE</div>
<div id='rightdiv'  style='float:up;width:100%;height:30%;'> 
<iframe  id="bottom" name="botframe" scrolling="auto"  frameBorder="0" src="log.php" style="position: absolute;Z-INDEX: 2; HEIGHT: 30%; VISIBILITY: inherit; WIDTH: 90%;" >    </iframe> 
 </div> 

</body>
</html>
