<body onLoad="Captcha();">
<?php
include('header.php')
?>
<div class="wrap banner inner"> <img src="images/enquiry.jpg" class="wrap"> </div>
<div class="ipn0 cpn1 cpn2" >
	<div class="wrapper">
		<h1><font color="#0191d5"> Register For  </font> Free Counseling</h1>
		<div class="form-wrap">
			<form method="post" action="free-counseling-mail.php" name="RegForm" id="contact">
				<div class="box wrap1">
					<input type="text" placeholder="Enter Name" name="name">
				</div>
				<div class="box">
					<input type="text" placeholder="Enter Age" name="age"/>
				</div>
				<div class="box">
					<input type="text" placeholder="Enter Email Address" name="email">
				</div>
				<div class="box">
					<input type="text" placeholder="Enter Phone Number" name="phone">
				</div>
				<div class="box">
					<input type="text" placeholder="Enter Prefered Course" name="course" />
				</div>
				<div class="box">
					<input type="text" placeholder="Enter Location" name="location" />
				</div>
				
				<div class="box textarea">
					<textarea name="message" placeholder="Message"></textarea>
				</div>
				<div class="box wrap1 capcha-block">
					<input type="text" name="mainCaptcha" id="mainCaptcha" class="capcha margin" readonly >
					<div class="details">
						<input type="text" name="detail2" id="txtInput" class="capchatxt margin" placeholder="Enter Code"/>
					</div>
					<input type="button" id="refresh" value="Refresh" onClick="Captcha();"class="button margin" style="margin-bottom:0;" />
				</div>
				<div class="box textarea">
					<input type="submit" name="Submit" value="Send" id="Submit"  class="mail" />
				</div>
			</form>
		</div>
	</div>
</div>

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
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script>

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
				age: "required",
				phone: "required",
				email:{required:true,email:true},
				course: "required",
				location: "required",
	
				detail2:{required : true,equalTo: "#mainCaptcha"}
				
			},
			messages: {
				
				
				name: "Please enter Your Name",
				age: "Enter Your Age",
				phone: "Please Enter Your Phone Number",
				email:"Please Enter Valid Email Address ",
				course: "Enter preffered Course",
				location: "Enter Location",
				detail2: "Enter The Code",
				
			}
		});
});

  $( function() {
    $( "#datepicker" ).datepicker();
  } );
		
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
