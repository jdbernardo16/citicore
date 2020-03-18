<div class="invstr_frame1">
	<div class="frm-cntnr width--85">
		<div id="tabs" class="inlineBlock-parent">
			<div class="sidebar_hldr align-t">
				<div class="sidebar_cntnr">
					<% loop $Parent %>
					<% loop $Children %>
					<div class="sidebar_category $LinkingMode">
						<a href="$Link">
						<div class="sidebar_cat-name">
							<p>$Title</p><i class="fas fa-caret-down"></i>
						</div>
						</a>
						<div class="sidebar_subcat-hldr">
							<% loop $Children %>
							<div class="sidebar_subcat">
								<a value="#$ID">
									<p>$Title</p>
								</a>
							</div>
							<% end_loop %>
						</div>
					</div>
					<% end_loop %>
					<% end_loop %>
				</div>
			</div
			><div class="article-hldr align-t">
				<% loop $Parent %>
				<% loop $Children.limit(2) %>
				<% if isCurrent %>
				<% loop $Children %>
				<div id="$ID" class="article-cntnr">
					<div class="inlineBlock-parent">
						<% loop $Children %><div class="article-card">
							<div class="article-image">
								<div class="image" style="background-image: url('$F1BG.URL');"></div>
							</div>
							<div class="article-content-hldr">
								<div class="article-name">
									<p>$Title.limitCharacters(50) <i>$Date</i></p> 
								</div>
								<div class="article-link">
									<a href="$Link">Continue Reading</a>
								</div>
							</div>
						</div><% end_loop %>
					</div>
				</div>
				<% end_loop %>
				<% end_if %>
				<% end_loop %>
				<% loop $Children.limit(1,2) %>
				<% if isCurrent %>
				<% loop $Children %>
				<div id="$ID" class="article-cntnr">
					<div class="inlineBlock-parent">
						<% loop $Children %><div class="pdf-card">
							<div class="vertical-parent">
								<div class="vertical-align">
									<a href="$File1.URL" target="_blank">
										<div class="wrapper">
											<div class="pdf-image">
												<div class="image" style="background-image: url('$ThemeDir/images/pdf.png');"></div>
											</div>
											<div class="pdf-name">
												<p>$FName</p> 
											</div>
										</div>
									</a>
								</div>
							</div>
						</div
						><% end_loop %>
					</div>
				</div>
				<% end_loop %>
				<% end_if %>
				<% end_loop %>
				<% end_loop %>
			</div>
		</div>
	</div>
</div>