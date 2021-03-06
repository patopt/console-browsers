<?php include('../module/head.php');?>
<body class="section-device">
<header id="top">
	<?php include('../module/nav.php');?>
	<h1 class="heading">Xbox 360</h1>
</header>

<section class="content">
	
<article>
		
	<div class="entry-content">
		
		<h2>About the Xbox 360</h2>
		
		<p>There's a cursor on the screen that glows green when it's hovered over a link. Scrolling is sluggish. You can scroll by going off the bottom edge of the screen (left analogue stick) or by panning down with the right analogue stick. On the screen, there's a little scrollbar that can't be manipulated. The screen can flicker quite a bit on scroll</p>
		
		<p>In the settings, you can select an option to "use whole TV screen to show web content", which is off by default. When it's off, gaps appear at the edge of the site. When it's on, the site fits the TV screen up to the edges.</p>
		
		<p>The settings also have an option to "use web pages formatted for mobile devices". This only works on sites using user agent string detection to serve up an <code>m.</code> version, not responsive sites.</p>
		
		<?php/* <img class="full" src="../image/xbox-photo-settings.jpeg" alt="photo of the Xbox browser's settings" />*/ ?>
		
		<p>The keyboard has big touch areas. This is good for gesture or for using a device like a Wii-mote, but when you're using the analogue stick on the Xbox controller, this means lots of traversing.</p>
		
		<p>The D-pad can't be used toggle through keys on the keyboard, only to move the position of the text cursor.</p>
		
		<img class="full" src="../image/xbox-photo-keyboard.jpg" alt="photo of the Xbox browser's keyboard" />
		
		<p>You can zoom in using the shoulder buttons (LT and RT)</p>
		
		<p>The typography handling is better than other consoles, but not as good as desktop browsers.</p>
		
		<p>Flash doesn't work, so no Youtube. No file handling.</p>
		
		<aside><p><a href="http://en.wikipedia.org/wiki/Xbox_360">More about the Xbox 360 on Wikipedia</a></p></aside>
		
		<p>I'm still collecting notes on the Xbox 360 yet, so you should check out <a href="http://www.broken-links.com/2012/10/16/internet-explorer-on-xbox-360/">Peter Gasston</a>'s notes for more information and screenshots.</p>
		
		<h3>Media query tests</h3>
		
		<aside><p>Source: <a href="http://www.jordanm.co.uk/palmreader">Palm Reader</a></p></aside>
		
		<h4>What the device can read:</h4>
		
		<ul>
			<li><code>screen</code></li>
			<li><code>color</code></li>
			<li><code>(orientation : landscape)</code></li>
			<li><code>(min-width)</code></li>
			<li><code>(max-width)</code></li>
		</ul>
		
		<h4>What the device says it isn't:</h4>
		
		<ul>
			<li><code>print</code></li>
			<li><code>tv</code></li>
			<li><code>monochrome</code></li>
			<li><code>handheld</code></li>
			<li><code>projection</code></li>
		</ul>
		
		<h4>Device doesn't recognise:</h4>
		
		<ul>
			<li><code>(-webkit-min-device-pixel-ratio: 2)</code></li>
			<li><code>(pointer:coarse)</code></li>
			<li><code>(pointer:fine)</code></li>
			<li><code>(pointer:none)</code></li>
		</ul>
		
		
		<h2>Inputs</h2>
		
		<h3>Primary Controller</h3>
		
		<figure>
			<a href="../image/diagram-xbox360-controller.png">
				<img src="../image/diagram-xbox360-controller.png" alt="Photo of the Xbox 360 controller." />
				<figcaption>
					<p>See big version</p>
				</figcaption>
			</a>
		</figure>
		
		<h3>Other input devices</h3>
		
		<ul>
			<li><a href="http://en.wikipedia.org/wiki/Kinect">Kinect</a>, motion sensing input device. Used for gestural interfaces and spoken commands.</li>
			<li><a href="http://en.wikipedia.org/wiki/Xbox_SmartGlass">SmartGlass</a></li>
			<li><a href="http://en.wikipedia.org/wiki/Xbox_360_accessories#Messenger_Kit">Chatpad</a> (keyboard that clips onto the controller)</li>
		</ul>
		
		<h2>Photos</h2>
	
		<div class="photos">
			<script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?show_name=1&count=10&display=latest&size=m&layout=h&context=in%2Fpool-2101283%40N20%2F&source=group_tag&group=2101283%40N20&tag=xbox+360">
			</script>
			<p class="quiet">See more on <a href="http://www.flickr.com" id="flickr_www">www.<strong style="color:#3993ff">flick<span style="color:#ff1c92">r</span></strong>.com</a> in the <a href="http://www.flickr.com/groups/2101283@N20/pool/tags/xbox 360">Game console browsers pool tagged with xbox 360</a></p>
		</div>
		
	</div><!-- .entry-content -->
	
	<div class="supplementary">
	
		<img src="../image/xbox360-controller.png" alt="Photo of the Xbox 360 controller." />
		
		<h2>Browser</h2>
		
		<p class="browser browser-ie">Runs IE9.</p>
		
		<h2>Support Details</h2>
		
		<aside><p>Source: <a href="http://supportdetails.com/">Support Details by Imulus</a>, July 2012</p></aside>
		
		<table>
			<tr>
				<th>Operating System</th>
				<td>Windows 7</td>
			</tr>
			<tr>
				<th>Screen Resolution</th>
				<td>1041 x 586</td>
			</tr>
			<tr>
				<th>Web Browser</th>
				<td>Internet Explorer 9.0</td>
			</tr>
			<tr>
				<th>Browser Size</th>
				<td>1041 x 586</td>
			</tr>
			<tr>
				<th>Color Depth</th>
				<td>24</td>
			</tr>
			<tr>
				<th>Javascript</th>
				<td>Enabled</td>
			</tr>
			<tr>
				<th>Flash Version</th>
				<td>Not Installed</td>
			</tr>
			<tr>
				<th>Cookies</th>
				<td>Enabled</td>
			</tr>
			<tr>
				<th>User Agent</th>
				<td><code>Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; Trident/5.0; Xbox)</code>, or <code>Mozilla/5.0 (compatible; MSIE 9.0; Windows Phone OS 7.5; Trident/5.0; IEMobile/9.0; Xbox)</code> in mobile view.</td>
			</tr>
		</table>
		
		
		
		
		<div class="highlight highlight-html">
			<h3>HTML5 Support</h3>
			<strong>120/500</strong>
			<p>as of October 2012</p>
			<aside><p>Source: <a href="http://html5test.com">html5test.com</a></p></aside>
		</div>
		
		<div class="highlight highlight-css">
			<h3>CSS3 Support</h3>
			<strong>32%</strong>
			<p>as of October 2012</p>
			<aside><p>Source: <a href="http://css3test.com">css3test.com</a></p></aside>
		</div>
		
	</div><!-- .supplementary -->
	
</article>

</section>
<?php include('../module/foot.php');?>
</body>
</html>