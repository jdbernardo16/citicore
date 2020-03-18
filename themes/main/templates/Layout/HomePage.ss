<section id="home" class="hm-frame1 frame1">
	<div class="hm1__sliderCon">
		<% loop FrameSliders %>
		<div class="hm1__sliderListCon">
			<div class="frm-cntnr align-c">
				<h1 class="bold">$H1Title</h1>
				<p class="width--50 ma-auto">$H1Desc<p>
				<div class="m-margin-t dis-inline-b">
					<a href="$H1BtnLink"><button class="btn align-c type-yellow">$H1BtnText</button></a>
				</div>
			</div>
			<div class="hm1__sliderBGCon" style="background-image: url('$H1SliderImg.URL')"></div>
		</div>
		<% end_loop %>
	</div>
	<div class="progressBarContainer inlineBlock-parent">
		<% loop FrameSliders %>
		<div class="item">
			<span class="progressBar"></span>
		</div>
		<% end_loop %>
	</div>
	<div class="hm1__bgWhite"></div>
	<div class="hm1__bgRed"></div>
</section>
<%-- <section id="aboutus" class="hm-frame2 frm-padding">
	<div class="frm-cntnr width--85 inlineBlock-parent">
		<div class="width--50">
			<h6 class="type-1 slideUp">$Fr2FrameTitle</h6>
			<h4 class="m-margin-b bold lh-15 slideUp">$Fr2Title</h4>
			<p class="slideUp">$Fr2Desc</p>
			<div class="m-margin-t slideUp">
				<a href="$Fr2BtnLink" class="frm-inlineBlock"><button class="btn type-yellow">$Fr2BtnText</button></a>
			</div>
		</div
		><div class="width--50 fadeIn">
			<% loop $getStore.Limit(1) %>
			<div class="hm2__mapDetailsCon">
				<h6 id="mapDataName" class="bold">$Name</h6>
				<div class="hm2__div"></div>
				<p id="mapDataAddress">$Address</p>
			</div>
			<% end_loop %>
			<div id="map" class="mapouter"></div>
		</div>
	</div>
</section> --%>
<section id="ourbusiness" class="hm-frame3">
	<div class="frm-cntnr width--85">
		<div class="hm3__titleCon l-margin-b align-c">
			<h4 class="m-margin-b bold lh-15 type-white slideUp">$Fr3Title</h4>
			<p class="width--60 ma-auto type-white fadeIn">$Fr3Desc</p>
		</div>
		<div class="hm3__contentCon page-grid grid-3">
			<div class="page__gridChild">
				<div class="hm3__imgCon" style="background-image: url('$Fr3Img1.URL')"></div>
				<div class="hm3__textCon">
					<h3 class="bold">01</h3>
					<div class="hm3__textInner">
						<h6 class="type-white bold">$Fr3Title1</h6>
						<div class="hm3__arrow"></div>
					</div>
				</div>
				<div class="hm3__textPrev">
					<div class="hm3__arrow"></div>
					<div>
						<h6 class="type-white bold">$Fr3Title1</h6>
						<p>$Fr3Decs1</p>
						<p><a href="$Fr3LinkTo1" class="type-yellow bold uppercase">$Fr3LinkText1</a></p>
					</div>
				</div>
			</div>
			<div class="page__gridChild">
				<div class="hm3__imgCon" style="background-image: url('$Fr3Img2.URL')"></div>
				<div class="hm3__textCon">
					<h3 class="bold">02</h3>
					<div class="hm3__textInner">
						<h6 class="type-white bold">$Fr3Title2</h6>
						<div class="hm3__arrow"></div>
					</div>
				</div>
				<div class="hm3__textPrev">
					<div class="hm3__arrow"></div>
					<div>
						<h6 class="type-white bold">$Fr3Title2</h6>
						<p>$Fr3Decs2</p>
						<p><a href="$Fr3LinkTo2" class="type-yellow bold uppercase">$Fr3LinkText2</a></p>
					</div>
				</div>
			</div>
			<div class="page__gridChild">
				<div class="hm3__imgCon" style="background-image: url('$Fr3Img3.URL')"></div>
				<div class="hm3__textCon">
					<h3 class="bold">03</h3>
					<div class="hm3__textInner">
						<h6 class="type-white bold">$Fr3Title3</h6>
						<div class="hm3__arrow"></div>
					</div>
				</div>
				<div class="hm3__textPrev">
					<div class="hm3__arrow"></div>
					<div>
						<h6 class="type-white bold">$Fr3Title3</h6>
						<p>$Fr3Decs3</p>
						<p><a href="$Fr3LinkTo3" class="type-yellow bold uppercase">$Fr3LinkText3</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="hm3__BGHolder">
		<div class="hm3__BGCon" style="background-image: url('$Fr3BG.URL')"></div>
		<div class="hm3__bgOrange"></div>
	</div>
	<div class="hm3__bgGray"></div>
</section>
<%-- <section id="investorcenter" class="hm-frame4 frm-padding">
	<div class="frm-cntnr width--85">
		<h4 class="m-margin-b bold lh-15 align-c slideUp">$Fr4Title</h4>
		<% loop InvestorCenterPage %>
		<div class="hm4__contentCon">
			<% loop Children %>
			<div class="hm4__listCon">
				<h6 class="type-1 bold align-c s-margin-b">$Title</h6>
				<div class="hm4__listInnerCon">
					<% loop Children.Limit(1) %>
					<a href="#modal"><div class="hm4__newsImgCon" style="background-image: url('$ArticleImage.URL')"></div></a>
					<% end_loop %>
					<ul>
						<% loop Children.Limit(3) %>
						<li><p><a href="#modal">$ArticleTitle</a> <span>$ArticleYear</span></p></li>
						<% end_loop %>
					</ul>
					<p class="align-r type-red"><a href="#modal">See More >></a></p>
				</div>
			</div>
			<% end_loop %>
		</div>
		<% end_loop %>
	</div>
</section> --%>
<section id="sustainability" class="hm-frame5">
	<div class="frm-cntnr width--85 inlineBlock-parent">
		<div class="width--45">
			<img src="$Fr5Img1.URL" alt="$Fr5Img1.Title">
			<h6 class="slideUp">$Fr5FrameTitle</h6>
			<h4 class="m-margin-b bold lh-15 slideUp">$Fr5Title</h4>
			<p class="slideUp">$Fr5Desc</p>
			<a href="$Fr5BtnLink" class="frm-inlineBlock"><button class="btn type-yellow m-margin-t slideUp">$Fr5BtnText</button></a>
		</div
		><div class="width--55 fadeIn">
			<div class="hm5__sliderCon">
				<% loop FrameFiveSliders %>
				<div class="hm5__sliderListCon">
					<div class="hm5__imgCon" style="background-image: url('$H5SliderImg.URL')"></div>
					<div class="hm5__textCon">
						<h6 class="bold type-white">$H5Title</h6>
						<p class="type-white">$H5Desc</p>
					</div>
				</div>
				<% end_loop %>
			</div>
		</div>
	</div>
	<div class="hm5__BGHolder">
		<div class="hm5__BGCon" style="background-image: url('$Fr5BG.URL')"></div>
		<div class="hm5__bgYellow"></div>
	</div>
	<div class="hm5__bgGray"></div>
</section>
<section id="contactus" class="hm-frame6">
	<div class="frm-cntnr width--85 inlineBlock-parent">
		<div class="width--55">
			<div class="hm6__contentList" style="background-image: url('$Fr6Img1.URL')">
				<h6>$Fr6Title1</h6>
			</div>
			<div class="hm6__contentList" style="background-image: url('$Fr6Img2.URL')">
				<h6>$Fr6Title2</h6>
			</div>
			<div class="hm6__contentList" style="background-image: url('$Fr6Img3.URL')">
				<h6>$Fr6Title3</h6>
			</div>
		</div
		><div class="width--45">
			<% loop HeaderFooter %>
			<img class="slideUp" src="$HeaderLogo.URL" alt="$HeaderLogo.Title">
			<% end_loop %>
			<div class="hm6__contactList slideUp">
				<h6 class="bold">$Fr6CntTitle1</h6>
				<p><span><i class="fas fa-user-alt"></i></span>$Fr6CntName1</p>
				<p><span><i class="fas fa-phone"></i></span><a href="tel:$Fr6CntNum2" target="_blank">$Fr6CntNum1</a></p>
				<p><span><i class="fas fa-envelope"></i></i></span><a href="tel:$Fr6CntMail1" target="_blank">$Fr6CntMail1</a></p>
			</div>
			<div class="hm6__contactList slideUp">
				<h6 class="bold">$Fr6CntTitle2</h6>
				<p><span><i class="fas fa-user-alt"></i></span>$Fr6CntName2</p>
				<p><span><i class="fas fa-phone"></i></span><a href="tel:$Fr6CntNum2" target="_blank">$Fr6CntNum2</a></p>
				<p><span><i class="fas fa-envelope"></i></i></span><a href="tel:$Fr6CntMail2" target="_blank">$Fr6CntMail2</a></p>
			</div>
			<div class="hm6__contactList slideUp">
				<h6 class="bold">$Fr6CntTitle3</h6>
				<p><span><i class="fas fa-user-alt"></i></span>$Fr6CntName3</p>
				<p><span><i class="fas fa-phone"></i></span><a href="tel:$Fr6CntNum3" target="_blank">$Fr6CntNum3</a></p>
				<p><span><i class="fas fa-envelope"></i></i></span><a href="tel:$Fr6CntMail3" target="_blank">$Fr6CntMail3</a></p>
			</div>
		</div>
	</div>
</section>

<script type="text/javascript">
    let mapItems = [
        <% loop $getStore %>
        {
            name: '$Name',
            address: '$Address',
            lat: $Lat,
            lng: $Lng,
            mapMarker: '$Pin.URL',
        },
        <% end_loop %>
    ];
</script>

<div class="remodal getHere-modal" data-remodal-id="modal">
	<button data-remodal-action="close" class="remodal-close"></button>
	<h2>Coming Soon</h2>
</div>