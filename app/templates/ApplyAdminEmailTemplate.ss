<!doctype html>
<html>
<head>
	<style>
		@import url("https://fonts.googleapis.com/css?family=Barlow+Semi+Condensed");
		
		html {
			font-family: 'Barlow Semi Condensed', sans-serif;
		}

		/** 
		 * COLORS
		 */
		.color--black {
			color: #333;
		}

		.color--gray {
			color: #5f5f5f;
		}

		.color--brown {
			color: #30292a;
		}
		 

		/** 
		 * EMAIL : Template
		 */
		.email-template__holder {
			width: 900px;
			padding: 50px 0px;
			margin: auto;
			background: #ececec;
		}

		.email-template__card {
			width: 80%;
			margin: auto;
			background: #ffffff;
		}

		.email-template__card-limit {
			width: 80%;
			margin: auto;
			background: white;
		}

		.email-template__header {
			text-align: center;
			width: 100%;
			padding-top: 60px;
		}

		.email-template__logo {
			max-width: 250px;
		}

		.email-template__description {
			padding-top: 10px;
			padding-bottom: 60px;
		}

		.email-template__description > * {
			font-size: 1.1em;
		}

	</style>
</head>
<body>
	<div class="email-template__holder">
		<div class="email-template__card">
			<div class="email-template__card-limit">
				<div class="email-template__header">
					<img class="email-template__logo" src="">
				</div>
				<div class="email-template__description">
					<br>
					<p class="color--gray">Message Details</p>
					<br>
					<p class="color--gray">Job Title : {$jobtitle}</p>
					<p class="color--gray">First Name : {$firstname}</p>
					<p class="color--gray">Last Name : {$lastname}</p>
					<p class="color--gray">Email : {$emailaddress}</p>
					<p class="color--gray">Contact : {$contact}</p>
					<p class="color--gray">Highest Educational Attainment : {$education}</p>
					<p class="color--gray">Resume : <a href="{$file}">Link</a></p>
				</div>
			</div>
		</div>
	</div>
</body>