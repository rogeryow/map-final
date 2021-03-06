<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>support/css/map/map.css">
<script type="module" src="<?php echo base_url() ?>support/js/map/map.js"></script>

<section class="content">
	<div class="container-fluid">
		<div class="row">
			<section class="col-lg-12">
				<div class="card">
					<div class="card-header ui-sortable-handle">
						<h3 class="card-title">
							<i class="fas fa-map mr-1"></i>
							Map
						</h3>
					</div>

					<div class="card-body">
						<div class="tab-content p-0">
							<div class="chart tab-pane active" id="digos-map">
								<div>
									<!-- todo start -->
									<div id="map-root">
										<div id="map-content">
										<div class="stat-box">
										<label id="barangay-text">Name</label>
										<table>
										<tr>
										<td>Red</td>
										<td><span id="red-text">0</span></td>
										</tr>
										<tr>
										<td>Yellow</td>
										<td><span id="yellow-text">0</span></td>
										</tr>
										<tr>
										<td>Green</td>
										<td><span id="green-text">0</span></td>
										</tr>
										<tr>
										<td>Blue</td>
										<td><span id="blue-text">0</span></td>
										</tr>  
										</table>
										</div>

										<div class="filter-box">
											<table>
											<tr>
											<td><label for="none">None</label></td> 
											<td><input name="color-filer" class="filter-color" type="radio" id="none" checked=""></td>
											</tr>
											<tr>
											<td><label for="red">Red</label></td> 
											<td><input name="color-filer" color="red" class="filter-color" type="radio" id="red"></td>
											</tr>
											<tr>
											<td><label for="yellow">Yellow</label></td> 
											<td><input name="color-filer" color="yellow" class="filter-color" type="radio" id="yellow"></td>
											</tr>
											<tr>
											<td><label for="green">Green</label></td> 
											<td><input name="color-filer" color="green" class="filter-color" type="radio" id="green"></td>
											</tr>
											<tr>
											<td><label for="blue">Blue</label></td> 
											<td><input name="color-filer" color="blue" class="filter-color" type="radio" id="blue"></td>
											</tr>
											</table>

											<div class="filter-position-box"> 
											<table>
											<tr>
											<td><label for="total">Total</label></td> 
											<td><input name="position-filter" position="total" class="filter-position" type="radio" id="Total" checked></td>
											</tr>
											<tr>
											<td><label for="red">Members</label></td> 
											<td><input name="position-filter" position="members" class="filter-position" type="radio" id="Members"></td>
											</tr>
											<tr>
											<td><label for="nonMembers">Non-members</label></td> 
											<td><input name="position-filter" position="nonMembers" class="filter-position" type="radio" id="nonMembers"></td>
											</tr>
											</table>
											</div>

										</div>

									<div id="map">
										<svg id="map-davao" root-data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 454 792">
										<path data-name="kapatagan" class="cls-1" d="M6.45,8.21l137.62.38,28.25,21.34,13.46,6.35,9.8,11.15L209.8,50.5,216.53,59l7.88,6.73,6,.39,2.5,6-.39,10.57,1.16,2.31,10,3.65,8.65,1,4-4,7.88,1,6,4.42,6.92-3.66,6.54-7.69L285.34,83l8.65,2.7,7.49-1.16,3.65-.38,4-2.89,4-1.34L317.05,78l3.84-3.08,4.81-1.35,4.8,1.35,6.92-.19,3.85.57,4.42,1.16,6-3.27,2.11.77,1,4-.38,5.76-3.46,6L348,98.57s-12.49,3.65-10.57,10.76-5.19,13.27-5.19,13.27l-3.84,11.92L339,148.94l3.46,1,6.15,6h7.11L370.87,162,382,167.2l.58,3.66L373.17,182l-4.8,8.26-9,6.73-6.72,6.16-4.42,7.69-.39,7.88.77,11.34-1.92,4-6.15,3.65-.39,8.46,6.54,6.15,4.8,1.35-1.92,8.65-3.46,6.92-90.91,33.26L113.32,189.31l-45.55-37.1L63,135.87l-6.53-7.5-2.31-17.31V102.8l2.5-5-2.31-5.38-5.38.76-3.07-1.73-1-4.8-.38-25L35.67,40.7,37.21,29l-7.69-4.81L14.91,22.82l-6.73-9L6.45,12.44Z"/>
										<path data-name="dulangan" class="cls-1" d="M222.43,275.6l-41-33.07.51,227.38,16.28,18.58,1,2.57L195,506.18l3.2,3.2-8.71,4.75-2.82,5.38,7.3,8.72.13,6.28-8.72.77-5.25,6.66.26.77,2.69.26h12.68l8.72,2.56,6.53,7.18-.12,3.46,4.61,5.89,4.61-3.33,2.95,2.56,3-1.28,3.71-5.77L231,532.07l1.66-2.05-2.82-2.31L226,526.3l7.69-13.07,2.3-.77,2.57-.38,4.1,2.18,2.69,4.1.38.89-5.12,4.49,1.66,1.15,2.18.9,2.05.9,1.28.25,6.67-1.41Z"/>
										<path data-name="soong" class="cls-1" d="M348,456.71l-5.19,1.73-20.75-.2-8.27,4.62,2.12,4.61-1.73,51.14-2.5,2.5-1,3.27-6-.38-3.08,1.92,11.92,10.77,34.4-1.16,14-12.3-6.15-10L354.76,495l.77-9.81-2.12-9,.58-5.38Z"/>
										<path data-name="balabag" class="cls-1" d="M69,151.4l45.17,36.53L93,458.05l2.89,7.69v6.15l4,4.43,3.65,7.88,2.7-1,2.49,3.07,16,2.12,4,20.38,3.65,1.54-.76,3.46-16.15,8.84-.77,1.54,2.89,3.65L114.13,534l-4.81,1.16h-1.73l-1,1.73L99.13,534l-3.26-3.84-3.66-4L85.1,518l-4.23-3.66-5-1.73-3.08,5.19-1.34-2.5L69,511.88,70.88,503l-5-20,.2-25.77-6-9.61,1.15-8.27L48.59,412.1l-6.54-4.42-2.31-19.8,4.81-14.23-1.73-10.38,1.54-14.81-5-25.18v-6.54L42.63,296l10.18-15,5.58-13.46,3.26-11.92v-6l20.57-30.37,1.35-9.62,1.34-9.8Z"/>
										<path data-name="goma" class="cls-1" d="M114.3,188,92.75,458.32l3.57,7.83-.18,6.06L99.52,476l4.1,8.36,2.49-1.06,2.67,3.38,16,1.6,3.91,20.83,3.92,1.61-1.07,3.56,1.78.89,1.25,4.27,4.45-.18,2.14.72,2.49-3.21,2.67-1.07L151,527.23l1.78,1.42,2-1.07,4.81,7.12,3.56,8.37,9.44,7.84,1.78-.18,1.6-1.78,1.25-7.66,3.2,1.07,4.81-7.12,8.9-1.07.18-6-7.83-8.73,2.67-5.34,8.72-4.27-2.67-3.21,4.1-15.13-2.68-5.17-14.77-16.38-.18-226.49Z"/>
										<path data-name="binaton" class="cls-1" d="M222.3,274.66l33.25,26.81,92.05-33.55-4.55,11.6-.79,9.1.47,14.42-1.25,11.29L339.13,327l-3.92,13.49,1.57,9.88,1.09,4.86-2,6-4.23,7-4.39,6.27-4.7,4.08-.32,5.18.47,2,3,5.34.16,1.25-2.35,13.33L325,417.2l3.61,5.8,2,9.72,15.68,15.52.63,5,1.1,3.29-4.71,2-20.85-.47L314,463.61l2.19,3.92-2,50.8-2.35,2.51-1.25,3.61-5.8-.78-7.06,4.54-5.72.53,2.82,4.83v1.82l-11.49-1.21-1,.2,1.41,4L279.52,542l-8.87,3.42L267.43,543l-.81-5-1-2,.8-3.63-1.61-3-2.22-2.21-4.43-1.42-3.62-.4Z"/>
										<path data-name="ruparan" class="cls-1" d="M300.94,526.11l12.11,10.19L291.72,579l-6.92-2.11v4.61l-4.42,1.35v2.5l-7.69,4,.58,2.89-1.92,4,1.73,11.92-.2,6.72-1.73,1.54-4.23.58H260.2L255,619.93l-5.19,2.31L245,611.47l.2-2.11v-6.54l6.34-4.61-3.27-6.54-5.19,3.46-2.5-4.61-4,2.88-7.5-9.61-.38-4.62,8.45-9.8L235,566.68,230.79,570l-1.54-4.81L226,560l3.84-5.77-.38-8.65,1-7.69.57-6,1.35-2.69-3.46-2.12-3.27-.77,7.69-12.49,1.35-1.16,3.07-.38,2.69.38,4,5,1.34,1.35-5,5,3.07,2.11,3.65,1.15,6.92-1.73,3.85.39,5,1.34,3.08,4.62-.77,4.61,1.34,2.5.39,3.85,1.92,2.3,5-1,5.76-2.5,3.85-3.65-1-3.65,11.53,1.15.58-2.11-2.5-2.12-.39-2.69h5Z"/>
										<path data-name="kiagot" class="cls-1" d="M313.55,536.56l35-.77,13.71-12.56.9,2,.13,8.33,6.28,9.1-.13,4.1,1.41,5.38L369,557.58,372,560l1.28,3.46a21.27,21.27,0,0,1,.65,6.67c-.26,3.59-.9,9.61-.39,11.28s8.84,9.74,8.84,9.74l1.28.38.26,2.05,9.23,10.64-2.57,7.44-5.76-5L379.16,619l-8.33.77.51,26.4-6.15,5.39L363.91,650l-6.28-.64-9-4.87-11.28.64-7.94-1-5-.77-10.51.13-3.72-7.3-3.46-5.26.9-4,5.13-7.56.38-5.9,3.33-6,3.21-6.92-1-5.9,1.28-5.9-.89-20.5,2.05-5.26Z"/>
										<path data-name="sinawilan" class="cls-1" d="M369.08,544.91l8.74,17.62,9,7.05,8.17-.71,5.22,5.08,2.82,5.64,5.22,6.91,3.38,1.27,2.12,1.83,13.67,3.8.29,3.25-1.84,4-2.11,7,1.41,7.9.42,9.73-6.91,6.91,14.81,9.44-10.58,9.31-24.39-7.76,7.33-18.33-13.53-5.92,4.51-9-3-3.95-1.27-.28.7-1.55-9.16-9.73-.71-2.68-1.55-1-8.46-8.46.14-11.28-.42-6.49-1.55-4.65-2.54-2.54,1.41-5.07Z"/>
										<path data-name="tres de mayo" class="cls-1" d="M313.25,536.3,321,563.23l-1.83,5.22L320,589l-1.55,5.78,1.41,6.49-6.62,12-.71,5.93L308,626.54l-1.41,4.65,7.47,12.12-.42,44-34.85-1.81,1.92-22.94-7.69-.38-.64,1.41-22.3-3.72-.77-11-7.3-1.29.51-21,7-4.61,10.51-5.13h10.38l2.05-1.15.89-3.46-1.15-9.49-.51-7.56,1.66-3.07-.64-2.7,7.95-3.84-.13-3.21,4.23-1.28.51-2-.64-2.05L292,579Z"/>
										<path data-name="san agustin" class="cls-1" d="M180.76,543.13l15.38-.2,8.46,2.7,6.63,6.72-.09,3.66,4.71,6.25,4.61-3.56,3.08,3.07,2.78-1.44,2.26,3,1.41,6.28,1.15.51,3.85-3.46,1.92,2.69-.77,1.79-6.41,7.44-1.28,1,.39,3.59,8.2,10.51,3.33-3.59,2.95,5.26,5.13-4.23,3.2,7.56-5.9,3.72-1,1.41.25,2.3.52,2.57-.64,2.43L250,622.3l-7.56,4.23L242,650.89l-21.4,1-5.39-2.82.77-1.41.9-1.79-2.44-5.51,2.31-9.36.64-6-1.28-5.26-2.69-2.18-1.67-6-2.69-.9-2.3-2-.9-2.05-.26-11.92-1.41-1.8-3.46-2.05h-1.41l-1.92-4.87-6.41.26-.77-2.95-.38-4.48L187.7,566l-1.41-2.18-.51-2.69-3.59-4.87-.51-1.93-1.92-7.17,1.66-.77.39-1.16Z"/>
										<path data-name="mahayahay" class="cls-1" d="M114.65,523.1l16.54-9.1,2.69,2.82,1,2.69,4.23.26h2.31l2.05-2.95,2.69-1.15,4.87,12,2.56.64.77-.64,3.85,4.23,2.94,6.28,1.41,4.23,5.51,4.87,4.87,3.34,1.93-.13L176,549l.26-3.33,1-4.49,2.31.9,2.05,3.33-.26.9-1.79,1.15,1.66,3.46.52,4.49,4.1,5.89L173,568.09v1.66l9.36,12.31-2.95,5.51-2.05-.64-3.07-9.1-6.67-8.2-.13-6L160,569.75v-3.33l-8.2-7.56.51-5.77-3.07.13-4-2.05-2.18-2.44,1.16-2.94-.39-2.06-2.43-.76-2.69-.77L137.34,541l-.77-1.53h-2.44l-3.71-1.41-5,1.28-3.84-3.08-9,3-6.53-2.69,1.92-1.67,3-.13,3.07-1,1.93-3.34,1.79-2.43-.77-1.41-1.66-1.15Z"/>
										<path data-name="lungag" class="cls-1" d="M75.83,512.72,81,514.26l5.51,6.15,4.36,4.1,3.72,4.23,3.07,4.36,8.46,3.46,6.53,2.56,8.59-3,4.23,3.21,4.87-1,3,.9,2,.51,1.15-.51,1.92,2.82,2.31.64,2.82,1,.9,1.93-.52,2.05L143.1,549l-.89-.38-2.69,2.82-3.46,2.69L127,559l-7.56,5.12-8,7.18-5.12,5.51L87.62,593.85l1.79,12.82-5.64-.52-3-1.92-4.35-11-1-3.46-8.71-9.1.38-10.51L68,569l1.28-1.41.77-2.94L68,560l-3-3-3.33-1.79-.9-1.67-.38-2.17,7.94-11.54,3.85-10L71.47,523l1.28-2.56.77-3.59.77-2.31Z"/>
										<path data-name="san roque" class="cls-1" d="M87.62,594.36l31.78-30,5.51-4.49,7.69-4.1,3.84-2.18,6.15-5.38,4.87,4.36,2.69.25,2.31.26-.77,3.21v2.43l8.33,7.69v5.26l2.18,4.74-13.58,1.66,9.86,12.69L150.67,600l6,10.38.77,6.28,5.76,4.49-2.81,3-18.33,14.1-4.23,6.66-3.46-4.36L122,650.63l-5.64-8.07H112.6l-.89-1.54L110,630.38l-1.54-3-8.58-6.66-3.21-9.36L95.18,609l-3.46-2.17-2.31-.26Z"/>
										<path data-name="matti" class="cls-1" d="M148.62,577.57l13.32-1-2.3-7,7.69-6.41-.13,6,7.17,9.49,3.08,8.2,2.05.64,2.69-5.51-9.35-12.43.25-1.67,12.56-6.66,2.18,4.48,2.56,16-.13,1.8.77,2.31,6-.26,1.41,2.43,1,2.7,1.67.38,3.2,1.79,1.15,1.41.39,12.69,1,1.93,2.44,1.79,2.43.64,1.67,7.18,2.69,1.67,1.28,4.23-1,8.2-1.93,7.56,1.41,4.1,1.41,1.8-2.3,3.2,5.76,3.08,3.08,2.3.9,5,2.43,5.9,1.8-.13-.64,2.44-15,6.15-.9,3.2-7.68,1.16-.65,22.81,1.16.26L204.1,711.9l-.25,2.56-1.41.9-1.92,1.15-32-.26-.26-1.28-2.82-4.36,1.41-5.76,7.18-.39,1.92.13,1.41-1.41,1.41-.13,1.54-.25,2.56-.77,1.92-.13-.25-37.81,3.84-.51-1.92-13.46.38-6.41-.25-3.08-3.21-2.82L181.29,641l-3.07,2.18-2.31.64-.51-6.16-8.33-7.43-2.18.39-4.48-6.8L163,621l-5.64-4.23-.64-6.41-5.9-10.63,7.69-9Z"/>
										<path data-name="zone 1" class="cls-1" d="M313.8,643.32h11.28l5.77,1,5.76.64,9.61-.51,3.34-.26,3.46,2.44,4.87,2.69,6.28.64,3.58,4.49-.12,11.79-.52,18.33-.64,1.41-24.86-18.08-1.28-.64-.51,3.59-2.57-3.59-23.7-3.2Z"/>
										<path data-name="zone 2" class="cls-1" d="M313.67,664.09l23.71,2.82,2.31,3.84.51-3.2,1.15-.26,25.12,18.84-1.92,2.44-50.88-1.15Z"/>
										<path data-name="zone 3" class="cls-1" d="M313.63,687.22l51.51,1.35L364,722l-33.25-1.73-.2-13.84-16.91-1.15Z"/>
										<path data-name="cogon" class="cls-1" d="M370.83,619.87l8.2-.51,6-12.69,5.51,5.12,2.44-6.28,3.72,4.36-4.36,8.85L405.81,625l-7.43,18.58,24.48,7.82,10.76-9.74,1.67,9.87,4,6.66,6.28,9.36-3,6.54-8.84,2.43L430,681.14l-1.54,8.33-1.92,9.35,1.66,6.67,1.15,5.38.13,5.13-2.18.13-2.82-.13-2.56.9-2.43.38-4.1-2-3.34-3.46-1.15-3.21L409,702.67l-2.56-5.9-5.13-4.61-5-2.44-4-1.79L389.54,686l-6.28-6-1.67-.9-3.58-.25-3.21-1.67-4-2-3.2-1.67.12-18.45-2.3-3.85,5.89-4.87Z"/>
										<path data-name="aplaya" class="cls-1" d="M378.26,679.08h4l6.79,6.54,4.61,3,5.13,2.31,4,2.56,3.59,3.08,2.18,5.12,1.79,5,.77,3.46,2.31,2.95,3.2,3.08,3.2.89,2.82-.51,2.69-.51,2.18.13.9.25-1,3.34-4.22,4.22L418.76,727l-2.44,1.15-2.69,4.23-3.71,3.72-2.18,1.41-17.43-2.69-6.15-6.41-1.8-5-18.07-1.28,1-33.32,1.15-2.57,1.28-12.94Z"/>
										<path data-name="cogon" class="cls-1" d="M278.69,685.49l35.24,1.67L313.67,705l17.18,1.53-.13,14-6.41.26L323,752.53"/>
										<path data-name="san miguel" class="cls-1" d="M274.46,744.84l1.41-27.3,2.69-.77.26-31.28,35,1.8-.25,17.56L331,706.51l-.51,13.85-6,.64-1.28,31.4-9.74,1L311,760.6v6.28l-16.66-.25-1.53-3.34-2.18-3.71-7.69-2.18-1.28-1.28-.77-1-.39-2.18-1.41-2.18-2.3-3.71Z"/>
										<path data-name="san jose" class="cls-1" d="M324.31,721l35.11.51L357.25,747l-4.36,7.43-.39,12.69-41.65-.26v-6.53l2.7-6.67,9.61-1.15Z"/>
										<path data-name="dawis" class="cls-1" d="M359.42,721.77l22.94,1.28,1.54,5.64,6.15,5.76,17.69,3.08-5.51,6.67-4.62,5L394.92,753l-1.41,1.54-2.05,4.61-.51,3.08,1.41,5.51-40-.51.76-13.46,4.23-7Z"/>
										<path data-name="tiguman" class="cls-1" d="M220.89,652l21-1.41-.13-3.2,7.69,1.92.64,10.51,22.3,4.23.38-2.05,7.82.38-2.05,54.48-2.82.76-1.54-4.87-5.38.39.26,3.46-18.84-.77.9-5.26.25-5-1-3.59-1-3.59-.38-2.18-27-.9-2.31,7.69-10.25-2.69-4.74,1.28-.26-4.48.51-19.23,6.15-.64,1.54-.77.77-2.69L227,668.19l1.67-2.44-1.67-.51-1.92-4.74-.9-4.36-.76-2Z"/>
										<path data-name="colorado" class="cls-1" d="M122,650.89l12.43-10.51,3.2,4.48,1.16-1.28,1.79-3.08,1.41-2.3L160.28,624l4.35,6.79,2.82-.64,8,7.69.26,6.16,1.92-.26,1.92-.64,1-.9,1.16-1.28,1.15-2,.39-1.16,3.71,3.47-.38,6.53-.13,3,1,6.15.77,6.41-3.71.9v38.19l-1.16-.51-6.28,1.67-1.15,1-9.1.26-1.41,5.77,3.46,5.89-2.43-.13-11.66,9.49-7.18-16,.26-6.41-.9-4.62-5.9-9.22-2.82-6.41-3.07-14.87-1.41-5.13Z"/>
										<path data-name="igpit" class="cls-2" d="M154.64,725.87,166.81,716l34.6.25,2.05-1.92,1.29-12.82,4.48-1,10.25,3,2.31-8.08,27,.9.38,2.82,1.54,4.49.51,2.56-.12,3.08-.52,2.94-.25,3.59,18.71,1.16-.26-3.85,5.26-.13,1.79,4.87-1.41,26.92,3.2,3.33,2,4.1,1.16,2.18.13,1.28,1,.9,4.36,2,4.74,1.54,1.41,1.92,1,2,.39,1.67.38.9-131.61.64-1.92-5.9v-3.59l.64-5.38.38-4.49-.64-5.25-.51-3.85-.64-1.92-2.56-2.95-1.67-2.56v-2.31Z"/>

										<!-- text start -->
										<text data-name ="kapatagan" x="170" y="160" font-size="20">Kapatagan</text>
										<text data-name="dulangan" x="175" y="450" font-size="20">Dulangan</text>
										<text data-name="binaton" x="248" y="390" font-size="20">Binaton</text>
										<text data-name="balabag" x="47" y="330" font-size="20">Goma</text>
										<text data-name="goma" x="106" y="390" font-size="20">Balabag</text>
										<!-- text end -->
										</svg>
									</div>
									</div>

									<div id="map-sidebar">
										<div class="card map-card">
											<div class="card-header">
												<h3 class="card-title">Purok List</h3>
											</div>
											<div class="card-body">
												<div class="container-fluid">
												<div class="map-purok">
												<div class="row row-line">
													<div class="col-sm-12 no-pad"><span class="purok-title">1 - Kapatagan</span></div>
													<div class="col-sm-12 col-md-4">
														<table class="table-map">
															<thead>
																<tr>
																	<th colspan="3">Overall</th>
																</tr>
															</thead>
															<tbody>
																<tr>
																	<td><span class="badge bg-danger map-badge">55%</span></td>
																	<td><span>Red</span></td>
																	<td><span>300</span></td>
																</tr>
																<tr>
																	<td><span class="badge bg-warning map-badge">25%</span></td>
																	<td><span>Yellow</span></td>
																	<td><span>500</span></td>
																</tr>
																<tr>
																	<td><span class="badge bg-success map-badge">15%</span></td>
																	<td><span>Green</span></td>
																	<td><span>400</span></td>
																</tr>
																<tr>
																	<td><span class="badge bg-primary map-badge">45%</span></td>
																	<td><span>Blue</span></td>
																	<td><span>250</span></td>
																</tr>
															</tbody>
														</table>
													</div>
													<div class="col-sm-12 col-md-4">
														<table class="table-map">
															<thead>
																<tr>
																	<th colspan="3">Members</th>
																</tr>
															</thead>
															<tbody>
																<tr>
																	<td><span class="badge bg-danger map-badge">55%</span></td>
																	<td><span>Red</span></td>
																	<td><span>300</span></td>
																</tr>
																<tr>
																	<td><span class="badge bg-warning map-badge">25%</span></td>
																	<td><span>Yellow</span></td>
																	<td><span>500</span></td>
																</tr>
																<tr>
																	<td><span class="badge bg-success map-badge">15%</span></td>
																	<td><span>Green</span></td>
																	<td><span>400</span></td>
																</tr>
																<tr>
																	<td><span class="badge bg-primary map-badge">45%</span></td>
																	<td><span>Blue</span></td>
																	<td><span>250</span></td>
																</tr>
															</tbody>
														</table>
													</div>
													<div class="col-sm-12 col-md-4">
														<table class="table-map">
															<thead>
																<tr>
																	<th colspan="3">Non-members</th>
																</tr>
															</thead>
															<tbody>
																<tr>
																	<td><span class="badge bg-danger map-badge">55%</span></td>
																	<td><span>Red</span></td>
																	<td><span>300</span></td>
																</tr>
																<tr>
																	<td><span class="badge bg-warning map-badge">25%</span></td>
																	<td><span>Yellow</span></td>
																	<td><span>500</span></td>
																</tr>
																<tr>
																	<td><span class="badge bg-success map-badge">15%</span></td>
																	<td><span>Green</span></td>
																	<td><span>400</span></td>
																</tr>
																<tr>
																	<td><span class="badge bg-primary map-badge">45%</span></td>
																	<td><span>Blue</span></td>
																	<td><span>250</span></td>
																</tr>
															</tbody>
														</table>
													</div>
												</div>
												</div>

												<div class="map-purok">
												<div class="row row-line">
													<div class="col-sm-12 no-pad"><span class="purok-title">2 - Davao</span></div>
													<div class="col-sm-12 col-md-4">
														<table class="table-map">
															<thead>
																<tr>
																	<th colspan="3">Overall</th>
																</tr>
															</thead>
															<tbody>
																<tr>
																	<td colspan="3">
																		<div class="progress-group">
																			<b>10,000</b>
																			<span class="float-right">80%</span>
																			<div class="progress progress-sm">
																				<div class="progress-bar bg-danger" style="width: 80%"></div>
																			</div>
																		</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div class="progress-group">
																			<b>3,000</b>
																			<span class="float-right">45%</span>
																			<div class="progress progress-sm">
																				<div class="progress-bar bg-warning" style="width: 45%"></div>
																			</div>
																		</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div class="progress-group">
																			<b>5,000</b>
																			<span class="float-right">25%</span>
																			<div class="progress progress-sm">
																				<div class="progress-bar bg-success" style="width: 25%"></div>
																			</div>
																		</div>
																	</td>

																</tr>
																<tr>
																	<td>
																		<div class="progress-group">
																			<b>15,000</b>
																			<span class="float-right">95%</span>
																			<div class="progress progress-sm">
																				<div class="progress-bar bg-primary" style="width: 90%"></div>
																			</div>
																		</div>
																	</td>

																</tr>
															</tbody>
														</table>
													</div>
													<div class="col-sm-12 col-md-4">
														<table class="table-map">
															<thead>
																<tr>
																	<th colspan="3">Members</th>
																</tr>
															</thead>
															<tbody>
																<tr>
																	<td colspan="3">
																		<div class="progress-group">
																			<b>10,000</b>
																			<span class="float-right">80%</span>
																			<div class="progress progress-sm">
																				<div class="progress-bar bg-danger" style="width: 80%"></div>
																			</div>
																		</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div class="progress-group">
																			<b>3,000</b>
																			<span class="float-right">45%</span>
																			<div class="progress progress-sm">
																				<div class="progress-bar bg-warning" style="width: 45%"></div>
																			</div>
																		</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div class="progress-group">
																			<b>5,000</b>
																			<span class="float-right">25%</span>
																			<div class="progress progress-sm">
																				<div class="progress-bar bg-success" style="width: 25%"></div>
																			</div>
																		</div>
																	</td>

																</tr>
																<tr>
																	<td>
																		<div class="progress-group">
																			<b>15,000</b>
																			<span class="float-right">95%</span>
																			<div class="progress progress-sm">
																				<div class="progress-bar bg-primary" style="width: 70%"></div>
																			</div>
																		</div>
																	</td>

																</tr>
															</tbody>
														</table>
													</div>
													<div class="col-sm-12 col-md-4">
														<table class="table-map">
															<thead>
																<tr>
																	<th colspan="3">Non-members</th>
																</tr>
															</thead>
															<tbody>
																<tr>
																	<td colspan="3">
																		<div class="progress-group">
																			<b>10,000</b>
																			<span class="float-right">80%</span>
																			<div class="progress progress-sm">
																				<div class="progress-bar bg-danger" style="width: 80%"></div>
																			</div>
																		</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div class="progress-group">
																			<b>3,000</b>
																			<span class="float-right">45%</span>
																			<div class="progress progress-sm">
																				<div class="progress-bar bg-warning" style="width: 45%"></div>
																			</div>
																		</div>
																	</td>
																</tr>
																<tr>
																	<td>
																		<div class="progress-group">
																			<b>5,000</b>
																			<span class="float-right">25%</span>
																			<div class="progress progress-sm">
																				<div class="progress-bar bg-success" style="width: 25%"></div>
																			</div>
																		</div>
																	</td>

																</tr>
																<tr>
																	<td>
																		<div class="progress-group">
																			<b>15,000</b>
																			<span class="float-right">95%</span>
																			<div class="progress progress-sm">
																				<div class="progress-bar bg-primary" style="width: 30%"></div>
																			</div>
																		</div>
																	</td>

																</tr>
															</tbody>
														</table>
													</div>
												</div>
												</div>

											</div>										
										</div>

										<ul id="purok-list">
											<li>
											sample
											</li>
										</ul>
									</div>

									</div>
									<!-- todo end -->
								</div>                       
							</div>  
						</div>
					</div>

				</div>
			</section>
		</div>
	</div>
</section>