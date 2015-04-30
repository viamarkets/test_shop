<? 
$smarty -> display ('header/main.tpl'); ///основной хед
?>
  <link href="<?echo $siteurl.$tmurl;?>/favicon.ico" rel="shortcut icon" type="image/x-icon" />
  <link rel="stylesheet" href="<?echo $siteurl.$tmurl;?>/css/addons.css" type="text/css" />
  <link rel="stylesheet" href="<?echo $siteurl.$tmurl;?>/css/layout.css" type="text/css" />
  <link rel="stylesheet" href="<?echo $siteurl.$tmurl;?>/css/template.css" type="text/css" />
  <link rel="stylesheet" href="<?echo $siteurl.$tmurl;?>/css/jm.css" type="text/css" />
  <link rel="stylesheet" href="<?echo $siteurl.$tmurl;?>/via.css" type="text/css" />

  <link rel="stylesheet" href="<?echo $siteurl.$tmurl;?>/css/vm_style.css" type="text/css" />

  <link rel="stylesheet" href="<?echo $siteurl.$tmurl;?>/css/css3.css" type="text/css" />
  <link rel="stylesheet" href="<?echo $siteurl.$tmurl;?>/css/style<?echo $style;?>.css" type="text/css" />
  <link rel="stylesheet" href="<?echo $siteurl.$tmurl;?>/css/vm.css" type="text/css" />
 <link rel="stylesheet" href="<?echo $siteurl.$tmurl;?>/css/bottom.css" type="text/css" />
  

<!--[if IE 8.0]><link rel="stylesheet" href="<?echo $tmurl;?>/css/ie8.css" type="text/css" /><![endif]-->
<!--[if IE 7.0]><link rel="stylesheet" href="<?echo $tmurl;?>/css/ie.css" type="text/css" /><![endif]-->
<!--[if IE 7.0]><style>.clearfix { display: inline-block; } /* IE7xhtml*/</style><![endif]-->


<link href="<?echo $siteurl.$tmurl;?>/css/menu/split.css" rel="stylesheet" type="text/css" />

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

<? 
$smarty -> display ('slide_info/main.tpl'); ///информационный слайдер VM
?>
<div id="gk-top" class="main">

        <?	
		$smarty -> display ('logo/main.tpl');///логотип
				$smarty -> display ('top_info/main.tpl');
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
<?$smarty -> display ('menu/main-top_and_cat.tpl');///Верхнее меню
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

	         
                   

	        	        <!-- USER MODULES -->
	        
<?
 $smarty -> display ('bottom_mod/main.tpl');/// блоки рейтенгов товаров
 $smarty -> display ('viewed_items/main.tpl');/// блок просмотренных товаров
 $smarty -> display ('top50/main.tpl');/// блок top50 товаров
?>	    
	    <!-- BOTTOM MENUS -->
	    

	     
	    
	        </div>
</div>
</div></div></div>
	    <!-- FOOTER -->

<? $smarty -> display ('bottom/main.tpl');///bottom ?>

<?
$smarty -> display ('scripts.tpl'); ///скрипты
?>

<script>
  var p3chat = p3chat || [];
  p3chat.push(['_setAccount', '077154215']);
  p3chat.push(['_trackPage']);
  (function (d, t, id) {
    if (d.getElementById(id)) return;
    var e = d.createElement(t),
        s = d.getElementsByTagName(t)[0];
    e.src = "//p3chat.com/dist/p3.js"; e.id = id;
    s.parentNode.insertBefore(e, s);
  }(document, 'script', 'p3chat-snippet'));
</script>
 


<button  onClick="show_item('/Kostyum-C39N39C-Costume-National-33/', 7)" id="opener">Open Dialog</button>


</body>
</html>



