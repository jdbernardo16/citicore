<div class="scrr_frame1">
	<div class="frm-cntnr width--85">
		<div class="career-title">
			<h3>$JobTitle</h3>
		</div>

		<div class="career-details">
			<div class="inlineBlock-parent">
				<div class="responsibilities">
					<div class="title">
						<p>Responsibilities:</p>
					</div>
					<div class="res_desc">
						$ResDesc
					</div>
				</div
				><div class="requirements">
					<div class="title">
						<p>Requirements:</p>
					</div>
					<div class="res_desc">
						$ReqDesc
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="scrr_frame2">
	<div class="frm-cntnr width--85">
		<div class="frm-title">
			<h4>Apply for a job</h4>
		</div>
		<div class="frm-desc">
			<p>Please kindly download the applicant form before filling up in the fields below.</p>
		</div>
		<div class="download-btn">
			<a href="">Download Applicant Form</a>
		</div>
		<div class="applyform">
			<form id="applyForm" method="POST">
				<input type="hidden" name="jobtitle" value="$JobTitle" required>
				<div class="input-hldr firstname">
					<input type="text" name="firstname" placeholder="First Name" required>
				</div
				><div class="input-hldr lastname">
					<input type="text" name="lastname" placeholder="Last Name" required>
				</div
				><div class="input-hldr email">
					<input type="text" name="email" placeholder="Email Address" required>
				</div
				><div class="group inlineBlock-parent">
					<div class="input-hldr contact">
						<input type="text" name="contact" placeholder="Contact Number" required>
					</div
					><div class="input-hldr education">
						<select name="education" id="" required>
							<option value="">Highest Educational Attainment</option>
							<option value="Elementary">Elementary</option>
							<option value="High School">High School</option>
							<option value="Bachelors">Bachelors</option>
							<option value="Masters">Masters</option>
							<option value="Doctoral">Doctoral</option>
						</select>
					</div>
					<div class="upload-hldr">
						<div class="inlineBlock-parent" data-id="{$ID}">
								<label id="file-selected1" for="fileupload{$ID}" class="custom-file-upload inlineBlock-parent"><div class="label-upload"><p>Attached Resume</p></div><div class="upload-btn"><p>Choose File</p></div></label>
							<input type="file" id="fileupload{$ID}" class="fileuploadBtn" name="file" required hidden/>
							<input type="hidden" id="file-image{$ID}" name="resume" value="" required/>
						</div>
					</div>
				</div
				><div class="input-hldr message">
					<textarea name="messagedetails" placeholder="Message" required></textarea>
				</div>
				<div class="submit-hldr">
					<button  id="applyBtn">Submit Resume</button>
					<input type="hidden" name="postFlag" value="1">
				</div>
			</form>
		</div>
	</div>
</div>