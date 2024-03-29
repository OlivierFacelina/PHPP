<?php
// Rediriger l'utilisateur vers une autre page web
	header("Content-Type: image/svg+xml");
	$communes = filter_input(INPUT_GET,'communes',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	$population = filter_input(INPUT_GET,'population',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	$mobilities = filter_input(INPUT_GET,'mobilities',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	$logements = filter_input(INPUT_GET,'logements',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	$emplois = filter_input(INPUT_GET,'emplois',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	$chambres = filter_input(INPUT_GET,'chambres',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	$campings = filter_input(INPUT_GET,'campings',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	$agricoles = filter_input(INPUT_GET,'agricoles',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
?>

<!-- Generator: Adobe Illustrator 20.1.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
<svg version="1.1" id="infographie" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
	 y="0px" viewBox="0 0 754 362" style="enable-background:new 0 0 754 362;" xml:space="preserve">
<style type="text/css">
	@import url('https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700');

	.st0 {
		fill:#A81A21;
	}
	.st1 {
		fill:#FFFFFF;
	}
	.st2 {
		font-family: 'Roboto Condensed', sans-serif;
		font-weight: 700;
	}
	.st3 {
		font-size:48px;
	}
	.st4 {
		font-family: 'Roboto Condensed', sans-serif;
	}
	.st5 {
		font-size:14px;
	}
	.st6 {
		font-size:16px;
	}
	.st7 {
		fill:#009DE0;
	}
	.st8 {
		font-size:44px;
	}
	.st9 {
		fill:#548F87;
	}
	.st10 {
		fill:#523F8D;
	}
	.st11 {
		fill:#D0683E;
	}
	.st12 {
		fill:#EEC338;
	}
	.st13 {
		fill:#8C775D;
	}
</style>
<g id="territoire">
	<rect id="bloc_6_" class="st0" width="166" height="166"/>
	<g id="picto_7_">
		<path class="st1" d="M111.2,156c-6.4,0-12.6,0-19.2,0c0-1,0-1.8,0-2.7c0-9.8-0.1-19.7,0.1-29.5c0-2.2,0.6-4.5,1.3-6.6
			c1.2-3.6,2.8-7,4.4-11.2c2.4,7.2,6.3,13,5.9,20.5c-0.5,8.6-0.1,17.4,0.4,26.1c0.5-6,1-12,1.5-18c0.1-0.8,0.2-1.6,0.2-2.4
			c0-1.3,0.7-1.8,2-1.8c5.2,0.1,10.4,0,15.6,0.1c0.9,0,1.9,0.5,2.5,1.1c1.4,1.3,2.7,2.9,4.1,4.2c1.4,1.2,1.8,2.9,0.9,4.1
			c-0.9,1.3-2.7,2.7-4.2,2.7C117.6,142.7,112.4,147,111.2,156z M100.9,126.2c-0.3-1.7-1.2-2.8-3-2.8c-1.9,0-2.8,1.2-3,2.9
			c-0.1,1.6,1.6,3.2,3.1,3C99.8,129.1,100.8,128,100.9,126.2z"/>
		<path class="st1" d="M127.2,99.7c1.5,0,2.7,0,4,0c1.2,0,2.4,0,3.8,0c0.1-1.1,0.3-2.2,0.4-3.3c4,0,8,0,12.1,0c0.1,1,0.2,2,0.3,3.2
			c2.6,0,5.3,0,8,0c0,14.5,0,28.8,0,43.2c-2.3-1.5-3.9-2.9-3.8-6c0.2-9.9,0.1-19.8,0.1-29.7c0-1,0-1.9,0-3.1c-1.6,0-3,0-4.7,0
			c0,10.9,0,21.8,0,32.8c-1.4,0-2.5,0-3.8,0c0-10.9,0-21.8,0-32.8c-0.8-0.1-1.3-0.1-1.9-0.2c-2-0.3-2.7,0.4-2.6,2.5
			c0.1,9.2,0,18.4,0,27.5c0,1,0,1.9,0,3c-1.4,0-2.5,0-3.9,0c0-10.9,0-21.8,0-32.9c-1.5,0-2.8,0-4.2,0c0,8.5,0,16.9,0,25.5
			c-3.2-1.5-4-2.7-4-5.7C127.2,115.9,127.2,108,127.2,99.7z"/>
		<path class="st1" d="M131.2,145.6c4-4.3,10.7-5.4,16.2-3c5.8,2.5,9.3,9.2,8.5,13.3c-13.3,0-26.7,0-40,0c-0.5-3.9,2.3-7.6,6.4-8.7
			c5.1-1.4,9.3,1,11.8,6.7C134.9,151.3,134.1,148.8,131.2,145.6z"/>
	</g>
	<text transform="matrix(1 0 0 1 10.5 41.5)"><tspan x="0" y="0" class="st1 st2 st8"><?= $communes ?></tspan><tspan x="72.8" y="0" class="st1 st4 st5"> </tspan><tspan x="0" y="19.2" class="st1 st4 st6">communes</tspan></text>
</g>
<g id="population">
	<rect id="bloc_5_" x="196" class="st7" width="166" height="166"/>
	<g id="picto_6_">
		<path class="st1" d="M221.4,102.8h-6.5c-3.2,0-5.8,2.6-5.8,5.9v17c0,1.4,1.1,2.5,2.4,2.5c1.4,0,2.5-1.1,2.5-2.5c0,0,0-15,0-15
			c0-0.1,0.1-0.3,0.3-0.3h0.5c0.1,0,0.3,0.1,0.3,0.3v42c0,1.7,1.4,3.2,3.2,3.2c1.7,0,3.2-1.4,3.2-3.2v-24.7c0-0.2,0.1-0.3,0.3-0.3h0
			c0.2,0,0.3,0.1,0.3,0.3v24.7c0,1.7,1.4,3.2,3.2,3.2c1.7,0,3.2-1.4,3.2-3.2v-42c0-0.1,0.1-0.3,0.3-0.3h0.5c0.1,0,0.3,0.1,0.3,0.3
			v15c0,1.4,1.1,2.5,2.5,2.5c1.4,0,2.5-1.1,2.5-2.5v-17c0-3.4-2.6-5.9-5.8-5.9h-6.5H221.4z"/>
		<path class="st1" d="M221.4,92c2.6,0,4.7,2.1,4.7,4.7s-2.1,4.7-4.7,4.7c-2.6,0-4.7-2.1-4.7-4.7S218.8,92,221.4,92"/>
		<path class="st1" d="M250.1,102.8h-6.5c-3.2,0-5.8,2.6-5.8,5.9v17c0,1.4,1.1,2.5,2.4,2.5c1.4,0,2.5-1.1,2.5-2.5c0,0,0-15,0-15
			c0-0.1,0.1-0.3,0.3-0.3h0.5c0.1,0,0.3,0.1,0.3,0.3v42c0,1.7,1.4,3.2,3.2,3.2c1.7,0,3.2-1.4,3.2-3.2v-24.7c0-0.2,0.1-0.3,0.3-0.3h0
			c0.2,0,0.3,0.1,0.3,0.3v24.7c0,1.7,1.4,3.2,3.2,3.2c1.7,0,3.2-1.4,3.2-3.2v-42c0-0.1,0.1-0.3,0.3-0.3h0.5c0.1,0,0.3,0.1,0.3,0.3
			c0,0,0,15,0,15c0,1.4,1.1,2.5,2.5,2.5c1.4,0,2.4-1.1,2.4-2.5v-17c0-3.4-2.6-5.9-5.8-5.9h-6.5H250.1z"/>
		<path class="st1" d="M250.1,92c2.6,0,4.7,2.1,4.7,4.7s-2.1,4.7-4.7,4.7c-2.6,0-4.7-2.1-4.7-4.7S247.5,92,250.1,92"/>
		<path class="st1" d="M278.7,102.8h-6.5c-3.2,0-5.8,2.6-5.8,5.9v17c0,1.4,1.1,2.5,2.4,2.5c1.4,0,2.5-1.1,2.5-2.5c0,0,0-15,0-15
			c0-0.1,0.1-0.3,0.3-0.3h0.5c0.1,0,0.3,0.1,0.3,0.3v42c0,1.7,1.4,3.2,3.2,3.2c1.7,0,3.2-1.4,3.2-3.2v-24.7c0-0.2,0.1-0.3,0.3-0.3h0
			c0.2,0,0.3,0.1,0.3,0.3v24.7c0,1.7,1.4,3.2,3.2,3.2c1.7,0,3.2-1.4,3.2-3.2v-42c0-0.1,0.1-0.3,0.3-0.3h0.5c0.1,0,0.3,0.1,0.3,0.3
			v15c0,1.4,1.1,2.5,2.5,2.5c1.4,0,2.5-1.1,2.5-2.5v-17c0-3.4-2.6-5.9-5.8-5.9h-6.5H278.7z"/>
		<path class="st1" d="M278.7,92c2.6,0,4.7,2.1,4.7,4.7s-2.1,4.7-4.7,4.7c-2.6,0-4.7-2.1-4.7-4.7S276.2,92,278.7,92"/>
		<path class="st1" d="M307.4,102.8h-6.5c-3.2,0-5.8,2.6-5.8,5.9v17c0,1.4,1.1,2.5,2.4,2.5c1.4,0,2.5-1.1,2.5-2.5c0,0,0-15,0-15
			c0-0.1,0.1-0.3,0.3-0.3h0.5c0.1,0,0.3,0.1,0.3,0.3v42c0,1.7,1.4,3.2,3.2,3.2c1.7,0,3.2-1.4,3.2-3.2v-24.7c0-0.2,0.1-0.3,0.3-0.3h0
			c0.2,0,0.3,0.1,0.3,0.3v24.7c0,1.7,1.4,3.2,3.2,3.2c1.7,0,3.2-1.4,3.2-3.2v-42c0-0.1,0.1-0.3,0.3-0.3h0.5c0.1,0,0.3,0.1,0.3,0.3
			c0,0,0,15,0,15c0,1.4,1.1,2.5,2.5,2.5c1.4,0,2.4-1.1,2.4-2.5v-17c0-3.4-2.6-5.9-5.8-5.9h-6.5H307.4z"/>
		<path class="st1" d="M307.4,92c2.6,0,4.7,2.1,4.7,4.7s-2.1,4.7-4.7,4.7c-2.6,0-4.7-2.1-4.7-4.7S304.8,92,307.4,92"/>
		<path class="st1" d="M336.1,102.8h-6.5c-3.2,0-5.8,2.6-5.8,5.9v17c0,1.4,1.1,2.5,2.4,2.5c1.4,0,2.5-1.1,2.5-2.5c0,0,0-15,0-15
			c0-0.1,0.1-0.3,0.3-0.3h0.5c0.1,0,0.3,0.1,0.3,0.3v42c0,1.7,1.4,3.2,3.2,3.2c1.7,0,3.2-1.4,3.2-3.2v-24.7c0-0.2,0.1-0.3,0.3-0.3h0
			c0.2,0,0.3,0.1,0.3,0.3v24.7c0,1.7,1.4,3.2,3.2,3.2c1.7,0,3.2-1.4,3.2-3.2v-42c0-0.1,0.1-0.3,0.3-0.3h0.5c0.1,0,0.3,0.1,0.3,0.3
			v15c0,1.4,1.1,2.5,2.5,2.5c1.4,0,2.5-1.1,2.5-2.5v-17c0-3.4-2.6-5.9-5.8-5.9h-6.5H336.1z"/>
		<path class="st1" d="M336.1,92c2.6,0,4.7,2.1,4.7,4.7s-2.1,4.7-4.7,4.7c-2.6,0-4.7-2.1-4.7-4.7S333.5,92,336.1,92"/>
	</g>
	<text transform="matrix(1 0 0 1 200 41.5)"><tspan x="0" y="0" class="st1 st2 st8"><?= $population ?></tspan><tspan x="0" y="19.2" class="st1 st4 st6">habitants</tspan></text>
</g>
<g id="mobilite">
	<rect id="bloc_4_" x="392" class="st9" width="166" height="166"/>
	<g id="picto_5_">
		<g>
			<polygon class="st1" points="526.6,132.5 526.6,132.5 526.6,132.5 			"/>
			<path class="st1" d="M512.9,97.5c0-3-2.5-5.5-5.5-5.5c-3,0-5.5,2.5-5.5,5.5c0,3,2.5,5.5,5.5,5.5
				C510.4,103,512.9,100.5,512.9,97.5z"/>
			<polygon class="st1" points="526.6,132.5 526.6,132.5 526.5,132.5 			"/>
			<path class="st1" d="M474.2,143.8c0,6.7,5.4,12.2,12.2,12.2c6.3,0,11.6-4.9,12.1-11.2h-0.1h0.1h3.2l-1,2.5l8.7,3.3l0-0.1
				c0.2,0,0.3,0.1,0.5,0.1c0.8,0,1.5-0.7,1.5-1.5c0-0.6-0.4-1.2-1-1.4l0,0.1l-2.8-1.2l1.7-4.3l14.2-10l0.5,1.5l0,0
				c-3.3,2.3-5.2,6-5.2,10c0,6.7,5.5,12.2,12.2,12.2c6.7,0,12.2-5.5,12.2-12.2c0-6.7-5.5-12.2-12.2-12.2c-1.5,0-3,0.3-4.3,0.8v0l0,0
				h0v0l0,0c0,0,0,0,0,0v-0.1l-3-11.2c0,0,0,0,0,0l0-0.1l0,0.1c0.2,0,0.4,0.1,0.6,0.1c1.4,0,2.5-1.1,2.5-2.5c0-0.8-0.4-1.6-1.1-2.1
				l0,0.1l-22.2-14.5l0,0.1c-0.6-0.4-1.3-0.6-2-0.6c-1.5,0-2.8,0.9-3.4,2.3l-0.1,0l-7.3,18.5l0.1,0c-0.2,0.4-0.2,0.9-0.2,1.3
				c0,1.9,1.4,3.5,3.3,3.6l0,0h0.2l-2.8,5l0,0.1c-1.5-0.6-3.1-0.9-4.7-0.9C479.7,131.7,474.2,137.1,474.2,143.8z M524.9,137.8l0-0.1
				L524.9,137.8C524.9,137.8,524.9,137.8,524.9,137.8l0.6,2.5l0.1,0c0.7,2.3,2.6,4,5,4.4l0.2-0.1l-0.2,0.2c0.1,0,0.1,0,0.2,0
				c0.6,0,1.2-0.5,1.2-1.2c0-0.4-0.2-0.8-0.5-1l0.2-0.1c-1.6-1.1-2.8-2.7-3.3-4.5l-0.3,0l-0.5-2c0,0,0,0,0,0l0,0l0,0
				c1.1-0.5,2.2-0.7,3.3-0.7c4.7,0,8.5,3.8,8.5,8.5c0,4.7-3.8,8.5-8.5,8.5c-4.7,0-8.5-3.8-8.5-8.5
				C522.4,141.6,523.3,139.4,524.9,137.8z M491.9,137.3c1.6,1.4,2.6,3.3,2.9,5.3l-0.1,0h-6L491.9,137.3
				C491.9,137.3,491.9,137.3,491.9,137.3L491.9,137.3L491.9,137.3z M511.2,137.2l3-7.7l0,0c0.2-0.6,0.4-1.2,0.4-1.8
				c0-0.1,0-0.1,0-0.2h7.7l0.3,1.8L511.2,137.2z M503.2,122.2l4.5-11.3l12.8,8.3l0.1,0c-0.1,0.3-0.1,0.7-0.1,1c0,0.5,0.1,1,0.2,1.5
				l-0.2,0l0.8,2.8h-7.8l-0.1,0.1c-0.8-1-2-1.6-3.2-1.7v0L503.2,122.2z M504.2,138.3l-3.7-10.2l5,0.3l0,0c0.9,0.1,1.7,0.9,1.7,1.8
				c0,0.2,0,0.5-0.1,0.7l0,0L504.2,138.3z M493.7,134.1L493.7,134.1l3.6-6.1l5.3,14.7l-4.1,0C498.2,139.2,496.4,136.1,493.7,134.1z
				 M477.9,143.8c0-4.7,3.8-8.5,8.5-8.5c1,0,1.9,0.2,2.8,0.5l0,0l-4.3,7.3l0.1,0c-0.1,0.2-0.1,0.3-0.1,0.5c0,0.6,0.4,1,1,1v0.2h8.8
				l0.1,0c-0.5,4.3-4.1,7.5-8.4,7.5C481.7,152.3,477.9,148.5,477.9,143.8z"/>
			<path class="st1" d="M523.5,121.1C523.6,121.1,523.6,121.1,523.5,121.1L523.5,121.1L523.5,121.1z"/>
			<polygon class="st1" points="491.9,137.3 491.9,137.3 491.9,137.3 			"/>
			<polygon class="st1" points="527.6,136 527.6,136 527.6,136 			"/>
			<path class="st1" d="M524.9,137.7l0,0.1C524.9,137.8,524.9,137.8,524.9,137.7L524.9,137.7z"/>
		</g>
		<g>
			<path class="st1" d="M460.6,106.6c-1-2.4-3.3-3.9-5.9-3.9h-27.6c-2.6,0-4.9,1.5-5.9,3.9l-5.7,13.3h-6.9c-0.9,0-1.7,0.8-1.7,1.7
				v3.4c0,0.9,0.8,1.7,1.7,1.7h4.7l-1.5,16.7c0,0.1,0,0.2,0,0.2c0,3.1,2.2,5.7,5.1,6.2v4.5c0,0.9,0.8,1.7,1.7,1.7h7.4
				c0.9,0,1.7-0.8,1.7-1.7V150h26.2v4.3c0,0.9,0.8,1.7,1.7,1.7h7.4c0.9,0,1.7-0.8,1.7-1.7v-4.4c2.9-0.6,5.1-3.2,5.1-6.2
				c0-0.1,0-0.2,0-0.2l-1.5-16.7h4.7c0.9,0,1.7-0.8,1.7-1.7v-3.4c0-0.9-0.8-1.7-1.7-1.7h-6.9L460.6,106.6z M427.1,106.9h27.5
				c0.9,0,1.6,0.5,2,1.3l6.2,14.6H419l6.2-14.6C425.5,107.5,426.3,106.9,427.1,106.9z M423.6,137.6c-2.6,0-4.6-2.1-4.6-4.6
				c0-2.6,2.1-4.6,4.6-4.6s4.6,2.1,4.6,4.6C428.3,135.5,426.2,137.6,423.6,137.6z M458.2,128.3c2.6,0,4.6,2.1,4.6,4.6
				c0,2.6-2.1,4.6-4.6,4.6c-2.6,0-4.6-2.1-4.6-4.6C453.6,130.4,455.7,128.3,458.2,128.3z"/>
		</g>
	</g>
	<text transform="matrix(1 0 0 1 395 41.5)"><tspan x="0" y="0" class="st1 st2 st8"><?= $mobilities ?></tspan><tspan x="143.7" y="0" class="st1 st4 st5"> </tspan><tspan x="0" y="19.2" class="st1 st4 st6">déplacements</tspan></text>
</g>
<g id="habitat">
	<rect id="bloc_3_" x="588" class="st10" width="166" height="166"/>
	<g id="picto_4_">
		<path class="st1" d="M694.4,150.9h-7.5v-14.8h-17.8v14.8h-20.2v-30.7l22.8-16.7l22.8,16.7V150.9z M643.8,117.5V156h30.5v-14.8h7.5
			V156h17.8v-38.5l-27.9-20.4L643.8,117.5z"/>
		<path class="st1" d="M708.3,109.8l-14-10.3v-6.6l-10.9-7.2v5.9l-9.1-6.7c-1.6-1.2-3.8-1.2-5.3,0l-35.3,25.8c-2,1.5-2.5,4.3-1,6.3
			c0.9,1.2,2.3,1.9,3.7,1.9c0.9,0,1.9-0.3,2.7-0.9l32.6-23.8l31.3,22.9c2,1.5,4.8,1,6.3-1C710.7,114.1,710.3,111.2,708.3,109.8"/>
		<rect x="671.5" y="120.8" class="st1" width="5.3" height="5.3"/>
		<rect x="671.5" y="127.3" class="st1" width="5.3" height="5.3"/>
		<rect x="678" y="120.8" class="st1" width="5.3" height="5.3"/>
		<rect x="678" y="127.3" class="st1" width="5.3" height="5.3"/>
	</g>
	<text transform="matrix(1 0 0 1 600 41.5)"><tspan x="0" y="0" class="st1 st2 st8"><?= $logements ?></tspan><tspan x="0" y="19.2" class="st1 st4 st6">logements</tspan></text>
</g>
<g id="emploi">
	<rect id="bloc_2_" y="196" class="st11" width="166" height="166"/>
	<g id="picto_3_">
		<path class="st1" d="M85.6,310.9l6.5-5.8l-3.6-8l-8.6,1.3c-0.5-0.7-1.1-1.3-1.6-1.9l2.4-8.4l-7.4-4.8l-6.5,5.7
			c-0.8-0.3-1.6-0.5-2.4-0.7l-2.6-8.3h-8.8l-2.3,8.3c-0.6,0.2-1.2,0.3-1.9,0.5l-6.5-5.8l-7.5,4.6l2.4,8.3c-0.6,0.6-1.2,1.2-1.7,1.9
			l-8.6-1.3l-3.8,8l6.5,5.7c-0.2,0.8-0.3,1.6-0.4,2.5l-7.9,3.6l1.1,8.8l8.6,1.3c0.3,0.8,0.6,1.6,1,2.3l-4.7,7.3l5.7,6.8l7.9-3.6
			c0.7,0.5,1.4,1,2.1,1.4l0,8.7l8.4,2.6l4.7-7.3c0.5,0,1,0,1.6,0c0.3,0,0.6,0,1,0l4.7,7.3l8.5-2.4l0-8.7c0.7-0.4,1.4-0.9,2.1-1.3
			l7.9,3.6l5.8-6.6l-4.7-7.3c0.4-0.7,0.7-1.5,1.1-2.3l8.6-1.3l1.3-8.7l-7.9-3.5C85.9,312.6,85.7,311.7,85.6,310.9z M57.5,339.1
			c-12.8,0-23.1-10.3-23.1-23.1c0-12.8,10.3-23.1,23.1-23.1c12.8,0,23.1,10.4,23.1,23.1C80.6,328.8,70.2,339.1,57.5,339.1z"/>
		<path class="st1" d="M143.9,315.3l1-6.6l-6-2.7c-0.1-0.6-0.1-1.3-0.3-1.9l4.9-4.3l-2.7-6.1l-6.5,1c-0.4-0.5-0.8-1-1.2-1.4l1.8-6.3
			l-5.6-3.6l-4.9,4.3c-0.6-0.2-1.2-0.4-1.8-0.5l-1.9-6.3h-6.7l-1.8,6.3c-0.5,0.1-0.9,0.2-1.4,0.4l-4.9-4.3l-5.7,3.5l1.8,6.3
			c-0.4,0.5-0.9,0.9-1.3,1.4l-6.5-1l-2.9,6l4.9,4.3c-0.1,0.6-0.2,1.2-0.3,1.9l-6,2.7l0.8,6.6l6.5,0.9c0.2,0.6,0.5,1.2,0.8,1.7
			l-3.6,5.5l4.3,5.1l5.9-2.7c0.5,0.4,1,0.7,1.6,1l0,6.6l6.4,2l3.5-5.5c0.4,0,0.8,0,1.2,0c0.2,0,0.5,0,0.7,0l3.6,5.5l6.4-1.8l0-6.5
			c0.5-0.3,1.1-0.7,1.6-1l6,2.7l4.4-5l-3.6-5.5c0.3-0.6,0.6-1.1,0.8-1.7L143.9,315.3z M117.8,325.5c-9.9,0-17.9-8-17.9-17.9
			c0-9.9,8-17.9,17.9-17.9c9.9,0,17.9,8,17.9,17.9C135.7,317.5,127.6,325.5,117.8,325.5z"/>
		<path class="st1" d="M123.7,301.1c-0.5,0-0.6-0.1-0.6-0.1c-0.1-0.1-0.1-0.5-0.1-0.6c0-1.3-1.1-2.4-2.4-2.4h-3.4
			c-1.3,0-2.4,1.1-2.4,2.4c0,0.6,0,0.7-0.8,0.7v0h-2.8v14h15.4v-14L123.7,301.1L123.7,301.1z M116.4,301.1c0.1-0.3,0.1-0.6,0.1-0.7
			c0-0.4,0.3-0.7,0.7-0.7h3.4c0.4,0,0.7,0.3,0.7,0.7c0,0.2,0,0.5,0,0.7H116.4z"/>
		<rect x="127.6" y="301.1" class="st1" width="1.5" height="14"/>
		<rect x="108.5" y="301.1" class="st1" width="1.5" height="14"/>
		<path class="st1" d="M71.4,319.8c-0.8-0.5-1.4-2.8-1.4-2.8s0.5-13.2-12.8-13.2c-13.3,0-13,15.8-13,15.8s-1.7,1.6-1.7,2.1
			c0,0.5,1.1,1.3,4.1,1.3c3,0,8.5-1.3,11.8-1.3c3.3,0,11.9,1.1,12.6,1.2c0.7,0.1,2.7,0.6,2.8-0.7C73.7,321,72.2,320.3,71.4,319.8z
			 M57.6,307.2c-5.1,0-9.5,3-9.5,3s3.4-4.7,9.7-4.7c6.3,0,9.4,5.6,9.4,5.6S62.7,307.2,57.6,307.2z"/>
	</g>
	<text transform="matrix(1 0 0 1 10.5 245)"><tspan x="0" y="0" class="st1 st2 st8"><?= $emplois ?></tspan><tspan x="0" y="19.2" class="st1 st4 st6">emplois</tspan></text>
</g>
<g id="tourisme">
	<rect id="bloc_1_" x="196" y="196" class="st12" width="362" height="166"/>
	<g id="picto_2_">
		<path class="st1" d="M280.8,249.7c0-1.9-0.4-3.9-2.8-4.1c-2.7-0.1-3.1,2-3.2,4.1c-0.1,4.4-0.1,8.9,0,13.3c0.1,2.3-0.7,3.3-3.1,3.3
			c-10.7-0.1-21.4-0.2-32.2-0.2h0v0c-4.3,0-8.6,0-12.9,0v0c-2.6,0.5-4,0-3.8-3.2c0.2-4.3,0-8.6,0.1-12.9c0-2.1-0.2-4.3-2.8-4.5
			c-2.7-0.2-3.2,2-3.2,4.1c-0.1,8.6-0.1,17.2,0,25.7c0,2,0.3,4.4,3,4.4c2.6,0,3.2-2.1,3-4.3c-0.4-3.2,1.1-3.8,4-3.8
			c14.4,0.1,28.8,0.1,43.2,0c3.2,0,5.4,0.2,5,4.3c-0.2,1.8,0.5,3.9,3,3.8c2.3-0.1,2.9-2,2.9-4C280.9,267.1,280.9,258.4,280.8,249.7z
			"/>
		<path class="st1" d="M243.3,265.2L243.3,265.2c8.2,0,16.5,0,24.7,0c1.3,0,2.8,0.6,3.7-1c3.5-6.4-1.6-15.3-9-15.4
			c-6.4-0.1-12.8,0-19.2,0c0,0,0,0,0,0C242.8,254.3,243.1,259.8,243.3,265.2z"/>
		<path class="st1" d="M239.6,265.4L239.6,265.4L239.6,265.4c0.9-0.4,1.6-1,1.9-1.9c0-3.1,0-6.2,0-9.3l0,0c-0.7-1.4-1.8-2.1-3.3-1.5
			c-1.4,0.5-1.6,1.8-1.4,3c0.6,3.7-1.2,4.5-4.4,4.1c-1.2-0.2-2.4,0-3.6,0c-1.6,0-3.1,0.1-3.7,1.9c-0.5,1.7,0.2,3,1.7,3.8
			C231,265.4,235.3,265.4,239.6,265.4z"/>
		<path class="st1" d="M226.5,232.4c3-2.7,5.5-1.3,8.5-0.1c-0.5-3.3,0.2-6,3.1-8.3c-3.9-0.1-5.9-1.9-7.4-5.3c-1.4,3.6-3.9,5-7.7,5.5
			C226.2,226.2,227.5,228.6,226.5,232.4z"/>
		<path class="st1" d="M262.7,233.4c3.1-4.1,5.7-2.2,9.1-1.1c-1.6-3.7-0.3-6,2.7-8.2c-3.8-0.4-6.1-2-7.7-5.4
			c-1.2,3.6-3.3,5.1-7.9,5.2C263,226.2,263.1,229.1,262.7,233.4z"/>
		<path class="st1" d="M244.5,233.2c3-3.3,5.5-2.5,9.3-0.1c-1.8-4.5-0.4-6.8,2.4-9.1c-3.8-0.1-6-1.9-7.9-5.4
			c-0.8,4.2-3.8,4.7-7.1,5.8C245.1,226.3,244.8,229.2,244.5,233.2z"/>
		<path class="st1" d="M230.1,249.5c-3,0.1-4.3,1.9-4.3,5c0.2,2.8,2,4.2,4.8,4.2c3,0,4.5-1.8,4.5-4.6
			C235,251,233.2,249.4,230.1,249.5z"/>
	</g>
	<g id="picto_1_">
		<path class="st1" d="M307.6,327.6c-1.1-0.4-1.9-1.3-2.7-2.7c-3.9-6.7-8-13.3-12.1-19.9c-0.9-1.4-1.1-2.6,0-4
			c1.3-1.7,2.3-3.6,3.5-5.4c0.5-0.8,1-1.5-0.1-2.1c-1.2-0.7-1.5,0.3-1.9,1c-1.2,1.9-2.4,3.7-3.9,6.1c-1.5-2.5-2.7-4.5-3.9-6.5
			c-0.4-0.6-0.7-1.3-1.7-0.8c-1.1,0.6-0.6,1.2-0.2,1.8c1,1.7,1.9,3.4,3,4.9c1.3,1.8,1.3,3.2,0.1,5.1c-3.5,5.7-7.1,11.4-10.2,17.4
			c-2,4-4.5,6.3-9.1,5.3c-0.4-0.1-0.8,0-1.3,0c-0.6,0-1,0.2-1.1,0.9c0,0.7,0.3,1,1,1c0.6,0,1.3,0,1.9,0c12.6,0,25.1,0,37.7,0
			c0.1-0.2,0.2-0.3,0.3-0.5C307,328.8,307.3,328.2,307.6,327.6z M295.7,327.8c-3.4,0-6.8,0-10.2,0c-1.3,0-1.8-0.4-1-1.7
			c1.9-2.9,3.7-5.9,5.7-9.1c2.3,3.3,4.4,6.2,6.4,9.1C297.6,327.5,296.9,327.8,295.7,327.8z"/>
		<path class="st1" d="M353,339.4c-0.6,0-1.3-0.1-1.9-0.1c-0.4,0-0.7,0-1.1,0.1c-0.5,0.1-0.9,0.1-1.3,0.1c-2.6,0-4.3-1.4-5.8-4
			c-5.2-9-10.7-17.8-16.2-26.6c-1.2-1.9-1.5-3.4,0-5.3c1.7-2.3,3.1-4.8,4.6-7.2c0.7-1,1.3-2-0.1-2.8c-0.4-0.2-0.7-0.3-0.9-0.3
			c-0.8,0-1.2,1-1.6,1.6c-1.6,2.5-3.2,5-5.2,8.2c-2-3.4-3.6-6-5.2-8.7c-0.4-0.6-0.7-1.3-1.4-1.3c-0.2,0-0.5,0.1-0.9,0.3
			c-1.5,0.8-0.7,1.6-0.3,2.4c1.3,2.2,2.5,4.5,4,6.5c1.7,2.3,1.7,4.3,0.1,6.8c-3.8,6.2-7.7,12.3-11.1,18.6c-0.3,0.6-0.7,1.3-1,1.9
			c-0.5,0.9-0.9,1.7-1.4,2.6c-2.3,4.4-4.9,7.3-9.4,7.3c-0.8,0-1.7-0.1-2.7-0.3c-0.2,0-0.3,0-0.5,0c-0.4,0-0.8,0.1-1.2,0.1
			c-0.8,0-1.4,0.3-1.4,1.2c-0.1,0.9,0.5,1.3,1.3,1.3c0.9,0,1.7,0.1,2.6,0.1c10,0,20,0,29.9,0c8.8,0,17.6,0,26.4,0c0.7,0,1.4,0,2.1,0
			c0.9,0,1.8-0.2,1.7-1.4C354.8,339.4,353.8,339.5,353,339.4z M330.6,339.4c-1.5,0-3,0-4.5,0c-1.2,0-2.4,0-3.6,0c-1.8,0-3.6,0-5.5,0
			c0,0,0,0,0,0c-1.7,0-2.3-0.6-1.3-2.2c2.5-3.9,4.9-7.8,7.6-12.2c3.1,4.4,5.8,8.3,8.6,12.2C333.2,338.9,332.3,339.4,330.6,339.4z"/>
	</g>
	<text transform="matrix(1 0 0 1 300 255)"><tspan x="0" y="0" class="st1 st2 st8"><?= $chambres ?></tspan><tspan x="-5" y="19.2" class="st1 st4 st6">chambres d’hôtels</tspan></text>
	<text transform="matrix(1 0 0 1 430 320)"><tspan x="0" y="0" class="st1 st2 st8"><?= $campings ?></tspan><tspan x="-65" y="19.2" class="st1 st4 st6">emplacements de camping</tspan></text>
</g>
<g id="agriculture">
	<rect id="bloc" x="588" y="196" class="st13" width="166" height="166"/>
	<g id="picto">
		<path class="st1" d="M694.3,314.1c-10.5,0-18.9,8.5-18.9,18.9c0,10.5,8.5,18.9,18.9,18.9c10.5,0,18.9-8.5,18.9-18.9
			C713.2,322.6,704.7,314.1,694.3,314.1z M694.3,343c-5.5,0-9.9-4.5-9.9-9.9s4.5-9.9,9.9-9.9c5.5,0,9.9,4.5,9.9,9.9
			S699.8,343,694.3,343z"/>
		<path class="st1" d="M639.4,330.8c-5.8,0-10.6,4.7-10.6,10.6c0,5.8,4.7,10.6,10.6,10.6c5.8,0,10.6-4.7,10.6-10.6
			C650,335.5,645.2,330.8,639.4,330.8z M639.4,346.7c-3,0-5.4-2.4-5.4-5.4c0-3,2.4-5.4,5.4-5.4c3,0,5.4,2.4,5.4,5.4
			C644.7,344.3,642.3,346.7,639.4,346.7z"/>
		<path class="st1" d="M694.3,308.8c-1.5,0-3,0.1-4.5,0.4c-0.5-8.3-2.9-10.1-3.6-12.6c-0.3-0.9,0.5-2.6,0.5-4.3
			c0-0.3-0.1-4.3-3.5-4.3c-3.3,0-4.1,2.5-4.1,2.5v5.4c0,0.5,0.4,0.8,0.9,0.8h1.2l-3.6,7.3l-5.6,4.4l-1.6-1.9l-20.4,4.7V288h-2.3
			v23.8l-0.2,0l-18.6,1v12.7l2.5,6.2c2.2-1.8,5-2.9,8-2.9c4.4,0,8.2,2.3,10.5,5.7h23.6c0-0.5-0.1-0.9-0.1-1.4
			c0-11.5,9.4-20.9,20.9-20.9c4.4,0,8.4,1.4,11.8,3.7l1.9-2.8C704.1,310.4,699.4,308.8,694.3,308.8z"/>
	</g>
	<text transform="matrix(1 0 0 1 600 245)"><tspan x="0" y="0" class="st1 st2 st8"><?= $agricoles ?></tspan><tspan x="-5" y="19.2" class="st1 st4 st6">exploitations agricoles</tspan></text>
</g>
</svg>
