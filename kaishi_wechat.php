
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>

	<!-- heading_common_cn start -->
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<style>.async-hide { opacity: 0 !important} </style>

	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" type="text/css" href="./new_css.css">
	<script src="./jquery.min.js"></script>
	<!-- heading_common_cn end -->
	
	<link rel="stylesheet" type="text/css" href="./cube.css">

	<title>Tansuo 探所 | Choose your office</title>

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

							<div class="request_question">我要</div>
							<select id="product" name="product" class="request_select">
								<option value="0" selected="selected">联合办公（办公室/工位）</option>
								<option value="1">只要公司注册地址</option>
								<option value="2">其他</option>
							</select>

							<div class="request_question">城市</div>
							<select id="city" name="city" class="request_select">
								<option value="1" selected="selected">北京</option>
								<option value="3">上海</option>
								<option value="191">深圳</option>
								<option value="189">广州</option>
								<option value="-" disabled="disabled">-------</option>
								<option value="664">香港</option>
								<option value="665">澳门</option>
								<option value="-" disabled="disabled">-------</option>
								<option value="176">长沙</option>
								<option value="228">成都</option>
								<option value="4">重庆</option>
								<option value="37">大连</option>
								<option value="205">东莞</option>
								<option value="83">杭州</option>
								<option value="94">合肥</option>
								<option value="130">济南</option>
								<option value="70">南京</option>
								<option value="84">宁波</option>
								<option value="36">沈阳</option>
								<option value="74">苏州</option>
								<option value="2">天津</option>
								<option value="131">青岛</option>
								<option value="164">武汉</option>
								<option value="71">无锡</option>
								<option value="111">厦门</option>
								<option value="266">西安</option>
								<option value="666">雄安新区</option>
								<option value="147">郑州</option>

							</select>
							
							<div class="request_question">微信号</div>
							<input type="text" name="wechat" id="wechat" required="" class="request_text" autocomplete="off">

							<div class="request_question">行业</div>
							<input type="text" name="industry" id="industry" required="" class="request_text" autocomplete="off">
							<button class="button_forward" id="face_0_forward" onclick="face_0_done(); return false;">></button>
						</div>
						

						<div id="face_1_0" class="hidden face face_1">
							<div class="request_question">入住时间</div>

							<fieldset>
								<table>
								<tr>
									<td><input type="radio" name="movein" id="movein_asap" value="0" class="request_radio" onclick="toggle_movein_start()" /></td>
									<td><label for="movein_asap">马上</label></td>
								</tr>
								<tr>
									<td><input type="radio" name="movein" id="movein_next_month" value="1" class="request_radio" onclick="toggle_movein_start()" /></td>
									<td><label for="movein_next_month">月底</label></td>
								</tr>
								<tr>
									<td><input type="radio" name="movein" id="movein_other" value="2" class="request_radio" onclick="toggle_movein_start()" /></td>
									<td><label for="movein_other">其他</label></td>
								</tr>
								</table>
								<div id="movein_start_div" class="hidden">
									<input type="date" name="movein_start" id="movein_start" class="request_date"/>
								</div>
							</fieldset>


							<div class="request_question">工位类型</div>
							<fieldset>
								<table>
									<tr>
									<td><input type="checkbox" name="private_office" id="private_office" value="private_office" class="request_checkbox"></td>
									<td><label for="private_office">独立办公室</label></td>
									</tr>
									<tr>
									<td><input type="checkbox" name="fixed_desk_office" id="fixed_desk_office" value="fixed_desk_office" class="request_checkbox"></td>
									<td><label for="fixed_desk_office">固定工位（独立办公室）</label></td>
									</tr>
									<tr>
									<td><input type="checkbox" name="fixed_desk_open" id="fixed_desk_open" value="fixed_desk_open" class="request_checkbox"></td>
									<td><label for="fixed_desk_open">固定工位（开放式）</label></td>
									</tr>
									<tr>
									<td><input type="checkbox" name="hot_desk" id="hot_desk" value="hot_desk" class="request_checkbox"></td>
									<td><label for="hot_desk">流动工位</label></td>
									</tr>
								</table>
							</fieldset>


							<button class="button_backward" onclick="backward(); return false;"><</button>
							<button class="button_forward" onclick="face_1_0_done(); return false;">></button>
						</div>

						<div id="face_2_0" class="hidden face face_2">
							<div class="request_question">几个工位？</div>
							<input type="number" name="number1" id="number1" min="0" step="1" class="request_number" autocomplete="off" onkeyup="update_price();" onmouseup="update_price();"/>
							<div class="request_span">到</div>
							<input type="number" name="number2" id="number2" min="0" step="1" class="request_number" autocomplete="off" onkeyup="update_price();" onmouseup="update_price();"/>

							<div class="request_question">租金预算（工位/月，含税）</div>
							<table class="request_note_table">
								<tr>
									<td>< 1000 元</td>
									<td>经济型</td>
								</tr>
								<tr>
									<td>1000-2000 元</td>
									<td>低至中等品质</td>
								</tr>
								<tr>
									<td>2000-3000 元</td>
									<td>中高品质</td>
								</tr>
								<tr>
									<td>3000+ 元</td>
									<td>豪华型</td>
								</tr>
							</table>
							<input type="number" name="amount" id="amount" required="" class="request_text" autocomplete="off" onkeyup="update_price();" onmouseup="update_price();">
							<div id="total" class="request_note hidden" style="text-align: right;"><br></div>

							<div class="request_question">自定义______月</div>
							<!--<div class="request_note">(longer can help get better terms)</div>-->
							<select id="months" name="months" class="request_select">
								<option value="13">一年以上</option>
								<option value="12" selected="selected">一年</option>
								<option value="6">半年</option>
								<option value="3">一个季度</option>
								<option value="1">一个月</option>
								<option value="0">少于一个月</option>
							</select>

							<button class="button_backward" onclick="backward(); return false;"><</button>
							<button class="button_forward" onclick="face_2_0_done(); return false;">></button>
						</div>
						<div id="face_3_0" class="hidden face face_3">
							<div class="request_question">您想在哪个地方上班？</div>
							<div class="request_note">
							<!--This is the key part for us to find coworking spaces exactly where you want to be. E.g.:-->
								<ul>
									<li>“10号线：双井和亮马桥之间”</li>
									<li>“国贸”</li>
								</ul>
							</div>
							<textarea id="location" name="location" class="request_textarea" required="" autocomplete="off"></textarea>
							<button class="button_backward" onclick="backward(); return false;"><</button>
							<button class="button_forward" onclick="face_3_0_done(); return false;">></button>
						</div>
						<div id="face_4_0" class="hidden face face_0">
							<div class="request_question">您需要注册公司的地址吗？</div>
							<fieldset>
								<table>
								<tr>
									<td><input type="radio" name="need_address" id="need_address_required" value="2" class="request_radio" onclick="toggle_taxpayer()" /></td>
									<td><label for="need_address_required">需要</label></td>
								</tr>
								<tr>
									<td><input type="radio" name="need_address" id="need_address_preferred" value="1" class="request_radio" onclick="toggle_taxpayer()" /></td>
									<td><label for="need_address_preferred">在考虑</label></td>
								</tr>
								<tr>
									<td><input type="radio" name="need_address" id="need_address_no" value="0" class="request_radio" onclick="toggle_taxpayer()" /></td>
									<td><label for="need_address_no">不需要</label></td>
								</tr>
								</table>
							</fieldset>

							<div id="taxpayer_coworking_div" class="hidden">
								<div class="request_question">公司是哪种纳税人？</div>
								<fieldset>
									<table>
										<tr>
										<td><input type="radio" class="request_radio" name="taxpayer_coworking" id="taxpayer_coworking_vat" value="2"/></td>
										<td><label for="taxpayer_coworking_vat">一般纳税人（增值税）</label></td>
										</tr>
										<tr>
										<td><input type="radio" class="request_radio" name="taxpayer_coworking" id="taxpayer_coworking_small" value="1"/></td>
										<td><label for="taxpayer_coworking_small">小规模</label></td>
										</tr>
										<tr>
										<td><input type="radio" class="request_radio" name="taxpayer_coworking" id="taxpayer_coworking_dont_know" value="0"/></td>
										<td><label for="taxpayer_coworking_dont_know">不知道</label></td>
										</tr>
									</table>
								</fieldset>
							</div>
							<button class="button_backward" onclick="backward(); return false;"><</button>
							<button class="button_forward" onclick="face_4_0_done(); return false;">></button>
						</div>

						<div id="face_5_0" class="hidden face face_1">
						<div class="request_question">您对您的办公空间还有什么要求吗？</div>
							<!--
							<div class="request_note">
								<ul>
									<li>"price is more important than location"</li>
									<li>"need access to a 3D printer</li>
									<li>"prefer being around other visual media companies"</li>
									<li>"want to avoid competitor companies in the same space"</li>
								</ul>
							</div>
							-->
							<textarea id="description" class="request_textarea" required="" autocomplete="off"></textarea>
							<button class="button_backward" onclick="backward(); return false;"><</button>
							<button class="button_forward" onclick="face_5_0_done(); return false;">></button>
						</div>
						<div id="face_6_0" class="hidden face face_2">
							temp
						</div>

						<!-- business address -->
						<div id="face_1_1" class="hidden face face_1">

							<div class="request_question">公司是哪种纳税人？</div>
							<fieldset>
								<table>
									<tr>
									<td><input type="radio" class="request_radio" name="taxpayer_address" id="taxpayer_address_vat" value="2"/></td>
									<td><label for="taxpayer_address_vat">一般纳税人（增值税）</label></td>
									</tr>
									<tr>
									<td><input type="radio" class="request_radio" name="taxpayer_address" id="taxpayer_address_small" value="1"/></td>
									<td><label for="taxpayer_address_small">小规模</label></td>
									</tr>
									<tr>
									<td><input type="radio" class="request_radio" name="taxpayer_address" id="taxpayer_address_dont_know" value="0"/></td>
									<td><label for="taxpayer_address_dont_know">不知道</label></td>
									</tr>
								</table>
							</fieldset>

							<button class="button_backward" onclick="backward(); return false;"><</button>
							<button class="button_forward" onclick="face_1_1_done(); return false;">></button>
						</div>
						<div id="face_2_1" class="hidden face face_2">

							<div class="request_question">在哪个地方？</div>
							<div class="request_note">（比如，朝阳区）</div>
							<textarea id="location_address" class="request_textarea" required="" autocomplete="off"></textarea>

							<button class="button_backward" onclick="backward(); return false;"><</button>
							<button class="button_forward" onclick="face_2_1_done(); return false;">></button>
						</div>
						<div id="face_3_1" class="hidden face face_3">
							temp
						</div>

						<!-- other -->
						<div id="face_1_2" class="hidden face face_1">
							<div class="request_question">我们怎么帮助您？</div>
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
		<h1>收到啦</h1>
	</div>
	<div class="received_box">
			好啦！我们1-2天以内跟您联系！（关注您的微信）<br><br>
			您有朋友找办公室的话请推荐<a class="light_link" href="http://www.tansuochina.com">www.tansuochina.com</a>！
	</div>
</div>
<div id="success_1" class="hidden"> <!-- ADDRESS -->
	<div class="title-with-line">
		<h1>收到啦</h1>
	</div>
	<div class="received_box">
			好啦！我们1-2天以内跟您联系！（关注您的微信）<br><br>
			您有朋友找办公室的话请推荐<a class="light_link" href="http://www.tansuochina.com">www.tansuochina.com</a>！
	</div>
</div>
<div id="success_2" class="hidden"> <!-- OTHER -->
	<div class="title-with-line">
		<h1>收到啦</h1>
	</div>
	<div class="received_box">
			好啦！我们1-2天以内跟您联系！（关注您的微信）<br><br>
			您有朋友找办公室的话请推荐<a class="light_link" href="http://www.tansuochina.com">www.tansuochina.com</a>！
	</div>
</div>
<div id="error" class="hidden">
	<div class="received_box">
		在试一下。。。
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

var language_choice = "zh";
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