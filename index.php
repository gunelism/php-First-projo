<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->

	<link rel="stylesheet" type="text/css" href="bootstrap.css">


	<style type="text/css">
		body{
			background-color : #EDEFF0;
			color: #7F8FA4;
		}
		.col-md-4{
			padding: 20px 50px;
			background-color: white;
		}
		img{
			border: 1px solid lightgrey;
		}
		/*input{
			padding: 20px 50px;
		}*/
		/*.bottom{
			background-color: lightgrey;
			width: 100%;
			height: 100%;
		}*/
	</style>
</head>
<body>
<?php
session_start();
if (isset($_SESSION['giris'])) {
    header('Location:admin.php');
}
// if(isset($_SESSION['indexerror'])){
// header('Location:admin.php');
// }
?>
<section class="container">
	<div class="row text-center">
		<div class="col-md-4 col-md-offset-4">
		<img class="img-circle" src="1.png">
			 <h3 class="title">Admin Login</h3>
			 <p>Sign in to your account</p>
			 <br>
			 <br>

              <form action="check.php" id="contactform" method="post">
                    <div class="form-group">
                        <input type="text" class="form-control" name="full_name" placeholder="Email Adress">
                    </div>
                     <div class="form-group">
                        <input type="password" class="form-control" name="pass" placeholder="Password">
                    </div>
                        <button type='submit' class="btn btn-success" name="submitcontact">Sign in</button>
                        <br>
                        <br>
                        <!-- //submit olmadan gonderilmir form action olmur. -->
						<?php
						// session_start();
			
							// else{
							// 	$_SESSION['indexerror']=true;
							// 	header('Location:admin.php');
							// }
							
						



						
						?>
              </form>

             <!--  <div class="bottom">
				<p>&copy Code Academy 2016. All rights reserved.</p>
			</div>	 -->
		</div>
	</div>
</section>


</body>
</html>






  					<!-- php -->
                   <!--  // session_start();
//   //                 print_r('<pre>');
//   //                 print_r($_SESSION);
//   //                 print_r('</pre>');
                    // if (isset($_SESSION['contactmsj'])) { -->
                        <!-- php -->
                       <!--  <div class="alert alert-danger" role="alert">
                            <p><   $_SESSION['contactmsj']      </p>
                        </div -->
                        <!-- php -->
                    <!-- //     unset($_SESSION['contactmsj']);
                    // } -->
                    <!-- php -->


<!-- 
                    <div class="alert alert-danger hidden" id="contactMsj" role="alert"></div>
                </div>

            </div>
        </div> -->
    <!-- </body> -->
    <!-- <script src="js/jquery-1.12.4.js"></script> -->
<!--     <script>
        $('#contactform').submit(function (event) {

            $('#contactMsj').addClass('hidden');

            $('#contactMsj').empty();

            var full_name = $('input[name=full_name]').val();
            var phone = $('input[name=phone]').val();
            var message = $('textarea[name=message]').val();
            var check = false;
            
            if (!full_name) {
                $('#contactMsj').removeClass('hidden');
                $('#contactMsj').append('<p>Adınızı boş buraxmayın</p>');
                check = true;
            }
            if (phone.length !== 10) {
                $('#contactMsj').removeClass('hidden');
                $('#contactMsj').append('<p>Nömrə düzgün deyil , 0XX XXX XXXX</p>');
                check = true;
            }
            if (message.length > 200) {
                $('#contactMsj').removeClass('hidden');
                $('#contactMsj').append('<p>Ismarıcınız 200 xarakterden artiq ola bilmez !</p>');
                check = true;
            }
            
            if (!check) {
                 $('#contactform').submit();
            }
            console.log(check);
            event.preventDefault();
        });
        </script> -->