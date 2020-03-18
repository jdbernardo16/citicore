<% if ClassName != 'Page' %>
<% loop $HeaderFooter %>
<div class="ftr-frame">
	<div class="width--80 ma-auto frm-cntnr">
		<div class="ftr__topCon">
			<div class="width--30">
				<h6>$FtrTitle1</h6>
				<p>$FtrDesc1</p>
			</div
			><div class="width--45 inlineBlock-parent">
				<div class="width--40 align-t ftr__linkParent">
					<h6>$FtrTitle2 <span class="ftr__arrow"></span></h6>
					<ul>
						<li class="ftr__link"><a href="/">Home</a></li>
						<li class="ftr__link"><a href="#">About Us</a></li>
						<li class="ftr__link"><a href="#">Our Business</a></li>
						<li class="ftr__link"><a href="#">Sustainability</a></li>
						<li class="ftr__link"><a href="#">Investor Center</a></li>
						<li class="ftr__link"><a href="#">Careers</a></li>
						<li class="ftr__link"><a href="#">Contact Us</a></li>
					</ul>
				</div
				><div class="width--60 align-t ftr__linkParent">
					<h6>$FtrTitle3 <span class="ftr__arrow"></span></h6>
					<ul>
						<li class="ftr__contactLink">
							<i class="fas fa-map-marker-alt"></i>
							<a href="$FtrAddLink" target="_blank">$FtrAdd</a>
						</li>
						<li class="ftr__contactLink">
							<i class="fas fa-phone"></i>
							<a href="tel: $FtrNum" target="_blank">$FtrNum</a>
						</li>
						<li class="ftr__contactLink">
							<i class="fas fa-envelope"></i>
							<a href="mailto: $FtrEmail" target="_blank">$FtrEmail</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="ftr-frame__copyright align-c">
			<p>$FtrCopyright $Now.Year</p>
		</div>
	</div>
	<div class="ftr__bgBlue"></div>
	<%-- <div class="ftr__bgGray"></div> --%>
</div>
<% end_loop %>
<% end_if %>