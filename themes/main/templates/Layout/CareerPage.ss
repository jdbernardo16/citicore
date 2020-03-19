<div class="crr_frame1">
	<div class="banner" style="background-image: url('$F1BG.URL');"></div>
	<div class="frm-cntnr width--85">
		<div class="page-title">
			<h2>$F1Header</h2>
		</div>
		<div class="top-nav">
			<div class="inlineBlock-parent">
				
			</div>
		</div>
		<div class="career-hldr">
			<div class="inlineBlock-parent">
				<% loop $Children %><div class="career-card">
					<div class="wrapper">
						<div class="career-title">
							<p>$JobTitle</p>
						</div>
						<div class="inlineBlock-parent m-margin-b">
							<div class="loc-name">
								<p>$JobLoc</p>
							</div
							><div class="loc-logo"><i class="fas fa-map-marker-alt"></i></div>
						</div>
						<a href="$Link">
						<div class="career-btn">
							<p>Apply</p>
						</div>
						</a>
					</div>
				</div><% end_loop %>
			</div>
		</div>
	</div>
</div>