<?php
if (!$_REQUEST['page']) {
	$page = 1;
	} else {
	$page = $_REQUEST['page'];
	}	



?>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<meta name="generator" content="Adobe GoLive" />
<title>LA-CHROMOPUNCTURE.CH</title>
	
<link href="chromo.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="scripts/swfobject.js"></script>

<!--[if lt IE 7]>
<script language="JavaScript">
function correctPNG() // correctly handle PNG transparency in Win IE 5.5 & 6.
{
   var arVersion = navigator.appVersion.split("MSIE")
   var version = parseFloat(arVersion[1])
   if ((version >= 5.5) && (document.body.filters)) 
   {
      for(var i=0; i<document.images.length; i++)
      {
         var img = document.images[i]
         var imgName = img.src.toUpperCase()
         if (imgName.substring(imgName.length-3, imgName.length) == "PNG")
         {
            var imgID = (img.id) ? "id='" + img.id + "' " : ""
            var imgClass = (img.className) ? "class='" + img.className + "' " : ""
            var imgTitle = (img.title) ? "title='" + img.title + "' " : "title='" + img.alt + "' "
            var imgStyle = "display:inline-block;" + img.style.cssText 
            if (img.align == "left") imgStyle = "float:left;" + imgStyle
            if (img.align == "right") imgStyle = "float:right;" + imgStyle
            if (img.parentElement.href) imgStyle = "cursor:hand;" + imgStyle
            var strNewHTML = "<span " + imgID + imgClass + imgTitle
            + " style=\"" + "width:" + img.width + "px; height:" + img.height + "px;" + imgStyle + ";"
            + "filter:progid:DXImageTransform.Microsoft.AlphaImageLoader"
            + "(src=\'" + img.src + "\', sizingMethod='scale');\"></span>" 
            img.outerHTML = strNewHTML
            i = i-1
         }
      }
   }    
}
window.attachEvent("onload", correctPNG);
</script>
<![endif]-->

</head>
<body leftmargin="0" marginheight="0" marginwidth="0" topmargin="0">

<div id="fond"><div id="ronde"></div>


<div id="animation">
	<script type="text/javascript">
	// <![CDATA[
	var so = new SWFObject("navchromo08.swf", "animationswf", "775", "195", "8", "#ffffff");
	so.addVariable("page", "<?=$page?>");
	so.addVariable("ancien", "<?=$_REQUEST['ancien']?>");
	so.write("animation");
	// ]]>
	</script>
</div>

<?php if ($page == 5) {include('web.php');} ?>
    
<div id="contenubox">
<?php include('page'.$page.'.php');?>
</div>
        

<div id="photobox">
	<script type="text/javascript">
	// <![CDATA[
	var so = new SWFObject("imgrub.swf", "photoswf", "239", "192", "8", "#ffffff");
	so.addVariable("page", "<?=$page?>")
	so.write("photobox");
	// ]]>
	</script>
</div>

<?php if ($page == 4) {?>
<div id="aquadetox"> <a href="?page=4&ancien=<?=$page?>"><img src="img_rub/aquadetox.png" width="231" height="256" border="0px"></a>
</div>
<?php } ?>

</div>
</body>
</html>