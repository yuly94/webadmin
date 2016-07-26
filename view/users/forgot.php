<style type="text/css">
.user-form input, .user-form label{
	border-color: #01579b !important;;
	color: #01579b !important;
}
</style>

<h1 style="float: left; width: 100%;padding: 0 25px;"> Forgot Password </h1>

<?php 
if(!empty($errors)) {
	foreach($errors as $message) {
		echo "<span class='error'>".$message[0]."</span><br/>"; 
	}
}
if (!empty($result)) {
	if($result == 1) {
		echo "<span class='success'> Successfully Sent! </span> <a href='".$GLOBALS['ep_dynamic_url']."dashboard'> Go Back </a>";
	}
}

?>

<div class="user-form" style="float: left; width: 100%;"> 
	<div class="row">
		<form action="<?php echo $GLOBALS['ep_dynamic_url']; ?>login/forgot" method="post" class="col s12">
		  <div class="row">	
		  <div class="input-field col s12">
			  <input id="email" name="email" type="text" class="validate" value="<?php if(isset($_POST['email'])) { echo $post['email']; } ?>">
			  <label for="email">Enter your Email</label>
			</div>
			<div class="input-field col s12">
				<button class="btn waves-effect waves-light light-blue darken-4" type="submit" style="margin-top: 20px;">Submit
					<i class="material-icons right">send</i>
				</button>
			</div>
		  </div>
		</form>
	</div>
<a href='<?php echo $GLOBALS['ep_dynamic_url']; ?>'> Go Back </a>
</div>

