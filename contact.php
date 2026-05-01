<body onLoad="Captcha();">

<?php
include('header.php')
?>


 
<div class="wrap banner inner"> 
<img src="images/contact.jpg" class="wrap">
</div>




	<div class="ipn0 cpn1" >
	<div class="wrapper">
	
	<h1><font color="#0191d5"> Contact</font> Us</h1>
             

<div class="left">
		
		
		<div class="wrap box">
		<div class="f1"><img src="images/location.png"></div>
		<div class="f2">
		
		
		<b style="display: block;margin-top:0px;">Bangalore</b>
		Learntech Edu Solutions Pvt Ltd.<br>
		 #3/75, 'D' Main, East End, 9th Block Jayanagar, Bangalore-560 069


<b style="display: block;margin-top: 11px;">Dubai</b>
Learntech<br>
<p>104, 1<sup>st</sup> Floor, Rostamani Real Estate Building / Renault Showroom Building, Galadari Signal, Opp. 
Abuhail Metro, Dubai.</p>

</div>
		</div>
		
		
		<div class="wrap box">
		<div class="f1"><img src="images/phone.png"></div>
		<div class="f2">Tel: 080-22454991, 26631169</div>
		</div>
		
		<div class="wrap box">
		<div class="f1"><img src="images/fax.png"></div>
		<div class="f2">Fax: 080 22454991</div>
		</div>
		
		<div class="wrap box">
		<div class="f1"><img src="images/ad.png"></div>
		<div class="f2">PRO Admission : +91 9036020005/16</div>
		</div>
		
		<div class="wrap box">
		<div class="f1"><img src="images/email.png"></div>
		<div class="f2"><a href="mailto:info@coimbatorestudy.com">info@coimbatorestudy.com</a> <br>
		 <a href="mailto:info@coimbatorestudy.com">info@learntechww.com</a></div>
		</div>
		
</div>


      <div class="right"> 
        <h3>Send us a Message</h3>
      <form method="post" action="mail.php" name="RegForm" id="contact">
  			<div class="box wrap1"> <input type="text" placeholder="Name" name="name"></div>
            <div class="box"> <input type="text" placeholder="Mobile" name="phone"></div>
            <div class="box wrap100"> <input type="text" placeholder="Email" name="email" /></div>
            <div class="box wrap100"><textarea name="message" placeholder="Message"></textarea></div>
            
            
            <div class="box wrap1 capcha-block">
              <input type="text" name="mainCaptcha" id="mainCaptcha" class="capcha margin" readonly >
              <div class="details"><input type="text" name="detail2" id="txtInput" class="capchatxt margin" placeholder="Enter Code"/></div>
              <input type="button" id="refresh" value="Refresh" onClick="Captcha();"class="button margin" style="margin-bottom:0;" />
			</div>
            
            <div class="box wrap1"> <input type="submit" name="Submit" value="Send" id="Submit"  class="mail" /></div>
	 </form>

      
      </div>
	  
	  
	  
	  <div class="wrap emp">
	<div class="wrapper">
	
			<div class="padding">
			<img src="images/pooja.png">
			<b>POOJA GUPTA </b>
			<p>Manager - Business Development</p> 
			<p>+91 9036020016/9036020005</p>
			</div>
			
			<div class="padding">
			<img src="images/priti.png">
			<b>PRITI HAZARIKA </b>
			<p>PR Executive</p>
			<p>+91 9036020036</p>
			</div>
			
			<div class="padding">
			<img src="images/farhan.png">
			<b>FARHAN NAJUMUDEEN</b>
			<p>Manager-Marketing (Dubai)</p>
			<p>+971504955123</p>
			</div>
			
			<div class="padding">
			<img src="images/shiju.jpg">
			<b>SHIJU DANIEL</b>
			<p>Manager – Marketing & Promotions</p>
			<p>+91 9036020066</p>
			</div>

	</div>
	</div>
   
	</div>
	</div>
	
	
	
	


<div id="map"></div>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDJxvQY4mucf1LzIn_9PnzZZmVFDiBoHV0"></script>
        
        <script type="text/javascript">
            // When the window has finished loading create our google map below
            google.maps.event.addDomListener(window, 'load', init);
        
            function init() {
                var mapOptions = {
                    zoom: 11,
                    center: new google.maps.LatLng(11.0110035,76.8271484), 
                    styles: [
    {
        "featureType": "water",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#e9e9e9"
            },
            {
                "lightness": 17
            }
        ]
    },
    {
        "featureType": "landscape",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#f5f5f5"
            },
            {
                "lightness": 20
            }
        ]
    },
    {
        "featureType": "road.highway",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "color": "#ffffff"
            },
            {
                "lightness": 17
            }
        ]
    },
    {
        "featureType": "road.highway",
        "elementType": "geometry.stroke",
        "stylers": [
            {
                "color": "#ffffff"
            },
            {
                "lightness": 29
            },
            {
                "weight": 0.2
            }
        ]
    },
    {
        "featureType": "road.arterial",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#ffffff"
            },
            {
                "lightness": 18
            }
        ]
    },
    {
        "featureType": "road.local",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#ffffff"
            },
            {
                "lightness": 16
            }
        ]
    },
    {
        "featureType": "poi",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#f5f5f5"
            },
            {
                "lightness": 21
            }
        ]
    },
    {
        "featureType": "poi.park",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#dedede"
            },
            {
                "lightness": 21
            }
        ]
    },
    {
        "elementType": "labels.text.stroke",
        "stylers": [
            {
                "visibility": "on"
            },
            {
                "color": "#ffffff"
            },
            {
                "lightness": 16
            }
        ]
    },
    {
        "elementType": "labels.text.fill",
        "stylers": [
            {
                "saturation": 36
            },
            {
                "color": "#333333"
            },
            {
                "lightness": 40
            }
        ]
    },
    {
        "elementType": "labels.icon",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "transit",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#f2f2f2"
            },
            {
                "lightness": 19
            }
        ]
    },
    {
        "featureType": "administrative",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "color": "#fefefe"
            },
            {
                "lightness": 20
            }
        ]
    },
    {
        "featureType": "administrative",
        "elementType": "geometry.stroke",
        "stylers": [
            {
                "color": "#fefefe"
            },
            {
                "lightness": 17
            },
            {
                "weight": 1.2
            }
        ]
    }
]
                };

                // Get the HTML DOM element that will contain your map 
                // We are using a div with id="map" seen below in the <body>
                var mapElement = document.getElementById('map');

                // Create the Google Map using our element and options defined above
                var map = new google.maps.Map(mapElement, mapOptions);

                // Let's also add a marker while we're at it
                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(11.0110035,76.8271484),
                    map: map,
					icon : 'images/mm.png',
					animation: google.maps.Animation.BOUNCE,
                });
				marker.addListener('click', toggleBounce);
				function toggleBounce() {
				if (marker.getAnimation() !== null) {
				marker.setAnimation(null);
				} else {
				marker.setAnimation(google.maps.Animation.BOUNCE);
				}
				}
				
			var iconBase = 'https://maps.google.com/mapfiles/kml/shapes/';
var icons = {

};

function addMarker(feature) {
  var marker = new google.maps.Marker({
    position: feature.position,
    icon: icons[feature.type].icon,
    map: map
  });
}
            }
        </script>


<!--<div class="partners">
        	<div class="container">
            <h2>our partner sites</h2>
			<div class="marquee" id="mycrawler2" >
				<img src="images/partners/1.jpg" />
				<img src="images/partners/2.jpg" />
				<img src="images/partners/3.jpg" />
				<img src="images/partners/4.jpg" />
				<img src="images/partners/6.jpg" />
                <img src="images/partners/8.jpg" />
                <img src="images/partners/9.jpg" />
            </div>
          </div>
</div>-->

<?php
include('footer.php')
?>

<script src="js/jquery.form.js"></script>
<script src="js/jquery.validate.min.js"></script>


<script>

new WOW().init();

	   $(function() {
$(document).ready(function(){

$(document).on("scroll",function(){
if($(document).scrollTop()>10){
$(".nav").addClass('sticky');      
} else{
$(".nav").removeClass('sticky');     
}
});
});
});

$.validator.setDefaults({
		submitHandler: function() {
			$("#contact").submit();
		}
	});

	$(document ).ready(function() {
		$("#contact").validate({
			errorElement: "em",
			rules: {
				name: "required",
				phone: "required",
				email:{required:true,email:true},
				detail2:{required : true,equalTo: "#mainCaptcha"}
				
			},
			messages: {
				name: "Please enter Your Name",
				phone:" Please Enter Your Phone Number",
				email:{required:"Enter Your Email Address",email:"Please Enter a Valid Email ID"},
				detail2: "Enter The Code",
			}
		});
});
		
</script>





 <script type="text/javascript">
                 function Captcha(){
                     var alpha = new Array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z','a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z','1','2','3','4','5','6','7','8','9');
                     var i;
                     for (i=0;i<6;i++){
                       var a = alpha[Math.floor(Math.random() * alpha.length)];
                       var b = alpha[Math.floor(Math.random() * alpha.length)];
                       var c = alpha[Math.floor(Math.random() * alpha.length)];
                       var d = alpha[Math.floor(Math.random() * alpha.length)];
                       var e = alpha[Math.floor(Math.random() * alpha.length)];
                       var f = alpha[Math.floor(Math.random() * alpha.length)];
                       var g = alpha[Math.floor(Math.random() * alpha.length)];
                      }
                    var code = a + '' + b + '' + '' + c + '' + d + '' + e + ''+ f + '' + g;
                    document.getElementById("mainCaptcha").value = code;
					document.getElementById("txtInput").value = '';
					document.getElementById('errmsg9').style.display='none';
					document.getElementById('errmsg10').style.display='none';
					document.getElementById('errmsg11').style.display='none';
                  }
                  function ValidCaptcha(){
                      var string1 = removeSpaces(document.getElementById('mainCaptcha').value);
                      var string2 = removeSpaces(document.getElementById('txtInput').value);
                      if (string1 == string2){
                       document.getElementById('errmsg9').style.display='block';
                  document.getElementById('errmsg1').style.display='none';
                  document.getElementById('errmsg2').style.display='none';
                  document.getElementById('errmsg3').style.display='none';
                  document.getElementById('errmsg4').style.display='none';
                  document.getElementById('errmsg5').style.display='none';
                  document.getElementById('errmsg6').style.display='none';
                  document.getElementById('errmsg7').style.display='none';
				  document.getElementById('errmsg8').style.display='none';
				  document.getElementById('errmsg10').style.display='none';
				  document.getElementById('errmsg11').style.display='none';
				  return ValidCaptcha();
                      }
                      else{       
                        document.getElementById('errmsg10').style.display='block';
                  document.getElementById('errmsg1').style.display='none';
                  document.getElementById('errmsg2').style.display='none';
                  document.getElementById('errmsg3').style.display='none';
                  document.getElementById('errmsg4').style.display='none';
                  document.getElementById('errmsg5').style.display='none';
                  document.getElementById('errmsg6').style.display='none';
                  document.getElementById('errmsg7').style.display='none';
				  document.getElementById('errmsg8').style.display='none';
				  document.getElementById('errmsg9').style.display='none';
				  document.getElementById('errmsg11').style.display='none';
				  document.getElementById("txtInput").value = ''; 
				   return ValidCaptcha();
                      }
                  }
                  function removeSpaces(string){
                    return string.split(' ').join('');
                  }
				  
				
             </script> 
            <script type="text/javascript">
			 function resetcap(){
       var alpha = new Array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z','a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z','1','2','3','4','5','6','7','8','9');
                     var i;
                     for (i=0;i<6;i++){
                       var a = alpha[Math.floor(Math.random() * alpha.length)];
                       var b = alpha[Math.floor(Math.random() * alpha.length)];
                       var c = alpha[Math.floor(Math.random() * alpha.length)];
                       var d = alpha[Math.floor(Math.random() * alpha.length)];
                       var e = alpha[Math.floor(Math.random() * alpha.length)];
                       var f = alpha[Math.floor(Math.random() * alpha.length)];
                       var g = alpha[Math.floor(Math.random() * alpha.length)];
                      }
                    var code = a + '' + b + '' + '' + c + '' + d + '' + e + ''+ f + '' + g;
                    document.getElementById("mainCaptcha").value = code;
					
					document.getElementById("name").value = '';
					document.getElementById("email").value = '';
					document.getElementById("country").value = '';
					document.getElementById("state").value = '';
					document.getElementById("phone").value = '';
					$('#call').attr('checked', false);
					document.getElementById("persons").value = '';
					document.getElementById("treat").value = '';
					document.getElementById("rooms").value = '';
					document.getElementById("days").value = '';
					document.getElementById("dates").value = '';
					document.getElementById("specific").value = '';
					document.getElementById("budget").value = '';
					document.getElementById("details").value = '';
					document.getElementById("about1").value = '';
					document.getElementById("txtInput").value = '';
					
    };
	
</script> 

