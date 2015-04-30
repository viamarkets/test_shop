<?
$smarty -> display ('header/main.tpl'); ///основной хед
?>
  <link href="<?echo $tmurl;?>/favicon.ico" rel="shortcut icon" type="image/x-icon" />
  <link rel="stylesheet" href="<?echo $tmurl;?>/css/modal.css" type="text/css" />
  <link rel="stylesheet" href="<?echo $tmurl;?>/css/k2.css" type="text/css" />
  <link rel="stylesheet" href="<?echo $tmurl;?>/css/addons.css" type="text/css" />
  <link rel="stylesheet" href="<?echo $tmurl;?>/css/layout.css" type="text/css" />
  <link rel="stylesheet" href="<?echo $tmurl;?>/css/template.css" type="text/css" />
  <link rel="stylesheet" href="<?echo $tmurl;?>/css/joomla.css" type="text/css" />
  <link rel="stylesheet" href="<?echo $tmurl;?>/via.css" type="text/css" />

  <link rel="stylesheet" href="<?echo $tmurl;?>/css/gk_stuff.css" type="text/css" />
  <link rel="stylesheet" href="<?echo $tmurl;?>/css/typo.css" type="text/css" />
  <link rel="stylesheet" href="<?echo $tmurl;?>/css/css3.css" type="text/css" />
  <link rel="stylesheet" href="<?echo $tmurl;?>/css/style<?echo $style;?>.css" type="text/css" />
  <link rel="stylesheet" href="<?echo $tmurl;?>/css/vm.css" type="text/css" />

  <script type="text/javascript" src="<?echo $tmurl;?>/js/mootools.js"></script> <!--слайдер-->
  <script type="text/javascript" src="<?echo $tmurl;?>/js/gk_image_show.js"></script> <!--слайдер-->

  <script type="text/javascript" src="<?echo $tmurl;?>/js/engine-mootools-11.js"></script>
  
<!--[if IE 8.0]><link rel="stylesheet" href="<?echo $tmurl;?>/css/ie8.css" type="text/css" /><![endif]-->
<!--[if IE 7.0]><link rel="stylesheet" href="<?echo $tmurl;?>/css/ie.css" type="text/css" /><![endif]-->
<!--[if IE 7.0]><style>.clearfix { display: inline-block; } /* IE7xhtml*/</style><![endif]-->


<link href="<?echo $tmurl;?>/css/menu/split.css" rel="stylesheet" type="text/css" />

<!--скрипт перенаправлений хеша-->
<? require_once($maindir."hash.php");?>

<style type="text/css">	

	body {
		font-family: Arial, Helvetica, sans-serif;
	}
	
    #gk-mainnav .level0>li>a,
	.itemRelated h3, 
	.itemAuthorLatest h3 {
		font-family: Arial, Helvetica, sans-serif;
	}

    .moduletable_menu h3,
    .moduletable_text h3,
    .moduletable h3,
    .gk_is_text h4 {
		font-family: Arial, Helvetica, sans-serif;
	}

</style>
<!--Width of template -->
<style type="text/css">
.main { width: 910px; margin: 0 auto; }
</style>

</head>
<body id="bd" class="fs3 FF style1">
<div style="height:34px;"></div>
<div id="gk-top" class="main">

        <?	$smarty -> display ('logo/main.tpl');///логотип
        	$smarty -> display ('cart/main.tpl');///корзина
	
	?>
<div style="clear:both;"></div>
    	<? $smarty -> display ('languiges/main-horizontal.tpl');///список языков
?>

	</div>

 </div>
    

<div id="bg-wrap-left" class="main">
	<div id="bg-wrap-right" class="main">
		<!-- MAIN NAVIGATION -->
	    <div id="gk-content-wrapper" class="main"> 	        
	        <!-- NAV -->
<?$smarty -> display ('menu/main-top.tpl');///Верхнее меню
?>
 <div style="height:10px;" id="addfavorites"></div>
<div id="lo" style="display: none">
<div id="upmas0" ></div>
</div>            
             <!-- HEADER -->



<div id="gk-header" class="normal clearfix clear two-modules">		
   <div id="gk-header1" style="width:26%;">
<?
$smarty -> display ('search/main.tpl');///поиск
$smarty -> display ('login/main.tpl');///логин
?>
<?  $smarty -> display ('content_filter/main.tpl');///фильтер товаров
 $smarty -> display ('new-items/main.tpl');///новые товары

?>   </div>		
		<div id="gk-main" style="width:74%;">

<?  //if(!$option)
$smarty -> display ('slaider/main.tpl');///слайдер
?>

                     <? require_once($maindir."main.php");
					  ?><!-- //CONTENT -->	
   
    </div>
	        <!-- TOP MODULES -->


	        
	        	        <!-- MAIN CONTAINER -->
	        <div id="gk-container">

	         
                   
<? if($rr==""){?>










	
    	
    	    	
    	    	
    	    	

	        	        <!-- USER MODULES -->
	        
<?
 $smarty -> display ('bottom_mod/main.tpl');/// блоки рейтенгов товаров
?>	    
	    <!-- BOTTOM MENUS -->
	    

	    <!-- FOOTER -->
	    <div id="gk-footer" class="clearfix main">

		<div id="stylearea">
		<a href="#" class="style_switcher" id="style_switcher1">Green</a>
		<a href="#" class="style_switcher" id="style_switcher2">Red</a>

		<a href="#" class="style_switcher" id="style_switcher3">Blue</a>
	</div>
		
	
	<div id="gk-copyright">
	<? $smarty -> display ('copyright.tpl');/// copyright
		?>
	</div>
</div>	     
	    	    <a href="http://joomfans.com" target="_blank" id="t3_logo">joomfans.com</a>
	        </div>
</div>


<?}?>
	
</body>
</html>



