<?php include 'header.php'; ?>

<style>
	.login-area {
	    background: #fafafa;
	    padding: 100px 0;
	}
	.login-area .learnpro-register-form {
	    background-color: #fff;
	    padding: 30px;
	}
	.login-area .learnpro-register-form p{
		line-height: 23px;
		margin-bottom: 35px;
	}
	.login-area .learnpro-register-form .lead {
	    margin-bottom: 20px;
	    font-size: 18px;
	    font-weight: 600;
	    line-height: 1.4;
	    text-align: center;
	    text-transform: uppercase;
	}
	.login-area .learnpro-register-form select,
	.login-area .learnpro-register-form textarea,
	.login-area .learnpro-register-form input[type="text"],
	.login-area .learnpro-register-form input[type="password"],
	.login-area .learnpro-register-form input[type="datetime"],
	.login-area .learnpro-register-form input[type="datetime-local"],
	.login-area .learnpro-register-form input[type="date"],
	.login-area .learnpro-register-form input[type="month"],
	.login-area .learnpro-register-form input[type="time"],
	.login-area .learnpro-register-form input[type="week"],
	.login-area .learnpro-register-form input[type="number"],
	.login-area .learnpro-register-form input[type="email"],
	.login-area .learnpro-register-form input[type="url"],
	.login-area .learnpro-register-form input[type="search"],
	.login-area .learnpro-register-form input[type="tel"],
	.login-area .learnpro-register-form input[type="color"],
	.login-area .learnpro-register-form .uneditable-input {
	    min-height: 50px;
	    font-weight: 400;
	    display: block;
	    padding: 12px 15px;
	    font-size: 14px;
	    line-height: 1.428571429;
	    color: #555;
	    background-color: transparent;
	    background-image: none;
	    border-radius: 4px;
	    box-shadow: none;
	    -webkit-box-shadow: none;
	    border: 1px solid #e9edf0;
	}
	.login-area .learnpro-register-form .register-btn .btn {
	    width: 100%;
	    border-radius: 3px;
	    margin-bottom: 15px;
	    background: #fec722;
	    color: #333;
	    border: none;
	    text-transform: uppercase;
	    font-weight: 700;
	    font-size: 15px;
	    padding: 15px 0;
	    box-shadow: none;
	}
	.login-area .learnpro-register-form a {
	    color: #fec722;
	    text-decoration: none;
	}
</style>


<!-- Teachers Area section -->
<section class="login-area">
	<div class="container">
		<div class="row">
			<div class="col-sm-6 col-sm-offset-3">
				<form action="#" class="learnpro-register-form text-center">
					<p>Lost your password? Please enter your username or email address. You will receive a link to create a new password via email.</p>					
					<div class="form-group"> 
					  	<input autocomplete="off" class="required form-control" placeholder="Username or email" name="name" type="text">
					</div>
					<div class="form-group register-btn">
					 	<submit class="btn btn-primary btn-lg">Forgot Password</submit>
					</div>	
				</form>
			</div>												
		</div>
	</div>
</section>
<!-- ./ End Teachers Area section -->

<?php include 'footer.php'; ?>