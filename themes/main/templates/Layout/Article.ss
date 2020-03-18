<div class="article_frame1">
	<div class="frm-cntnr width--85">
		<div class="article-title-hldr">
			<div class="article-name">
				<h4>$NewsTitle</h4>
			</div>
			<div class="article-date">
				<p>$Date</p>
			</div>
		</div>
		<div class="article-cntnr">
			<div class="inlineBlock-parent">
				<div class="latest-hldr align-t">
					<div class="latest-image">
						<div class="image" style="background-image: url('$F1BG.URL');"></div>
					</div>
					<div class="latest-desc">
						$Desc
					</div>
					<div class="goback-btn">
						<% loop $Parent %>
						<% loop $Parent %>
						<a href="$Link">BACK TO INVESTOR CENTER</a>
						<% end_loop %>
						<% end_loop %>
					</div>
				</div
				><div class="related-cntnr align-t">
					<% loop $Parent %>
				    <% loop $Children %>
				    <% if isCurrent %>
				    <% else %>
					<a href="$Link">
					<div class="related-article inlineBlock-parent">
						<div class="related-image">
							<div class="image" style="background-image: url('$F1BG.URL');"></div>
						</div
						><div class="related-detail">
							<div class="related-name">
								<p>$NewsTitle</p>
							</div>
							<div class="related-date">
								<p>$Date</p>
							</div>
						</div>
					</div>
					</a>
				    <% end_if %>
				    <% end_loop %>
					<% end_loop %>
				</div>
			</div>
		</div>
	</div>
</div>