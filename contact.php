<?php include 'header2.php'; ?>

<style>
    .contact-area-02 {
        padding: 100px 0;
    }
    .contact-area-02 .contact-info h2 {
        font-size: 30px;
        text-align: left;
        padding-bottom: 10px;
    }
    .contact-area-02 .contact-info .content-sub_p {
        font-size: 15px;
        font-weight: 500;
        position: relative;
        padding-bottom: 10px;
        color: #666;
    }
    .contact-area-02 .contact-info .contact-box {
        margin-top: 60px;
    }
    .contact-area-02 .contact-info .contact-box .single-address-box {
        padding: 30px 0;
        border-top: 1px solid #fec722;
    }
    .contact-area-02 .contact-info .contact-box .single-address-box .single-address i {
        float: left;
        font-size: 25px;
        height: 40px;
        line-height: 30px;
        width: 30px;
        color: #fec722;
        margin-right: 15px;
    }
    .contact-area-02 .contact-info .contact-box .single-address-box .single-address h4 {
        margin: 0;
        padding-bottom: 5px;
    }
    .contact-area-02 .contact-info .contact-box .single-address-box .single-address p {
        margin: 0;
    }
    .contact-area-02 .contact-info .contact-box .single-address-box ul {
        margin: 0px;
    }
    .contact-area-02 .contact-info .contact-box .single-address-box ul li {
        margin: 0 5px;
        display: inline-block;
    }
    .contact-area-02 .contact-info .contact-box .single-address-box ul li i {
        border: 1px solid #fec722;
        border-radius: 100%;
        color: #fec722;
        height: 40px;
        padding: 10px;
        width: 40px;
        font-size: 18px;
        text-align: center;
        transition: all 0.3s ease-in-out;
    }
    .contact-area-02 .contact-info .contact-box .single-address-box ul li i:hover {
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.13);
        transition: all 0.3s ease-in-out;
        background: #fec722;
        color: #ffffff;
    }
    .contact-area-02 .contact-form .contact-title-btm h2 {
        font-size: 30px;
        text-align: left;
        padding-bottom: 10px;
    }
    .contact-area-02 .contact-form .contact-title-btm .content-sub_p {
        font-size: 15px;
        font-weight: 500;
        position: relative;
        padding-bottom: 10px;
        text-align: left;
        color: #666;
    }

    .contact-area-02 .contact-form .input-contact-form {
        margin-top: 50px;
    }
    .contact-area-02 .contact-form .input-contact-form form input {
        height: 40px;
    }
    .contact-area-02 .contact-form .input-contact-form form input,
    .contact-area-02 .contact-form .input-contact-form form textarea {
        background-color: transparent;
        border-radius: 0;
        box-shadow: none;
        font-size: 15px;
        margin: 10px 0;
        padding: 10px 20px;
        outline: none;
    }
     .contact-area-02 .contact-form .input-contact-form form input:focus,
    .contact-area-02 .contact-form .input-contact-form form textarea:focus {
        border: 1px solid #fec722;
    }
    .contact-area-02 .contact-form .input-contact-form form input[type="submit"] {
        background: #fec722;
        border-radius: 0;
        color: #fff;
        border: none;
        font-size: 15px;
        font-weight: 500;
        margin-top: 20px;
        height: 40px;
        text-transform: uppercase;
    }
</style>

<!-- Contact Area section -->
<section class="contact-area-02">
	<div class="container">
		<div class="row">
			<div class="col-sm-5 contact-info">
				<div class="col-sm-12 contact-title">
					<h2>Contact Info</h2>		
					<p class="content-sub_p">Welcome to our Website. We are glad to have you around.</p>
				</div>
				<div class="col-sm-12 contact-box">
					<div class="row">
						<div class="col-sm-12 col-md-6 single-address-box">
                            <div class="single-address">
                                <i class="fa fa-phone"></i>
                                <h4>Phone</h4>
                                <p>+91 9958444048</p>
                            </div>
                        </div>  
                        <div class="col-sm-12 col-md-6  single-address-box">
                            <div class="single-address">
                                <i class="fa fa-envelope"></i>
                                <h4>Email</h4>
                                <p>support@admissionwindow.com</p>
                            </div>
                        </div> 
                        <div class="col-sm-12 col-md-12 single-address-box">
                            <div class="single-address">
                                <i class="fa fa-map-marker"></i>
                                <h4>Location:</h4>
                                <p>First Floor, Office Tower, Noida One, C116, Rasoolpur Nawada, H Block, Sector 62, Noida, Uttar Pradesh 201307</p>
                                <p></p>
                            </div>
	                    </div> 
	                	<div class="col-sm-12 single-address-box">
	                        <ul class="list-unstyled">
								<li><a href="#"><i class="fa fa-facebook teacher-icon"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter teacher-icon"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus teacher-icon"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin teacher-icon"></i></a></li>
								<li><a href="#"><i class="fa fa-instagram teacher-icon"></i></a></li>
							</ul>	 
	                	</div> 
                    </div>
                </div>                          	                        
			</div>	

			<div class="col-sm-6  col-sm-offset-1 contact-form">
				<div class="row">
					<div class="col-sm-12 contact-title-btm">
						<h2>Send A Message</h2>		
						<p class="content-sub_p">Welcome to our Website. We are glad to have you around.</p>
					</div>
				</div>
				<div class="input-contact-form">
					
					<?php 
                  if(isset($_POST['submit'])){
                        $name= $_POST['name'];
                         $email= $_POST['email']; 
                         $subject= $_POST['subject'];
                         $text= $_POST['comments'];
                      
                      require_once("PHPMailer/class.phpmailer.php");
                       $mail = new PHPMailer();
                        $mail->IsSMTP(); // we are going to use SMTP
                          $mail->SMTPAuth   = false; // enabled SMTP authentication
                        $mail->SMTPSecure = "none";  // prefix for secure protocol to connect to the server
                        $mail->Host       = "localhost";      // setting GMail as our SMTP server
                        $mail->Port       = 25;                  // SMTP port to connect to GMail
                        $mail->Username   = "techeortechnology.ankit@gmail.com";  // user email address
                        $mail->Password   = "cgiommlqttjzfylj";            // password in GMail
                        $mail->SetFrom('support@admissionwindow.com','Admission Window');  //Who is sending the email
                        $mail->AddReplyTo($email,"Enquiry For Admission Window");  //email address that receives the response
                        $mail->Subject    = "Enquiry For Admission Window";
                       
                        $html = '<p> Name is :'.$name.' </p>';
                        $html .= '<p> Your Subject :'.$subject.' </p>';
                        $html .= '<p> Your Email :'.$email.' </p>';
                        $html .= '<p> Your Message :'.$text.' </p>';
                        //$html .= '<p> Type :'.$type.' </p>';
                        $mail->Body      = $html;
                
                        $mail->AltBody    = "User Enquiry";
                       
                         $from = 'support@admissionwindow.com';
                         //$from = $email;
                        $mail->AddAddress($from, "User Enquiry");
                        //$mail->AddCC("info@gmail.com");
                        if(!$mail->Send()) {
                           echo  $msg = "Error: " . $mail->ErrorInfo;
                        } else {
                            echo $success='<p style="color:green">Your enquiry has been submitted successfully. Our team will get back to you shortly.</p>';
                            
                        }
                      }
                      ?>
					<div id="contact">
					<div id="message"></div>	                       
                    <form method="post" action="#" >
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Name" name="name" id="name">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Email" name="email" id="email">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Subject" name="subject" id="subject">
                                </div>
                            </div>	
                            <div class="col-sm-12">
                            	<div class="form-group">
                                    <textarea class="form-control" rows="6" placeholder="Message" name="comments" id="comments"></textarea>
                                </div>
                            </div>	
                            <div class="col-sm-12">                                    
                                <div class="full-width">
                                    <input value="Submit" type="submit" name="submit" id="submit">
                                </div>
                            </div>	
                        </div>
                    </form>
                    </div>
                    
                    
				</div>
			</div>																
		</div>
	</div>
</section>
<!-- ./ End Contact Area section -->


<?php include 'footer.php'; ?>