
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>

	<!-- head_common start -->
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<style>.async-hide { opacity: 0 !important} </style>

	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" type="text/css" href="./new_css.css">
	<script src="./jquery.min.js"></script>
	
	<link rel="stylesheet" type="text/css" href="./cube.css">

  	<meta name="description" content="Find the best private office or workstations for your business in China, with business address registartion, for free! Within 1-2 days!">
	<title>Tansuo 探所 | Get Started</title>
	<!-- head_common start -->

</head>
<body>




<form name="contact_form">
	<div id="contact">
		
		<div id="contactForm" class="white-color welcome-page">
			<div class="parallax"></div>
			<div class="content gray-filter">
				<div id="wrapper">
					<div id="cube">
						<div id="face_0" class="face face_0">

							<div class="request_question">I'm looking for:</div>
							<select id="product" name="product" class="request_select">
								<option value="0" selected="selected">Coworking space</option>
								<option value="1">Company address only</option>
								<option value="2">Other</option>
							</select>

							<div class="request_question">City:</div>
							<select id="city" name="city" class="request_select">
								<option value="1" selected="selected">Beijing</option>
								<option value="3">Shanghai</option>
								<option value="191">Shenzhen</option>
								<option value="189">Guangzhou</option>
								<option value="-" disabled="disabled">-------</option>
								<option value="664">Hong Kong</option>
								<option value="665">Macau</option>
								<option value="-" disabled="disabled">-------</option>
								<option value="176">Changsha</option>
								<option value="228">Chengdu</option>
								<option value="4">Chongqing</option>
								<option value="37">Dalian</option>
								<option value="205">Dongguan</option>
								<option value="83">Hangzhou</option>
								<option value="94">Hefei</option>
								<option value="130">Jinan</option>
								<option value="70">Nanjing</option>
								<option value="84">Ningbo</option>
								<option value="36">Shenyang</option>
								<option value="74">Suzhou</option>
								<option value="2">Tianjin</option>
								<option value="131">Qingdao</option>
								<option value="164">Wuhan</option>
								<option value="71">Wuxi</option>
								<option value="111">Xiamen</option>
								<option value="266">Xi'an</option>
								<option value="666">Xiong'an</option>
								<option value="147">Zhengzhou</option>

							</select>
							
							<div class="request_question">WeChat ID:</div>
							<input type="text" name="wechat" id="wechat" required="" class="request_text" autocomplete="off">

							<div class="request_question">Industry:</div>
							<input type="text" name="industry" id="industry" required="" class="request_text" autocomplete="off">
							<button class="button_forward" id="face_0_forward" onclick="face_0_done(); return false;">></button>
						</div>
						

						<div id="face_1_0" class="hidden face face_1">
							<div class="request_question">Move-in date</div>

							<fieldset>
								<table>
								<tr>
									<td><input type="radio" name="movein" id="movein_asap" value="0" class="request_radio" onclick="toggle_movein_start()" /></td>
									<td><label for="movein_asap">As soon as possible</label></td>
								</tr>
								<tr>
									<td><input type="radio" name="movein" id="movein_next_month" value="1" class="request_radio" onclick="toggle_movein_start()" /></td>
									<td><label for="movein_next_month">Start of next month</label></td>
								</tr>
								<tr>
									<td><input type="radio" name="movein" id="movein_other" value="2" class="request_radio" onclick="toggle_movein_start()" /></td>
									<td><label for="movein_other">Other</label></td>
								</tr>
								</table>
								<div id="movein_start_div" class="hidden">
									<input type="date" name="movein_start" id="movein_start" class="request_date"/>
								</div>
							</fieldset>


							<div class="request_question">Which desk formats are suitable?</div>
							<fieldset>
								<table>
									<tr>
									<td><input type="checkbox" name="private_office" id="private_office" value="private_office" class="request_checkbox"></td>
									<td><label for="private_office">Private office</label></td>
									</tr>
									<tr>
									<td><input type="checkbox" name="fixed_desk_office" id="fixed_desk_office" value="fixed_desk_office" class="request_checkbox"></td>
									<td><label for="fixed_desk_office">Fixed desks (in a shared office)</label></td>
									</tr>
									<tr>
									<td><input type="checkbox" name="fixed_desk_open" id="fixed_desk_open" value="fixed_desk_open" class="request_checkbox"></td>
									<td><label for="fixed_desk_open">Fixed desks (in an open area)</label></td>
									</tr>
									<tr>
									<td><input type="checkbox" name="hot_desk" id="hot_desk" value="hot_desk" class="request_checkbox"></td>
									<td><label for="hot_desk">Hot desks</label></td>
									</tr>
								</table>
							</fieldset>


							<button class="button_backward" onclick="backward(); return false;"><</button>
							<button class="button_forward" onclick="face_1_0_done(); return false;">></button>
						</div>

						<div id="face_2_0" class="hidden face face_2">
							<div class="request_question">How many desks?</div>
							<input type="number" name="number1" id="number1" min="0" step="1" class="request_number" autocomplete="off" onkeyup="update_price();" onmouseup="update_price();"/>
							<div class="request_span">to</div>
							<input type="number" name="number2" id="number2" min="0" step="1" class="request_number" autocomplete="off" onkeyup="update_price();" onmouseup="update_price();"/>

							<div class="request_question">What's your maximum cost per desk each month?</div>
							<table class="request_note_table">
								<tr>
									<td>< 1000 RMB</td>
									<td>Economy</td>
								</tr>
								<tr>
									<td>1000-2000 RMB</td>
									<td>Low-to-mid quality</td>
								</tr>
								<tr>
									<td>2000-3000 RMB</td>
									<td>Mid-to-high quality</td>
								</tr>
								<tr>
									<td>3000+ RMB</td>
									<td>Premium</td>
								</tr>
							</table>
							<input type="number" name="amount" id="amount" required="" class="request_text" autocomplete="off" onkeyup="update_price();" onmouseup="update_price();">
							<div id="total" class="request_note hidden" style="text-align: right;"><br></div>

							<div class="request_question">What's the longest contact you could sign?</div>
							<div class="request_note">(longer can help get better terms)</div>
							<select id="months" name="months" class="request_select">
								<option value="13">over 12 months</option>
								<option value="12" selected="selected">12 months</option>
								<option value="6">6 months</option>
								<option value="3">3 months</option>
								<option value="1">1 month</option>
								<option value="0">less than 1 month</option>
							</select>

							<button class="button_backward" onclick="backward(); return false;"><</button>
							<button class="button_forward" onclick="face_2_0_done(); return false;">></button>
						</div>
						<div id="face_3_0" class="hidden face face_3">
							<div class="request_question">Where in the city do you want to work:</div>
							<div class="request_note">This is the key part for us to find coworking spaces exactly where you want to be. E.g.:
								<ul>
									<li>"must be on east Line 10 between Shuangjing and Liangmaqiao"</li>
									<li>"prefer Guomao area"</li>
								</ul>
							</div>
							<textarea id="location" name="location" class="request_textarea" required="" autocomplete="off"></textarea>
							<button class="button_backward" onclick="backward(); return false;"><</button>
							<button class="button_forward" onclick="face_3_0_done(); return false;">></button>
						</div>
						<div id="face_4_0" class="hidden face face_0">
							<div class="request_question">Do you need to register your company address there?</div>
							<fieldset>
								<table>
								<tr>
									<td><input type="radio" name="need_address" id="need_address_required" value="2" class="request_radio" onclick="toggle_taxpayer()" /></td>
									<td><label for="need_address_required">Yes, required</label></td>
								</tr>
								<tr>
									<td><input type="radio" name="need_address" id="need_address_preferred" value="1" class="request_radio" onclick="toggle_taxpayer()" /></td>
									<td><label for="need_address_preferred">Preferred</label></td>
								</tr>
								<tr>
									<td><input type="radio" name="need_address" id="need_address_no" value="0" class="request_radio" onclick="toggle_taxpayer()" /></td>
									<td><label for="need_address_no">No, not needed</label></td>
								</tr>
								</table>
							</fieldset>

							<div id="taxpayer_coworking_div" class="hidden">
								<div class="request_question">What type of taxpayer is your company?</div>
								<fieldset>
									<table>
										<tr>
										<td><input type="radio" class="request_radio" name="taxpayer_coworking" id="taxpayer_coworking_vat" value="2"/></td>
										<td><label for="taxpayer_coworking_vat">Regular taxpayer (VAT)</label></td>
										</tr>
										<tr>
										<td><input type="radio" class="request_radio" name="taxpayer_coworking" id="taxpayer_coworking_small" value="1"/></td>
										<td><label for="taxpayer_coworking_small">Small scale</label></td>
										</tr>
										<tr>
										<td><input type="radio" class="request_radio" name="taxpayer_coworking" id="taxpayer_coworking_dont_know" value="0"/></td>
										<td><label for="taxpayer_coworking_dont_know">Don't know</label></td>
										</tr>
									</table>
								</fieldset>
							</div>
							<button class="button_backward" onclick="backward(); return false;"><</button>
							<button class="button_forward" onclick="face_4_0_done(); return false;">></button>
						</div>

						<div id="face_5_0" class="hidden face face_1">
						<div class="request_question">What else do you want from your working space?</div>
							<div class="request_note">
								<ul>
									<li>"price is more important than location"</li>
									<li>"need access to a 3D printer</li>
									<li>"prefer being around other visual media companies"</li>
									<li>"want to avoid competitor companies in the same space"</li>
								</ul>
							</div>
							<textarea id="description" class="request_textarea" required="" autocomplete="off"></textarea>
							<button class="button_backward" onclick="backward(); return false;"><</button>
							<button class="button_forward" onclick="face_5_0_done(); return false;">></button>
						</div>
						<div id="face_6_0" class="hidden face face_2">
							temp
						</div>

						<!-- business address -->
						<div id="face_1_1" class="hidden face face_1">

							<div class="request_question">What type of taxpayer is your company?</div>
							<fieldset>
								<table>
									<tr>
									<td><input type="radio" class="request_radio" name="taxpayer_address" id="taxpayer_address_vat" value="2"/></td>
									<td><label for="taxpayer_address_vat">Regular taxpayer (VAT)</label></td>
									</tr>
									<tr>
									<td><input type="radio" class="request_radio" name="taxpayer_address" id="taxpayer_address_small" value="1"/></td>
									<td><label for="taxpayer_address_small">Small scale</label></td>
									</tr>
									<tr>
									<td><input type="radio" class="request_radio" name="taxpayer_address" id="taxpayer_address_dont_know" value="0"/></td>
									<td><label for="taxpayer_address_dont_know">Don't know</label></td>
									</tr>
								</table>
							</fieldset>


							<button class="button_backward" onclick="backward(); return false;"><</button>
							<button class="button_forward" onclick="face_1_1_done(); return false;">></button>
						</div>
						<div id="face_2_1" class="hidden face face_2">

							<div class="request_question">Does the address need to be in any particular location in the city?</div>
							<div class="request_note">(e.g. Chaoyang District)</div>
							<textarea id="location_address" class="request_textarea" required="" autocomplete="off"></textarea>

							<button class="button_backward" onclick="backward(); return false;"><</button>
							<button class="button_forward" onclick="face_2_1_done(); return false;">></button>
						</div>
						<div id="face_3_1" class="hidden face face_3">
							temp
						</div>

						<!-- other -->
						<div id="face_1_2" class="hidden face face_1">
							<div class="request_question">Tell us how we can help:</div>
							<textarea id="other_message" class="request_textarea" required="" autocomplete="off"></textarea>
							<button class="button_backward" onclick="backward(); return false;"><</button>
							<button class="button_forward" onclick="face_1_2_done(); return false;">></button>
						</div>
						<div id="face_2_2" class="hidden face face_2">
							temp
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>

<div id="sending" class="hidden">
	<div class="request_question">
		Sending ...
	</div>
</div>
<div id="success_0" class="hidden"> <!-- COWORKING -->
	<div class="title-with-line">
		<h1>RECEIVED</h1>
	</div>
	<div class="received_box">
			Thanks, that's it! We'll get back to you with options via wechat within 1-2 days.<br><br>
			If you have a friend looking for office space, please feel free to suggest <a class="light_link" href="http://www.tansuochina.com">www.tansuochina.com</a>
	</div>
</div>
<div id="success_1" class="hidden"> <!-- ADDRESS -->
	<div class="title-with-line">
		<h1>RECEIVED</h1>
	</div>
	<div class="received_box">
			Thanks, that's it! We'll get back to you with options via wechat within 1-2 days.<br><br>
			If you have a friend looking for office space, please feel free to suggest <a class="light_link" href="http://www.tansuochina.com">www.tansuochina.com</a>
	</div>
</div>
<div id="success_2" class="hidden"> <!-- OTHER -->
	<div class="title-with-line">
		<h1>RECEIVED</h1>
	</div>
	<div class="received_box">
			Thanks, that's it! We'll get back to you with options via wechat within 1-2 days.<br><br>
			If you have a friend looking for office space, please feel free to suggest <b><a class="light_link" href="http://www.tansuochina.com">www.tansuochina.com</a></b>
	</div>
</div>
<div id="error" class="hidden">
	<div class="received_box">
	We're having trouble connecting right now. Please check your connection, click back and resend.
	</div>
	<button class="button_backward" onclick="backward(); return false;"><</button>
</div>

<!--

0 coworking
1 business address
2 event space
3 meeting room
4 other


product type
city
wechat id

COWORKING 2
where

COWORKING 3


COWORKING 4
get business address?
need business address?
taxpayer type?



BUSINESS ADDRESS 2



-->



<script>
var sleep1 = 100;
var sleep2 = 600;

var request_id = 0;

var product;
var city;
var wechat;
var industry;

var movein;
var movein_start;
var desk_private_office;
var desk_fixed_desk_office;
var desk_fixed_desk_open;
var desk_hot_desk;

var number1;
var number2;
var amount;
var months;

var location_coworking;

var need_address;
var taxpayer_coworking;

var description;

// ADDRESS
var taxpayer_address;
var location_address;

// OTHER
var other_message;

var language_choice = "en";
var rotation_position = 0;


function face_0_done(){
	wechat = $("#wechat").val();
	product = $("#product").val();
	city = $("#city").val();
	industry = $("#industry").val();

	var all_good = true;

	if(product == null) {
		mark_error("product");
		all_good = false;
	} else {
		unmark_error("product");
	}
	if(city == null) {
		mark_error("city");
		all_good = false;
	} else {
		unmark_error("city");
	}
	if(wechat == "") {
		mark_error("wechat");
		all_good = false;
	} else {
		unmark_error("wechat");
	}
	if(industry == "") {
		mark_error("industry");
		all_good = false;
	} else {
		unmark_error("industry");
	}

	if(all_good) {
		forward();
		send_data_soft(); // ????? testing only
	}
}
function face_1_0_done() {
	movein = document.forms["contact_form"]["movein"].value;
	movein_start = $("#movein_start").val();
	if(document.getElementById('private_office').checked) desk_private_office = 1;
	else 												  desk_private_office = 0;
	if(document.getElementById('fixed_desk_office').checked) desk_fixed_desk_office = 1;
	else 												  desk_fixed_desk_office = 0;
	if(document.getElementById('fixed_desk_open').checked) desk_fixed_desk_open = 1;
	else 												  desk_fixed_desk_open = 0;
	if(document.getElementById('hot_desk').checked) desk_hot_desk = 1;
	else 												  desk_hot_desk = 0;

	var all_good = true;

	if(movein == "") {
		mark_error("movein");
		all_good = false;
	} else {
		unmark_error("movein");
	}

	if(movein_start == "" && movein == 2) {
		mark_error("movein_start");
		all_good = false;
	} else {
		unmark_error("movein_start");
	}

	if(!desk_private_office &&
		!desk_fixed_desk_office &&
		!desk_fixed_desk_open &&
		!desk_hot_desk) {
		mark_error("private_office");
		mark_error("fixed_desk_office");
		mark_error("fixed_desk_open");
		mark_error("hot_desk");
		all_good = false;
	} else {
		unmark_error("private_office");
		unmark_error("fixed_desk_office");
		unmark_error("fixed_desk_open");
		unmark_error("hot_desk");
	}
	
	if(all_good) {
		forward();
		//send_data_soft(); // ????? testing only
	}
}
function face_2_0_done() {
	number1 = $("#number1").val();
	number2 = $("#number2").val();
	amount = $("#amount").val();
	months = $("#months").val();

	var all_good = true;
	if(number1 == "" && number2 == "") {
		mark_error("number1");
		mark_error("number2");
		all_good = false;
	} else {
		unmark_error("number1");
		unmark_error("number2");
	}


	if(amount == "" || amount < 0) {
		mark_error("amount");
		all_good = false;
	} else {
		unmark_error("amount");
	}

	
	if(all_good) {
		forward();
		//send_data_soft(); // ????? testing only
	}
}
function face_3_0_done() {
	location_coworking = document.forms["contact_form"]["location"].value;

	var all_good = true;

	if(location_coworking == "") {
		mark_error("location");
		all_good = false;
	} else {
		unmark_error("location");
	}
	
	if(all_good) {
		forward();
		//send_data_soft(); // ????? testing only
	}
}
function face_4_0_done() {
	need_address = document.forms["contact_form"]["need_address"].value;
	taxpayer_coworking = document.forms["contact_form"]["taxpayer_coworking"].value;

	var all_good = true;

	if(need_address == "") {
		mark_error("need_address_required");
		mark_error("need_address_preferred");
		mark_error("need_address_no");
		all_good = false;
	} else {
		unmark_error("need_address_required");
		unmark_error("need_address_preferred");
		unmark_error("need_address_no");
	}
	if(taxpayer_coworking == "" && need_address != "0") {
		mark_error("taxpayer_coworking_vat");
		mark_error("taxpayer_coworking_small");
		mark_error("taxpayer_coworking_dont_know");
		all_good = false;
	} else {
		unmark_error("taxpayer_coworking_vat");
		unmark_error("taxpayer_coworking_small");
		unmark_error("taxpayer_coworking_dont_know");
	}

	if(all_good) {
		forward();
		//send_data_soft(); // ????? testing only
	}
}
function face_5_0_done() { // coworking final page
	description = document.forms["contact_form"]["description"].value;

	var all_good = true;

	if(description == "") {
		mark_error("description");
		all_good = false;
	} else {
		unmark_error("description");
	}
	
	if(all_good) {
		send_data_hard();
	}
}
// ADDRESS
function face_1_1_done() {
	taxpayer_address = document.forms["contact_form"]["taxpayer_address"].value;

	var all_good = true;

	if(taxpayer_address == "") {
		mark_error("taxpayer_address_vat");
		mark_error("taxpayer_address_small");
		mark_error("taxpayer_address_dont_know");
		all_good = false;
	} else {
		unmark_error("taxpayer_address_vat");
		unmark_error("taxpayer_address_small");
		unmark_error("taxpayer_address_dont_know");
	}

	if(all_good) {
		forward();
	}
}
function face_2_1_done() { // address final page
	location_address = $("#location_address").val();
	var all_good = true;
	if(location_address == "") {
		mark_error("location_address");
		all_good = false;
	} else {
		unmark_error("location_address");
	}

	if(all_good) {
		send_data_hard();
	}
}
// OTHER
function face_1_2_done() { // other final page
	other_message = $("#other_message").val();

	var all_good = true;

	if(other_message == "") {
		mark_error("other_message");
		all_good = false;
	} else {
		unmark_error("other_message");
	}
	
	if(all_good) {
		send_data_hard();
	}
}
function send_data_soft() {
	//alert("send_data_soft");
	sending = true;
	$.ajax({
		type: "POST",
		url: "./request.php",
		data: {
			request_id: request_id,
			product: product,
			city: city,
			wechat: wechat,
			industry: industry,
			language_choice: language_choice
		},
		dataType: "text",
		timeout: 10000,
		success: function(response) {
			//alert("start success:"+response);
			
			// if the response is numeric, its the last insert id
			// if non-numeric, then ignore it
			if(!isNaN(response)) {
				request_id = response;
				//alert("new request_id://///"+request_id+"/////");
			} else {
				//alert("not setting request_id://///"+response+"/////");
			}
			//alert("end");
		},
		error: function(jqXHR, textStatus, errorThrown) {
			//alert("error:"+textStatus); // ????? testing
		}
	});
}
function send_data_hard() {
	//alert("request_id://///"+request_id+"/////");
	var message_face = "#face_"+(rotation_position+1)+"_"+product;
	$(message_face).html($("#sending").html());
	forward();
	$.ajax({
		type: "POST",
		url: "./request.php",
		data: {
			request_id: request_id,
			product: product,
			city: city,
			wechat: wechat,
			industry: industry,
			movein: movein,
			movein_start: movein_start,
			desk_private_office: desk_private_office,
			desk_fixed_desk_office: desk_fixed_desk_office,
			desk_fixed_desk_open: desk_fixed_desk_open,
			desk_hot_desk: desk_hot_desk,
			number1: number1,
			number2: number2,
			amount: amount,
			months: months,
			location_coworking: location_coworking,
			need_address: need_address,
			taxpayer_coworking: taxpayer_coworking,
			description: description,
			taxpayer_address: taxpayer_address,
			location_address: location_address,
			other_message: other_message,
			language_choice: language_choice
		},
		dataType: "text",
		timeout: 20000, // 20 seconds
		success: function(response) {
			//alert("success:"+response); // ????? testing
			$(message_face).html($("#success_"+product).html());

			// if the response is numeric, its the last insert id
			// if non-numeric, then ignore it
			if(isNaN(response)) request_id = data;
		},
		error: function(jqXHR, textStatus, errorThrown) {
			//alert("error:"+textStatus); // ????? testing
			$(message_face).html($("#error").html());
			/*
				if(textStatus === "timeout") {
					///
				} else {
					///
				}
			*/
		}
	});
}
function forward() {
	rotation_position++;

	var next_face = "#face_"+rotation_position+"_"+product;
	var last_face;

	if(rotation_position == 1) last_face = "#face_0";
	else 					   last_face = "#face_"+(rotation_position-1)+"_"+product;

	setTimeout(function() {
	var next_face = "#face_"+rotation_position+"_"+product;
		$(next_face).removeClass("hidden");
	}, sleep1);
	calcRotation(90*rotation_position);
	setTimeout(function() {
		$(last_face).addClass("hidden");
	}, sleep2);
}
function backward() {
	rotation_position--;

	var next_face;
	if(rotation_position == 0) next_face = "#face_0";
	else 					   next_face = "#face_"+rotation_position+"_"+product;
	var last_face = "#face_"+(rotation_position+1)+"_"+product;

	setTimeout(function() {
		$(next_face).removeClass("hidden");
	}, sleep1);
	calcRotation(90*rotation_position);
	setTimeout(function() {
		$(last_face).addClass("hidden");
	}, sleep2);
}
function calcRotation(rot){
	$("#cube").css("transform", "rotateY(-" + rot + "deg)");
}
function mark_error(str) {
	$("#"+str).addClass("error");
}
function unmark_error(str) {
	$("#"+str).removeClass("error");
}

function update_price() {
	var number;
	var per_desk = 0.0;

	var per_desk1 = 0.0;
	var per_desk2 = 0.0;

	var number1 = parseInt($("#number1").val());
	var number2 = parseInt($("#number2").val());
	var amount = parseFloat($("#amount").val());

	if(isNaN(number1)) number1 = 0;
	if(isNaN(number2)) number2 = 0;
	if(isNaN(amount)) amount = 0.0;

	if(amount == 0 || (number1 == 0 && number2 == 0) || amount < 0 || number1 < 0 || number2 < 0) {
		$("#total").addClass("hidden");
		return;
	}

	// both numbers entered and not equal
	
	if(number1 != 0 && number2 != 0 && number1 != number2) {
		// switch to lowest first
		if(number1 > number2) {
			number = number2;
			number2 = number1;
			number1 = number;
		}

		per_desk1 = numberWithCommas(Math.round(amount*number1,2));
		per_desk2 = numberWithCommas(Math.round(amount*number2,2));
		$("#total").html("Maximum total: "+per_desk1+" - "+per_desk2+" RMB/month");
		$("#total").removeClass("hidden");
	} else {
		if(number1 != 0) number = number1;
		else 			 number = number2;

		per_desk = numberWithCommas(Math.round(amount*number,2));
		$("#total").html("Maximum total: "+per_desk+" RMB/month");
		$("#total").removeClass("hidden");
	}
}
const numberWithCommas = (x) => {
	var parts = x.toString().split(".");
	parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ",");
	return parts.join(".");
}

function toggle_movein_start() {
	movein = document.forms["contact_form"]["movein"].value;
	if(movein == 2) {
		$("#movein_start_div").removeClass("hidden");
	} else {
		$("#movein_start_div").addClass("hidden");
	}
}
function toggle_taxpayer() {
	need_address = document.forms["contact_form"]["need_address"].value;
	if(need_address == 0) {
		$("#taxpayer_coworking_div").addClass("hidden");
	} else {
		$("#taxpayer_coworking_div").removeClass("hidden");
	}
}

</script>

</body>
</html>