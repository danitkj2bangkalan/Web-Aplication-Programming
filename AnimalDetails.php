<?php
function form(){?>
	<?php
		// prepare untuk variable global
	?>
	<form name="myform" action="DataProcessing.php" method="POST">
		<div> 
			<table class="error">
				<th>Animal Details</th>
				<!-- desain untuk Puppy name -->
				<tr>
					<td><label for="puppyname">Puppy name</label></td>
					<td><input type="text" name="surname" id="surname" size="31" value=""</td>
				</tr>
				<!-- untuk desain drop down Breed id -->
				<tr>
					<td><label for="breedid">Breed ID</label></td>
					<td>
					<select name="state">
							<option value="-1" selected>[choose your animal]</option>
							<option value="1">Doberman</option>
							<option value="2">Poodle</option>
							<option value="3">Pitt Bull</option>
							<option value="4">Cattle Dog</option>
							<option value="5">Alsatian</option>
							<option value="6">Beagle</option>
							<option value="7">Schnauzer</option>
							<option value="8">Jack Russell</option>
							<option value="9">Rat Terrier</option>
					</select></td>
				</tr>
				<!-- untuk design Desciption -->
				<tr>
					<td><label for="desciption">Description</label></td>
					<td><input type="text" name="desciption" id="desciption" size="31" value=""></td>
				</tr>
				<!-- untuk design Price -->
				<tr>
					<td><label for="price">Price</label></td>
					<td><input type="text" name="price" id="price" size="31" value=""></td>
				</tr>
				<!-- untuk Picture -->
				<tr>
					<td><label for="cpassword">Picture</label></td>
				</tr>
				<!-- untuk button -->
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="Update"/>
					<input type="reset" name="reset" value="reset"/>
					</td>
					<td></td>
				</tr>
			</table>
		</div>			
		<div class="field">
			<label>&nbsp;</label>
		</div>
	</form>
<?php } ?>