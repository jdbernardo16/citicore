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
					<img class="email-template__logo" src="https://lh3.googleusercontent.com/CS2dKRNVGG7ldozi4d4LJxGO6MSBcNMq204H2tTJyAq67jmcLyR_m4Qjrfdh9Eg4QOO2Quf9xjZI_napCzmwHckwUX2DvBgBa3iquyuiLmEChDeDOiTluc7z8uj27R4LxAlqy4arSgAdICCqfbNtiDH0XhlYOOjN2jRaBPkAmB-XCPILs1TUsByF1hP6twKEpwqFkn-ZB73J0aQtH6J6QyE9VOcJHe3voBhuYy4s542d7OIl98DrdC_GQncfumxK91Oqft1mNT-9wVAGQ_bz7dpZIJcZySAZdBFySLZRCkk69FkrNFbSiJQ4Zi16x4-qLmTmJVsyQAKU0E09c17ASSopNGM18ySwyG--drRRHSc_f9tKfkcLvbIq8OIbV_rehOzGQhpgUshwoBJpcmtlxG4-XOTuTev4OqPQgd9tfS-KMN40srdyz8tM3X6QCId0FdOEcbDiYIVR14TCfGjC93YOT9skmUluOxExc-m4l0IRlfhyVQ2jHHfrcO2oadXrxlXwzq__9-ujCUReuYXzENDrFspwThBL6sJXux_Z7cZFPLmx-lQT2wBe9qVOKN5opNC3MEKttWH8Z8V0Il0b-ssqo1bPOGes3erNcUOo-LtPLcLmMCr8Ses-KQ=w1317-h637">
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
				</div>
			</div>
		</div>
	</div>
</body>