<head>
  <link rel="stylesheet" href="../assets/css/style.css">
</head>
  <?php include "./nav/header-nav.html" ?>
<body>
  <form name="contactform" method="post" action="mailto:xseanclarke@gmail.com" enctype="text/plain">
  	<p>
  		<center>
  			<br/>
  			<table border="0" cellspacing="2" cellpadding="3" width="92%">
  				<tr>
  					<td height="60" colspan="2">
              <div>
    						<h2 class="common-Uppercase" text-align="center">
    							Contact Us
    						</h2>
                <p class="common-BodyText">
    		         Please fill out the form below:
                </p>
    						<br/>
    					</div>
  					</td>
  				</tr>
  				<tr>
  					<td valign="center" width="45%">
  						<div align="right">
  							<label for="first_name">First Name: *</label>
              </div>
  					</td>
  					<td valign="center">
  						<div align="left">
  							<input type="text" class="input-text"name="first_name" maxlength="50" size="30" value="" placeholder="">
  						</div>
  					</td>
  				</tr>
  				<tr>
  					<td valign="center">
  						<div align="right">
  							<label for="last_name">Last Name: *</label>
              </div>
  					</td>
  					<td valign="center">
  						<div align="left">
  							<input type="text" class="input-text"name="last_name" maxlength="50" size="30" value="" placeholder="">
  						</div>
  					</td>
  				</tr>
  				<tr>
  					<td valign="center">
  						<div align="right">
  							<label for="email">Email Address: *</label>
              </div>
  					</td>
  					<td valign="center">
  						<div align="left">
  							<input type="text" class="input-text"name="email" maxlength="80" size="30" value="" placeholder="">
  						</div>
  					</td>
  				</tr>
  				<tr>
  					<td valign="center">
  						<div align="right">
  							<label for="telephone">Phone Number: *</label>
              </div>
  					</td>
  					<td valign="center">
  						<div align="left">
  							<input type="text" class="input-text"name="telephone" maxlength="30" size="30" value="" placeholder="">
  						</div>
  					</td>
  				</tr>
  				<tr>
  					<td valign="center">
  						<div align="right">
  							<label for="company">Company: *</label>
              </div>
  					</td>
  					<td valign="center">
  						<div align="left">
  							<input type="text" class="input-text"name="company" maxlength="30" size="30" value="" placeholder="">
  						</div>
  					</td>
  				</tr>
  				<tr>
  					<td valign="center">
  						<div align="right">
  							<label for="title">Job Title:</label>
  						</div>
  					</td>
  					<td valign="center">
  						<div align="left">
  							<input type="text" class="input-text"name="title" maxlength="30" size="30" value="" placeholder="">
  						</div>
  					</td>
  				</tr>
  				<tr>
  					<td valign="center">
  						<div align="right">
  							<label for="address">Street Address:</label>
  						</div>
  					</td>
  					<td valign="center">
  						<div align="left">
  							<input type="text" class="input-text"name="address" maxlength="30" size="30" value="" placeholder="">
  						</div>
  					</td>
  				</tr>
  				<tr>
  					<td valign="center">
  						<div align="right">
  							<label for="city">City:</label>
  						</div>
  					</td>
  					<td valign="center">
  						<div align="left">
  							<input type="text" class="input-text"name="city" maxlength="30" size="30" value="" placeholder="">
  						</div>
  					</td>
  				</tr>
  				<tr>
  					<td valign="center">
  						<div align="right">
  							<label for="state">State:</label>
  						</div>
  					</td>
  					<td valign="center">
  						<div align="left">
  							<input type="text" class="input-text"name="state" maxlength="30" size="30" value="" placeholder="">
  						</div>
  					</td>
  				</tr>
  				<tr>
  					<td valign="center">
  						<div align="right">
  							<label for="zip">Zip:</label>
  						</div>
  					</td>
  					<td valign="center">
  						<div align="left">
  							<input type="text" class="input-text"name="zip" maxlength="30" size="30" value="" placeholder="">
  						</div>
  					</td>
  				</tr>
          <tr>
  					<td valign="center">
  						<div align="right">
  							<label for="found">How did you find us?</label>
  						</div>
  					</td>
            <td valign="center">
  						<div align="left">
  							<input type="text" class="input-text"name="found" maxlength="30" size="30" value="" placeholder="">
  						</div>
  					</td>
  				</tr>
          <tr>
  					<td valign="center">
  						<div align="right">
  							<label for="contact">Please select all that apply:</label>
  						</div>
  					</td>
            <td>
              <div align="left">
                <input name="contact-send-lit" type="checkbox" value="Send additional literature and technical information"><label for="contact-send-lit">Send additional literature and technical information</label>
                <br>
                <input name="contact-call-me" type="checkbox" value="Have an engineer call to arrange an onsite demonstration"><label for="contact-call-me">Have an engineer call to arrange an onsite demonstration</label>
                <br>
              </div>
            </td>
  				</tr>
          <tr>
  					<td valign="center">
  						<div align="right">
  							<label for="facility">Facility Type:</label>
  						</div>
  					</td>
  					<td valign="center">
  						<div align="left">
  							<input type="text" class="input-text"name="facility" maxlength="30" size="30" value="" placeholder="">
  						</div>
  					</td>
  				</tr>
          <tr>
            <td valign="center">
              <div align="right">
                <label for="facility-details">More Facility Details:</label>
              </div>
            </td>
            <td valign="center">
              <div align="left">
                <input type="text" class="input-text"name="facility-details" maxlength="30" size="30" value="" placeholder="">
              </div>
            </td>
          </tr>
          <tr>
            <td valign="center">
              <div align="right">
                <label for="facility-details">Intended Use:</label>
              </div>
            </td>
            <td valign="center">
              <div align="left">
                <input name="use-start" type="checkbox" value="Start Up (FEGT)"><label for="use-start">Start Up (FEGT)</label>
                <br>
                <input name="use-nox" type="checkbox" value="FEGT for NOx Control"><label for="use-nox">FEGT for NOx Control</label>
                <br>
                <input name="use-soot" type="checkbox" value="Soot Blowing"><label for="use-soot">Soot Blowing</label>
                <br>
                <input name="use-urea" type="checkbox" value="Urea Injection"><label for="use-urea">Urea Injection</label>
                <br>
                <input name="use-slag" type="checkbox" value="Ash Fusion Temp / Slag Control"><label for="use-slag">Ash Fusion Temp. &amp; Slag Control</label>
                <br>
                <br>
                <label for="use-other">Other: </label><input type="text" name="use-other" maxlength="30" size="30" value="" placeholder="">
              </div>
            </td>
          </tr>
          <tr>
  					<td valign="top">
  						<div align="right">
  							<label for="comments">Comments:</label>
  						</div>
  					</td>
  					<td valign="top">
  						<div align="left">
  							<textarea name="comments" class="input-text-lg" maxlength="1000" cols="50" rows="6"></textarea>
  						</div>
  					</td>
  				</tr>
  				<tr>
  					<td colspan = "2" style = "text-align:center">
  						<div align="center">
  							<div class="g-recaptcha" data-sitekey="6Len0S4UAAAAAH6WechX_xbc99crzJ18Fx16ssWo"></div>
  							<label for="g-recaptcha">Please complete reCaptcha</label>												</div>
  					</td>
  				</tr>
  				<tr>
  					<td colspan="2">
  						<br/>
  						<input type="submit" class="button" value="Submit Form">
  					</td>
  				</tr>
  			</table>
  			<br/>
  			<br/>
  		</center>
  	</p>
  </form>
</body>
<?php include "../partials/footer.html" ?>
