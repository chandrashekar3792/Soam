<?php $Title = "Sign Up"; include_once "/Common/header.php" ?>

<form method="post" action="ValidateNewUser.php">
	<fieldset>
		<h2 class="signup">ADD NEW USER</h2> 
		<p>
			<label for="first_name">Name:  </label>
			<input type="text" name="first_name" id="first_name"  size=”30” maxlength=”25” required
			placeholder="sri" autofocus=autofocus"/>
		</p>
		
		<p>
			<label for="first_name">User Type:  </label>
			<input id="admin" type="radio" name="autho" value="admin">ADMINSTRATOR </input>
			<input id="eval"  type="radio" name="autho" value="eval">EVALUATOR</input>
			<input id="rcd"   type="radio" name="autho" value="record">RECORD KEEPER</input>
		</p>
		
		<p>
			<label for="email">
			E-mail address:
			</label>
			<input type="email" name="email" id="email" size=”30”  maxlength=”25” required
			placeholder="jane.doe@example.com" multiple />
		</p>
		
		<p>
			<label for="telephone">Telephone number: </label>
			<input type="tel" name="telephone" id="telephone"  size=”30” maxlength=”25” required
				  placeholder="(000) 000-0000"/>
		</p>

		<p>
			<label for="Password">Password: </label>
			<input type="password" name="Password" id="Password"  size=”30” maxlength=”25” required
			placeholder="c@!dgj1123"/>
		</p>


		<p>
			<label for="Password"> Re-Enter Password: </label>
			<input type="password" name="Password" id="Password"  size=”30” maxlength=”25” required
			placeholder="c@!dgj1123"/>
		</p>
		
		<p>
			<label> Signature: </label>
			<textarea name="comment" rows="5" cols="40" align="left"></textarea>
		<p>

		<p> 
			<button type="submit" class="create_profile"> Create Account</button>
			<button type="reset" class="create_profile"> Cancel</button>
		</p>

	</fieldset>
</form>


<?php include_once "/Common/footer.php"; ?>

