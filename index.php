<? $press_releases_unformatted_array = file_get_contents('press-releases.txt');

$press_releases_array = [];

$possible_values = ["Title", "Date", "Body"];
	
foreach (explode("===", $press_releases_unformatted_array) as $press_release_unformatted_temp):
	$press_release_formatted_temp = [];
	
	foreach(explode("***", $press_release_unformatted_temp) as $press_release_unformatted_temp):

		foreach($possible_values as $possible_value_temp):
	
			if (strpos($press_release_unformatted_temp, $possible_value_temp."•••") === FALSE): continue; endif;

			$result_temp = trim(str_replace($possible_value_temp."•••", null, $press_release_unformatted_temp));
	
			if (empty($result_temp)): continue; endif;

			$press_release_formatted_temp[$possible_value_temp] = $result_temp;
	
			endforeach;
		endforeach;
	
	if (empty($press_release_formatted_temp)): continue; endif;
	
	$press_releases_array[] = $press_release_formatted_temp;
	endforeach;
	
$close_lightboxes = implode(",", [
	"lightbox-foundation.close",
	"lightbox-museum.close",
	"lightbox-beit-halevi.close",
	"lightbox-kosher.close",
	"lightbox-news.close",
	"lightbox-objectives.close",
	"lightbox-governance.close",
	"lightbox-articles.close",
	"lightbox-bylaws.close",
	]);

$css_temp = [
	
	];
?>

<!doctype html>
<html amp lang="en">
<head>
<meta charset="utf-8">
<script async src="https://cdn.ampproject.org/v0.js"></script>
<title>Foundation of Ours</title>
<link rel="canonical" href="https://ours.foundation/">
<meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
<style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>
<script async custom-element="amp-lightbox" src="https://cdn.ampproject.org/v0/amp-lightbox-0.1.js"></script>
<script async custom-element="amp-fx-collection" src="https://cdn.ampproject.org/v0/amp-fx-collection-0.1.js"></script>
<script async custom-element="amp-list" src="https://cdn.ampproject.org/v0/amp-list-0.1.js"></script>
<script async custom-element="amp-bind" src="https://cdn.ampproject.org/v0/amp-bind-0.1.js"></script>
<script async custom-template="amp-mustache" src="https://cdn.ampproject.org/v0/amp-mustache-0.2.js"></script>
	
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">	

<style amp-custom>
	
	body {
		margin: 0;
		padding: 0;
		font-size: 1.3em;
		line-height: 1.6em;
		background: rgba(245,245,245,1);
		text-align: center;
		}
	
	a	{
		color: inherit;
		}
	
	amp-img {
		border: 0;
		clear: both;
		}
	
	*:focus {
		outline: none;
		}
	
	#foundation-logo {
		clear: both;
		margin: 50px auto 20px;
		}
	
	h1, h2, h3, p {
		display: block;
		max-width: 500px;
		margin: 20px auto;
		padding: 20px 0;
		text-align: left;
		}	
	
	h1, h2, h3 {
		text-align: center;
		font-size: 170%;
		font-weight: 400;
		font-style: italic;
		padding: 70px 0 10px;
		}
	
	h1 .material-icons, h2 .material-icons, h3 .material-icons {
		font-size: 400%;
		font-style: normal;
		}
	
	h3 {
		font-size: 140%;
		}
	
	amp-lightbox h2:first-child {
		text-align: left;
		font-style: normal;
		}
	
	amp-lightbox {
		padding: 60px 20px;
		}
	
	amp-lightbox amp-img {
		margin: 100px auto 50px;
		}
	
	.lightbox-go-back {
		font-family: Helvetica;
		background: rgba(250,250,250,0.2);
		border-radius: 100px;
		padding: 11px 20px 9px;
		font-size: 75%;
		line-height: 1em;
		position: fixed;
		top: 20px;
		left: 20px;
		color: rgba(255,255,255,0.8);
		opacity: 1;
		cursor: pointer;
		z-index: 10000;
		}
	
	#section-banner {
		position: relative;
		width: 100%;
		display: block;
		margin: 0;
		padding: 0;
		clear: both;
		}
	
	#section-banner span {
		font-family: Helvetica;
		font-size: 60%;
		color: #333;
		margin: 20px 20px 0 0;
		padding: 0;
		float: right;
		box-sizing: border-box;
		line-height: 1.2em;
		cursor: pointer;
		display: inline-block;
		text-align: right;
		}
	
	@media only screen and (max-width: 780px)  {
		#section-banner span { clear: both; }
		}

	#section-header, #section-main, #section-more, #section-contact {
		clear: both;
		padding: 60px 20px;
		margin: 0;
		box-sizing: border-box;
		display: block;
		width: 100%;
		max-width: 100%;
		text-align: center;
		vertical-align: middle;
		}
	
	#section-header {
		}
	
	#section-header amp-img {
		margin-top: 50px;
		}
	
	#section-header-goals {
		margin: 50px 0 30px 0;
		}
	
	#section-header-goals amp-img {
		display: inline-block;
		vertical-align: middle;
		padding: 0;
		margin: 50px;
		color: #333;
		font-size: 140%;
		cursor: pointer;
		}

	#section-main {
		background: linear-gradient(45deg, rgba(150,150,150,.9), rgba(50,50,50,.5) 70%), linear-gradient(135deg, rgba(30,30,30,1), rgba(200,200,200,.7) 70%), linear-gradient(225deg, rgba(100,100,100,1), rgba(200,200,200,1) 70%);
		color: #fff;
		}
	

	#section-more {
		padding: 90px 20px;
		}
	
	#section-more span, #section-contact span, amp-lightbox span {
		font-family: Helvetica;
		display: inline-block;
		vertical-align: middle;
		cursor: pointer;
		font-size: 90%;
		margin: 30px;
		border-radius: 200px;
		padding: 8px 30px;		
		}

	#section-more span {
		color: rgba(0,0,0,0.6);
		box-shadow: 0 8px 30px -10px rgba(50,50,50,0.4);
		}
	
	#section-contact {
		background: rgba(60,60,60,1);
		color: #fff;
		box-shadow: 0 -10px 30px -10px rgba(40,40,40,0.5);
		}
	
	amp-lightbox span, #section-contact span {
		border: 1px solid #fff;
		}
		
	#lightbox-foundation {
		background: linear-gradient(45deg, rgba(100,100,100,.9), rgba(20,20,20,.5) 70%), linear-gradient(135deg, rgba(30,30,30,1), rgba(200,200,200,.7) 70%), linear-gradient(225deg, rgba(100,100,100,1), rgba(200,200,200,1) 70%);
		color: rgba(255,255,255,0.9);
		}
	
	#lightbox-beit-halevi {
		background: linear-gradient(225deg, rgba(10,120,180,.9), rgba(150,180,190,.5) 70%), linear-gradient(135deg, rgba(25,130,220,1), rgba(30,130,50,.7) 70%), linear-gradient(225deg, rgba(255,255,255,1), rgba(200,200,200,1) 70%);
		color: rgba(255,255,255,0.9);
		}

	#lightbox-kosher {
		background: linear-gradient(45deg, rgba(140,40,40,.9), rgba(120,90,90,.5) 70%), linear-gradient(135deg, rgba(200,115,20,1), rgba(210,120,120,.7) 70%), linear-gradient(225deg, rgba(255,255,255,1), rgba(200,200,200,1) 70%);
		color: rgba(255,255,255,0.9);
		}
	
	#lightbox-museum {
		background: linear-gradient(45deg, rgba(30,30,30,.9), rgba(120,120,120,.5) 70%), linear-gradient(135deg, rgba(100,100,100,1), rgba(190,190,190,.7) 70%), linear-gradient(225deg, rgba(100,100,100,1), rgba(200,200,200,1) 70%);
		color: rgba(255,255,255,0.9);
		}

	#lightbox-news {
		background: linear-gradient(225deg, rgba(220,120,40,.9), rgba(240,120,20,.5) 70%), linear-gradient(135deg, rgba(225,110,70,1), rgba(160,190,220,.7) 70%), linear-gradient(225deg, rgba(100,100,100,1), rgba(200,200,200,1) 70%);
		color: rgba(255,255,255,0.9);
		}
	
	#lightbox-objectives {
		background: linear-gradient(225deg, rgba(140,100,235,.9), rgba(60,180,60,.5) 70%), linear-gradient(135deg, rgba(130,100,180,1), rgba(100,100,180,.7) 70%), linear-gradient(225deg, rgba(100,100,100,1), rgba(200,200,200,1) 70%);
		color: rgba(255,255,255,0.9);
		}

	#lightbox-governance {
		background: #000;
		color: rgba(255,255,255,0.9);
		}

	#lightbox-articles {
		background: #000;
		color: rgba(255,255,255,0.9);
		}

	#lightbox-bylaws {
		background: #000;
		color: rgba(255,255,255,0.9);
		}
	
	.material-icons {
  font-family: 'Material Icons';
  font-weight: normal;
  font-style: normal;
  font-size: 24px;  /* Preferred icon size */
  display: inline-block;
  line-height: 1;
  text-transform: none;
  letter-spacing: normal;
  word-wrap: normal;
  white-space: nowrap;
  direction: ltr;

  /* Support for all WebKit browsers. */
  -webkit-font-smoothing: antialiased;
  /* Support for Safari and Chrome. */
  text-rendering: optimizeLegibility;

  /* Support for Firefox. */
  -moz-osx-font-smoothing: grayscale;

  /* Support for IE. */
  font-feature-settings: 'liga';
}
	
	</style>	
</head>
<body>
	
<amp-state id='news'><script type="application/json"><? echo json_encode($press_releases_array) ?></script></amp-state>

<div id='section-banner'>
<span role='button' tabindex='1' on='tap:<? echo $close_lightboxes; ?>,lightbox-beit-halevi.open'>בית הלוי Beit HaLevi</span>
<span role='button' tabindex='1' on='tap:<? echo $close_lightboxes; ?>,lightbox-kosher.open'>שירותי כשרות Kosher Services</span>
<span role='button' tabindex='1' on='tap:<? echo $close_lightboxes; ?>,lightbox-museum.open'>Museum of Ours</span>
</div>
	
<div id='section-header'>
<amp-img role='button' tabindex='1' amp-fx='parallax' data-parallax-factor='1.2' src='/logo-black-foundation-of-ours.png' alt='Foundation of Ours' id='foundation-logo' width='500' height='500' layout='intrinsic' on='tap:<? echo $close_lightboxes; ?>,lightbox-foundation.open'></amp-img>
<h2 amp-fx='parallax' data-parallax-factor='1.1'>Who we are,</h2>
<p amp-fx='parallax' data-parallax-factor='1.1'><i>Mission statement</i> — Foundation of Ours supports Jewish expression in the Kurdistan Region, and provides platforms for reconciliation and coexistence with non-Jewish communities.</p>
<p amp-fx='parallax' data-parallax-factor='1.1'><i>Vision statement</i> — Foundation of Ours envisions a Jewish presence in the Kurdistan Region that is a core component of reconciliation and coexistence for all.</p>
</div>

<div id='section-main'>
<!--<amp-img src='/logo-white-foundation-of-ours.png' alt='Foundation of Ours' id='foundation-logo' width='300' height='300' layout='intrinsic'></amp-img>-->
<h2><i class='material-icons'>view_week</i><br>
Three goals</h2>
<p>א — Establish and maintain <b>Beit HaLevi</b> in Erbil.<br>
ב — Establish and maintain <b>Kosher Services</b> in Erbil.<br>
ג — Establish and maintain <b>Museum of Ours</b> in Erbil.</p>
<br>
<h2><i class='material-icons'>place</i><br>
One space</h2>
<p>Our three goals are envisioned as being realized in one physical building built to last for hundreds of years.</p>
</div>

<div id='section-more'>
<h2>Tap to learn more,</h2>
<div id='section-header-goals'>
<amp-img role='button' tabindex='1' src='/logo-black-beit-halevi.png' alt='Beit HaLevi' width='250' height='250' layout='intrinsic' on='tap:<? echo $close_lightboxes; ?>,lightbox-beit-halevi.open'></amp-img>
<amp-img role='button' tabindex='1' src='/logo-black-kosher-services.png' alt='Kosher Services' width='250' height='250' layout='intrinsic' on='tap:<? echo $close_lightboxes; ?>,lightbox-kosher.open'></amp-img>
<amp-img role='button' tabindex='1' src='/logo-black-museum-of-ours.png' alt='Foundation of Ours' width='250' height='248' layout='intrinsic' on='tap:<? echo $close_lightboxes; ?>,lightbox-museum.open'></amp-img>
</div>
<h2>Stay up-to-date,</h2>
<span role='button' tabindex='1' on='tap:<? echo $close_lightboxes; ?>,lightbox-news.open'>News</span>
<span role='button' tabindex='1' on='tap:<? echo $close_lightboxes; ?>,lightbox-objectives.open'>Objectives</span>
</div>
	
<div id='section-contact'>
<p>To contact us, please reach out at +1-424-248-7101 or at info@ours.foundation</p>
<br>
<span role='button' tabindex='1' on='tap:<? echo $close_lightboxes; ?>,lightbox-governance.open'>Governance</span>
<span role='button' tabindex='1' on='tap:<? echo $close_lightboxes; ?>,lightbox-articles.open'>Articles of Incorporation</span>
<span role='button' tabindex='1' on='tap:<? echo $close_lightboxes; ?>,lightbox-bylaws.open'>Bylaws</span>
<br>
<br>
</div>
	
<amp-lightbox layout='nodisplay' scrollable id='lightbox-beit-halevi'>

	<div class='lightbox-go-back' role='button' tabindex='1' on='tap:<? echo $close_lightboxes; ?>'>Go back</div>

	<amp-img src='/logo-white-beit-halevi.png' alt='Beit HaLevi' width='300' height='300' layout='intrinsic' ></amp-img>

	<h2>בית הלוי Beit HaLevi</h2>
	
	<p><i>Mission statement</i> — Beit HaLevi provides a Sefer Torah with an appropriate housing for the use of congregants and pilgrims.</p>
	
	</amp-lightbox>

<amp-lightbox layout='nodisplay' scrollable id='lightbox-kosher'>

	<div class='lightbox-go-back' role='button' tabindex='1' on='tap:<? echo $close_lightboxes; ?>'>Go back</div>

	<amp-img src='/logo-white-kosher-services.png' alt='Kosher Services' width='300' height='300' layout='intrinsic' ></amp-img>

	<h2>שירותי כשרות Kosher Services</h2>

	<p><i>Mission statement</i> — Kosher Services provides dining, lodging, and logistics in Erbil and the broader Kurdistan Region that are completely kosher to support congregants and pilgrims, as well as foster reconciliation and cultural knowledge with the general public.</p>
	
	</amp-lightbox>
	
<amp-lightbox layout='nodisplay' scrollable id='lightbox-museum'>
	
	<div class='lightbox-go-back' role='button' tabindex='1' on='tap:<? echo $close_lightboxes; ?>'>Go back</div>

	<amp-img src='/logo-white-museum-of-ours.png' alt='Museum of Ours' width='300' height='300' layout='intrinsic' ></amp-img>

	<h2>Museum of Ours</h2>

	<p><i>Mission statement</i> — Museum of Ours provides exhibitions, discussions, and publications in the Kurdistan Region, Nineveh Plains, and federal Iraq that apply historiography, museology, and demography to counter misinformation, systemic biases, and addictions to hate.</p>

	<a href='https://chat.whatsapp.com/BrRCPuMcj1tCqVZE0ZS2qM' target='_blank'><span>WhatsApp</span></a>
	<a href='https://www.facebook.com/museum.of.ours/' target='_blank'><span>Facebook</span></a>
	<a href='https://podcast.ours.foundation/' target='_blank'><span>Podcast</span></a>
	<a href='https://database.ours.foundation' target='_blank'><span>Database</span></a>
	
	<h3>Historiography</h3>
	
	<p>Museum of Ours looks to the past for problematization of history, not just simplistic explanations for current events.</p>

	<h3>Museology</h3>
	
	<p>Museum of Ours collects and conserves objects, testimonies, and digital records. Compelling interpretation gives acquisitions "social lives" that catalyze thoughtful conversations and improve the world.</p>
	
	<h3>Demography</h3>
	
	<p>Museum of Ours uses the demographic framework in all of its projects, paying attention to demographic characteristics to explore equality, equity, and segmentation.</p>

	<h3>Physical space</h3>
	
	<p>The physical space should have: exhibition galleries, study room, and archive/storage; community area with refreshments; semi-enclosed portico with booth for quiet study, studio work, meetings; staging area for music performances, as music fosters interest and common ground; and lodging for employees.</p>
	
	</amp-lightbox>
	
<amp-lightbox layout='nodisplay' scrollable id='lightbox-space'>
	
	<p>with three wings surrounding around a central courtyard with eco-friendly planting and irrigation</p>

	</amp-lightbox>
	
<amp-lightbox layout='nodisplay' scrollable id='lightbox-news'>

	<div class='lightbox-go-back' role='button' tabindex='1' on='tap:<? echo $close_lightboxes; ?>'>Go back</div>

	<amp-list [src]="news" height="560" layout="fixed-height" items=".">
	<template type="amp-mustache">{{Title}} {{Date}} {{Body}}
	</template>    
	</amp-list>
	
	<amp-img src='/logo-white-foundation-of-ours.png' alt='Foundation of Ours' id='foundation-logo' width='300' height='300' layout='intrinsic'></amp-img>

	<h2>Current news</h2>

	<p><b>Ongoing collecting.</b><br>
	<span>During the coronavirus crisis, acquisitions are still ongoing. Although we are moving toward our goal of acquiring land, all religious gatherings are on hold.</span></p>
	
	<!-- <p><b>Event name.</b><br>
	<span>TBD. <a href='https://www.facebook.com/events//' target='_blank'>RSVP</a></span></p>-->	

	<!-- <p><b>Popup Exhibit: Combined History of Water</b><br>
	<span>2020 Mar 29 - Apr 2, Book Cafe at Family Mall, Erbil. <a href='https://www.facebook.com/events/872042599897214/' target='_blank'>RSVP</a></span></p>

	<p><b>Eloquent Universe of Lalish</b><br>
	<span>TBD.</span></p>

	<p><b>Event on Kurdish Islamic history</b><br>
	<span>TBD.</span></p>

	<p><b>Event on Assyro-Christian history</b><br>
	<span>TBD.</span></p>

	<p><b>Event on Jewish history</b><br>
	<span>TBD.</span></p> -->
		
	<h2>Past news</h2>

	<p><b>Combined History of Fire: An Exhibition Covering 900BC to Today</b><br>
	<span>2020 Jan 24-25, Mr. Erbil, Erbil. <a href='https://www.facebook.com/events/831467727270919/' target='_blank'>RSVP</a></span></p>

	<p><b>The Islam of Kurdistan: From Salahaddin to Gaylani and Effendi</b><br>
	<span>2020 Jan 08, Book Café, Erbil. <a href='https://www.facebook.com/events/1410175962468203/' target='_blank'>RSVP</a></span></p>

	<p><b>By the river Tigris: Hanukah in Duhok</b><br>
	<span>2019 Dec 28 and 29, Duhok. <a href='https://www.facebook.com/events/2506842876299894/' target='_blank'>RSVP (private)</a></span></p>

	<p><b>Stronger Together: Hanukah and Shabbat in Erbil</b><br>
	<span>2019 Dec 27, Erbil. <a href='https://www.facebook.com/events/2449522708604784/' target='_blank'>RSVP (private)</a></span></p>

	<p><b>Churches of Mesopotamia: Syriac, Chaldean, and Assyrian</b><br>
	<span>2019 Dec 16, Book Café, Erbil. <a href='https://www.facebook.com/events/403693916994295/' target='_blank'>RSVP</a></span></p>

	<p><b>Multiculturalism and Reconciliation and the Jewish Community</b><br>
	<span>2019 Dec 08, American Corner, Duhok. <a href='https://www.facebook.com/events/814166239004509/'>RSVP</a></span></p>

	<p><b>Speaking engagement</b><br>
	<span>Dubai.</span></li>

	<p><b>By the Rivers of Babylon: The Jews of Erbil and Mesopotamia</b><br>
	<span>2019 Nov 12, American Corner, Erbil. <a href='https://www.facebook.com/events/517628888793532/' target='_blank'>RSVP</a></span></p>

	<p><b>Abrahamic: On Jews, Judaism, and Being Jewish</b><br>
	<span>2019 Nov 09, Book Café, Erbil. <a href='https://www.facebook.com/events/541946113227550/' target='_blank'>RSVP</a></span></p>

	<p><b>Around each corner: Walking tour of Erbil's ancient lower city</b><br>
	<span>2019 Nov 02, Erbil. <a href='https://www.facebook.com/events/2435048943483136/' target='_blank'>RSVP</a></span></p>

	<p><b>10,000 BC to Today: A Combined History of Erbil</b><br>
	<span>2019 Sep 25, American Corner, Erbil. <a href='https://www.facebook.com/events/1375003565982549/' target='_blank'>RSVP</a></span></p>

	<p><b>Passover + Shabbat + Erbil</b><br>
	<span>2019 Apr 26, Erbil. <a href='https://www.facebook.com/events/747872578931576/' target='_blank'>RSVP (private)</a></span></p>

	<p><b>Speaking engagement</b><br>
	<span>Tokyo.</span></p>

	<p><b>Gorgeous, mesmerizing Erbil: Walking tour of the lower city</b><br>
	<span>2019 Apr 05, Erbil. <a href='https://www.facebook.com/events/261910678093295/' target='_blank'>RSVP (private)</a></span></p>

	<p><b>Coffee, objects, and a combined history of Erbil</b><br>
	<span>2019 Feb 20, Book Café, Erbil. <a href='https://www.facebook.com/events/1538162612980919/' target='_blank'>RSVP (private)</a></span></p>

	<p><b>Tour and lunch at the Erbil Civilization Museum!</b><br>
	<span>2019 Jan 30, Erbil Civilization Museum, Erbil. <a href='https://www.facebook.com/events/337707437082372/' target='_blank'>RSVP (private)</a></span></p>

	<p><b>Chanukah!</b><br>
	<span>2018 Dec 07, Erbil. <a href='https://www.facebook.com/events/587592868342023/' target='_blank'>RSVP (private)</a></span></p>

	<p><b>Passover + Shabbat <3 Erbil</b><br>
	<span>2018 Mar 30, Erbil. <a href='https://www.facebook.com/events/195954320996356/' target='_blank'>RSVP (private)</a></span></p>

	<p><b>Chanukah + Shabbat</b><br>
	<span>2017 Dec 15, Erbil. <a href='https://www.facebook.com/events/1762566897096564/' target='_blank'>RSVP (private)</a></span></p>

	<p><b>Passover in Erbil</b><br>
	<span>2017 Apr 10, Erbil. <a href='https://www.facebook.com/events/397465033940380/' target='_blank'>RSVP (private)</a></span></p>

	<p><b>Pêseh le Hewlêr || Passover in Erbil</b><br>
	<span>2016 Apr 22, Erbil. <a href='https://www.facebook.com/events/648094782004410/' target='_blank'>RSVP (private)</a></span></p>

	</amp-lightbox>
	
<amp-lightbox layout='nodisplay' scrollable id='lightbox-objectives'>

	<div class='lightbox-go-back' role='button' tabindex='1' on='tap:<? echo $close_lightboxes; ?>'>Go back</div>

	<amp-img src='/logo-white-foundation-of-ours.png' alt='Foundation of Ours' id='foundation-logo' width='300' height='300' layout='intrinsic'></amp-img>

	<h2>Our objectives</h2>

	<p>א — Incorporate as a religious nonprofit in the United States, and the Kurdistan Region. This requires establishing articles of incorporation, establishing bylaws, recruiting boardmembers, and incorporating in Maine and Erbil.</p>
	<p>ב — Consolidate a local network of heritage professionals and enthusiasts. This requires fostering a sense of community and engaging people in the network with the mission statement.</p>
	<p>ג — Establish an online and media-friendly presence for the Foundation. This means distributing press releases, improving the research database, and looking at digital initiatives.</p>

	<h3>Objectives for Beit HaLevi</h3>

	<p>א — Recruit Rabbis to advise on what is needed to have a Sefer Torah and accompanying housing, and prepare a series of objectives based on this advice.</p>
	<p>ב — Identify the process for purchasing land and registering it to a religious organization.</>

	<h3>Objectives for Kosher Services</h3>

	<p>א — Recruit Rabbis to advise on what is needed for a café and guesthouse to be kosher: prepare a prioritized list of these needs; and cross-check with potential visitors about their expectations.</p>
	<p>ב — Begin to import necessary items based on the prioritized list.</p>
	<p>ג — Identify a process for sponsoring visas for pilgrims to the Kurdistan Region: look at hurdles in the Kurdistan Region government; and look at hurdles in non-KR governments.</p>
	
	<h3>Objectives for Museum of Ours</h3>

	<p>א — Due to the COVID-19 pandemic, an emphasis will be placed on digital events such as weekly podcasts. Awareness about the Museum will be raised through press releases and pursuing media coverage.</p>
	<p>ב — Identify and publicize local heritage institutions’ short-term needs. Fulfill these needs when possible, e.g. pamphlets, leaflets, and digital presence.</p>
	<p>ג — Digitize the entire collection of objects acquired so far. Raise awareness with publication of materials produced via digitization.</p>
	<p>ד — Reach 10,000 published photos on Wikimedia.</p>

	</amp-lightbox>

<amp-lightbox layout='nodisplay' scrollable id='lightbox-governance'>

	<div class='lightbox-go-back' role='button' tabindex='1' on='tap:<? echo $close_lightboxes; ?>'>Go back</div>

	<amp-img src='/logo-white-foundation-of-ours.png' alt='Foundation of Ours' id='foundation-logo' width='300' height='300' layout='intrinsic'></amp-img>

	<h2>Governance</h2>

	<p>Foundation of Ours is a religious nonprofit organization as defined by the Internal Revenue Code of the United States and the Maine Nonprofit Corporation Act of the State of Maine. It is governed by its Board of Directors and by five officers: a President, a Clerk, a Treasurer, a Lead Rabbi, and a Museum Officer.</p>
	
	<p>Because of the small size of Foundation of Ours, all officers are also on the Board of Directors. In addition to these Directors, there are non-officers bringing the number of Directors to __ (__) in total. Directors come from a range of faiths including Judaism, Ezidism, and Islam.</p>

	<p>Beit HaLevi, Kosher Services, and Museum of Ours are equipped with their own mission statements and objectives and their own public brands and social media channels. However, they are goals of the Foundation and as such they must operate within the Foundation’s mission and must not hinder the Foundation’s other goals or objectives. Additionally, they are not a separate legal entities from the Foundation and do not have authority separate from nor over the Foundation.</p>

	</amp-lightbox>
	
<amp-lightbox layout='nodisplay' scrollable id='lightbox-articles'>

	<div class='lightbox-go-back' role='button' tabindex='1' on='tap:<? echo $close_lightboxes; ?>'>Go back</div>

	<amp-img src='/logo-white-foundation-of-ours.png' alt='Foundation of Ours' id='foundation-logo' width='300' height='300' layout='intrinsic'></amp-img>

	<h2>Articles of Incorporation</h2>

	<p></p>
	
	</amp-lightbox>
	
<amp-lightbox layout='nodisplay' scrollable id='lightbox-bylaws'>

	<div class='lightbox-go-back' role='button' tabindex='1' on='tap:<? echo $close_lightboxes; ?>'>Go back</div>

	<amp-img src='/logo-white-foundation-of-ours.png' alt='Foundation of Ours' id='foundation-logo' width='300' height='300' layout='intrinsic'></amp-img>

	<h2>Bylaws</h2>

	<p></p>
	
	</amp-lightbox>

</body>
	
</html>
