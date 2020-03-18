<% if ClassName != 'Page' %>
<div class="hdr-frame changeHeader">
	<div>
		<div class="width--100 hdr__topCon">
			<div class="width--90 ma-auto display--flex flex--wrap justify--between align--items-center frm-cntnr">
				<div class="width--auto inlineBlock-parent">
					<div class="inlineBlock-parent hdr__cntctLink align-t">
						<i class="fas fa-phone"></i>
						<a href="#">(02) 8-470-8996</a>
					</div>
						<span class="s-margin-lr clr--white align-t">|</span>
					<div class="inlineBlock-parent hdr__cntctLink align-t">
						<i class="fas fa-envelope"></i>
						<a href="#">info@crec.com.ph</a>
					</div>
				</div>
				<div class="width--auto">
					<% loop $HeaderFooter %>
						<% loop $SocialLinks %>
						<a href="$SlLink" target="_blank"><i class="$SlIcon"></i></a>
						<% end_loop %>
					<% end_loop %>
				</div>
			</div>
		</div>
		<div class="width--100 hdr__midCon">
			<div class="width--90 ma-auto vertical-parent frm-cntnr">
				<div class="vertical-align">
					<div class="hdr__midContent">
						<div>
							<% loop $HeaderFooter %>
							<a href="$AbsoluteBaseURL"><img src="$HeaderLogo.URL" alt="$HeaderLogo.Title"></a>
							<% end_loop %>
						</div>
						<div class="to-Mob">
							<div id="nav-icon">
								<span></span>
								<span></span>
								<span></span>
								<span></span>
								<span></span>
								<span></span>
							</div>
						</div>
						<ul class="inlineBlock-parent">
							<li class="hdr__link $FirstLast $LinkOrSection"><a href="#home" title="Home">Home</a></li>
							<li class="hdr__link"><a title="About Us">About Us</a>
								<ul class="hdr__subLinkCon">
									<li class="hdr__subLink"><a href="#">About Us</a></li>
									<li class="hdr__subLink"><a href="#">Board of Directors</a></li>
									<li class="hdr__subLink"><a href="#">Corporate Governance</a></li>
									<li class="hdr__subLink"><a href="#">Company History</a></li>
								</ul>
							</li>
							<li class="hdr__link"><a href="#ourbusiness" title="Our Business">Our Business</a></li>
							<li class="hdr__link"><a href="#sustainability" title="Sustainability">Sustainability</a></li>
							<li class="hdr__link"><a href="#modal" title="Investor Center">Investor Center</a></li>
							<li class="hdr__link"><a href="#modal" title="Careers<">Careers</a></li>
							<li class="hdr__link"><a href="#contactus" title="Contact Us">Contact Us</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="width--100 hdr__botCon">
			<div class="width--33"></div>
			<div class="width--33"></div>
			<div class="width--33"></div>
		</div>
	</div>
</div>
<% end_if %>