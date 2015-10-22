<?php
ob_start();
 include("admin/include/connection.php");
date_default_timezone_set('Africa/Cairo');
$day = date("Y-m-d");
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Services</title>
<meta charset="UTF-8">
    <!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">

<link href="css/freelancer.css" rel="stylesheet" type="text/css">
<link href="css/flexslider.css" rel="stylesheet" type="text/css">
<link href="css/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"><link href="treegraph/JSTreeGraph.css" rel="stylesheet" type="text/css" /><script src="treegraph/JSTreeGraph.min.js" type="text/javascript"></script>
 
<?php
$selectcolor2=mysql_fetch_array(mysql_query("select * from `color2`"));
$selectsettings=mysql_fetch_array(mysql_query("select * from `settings`"));
$colorservicesdetails=mysql_fetch_array(mysql_query("select * from `color_services_details`"));
$serviceid=$_GET['serviceid'];
$mainserviceid=urldecode(base64_decode($serviceid));

?>
<style>
.flex-control-paging li a {width: 11px; height: 11px; display: block; background: #666; background: <?php echo $selectcolor2['ol_background_color']; ?>; cursor: pointer; text-indent: -9999px; -webkit-border-radius: 20px; -moz-border-radius: 20px; -o-border-radius: 20px; border-radius: 20px; -webkit-box-shadow: inset 0 0 3px rgba(0,0,0,0.3); -moz-box-shadow: inset 0 0 3px rgba(0,0,0,0.3); -o-box-shadow: inset 0 0 3px rgba(0,0,0,0.3); box-shadow: inset 0 0 3px rgba(0,0,0,0.3); }
.flex-control-paging li a:hover { background: #333; background: <?php echo $selectcolor2['ol_background_color']; ?>; }
.flex-control-paging li a.flex-active { background: #000; background: <?php echo $selectcolor2['ol_background_color_active']; ?>; cursor: default; }
</style>
<style>
.linkservice
{
border: thick solid #44865E;
 border-radius:11px;
 background-color:black;
 color:white;
 width:150px;
 height:50px;
 }
 #header {
	line-height: 98px;
	background: #FFF url("images/header-top.png") repeat-x top center;
	border-bottom: 1px solid #d3d5d7;
	-webkit-box-shadow: 0 0 5px 0 #e2e3e4;
	-moz-box-shadow: 0 0 5px 0 #e2e3e4;
	box-shadow: 0 0 5px 0 #e2e3e4;
	position: relative;
	z-index: 99999;
	margin-bottom: 90px;
}
#header:before {
	content: "";
	height: 1px;
	width: 100%;
	background-color: #FFF;
	border-bottom: 1px solid #d3d5d7;
	-webkit-box-shadow: 0 0 5px 0 #e2e3e4;
	-moz-box-shadow: 0 0 5px 0 #e2e3e4;
	box-shadow: 0 0 5px 0 #e2e3e4;
	bottom: 2px;
	left: 0;
	position: absolute;
}
#header:after {
	content: "";
	height: 1px;
	width: 100%;
	background-color: #FFF;
	border-bottom: 1px solid #d3d5d7;
	-webkit-box-shadow: 0 0 5px 0 #e2e3e4;
	-moz-box-shadow: 0 0 5px 0 #e2e3e4;
	box-shadow: 0 0 5px 0 #e2e3e4;
	bottom: 5px;
	left: 0;
	position: absolute;
}
.logo {
	font-size: 30px;
	font-weight: bold;
	float: left;
}
/* Navigation */
.navigation {
	float: right;
}
.navigation ul li ul {
	z-index: 998;
}
.navigation > ul > li {
	float: left;
	font-size: 15px;
	line-height: 95px;
	margin-right: 10px;
	position: relative;
	list-style: none;
}
.navigation > ul > li:last-child {
	margin-right: 0;
}
.navigation > ul > li > a {
	padding: 0 10px;
	display: inline-block;
	line-height: 94px;
}
.navigation li:hover ul {
	top: 0;
	background-color: #2f3c4e;
}
.navigation > ul > li:hover > ul {
	top: 92px;
}
.navigation li ul li ul {
	position: absolute;
	left: 199px;
}
.navigation ul > li > ul > li {
	float: none;
	margin: 0;
}
.navigation ul > li ul {
	position: absolute;
	left: 0;
	top: 100%;
	z-index: 993;
	width: 200px;
	border-left: 1px solid rgba(255,255,255,0.2);
}
.navigation li ul li a {
	height: inherit;
	float: inherit;
	text-align: left;
	display: block;
	margin: 0 !important;
	padding: 0 15px;
	z-index: 993;
	font-size: 13px;
	font-weight: 600;
	line-height: 46px;
	border-bottom: 1px solid rgba(255,255,255,0.2);
}
.navigation li ul li:last-child a {
	border-bottom: none;
}
.navigation ul > li ul li {
	position: relative;
	float: none;
	list-style: none;
}
.menu-nav-arrow {
	margin-left: 5px;
}
.navigation ul > li ul li .menu-nav-arrow {
	float: right;
}
/* Menu slide */
.navigation li > ul,.navigation li > ul li > ul,.navigation li ul li ul {
	opacity: 0;
	visibility: hidden;
	-webkit-transition: all 0.28s ease-in-out;
	-moz-transition: all 0.28s ease-in-out;
	-ms-transition: all 0.28s ease-in-out;
	-o-transition: all 0.28s ease-in-out;
	transition: all 0.28s ease-in-out;
	-moz-transform: scaleY(0);
	-webkit-transform: scaleY(0);
	-o-transform: scaleY(0);
	-ms-transform: scaleY(0);
	transform: scaleY(0);
	-webkit-transform-origin:0 0;
	-moz-transform-origin:0 0;
	-o-transform-origin:0 0;
	-ms-transform-origin:0 0;
	transform-origin:0 0;
}
.navigation li:hover > ul,.navigation li > ul li:hover > ul,.navigation li ul li:hover ul {
	opacity: 1;
	visibility: visible;
	-moz-transform: scaleY(1);
	-webkit-transform: scaleY(1);
	-o-transform: scaleY(1);
	-ms-transform: scaleY(1);
	transform: scaleY(1);
}
/* Navigation mobile */
.navigation_mobile {
	height: 35px;
	line-height: 35px;
	position: relative;
	width: 300px;
	margin-top: 28px;
	float: right;
}
.navigation_mobile ul {
	margin-bottom: 0;
}
.navigation_mobile_click {
	border: 1px solid #e9e8e8;
	padding: 0 10px;
	background-color: #f8f7f7;
	cursor: pointer;
	height: 35px;
	line-height: 35px;
	font-size: 14px;
}
.navigation_mobile > ul {
	background-color: #FAFAFA;
	border: 1px solid #dedede;
	border-top: none;
	overflow: hidden;
	position: absolute;
	left: 0;
	top: 35px;
	width: 100%;
	z-index: 993;
	-moz-border-radius: 0 0 2px 2px;
	-webkit-border-radius: 0 0 2px 2px;
	border-radius: 0 0 2px 2px;
	display: none;
	-moz-box-sizing: border-box;
	-webkit-box-sizing: border-box;
	box-sizing: border-box;
}
.navigation_mobile > ul li ul {
	position: relative;
	margin-bottom: 0;
	border-top: 1px solid #ebebeb;
	margin: 0 -20px;
	display: none;
}
.navigation_mobile_click:before {
	content: "\f0c9";
	font-family: "FontAwesome";
	font-size: 20px;
	position: absolute;
	right: 0;
	top: 0;
	height: 35px;
	width: 35px;
	text-align: center;
}
.navigation_mobile > ul li {
	float: none;
	padding: 0 15px;
	line-height: 33px;
	border-bottom: 1px solid #ebebeb;
	text-align: left;
	font-size: 14px;
	list-style: none;
}
.navigation_mobile > ul a {
	background: transparent;
}
.navigation_mobile > ul a i {
	margin-right: 5px;
}
.navigation_mobile > ul li ul li {
	border-bottom: 0;
	line-height: 30px;
	margin-left: 10px;
}
.navigation_mobile > ul li ul li a {
	font-size: 14px;
}
.navigation_mobile > ul li ul li:before {
	content: "\f054";
	font-family: "FontAwesome";
	font-size: 10px;
	margin-right: 8px;
	speak: none;
	position: relative;
	top: 1px;
}
.nav >  a {
	font-size: 13px;	
	text-transform: uppercase;
	color: <?php echo $colorservicesdetails['color_font_link']; ?>;
	margin-right: 15px;
	-webkit-transition: all .4s;
	transition: all .4s;
	text-decoration:none;
}
.nav > .active > a,  .nav >  a:hover,  .nav > .active > a:hover,  .nav > .active > a:focus  {
	color:<?php echo $colorservicesdetails['color_font_link_active']; ?>;
	background-color:<?php echo $colorservicesdetails['color_back_link_active']; ?>;
	box-shadow:none;
}
#footer {
	line-height: 94px;
	background-color: <?php echo $colorservicesdetails['color_back_footer']; ?>;
	margin-top: 60px;
}
.copyrights {
	color: #F1F1F1;
	float: left;
}
.social-ul {
	float: right;
}
.social-ul li {
	float: left;
	list-style: none;
	margin: 33px 5px 0 0;
	line-height: normal;
}
.social-ul li:last-child {
	margin-right: 0;
}
.social-ul li a {
	height: 28px;
	width: 28px;
	line-height: 28px;
	font-size: 14px;
	text-align: center;
	color: <?php echo $colorservicesdetails['color_font_footer']; ?>;
	background-color: <?php echo $colorservicesdetails['color_back_link_footer']; ?>;
	display: inline-block;
}
.go-up {
	position: fixed;
	width: 40px;
	height: 40px;
	line-height: 37px;
	font-size: 15px;
	right: -60px;
	bottom: 20px;
	cursor: pointer;
	text-align: center;
	z-index: 9999;
}
.go-up:hover {
	background-color: #263241;
}
.linkfooter:hover{
background-color:<?php echo $colorservicesdetails['color_back_link_active_footer']; ?>;
}

</style>

</head>
<header id="header" style="background-color: <?php echo $colorservicesdetails['color_menu_background']; ?>">
		<div class=" clearfix">
			<a href="index.php"><img src="admin/logo/<?php echo $selectsettings['logo']; ?>" class="col-sm-2""></a> <!-- End logo -->
			
			
			<nav class="navigation">
				<ul>
				<?php
				$selectmainservices1=mysql_query("select * from `main_services`");
				while($selectmainservicesarray=mysql_fetch_array($selectmainservices1))
				{
				$main_service_id=$selectmainservicesarray['main_service_id'];
				$mainserviceid22=urlencode(base64_encode($main_service_id));
				?>
					<li class="nav"><a href="services.php?serviceid=<?php echo $mainserviceid22; ?>"><?php echo $selectmainservicesarray['title']; ?></a>
						
					</li>
					<?php
					}
					?>
					
				</ul>
			</nav><!-- End navigation -->
		</div><!-- End container -->
	</header><!-- End header --><p style="color:<?php echo $colorservicesdetails['color_font_services']; ?>"><?php$selectmainservices=mysql_fetch_array(mysql_query("select * from `main_services` where `main_service_id`='$mainserviceid'"));?>					<center><?php echo $selectmainservices['description2'];?></center><br/>						</p>					 <div class="Container" id="dvTreeContainer"></div>					 <style type="text/css">        .SpecialNode        {	        position:absolute;	        background-color: Red;	        border: 1px solid #5280FF;	        text-align:center;	        vertical-align:middle;			width:250px;	        cursor:pointer;        	    }	    	    .Container	    {            position:relative;            margin-bottom:250px;            margin-left:500px;	    }    </style>
<body id="page-top" class="index" style="background: <?php echo $colorservicesdetails['color_background_section']; ?>" >   
 
    <section id="portfolio">      
    </section>
<footer id="footer">
		<div class="container">
			<div class="copyrights">Copyright 2014 Pharamcy | Designed By <a target="_blank" href="http://samyemad.com/">Samyemad</a></div>
			<div class="social-ul">
				<ul >
					<li class="social-facebook "><a href="https://www.facebook.com/<?php echo $selectsettings['facebook']; ?>" class="linkfooter" ><i class="icon-facebook"></i></a></li>
					<li class="social-twitter"><a href="https://twitter.com/<?php echo $selectsettings['twitter']; ?>" class="linkfooter"><i class="icon-twitter"></i></a></li>
					<li class="social-google"><a href="https://plus.google.com/<?php echo $selectsettings['google']; ?>" class="linkfooter"><i class="icon-google-plus"></i></a></li>
					<li class="social-linkedin"><a href="https://www.linkedin.com/<?php echo $selectsettings['linkedin']; ?>" class="linkfooter"><i class="icon-linkedin"></i></a></li>
					<li class="social-youtube"><a href="http://www.youtube.com/<?php echo $selectsettings['youtube']; ?>" class="linkfooter"><i class="icon-youtube-play"></i></a></li>
					
				</ul>
			</div><!-- End social-ul -->
		</div><!-- End container -->
	</footer><!-- End footer -->
    
	

   

    
    <div class="scroll-top page-scroll visible-xs visble-sm">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>
	
    <!-- Portfolio Modals -->
	<?php
   $selectsubservices=mysql_query("select * from `sub_services` where `main_service_id`='$mainserviceid'");
			while($selectarraysubservices=mysql_fetch_array($selectsubservices))
			{
			$subservicesid=$selectarraysubservices['sub_services_id'];
			$servicestitle=$selectarraysubservices['title'];
    $selectpicsservice=mysql_query("select * from `pic_sub_services` where `sub_services_id`='$subservicesid'");
		  while($selectpicsservicearray=mysql_fetch_array($selectpicsservice))
		  {
		  $pic_sub_services_id=$selectpicsservicearray['pic_sub_services_id'];
		  $subserviceencryptid=urlencode(base64_encode($subservicesid));
   ?>
	<div class="portfolio-modal modal fade" id="portfolioModa<?php echo $subservicesid; ?><?php echo $pic_sub_services_id; ?>" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2><?php echo $selectpicsservicearray['sub_services_title']; ?></h2>
                           
                            <img src="admin/services/sub_services/<?php echo $selectpicsservicearray['sub_services_pic']; ?>" class="img-responsive img-centered" alt="">
                            <p>
							<?php echo $selectpicsservicearray['sub_services_desc']; ?>
							</p>
                            <ul class="list-inline item-details">
                                
                                <li>Date: <strong><?php echo $selectpicsservicearray['sub_services_date']; ?></strong>
                                </li>
                                <li>Service: <strong><?php echo $servicestitle; ?></strong>
                                </li>
                            </ul>
							
                           <form action="#" method="post">
						   <input type="hidden" name="subservicesid" value="<?php echo $subservicesid; ?>"/>
						   <button type="submit" name="reservesubmit" class="btn btn-default"  > حجز الخدمه</button>
						   
						   </form>
						   
						  
						  
						   </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<?php
	}
	}
	?>
    <?php
						   if(isset($_POST['reservesubmit']))
						   {
						   $subservicesid=$_POST['subservicesid'];
						   $agentid=$_SESSION['1985olaagentid'];
						   if($agentid == '')
						   {
						  header("location: agent/index.php");
						  $_SESSION['subservicesreg']=$subservicesid;
						   }
						   else
						   {
				$selectnumservices=mysql_num_rows(mysql_query("select * from `user_demand_services` where `sub_services_id`='$subservicesid' and `user_services_id`='$agentid'"));
if($selectnumservices == 0)
{				
$insert=mysql_query("insert into `user_demand_services` values('','$subservicesid','$agentid','$day')");
if($insert)
{
echo"
<script>
$(function() {
$.jGrowl('Your email has been added sucessfully', { header: 'service' });
});
</script>
";
echo "<script>
setTimeout(function(){
  window.location = 'services.php?serviceid=".$serviceid."';
}, 2000);
</script>";	
}
}
else
{
echo"
<script>
$(function() {
$.jGrowl('Your email has been added sucessfully', { header: 'service' });
});
</script>
";
echo "<script>
setTimeout(function(){
  window.location = 'services.php?serviceid=".$serviceid."';
}, 2000);
</script>";	
}
}
}
						   
						   
						   ?>
    
    
    

    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.min.js"></script>
    
   <script src="js/jquery.min.js"></script>
   <link href="jGrowl/jquery.jgrowl.css" rel="stylesheet" media="screen">
  <script src="jGrowl/jquery.jgrowl.js"></script>

  <!-- FlexSlider -->
  <script defer src="js/jquery.flexslider.js"></script>
  

  <script type="text/javascript">
    $(function(){
      SyntaxHighlighter.all();
    });
    $(window).load(function(){
      $('.flexslider').flexslider({
        animation: "slide",
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
    });
  </script>  <script type="text/javascript">    <!--        // Root node        var rootNode = { Content: "<?php echo $selectmainservices['title'];?>", Nodes:[] };        // First Level		<?php		$x=0;		$selectsubservices=mysql_query("select * from `sub_services` where `main_service_id`='$mainserviceid'");		while($selectarraysubservices=mysql_fetch_array($selectsubservices))		{		?>        rootNode.Nodes[<?php echo $x;?>] = { Content: "<?php echo $selectarraysubservices['title'];?>" };       <?php$x++;}?>        // Second Level               // Draw the tree for the first time        RefreshTree();        function RefreshTree() {            DrawTree({ Container: document.getElementById("dvTreeContainer"),                        RootNode: rootNode,                                                OnNodeClick: NodeClick,                        OnNodeDoubleClick: NodeDoubleClick });        }        function NodeClick() {		var name=this.Node.Content;		$.ajax({		url:"get_link_services.php",		type:"GET",		data:"name="+name,		success:function(msg)		{				window.location.href = msg;		        		}		});                       if (event && event.shiftKey) {                // Add new Child if Expanded                if (!this.Node.Collapsed) {                    if (!this.Node.Nodes) this.Node.Nodes = new Array();                    var newNodeIndex = this.Node.Nodes.length;                    this.Node.Nodes[newNodeIndex] = new Object();                    this.Node.Nodes[newNodeIndex].Content = this.Node.Content + "." + (newNodeIndex + 1);                    RefreshTree();                }            };        }        function NodeDoubleClick() {            if (this.Node.Nodes && this.Node.Nodes.length > 0) { // If has children                this.Node.Collapsed = !this.Node.Collapsed;                RefreshTree();            }        }        function ChangeLayout() {            RefreshTree();        }     -->    </script>
    
    

</body>

</html>
<?php ob_flush(); ?>
