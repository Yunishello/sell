<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<title>Sellpadi a Business Category Flat Bootstrap Responsive Website Template | Terms of Use :: w3layouts</title>
<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('css/bootstrap-select.css')}}">
<link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Sellpadi Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<!--fonts-->
<link href='http://fonts.googleapis.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!--//fonts-->	
<!-- js -->
<script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
<!-- js -->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/bootstrap-select.js')}}"></script>
<script>
  $(document).ready(function () {
    var mySelect = $('#first-disabled2');

    $('#special').on('click', function () {
      mySelect.find('option:selected').prop('disabled', true);
      mySelect.selectpicker('refresh');
    });

    $('#special2').on('click', function () {
      mySelect.find('option:disabled').prop('disabled', false);
      mySelect.selectpicker('refresh');
    });

    $('#basic2').selectpicker({
      liveSearch: true,
      maxOptions: 1
    });
  });
</script>
<script type="text/javascript" src="{{asset('js/jquery.leanModal.min.js')}}"></script>
<link href="{{asset('css/jquery.uls.css')}}" rel="stylesheet"/>
<link href="{{asset('css/jquery.uls.grid.css')}}" rel="stylesheet"/>
<link href="{{asset('css/jquery.uls.lcd.css')}}" rel="stylesheet"/>
<!-- Source -->
<script src="{{asset('js/jquery.uls.data.js')}}"></script>
<script src="{{asset('js/jquery.uls.data.utils.js')}}"></script>
<script src="{{asset('js/jquery.uls.lcd.js')}}"></script>
<script src="{{asset('js/jquery.uls.languagefilter.js')}}"></script>
<script src="{{asset('js/jquery.uls.regionfilter.js')}}"></script>
<script src="{{asset('js/jquery.uls.core.js')}}"></script>
<script>
			$( document ).ready( function() {
				$( '.uls-trigger' ).uls( {
					onSelect : function( language ) {
						var languageName = $.uls.data.getAutonym( language );
						$( '.uls-trigger' ).text( languageName );
					},
					quickList: ['en', 'hi', 'he', 'ml', 'ta', 'fr'] //FIXME
				} );
			} );
		</script>
		<link rel="stylesheet" type="text/css" href="{{asset('css/easy-responsive-tabs.css')}}" />
    <script src="{{asset('js/easyResponsiveTabs.js')}}"></script>
</head>
<body>
<script src="../../../../../m.servedby-buysellads.com/monetization.js" type="text/javascript"></script>
<script>
(function(){
	if(typeof _bsa !== 'undefined' && _bsa) {
  		// format, zoneKey, segment:value, options
  		_bsa.init('flexbar', 'CKYI627U', 'placement:w3layoutscom');
  	}
})();
</script>
<script>
(function(){
if(typeof _bsa !== 'undefined' && _bsa) {
	// format, zoneKey, segment:value, options
	_bsa.init('fancybar', 'CKYDL2JN', 'placement:demo');
}
})();
</script>
<script>
(function(){
	if(typeof _bsa !== 'undefined' && _bsa) {
  		// format, zoneKey, segment:value, options
  		_bsa.init('stickybox', 'CKYI653J', 'placement:w3layoutscom');
  	}
})();
</script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src='https://www.googletagmanager.com/gtag/js?id=UA-149859901-1'></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-149859901-1');
</script>

<script>
     window.ga=window.ga||function(){(ga.q=ga.q||[]).push(arguments)};ga.l=+new Date;
     ga('create', 'UA-149859901-1', 'demo.w3layouts.com');
     ga('require', 'eventTracker');
     ga('require', 'outboundLinkTracker');
     ga('require', 'urlChangeTracker');
     ga('send', 'pageview');
   </script>
<script async src="{{asset('js/autotrack.js')}}"></script>

<meta name="robots" content="noindex">
<body><link rel="stylesheet" href="{{asset('assests/css/font-awesome.min.css')}}">
<!-- New toolbar-->
<style>
* {
  box-sizing: border-box;
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;
}


#w3lDemoBar.w3l-demo-bar {
  top: 0;
  right: 0;
  bottom: 0;
  z-index: 9999;
  padding: 40px 5px;
  padding-top:70px;
  margin-bottom: 70px;
  background: #0D1326;
  border-top-left-radius: 9px;
  border-bottom-left-radius: 9px;
}

#w3lDemoBar.w3l-demo-bar a {
  display: block;
  color: #e6ebff;
  text-decoration: none;
  line-height: 24px;
  opacity: .6;
  margin-bottom: 20px;
  text-align: center;
}

#w3lDemoBar.w3l-demo-bar span.w3l-icon {
  display: block;
}

#w3lDemoBar.w3l-demo-bar a:hover {
  opacity: 1;
}

#w3lDemoBar.w3l-demo-bar .w3l-icon svg {
  color: #e6ebff;
}
#w3lDemoBar.w3l-demo-bar .responsive-icons {
  margin-top: 30px;
  border-top: 1px solid #41414d;
  padding-top: 40px;
}
#w3lDemoBar.w3l-demo-bar .demo-btns {
  border-top: 1px solid #41414d;
  padding-top: 30px;
}
#w3lDemoBar.w3l-demo-bar .responsive-icons a span.fa {
  font-size: 26px;
}
#w3lDemoBar.w3l-demo-bar .no-margin-bottom{
  margin-bottom:0;
}
.toggle-right-sidebar span {
  background: #0D1326;
  width: 50px;
  height: 50px;
  line-height: 50px;
  text-align: center;
  color: #e6ebff;
  border-radius: 50px;
  font-size: 26px;
  cursor: pointer;
  opacity: .5;
}
.pull-right {
  float: right;
  position: fixed;
  right: 0px;
  top: 70px;
  width: 90px;
  z-index: 99999;
  text-align: center;
}
/* ============================================================
RIGHT SIDEBAR SECTION
============================================================ */

#right-sidebar {
  width: 90px;
  position: fixed;
  height: 100%;
  z-index: 1000;
  right: 0px;
  top: 0;
  margin-top: 60px;
  -webkit-transition: all .5s ease-in-out;
  -moz-transition: all .5s ease-in-out;
  -o-transition: all .5s ease-in-out;
  transition: all .5s ease-in-out;
  overflow-y: auto;
}


/* ============================================================
RIGHT SIDEBAR TOGGLE SECTION
============================================================ */

.hide-right-bar-notifications {
  margin-right: -300px !important;
  -webkit-transition: all .3s ease-in-out;
  -moz-transition: all .3s ease-in-out;
  -o-transition: all .3s ease-in-out;
  transition: all .3s ease-in-out;
}



@media (max-width: 992px) {
  #w3lDemoBar.w3l-demo-bar a.desktop-mode{
      display: none;

  }
}
@media (max-width: 767px) {
  #w3lDemoBar.w3l-demo-bar a.tablet-mode{
      display: none;

  }
}
@media (max-width: 568px) {
  #w3lDemoBar.w3l-demo-bar a.mobile-mode{
      display: none;
  }
  #w3lDemoBar.w3l-demo-bar .responsive-icons {
      margin-top: 0px;
      border-top: none;
      padding-top: 0px;
  }
  #right-sidebar,.pull-right {
      width: 90px;
  }
  #w3lDemoBar.w3l-demo-bar .no-margin-bottom-mobile{
      margin-bottom: 0;
  }
}
</style>
<div class="pull-right toggle-right-sidebar">
<span class="fa title-open-right-sidebar tooltipstered fa-angle-double-right"></span>
</div>

<div id="right-sidebar" class="right-sidebar-notifcations nav-collapse">
<div class="bs-example bs-example-tabs right-sidebar-tab-notification" data-example-id="togglable-tabs">

    
    </div>
    <div class="right-sidebar-panel-content animated fadeInRight" tabindex="5003"
        style="overflow: hidden; outline: none;">
    </div>
</div>
</div>
</div>

<div class="header">
		<div class="container">
			<div class="logo">
				<a href="/"><span>Sell</span>padi</a>
			</div>
			<div class="header-right">
			<a class="account" href="/login">My Account</a>
			<span class="active uls-trigger">Select language</span>
	<!-- Large modal -->
			<div class="selectregion">
				<button class="btn btn-primary" data-toggle="modal" data-target="#myModal">
				Select Your Region</button>
					<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
					aria-hidden="true">
						<div class="modal-dialog modal-lg">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
										&times;</button>
									<h4 class="modal-title" id="myModalLabel">
										Please Choose Your Location</h4>
								</div>
								<div class="modal-body">
									 <form class="form-horizontal" role="form">
										<div class="form-group">
											<select id="basic2" class="show-tick form-control" multiple>
												<optgroup label="Popular Cities">
													<option selected style="display:none;color:#eee;">Select City</option>
													<option>Birmingham</option>
													<option>Anchorage</option>
													<option>Phoenix</option>
													<option>Little Rock</option>
													<option>Los Angeles</option>
													<option>Denver</option>
													<option>Bridgeport</option>
													<option>Wilmington</option>
													<option>Jacksonville</option>
													<option>Atlanta</option>
													<option>Honolulu</option>
													<option>Boise</option>
													<option>Chicago</option>
													<option>Indianapolis</option>
												</optgroup>
												<optgroup label="More Cities">
													<optgroup label="Alabama">
														<option>Birmingham</option>
														<option>Montgomery</option>
														<option>Mobile</option>
														<option>Huntsville</option>
														<option>Tuscaloosa</option>
													</optgroup>
													<optgroup label="Alaska">
														<option>Anchorage</option>
														<option>Fairbanks</option>
														<option>Juneau</option>
														<option>Sitka</option>
														<option>Ketchikan</option>
													</optgroup>
													<optgroup label="Arizona">
														<option>Phoenix</option>
														<option>Tucson</option>
														<option>Mesa</option>
														<option>Chandler</option>
														<option>Glendale</option>
													</optgroup>
													<optgroup label="Arkansas">
														<option>Little Rock</option>
														<option>Fort Smith</option>
														<option>Fayetteville</option>
														<option>Springdale</option>
														<option>Jonesboro</option>
													</optgroup>
													<optgroup label="California">
														<option>Los Angeles</option>
														<option>San Diego</option>
														<option>San Jose</option>
														<option>San Francisco</option>
														<option>Fresno</option>
													</optgroup>
													<optgroup label="Colorado">
														<option>Denver</option>
														<option>Colorado</option>
														<option>Aurora</option>
														<option>Fort Collins</option>
														<option>Lakewood</option>
													</optgroup>
													<optgroup label="Connecticut">
														<option>Bridgeport</option>
														<option>New Haven</option>
														<option>Hartford</option>
														<option>Stamford</option>
														<option>Waterbury</option>
													</optgroup>
													<optgroup label="Delaware">
														<option>Wilmington</option>
														<option>Dover</option>
														<option>Newark</option>
														<option>Bear</option>
														<option>Middletown</option>
													</optgroup>
													<optgroup label="Florida">
														<option>Jacksonville</option>
														<option>Miami</option>
														<option>Tampa</option>
														<option>St. Petersburg</option>
														<option>Orlando</option>
													</optgroup>
													<optgroup label="Georgia">
														<option>Atlanta</option>
														<option>Augusta</option>
														<option>Columbus</option>
														<option>Savannah</option>
														<option>Athens</option>
													</optgroup>
													<optgroup label="Hawaii">
														<option>Honolulu</option>
														<option>Pearl City</option>
														<option>Hilo</option>
														<option>Kailua</option>
														<option>Waipahu</option>
													</optgroup>
													<optgroup label="Idaho">
														<option>Boise</option>
														<option>Nampa</option>
														<option>Meridian</option>
														<option>Idaho Falls</option>
														<option>Pocatello</option>
													</optgroup>
													<optgroup label="Illinois">
														<option>Chicago</option>
														<option>Aurora</option>
														<option>Rockford</option>
														<option>Joliet</option>
														<option>Naperville</option>
													</optgroup>
													<optgroup label="Indiana">
														<option>Indianapolis</option>
														<option>Fort Wayne</option>
														<option>Evansville</option>
														<option>South Bend</option>
														<option>Hammond</option>														       
													</optgroup>
													<optgroup label="Iowa">
														<option>Des Moines</option>
														<option>Cedar Rapids</option>
														<option>Davenport</option>
														<option>Sioux City</option>
														<option>Waterloo</option>       													
													</optgroup>
													<optgroup label="Kansas">
														<option>Wichita</option>
														<option>Overland Park</option>
														<option>Kansas City</option>
														<option>Topeka</option>
														<option>Olathe  </option>            													
													</optgroup>
													<optgroup label="Kentucky">
														<option>Louisville</option>
														<option>Lexington</option>
														<option>Bowling Green</option>
														<option>Owensboro</option>
														<option>Covington</option>        														
													</optgroup>
													<optgroup label="Louisiana">
														<option>New Orleans</option>
														<option>Baton Rouge</option>
														<option>Shreveport</option>
														<option>Metairie</option>
														<option>Lafayette</option>          														
													</optgroup>
													<optgroup label="Maine">
														<option>Portland</option>
														<option>Lewiston</option>
														<option>Bangor</option>
														<option>South Portland</option>
														<option>Auburn</option>         														
													</optgroup>
													<optgroup label="Maryland">
														<option>Baltimore</option>
														<option>Frederick</option>
														<option>Rockville</option>
														<option>Gaithersburg</option>
														<option>Bowie</option>         														
													</optgroup>
													<optgroup label="Massachusetts">
														<option>Boston</option>
														<option>Worcester</option>
														<option>Springfield</option>
														<option>Lowell</option>
														<option>Cambridge</option>  
													</optgroup>
													<optgroup label="Michigan">
														<option>Detroit</option>
														<option>Grand Rapids</option>
														<option>Warren</option>
														<option>Sterling Heights</option>
														<option>Lansing</option> 
													</optgroup>
													<optgroup label="Minnesota">
														<option>Minneapolis</option>
														<option>St. Paul</option>
														<option>Rochester</option>
														<option>Duluth</option>
														<option>Bloomington</option>      														
													</optgroup>
													<optgroup label="Mississippi">
														<option>Jackson</option>
														<option>Gulfport</option>
														<option>Southaven</option>
														<option>Hattiesburg</option>
														<option>Biloxi</option>         														
													</optgroup>
													<optgroup label="Missouri">
														<option>Kansas City</option>
														<option>St. Louis</option>
														<option>Springfield</option>
														<option>Independence</option>
														<option>Columbia</option>            														
													</optgroup>
													<optgroup label="Montana">
														<option>Billings</option>
														<option>Missoula</option>
														<option>Great Falls</option>
														<option>Bozeman</option>
														<option>Butte-Silver Bow</option>         														
													</optgroup>
													<optgroup label="Nebraska">
														<option>Omaha</option>
														<option>Lincoln</option>
														<option>Bellevue</option>
														<option>Grand Island</option>
														<option>Kearney</option>        													
													</optgroup>
													<optgroup label="Nevada">
														<option>Las Vegas</option>
														<option>Henderson</option>
														<option>North Las Vegas</option>
														<option>Reno</option>
														<option>Sunrise Manor</option>            													
													</optgroup>
													<optgroup label="New Hampshire">
														<option>Manchesters</option>
														<option>Nashua</option>
														<option>Concord</option>
														<option>Dover</option>
														<option>Rochester</option>              													
													</optgroup>
													<optgroup label="New Jersey">
														<option>Newark</option>
														<option>Jersey City</option>
														<option>Paterson</option>
														<option>Elizabeth</option>
														<option>Edison</option> 
													</optgroup>
													<optgroup label="New Mexico">
														<option>Albuquerque</option>
														<option>Las Cruces</option>
														<option>Rio Rancho</option>
														<option>Santa Fe</option>
														<option>Roswell</option>       
													</optgroup>
													<optgroup label="New York">
														<option>New York</option>
														<option>Buffalo</option>
														<option>Rochester</option>
														<option>Yonkers</option>
														<option>Syracuse</option>        														
													</optgroup>
													<optgroup label="North Carolina">
														<option>Charlotte</option>
														<option>Raleigh</option>
														<option>Greensboro</option>
														<option>Winston-Salem</option>
														<option>Durham</option>          														
													</optgroup>
													<optgroup label="North Dakota">
														<option>Fargo</option>
														<option>Bismarck</option>
														<option>Grand Forks</option>
														<option>Minot</option>
														<option>West Fargo</option>
													</optgroup>
													<optgroup label="Ohio">
														<option>Columbus</option>
														<option>Cleveland</option>
														<option>Cincinnati</option>
														<option>Toledo</option>
														<option>Akron</option>      
													</optgroup>
													<optgroup label="Oklahoma">
														<option>Oklahoma City</option>
														<option>Tulsa</option>
														<option>Norman</option>
														<option>Broken Arrow</option>
														<option>Lawton</option>        														
													</optgroup>
													<optgroup label="Oregon">
														<option>Portland</option>
														<option>Eugene</option>
														<option>Salem</option>
														<option>Gresham</option>
														<option>Hillsboro</option>          														
													</optgroup>
													<optgroup label="Pennsylvania">
														<option>Philadelphia</option>
														<option>Pittsburgh</option>
														<option>Allentown</option>
														<option>Erie</option>
														<option>Reading</option>         														
													</optgroup>
													<optgroup label="Rhode Island">
														<option>Providence</option>
														<option>Warwick</option>
														<option>Cranston</option>
														<option>Pawtucket</option>
														<option>East Providence</option>   
													</optgroup>
													<optgroup label="South Carolina">
														<option>Columbia</option>
														<option>Charleston</option>
														<option>North Charleston</option>
														<option>Mount Pleasant</option>
														<option>Rock Hill</option> 
													</optgroup>
													<optgroup label="South Dakota">
														<option>Sioux Falls</option>
														<option>Rapid City</option>
														<option>Aberdeen</option>
														<option>Brookings</option>
														<option>Watertown</option> 
													</optgroup>
													<optgroup label="Tennessee">
														<option>Memphis</option>
														<option>Nashville</option>
														<option>Knoxville</option>
														<option>Chattanooga</option>
														<option>Clarksville</option>       
													</optgroup>
													<optgroup label="Texas">
														<option>Houston</option>
														<option>San Antonio</option>
														<option>Dallas</option>
														<option>Austin</option>
														<option>Fort Worth</option>   
													</optgroup>
													<optgroup label="Utah">
														<option>Salt Lake City</option>
														<option>West Valley City</option>
														<option>Provo</option>
														<option>West Jordan</option>
														<option>Orem</option>   
													</optgroup>	
													<optgroup label="Vermont">
														<option>Burlington</option>
														<option>Essex</option>
														<option>South Burlington</option>
														<option>Colchester</option>
														<option>Rutland</option>   
													</optgroup>
													<optgroup label="Virginia">
														<option>Virginia Beach</option>
														<option>Norfolk</option>
														<option>Chesapeake</option>
														<option>Arlington</option>
														<option>Richmond</option> 
													</optgroup>	
													<optgroup label="Washington">
														<option>Seattle</option>
														<option>Spokane</option>
														<option>Tacoma</option>
														<option>Vancouver</option>
														<option>Bellevue</option> 
													</optgroup>	
													<optgroup label="West Virginia">
														<option>Charleston</option>
														<option>Huntington</option>
														<option>Parkersburg</option>
														<option>Morgantown</option>
														<option>Wheeling</option> 
													</optgroup>	
													<optgroup label="Wisconsin">
														<option>Milwaukee</option>
														<option>Madison</option>
														<option>Green Bay</option>
														<option>Kenosha</option>
														<option>Racine</option>
													</optgroup>
													<optgroup label="Wyoming">
														<option>Cheyenne</option>
														<option>Casper</option>
														<option>Laramie</option>
														<option>Gillette</option>
														<option>Rock Springs</option>
													</optgroup>			
												</optgroup>
											</select>
										</div>
									  </form>    
								</div>
							</div>
						</div>
					</div>
				<script>
				$('#myModal').modal('');
				</script>
			</div>
		</div>
		</div>
	</div>
	<div class="banner text-center">
	  <div class="container">    
			<h1>Sell or Advertise   <span class="segment-heading">    anything online </span> with Sellpadi</h1>
			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
			<a href="/post">Post Free Ad</a>
	  </div>
	</div>
	<!---728x90--->

	<!-- Terms of use -->
	<div class="terms main-grid-border">
		<div class="container">
			<h2 class="head">Terms of Use</h2>
				<div class="panel-group" id="accordion">
				<!-- First Panel -->
					<div class="panel panel-default">
						<div class="panel-heading">
							 <h4 class="panel-title" data-toggle="collapse" data-target="#collapseOne">
								 <span>1.</span> Acceptance
							 </h4>
						</div>
						<div id="collapseOne" class="panel-collapse collapse">
							<div class="panel-body">
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
								<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage.</p>
							</div>
						</div>
					</div>
					
					<!-- Second Panel -->
					<div class="panel panel-default">
						<div class="panel-heading">
							 <h4 class="panel-title" data-toggle="collapse"  data-target="#collapseTwo">
								<span>2.</span> Description of service and content policy
							 </h4>
						</div>
						<div id="collapseTwo" class="panel-collapse collapse">
							<div class="panel-body">								
								<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage.</p>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
								<p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing. </p>
								<p>Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
							</div>
						</div>
					</div>
					<!---728x90--->
					<!-- Third Panel -->
					<div class="panel panel-default">
						<div class="panel-heading">
							 <h4 class="panel-title" data-toggle="collapse" data-target="#collapseThree">
								<span>3.</span> featured ads
							 </h4>
						</div>
						<div id="collapseThree" class="panel-collapse collapse">
							<div class="panel-body">
								<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
							</div>
						</div>
					</div>
					<!-- Fourth Panel -->
					<div class="panel panel-default">
						<div class="panel-heading">
							 <h4 class="panel-title" data-toggle="collapse" data-target="#collapseFour">
								<span>4.</span> conduct
							 </h4>
						</div>
						<div id="collapseFour" class="panel-collapse collapse">
							<div class="panel-body">
								<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. </p>
								<p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. </p>
								<p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur.</p>
							</div>
						</div>
					</div>
					<!---728x90--->
					<!-- Fifth Panel -->
					<div class="panel panel-default">
						<div class="panel-heading">
							 <h4 class="panel-title" data-toggle="collapse" data-target="#collapseFive">
								<span>5.</span> paid postings
							 </h4>
						</div>
						<div id="collapseFive" class="panel-collapse collapse">
							<div class="panel-body">
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
								<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage.</p>
							</div>
						</div>
					</div>
					<!-- Sixth Panel -->
					<div class="panel panel-default">
						<div class="panel-heading">
							 <h4 class="panel-title" data-toggle="collapse" data-target="#collapseSix">
								<span>6.</span> posting agents
							 </h4>
						</div>
						<div id="collapseSix" class="panel-collapse collapse">
							<div class="panel-body">
								<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage.</p>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
								<p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing. </p>
							</div>
						</div>
					</div>
					<!-- Seventh Panel -->
					<div class="panel panel-default">
						<div class="panel-heading">
							 <h4 class="panel-title" data-toggle="collapse" data-target="#collapseSeven">
								<span>7.</span> no spam policy
							 </h4>
						</div>
						<div id="collapseSeven" class="panel-collapse collapse">
							<div class="panel-body">
								<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC.</p>
							</div>
						</div>
					</div>
					<!-- Eight Panel -->
					<div class="panel panel-default">
						<div class="panel-heading">
							 <h4 class="panel-title" data-toggle="collapse" data-target="#collapseEight">
								<span>8.</span> limitations of liability
							 </h4>
						</div>
						<div id="collapseEight" class="panel-collapse collapse">
							<div class="panel-body">
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
								<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage.</p>
							</div>
						</div>
					</div>
					<!-- Ninth Panel -->
					<div class="panel panel-default">
						<div class="panel-heading">
							 <h4 class="panel-title" data-toggle="collapse" data-target="#collapseNine">
								<span>9.</span> violation of terms and liquidation damages
							 </h4>
						</div>
						<div id="collapseNine" class="panel-collapse collapse">
							<div class="panel-body">
								<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC.</p>
							</div>
						</div>
					</div>
					<!-- Tenth Panel -->
					<div class="panel panel-default">
						<div class="panel-heading">
							 <h4 class="panel-title" data-toggle="collapse" data-target="#collapseTen">
								<span>10.</span> ability to accept terms of service 
							 </h4>
						</div>
						<div id="collapseTen" class="panel-collapse collapse">
							<div class="panel-body">
								<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
								Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
								Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.</p>
								<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
								Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.</p>
								<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
								Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
								Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
								Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.</p>
							</div>
						</div>
					</div>
					<!-- Eleventh Panel -->
					<div class="panel panel-default">
						<div class="panel-heading">
							 <h4 class="panel-title" data-toggle="collapse" data-target="#collapseEleven">
								<span>11.</span> Lorem Ipsum
							 </h4>
						</div>
						<div id="collapseEleven" class="panel-collapse collapse">
							<div class="panel-body">
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
								<p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing. </p>
							</div>
						</div>
					</div>
					<!-- Twelve Panel -->
					<div class="panel panel-default">
						<div class="panel-heading">
							 <h4 class="panel-title" data-toggle="collapse" data-target="#collapseTwelve">
								<span>12.</span> general information
							 </h4>
						</div>
						<div id="collapseTwelve" class="panel-collapse collapse">
							<div class="panel-body">
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
								<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage.</p>
							</div>
						</div>
					</div>
					<!-- Thirteen Panel -->
					<div class="panel panel-default">
						<div class="panel-heading">
							 <h4 class="panel-title" data-toggle="collapse" data-target="#collapseThirteen">
								<span>13.</span> assignment
							 </h4>
						</div>
						<div id="collapseThirteen" class="panel-collapse collapse">
							<div class="panel-body">
								<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.</p>
								<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage.</p>
							</div>
						</div>
					</div>
					<!-- Fourteen Panel -->
					<div class="panel panel-default">
						<div class="panel-heading">
							 <h4 class="panel-title" data-toggle="collapse" data-target="#collapseFourteen">
								<span>14.</span> user submissions
							 </h4>
						</div>
						<div id="collapseFourteen" class="panel-collapse collapse">
							<div class="panel-body">
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
								<p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing. </p>
							</div>
						</div>
					</div>
				</div>
		</div>	
	</div>
	<!-- // Terms of use -->
	<!--footer section start-->		
		@include('layouts.footer')
        <!--footer section end-->


<div id = "v-w3layouts"></div><script>(function(v,d,o,ai){ai=d.createElement('script');ai.defer=true;ai.async=true;ai.src=v.location.protocol+o;d.head.appendChild(ai);})(window, document, '../../../../../a.vdo.ai/core/v-w3layouts/vdo.ai.js');</script>
	</body>
</html>