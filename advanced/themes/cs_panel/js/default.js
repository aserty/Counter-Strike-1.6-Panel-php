/* empty (php.js) 1006.1915 */
function empty(a,b){var c;if(a===""||!b&&(a===0||a==="0")||a===null||a===false||typeof a==="undefined")return true;if(typeof a=="object"){for(c in a)return false;return true}return false};
function getkeyCode(e){var keynum;if(window.event){keynum = e.keyCode}else{if(e.which){keynum = e.which}}return keynum;}


var login = {
	press: function(){
		$("form.login .sect#button .description").text("");
		$("form.login .sect .input input").removeClass("error");
		var ip = $.trim($("form.login .sect#ip .input input#ip").val());
		var port = $.trim($("form.login .sect#port .input input#port").val());
		var rconpass = $.trim($("form.login .sect#rcon .input input#rconpass").val());
		var lang_ = $("form.login .sect#lang .input select#lang").val();
		if((!empty(ip)) && (!empty(port)) && (!empty(rconpass))){
			$("form.login .sect#button .description").text(lang[0]);
			$.ajax({
				type: 'post',
				data: { 
					login: 1,
					ip: ip,
					port: port,
					rcon: rconpass,
					lang: lang_
				},
				dataType: 'json',
				url: 'login.php',
				success: function(r){
					switch(r.status){
						case 1:
							$("form.login .sect#ip .input input#ip").addClass("error");
							$("form.login .sect#button .description").text(lang[1]);
						break;
						case 3:
							$("form.login .sect#port .input input#port").addClass("error");
							$("form.login .sect#button .description").text(lang[2]);
						break;
						case 4:
							window.location.href="index.php";
						break;
						default:
							$("form.login .sect#button .description").text(lang[3]);
						break;
					}
				},
				error: function(){
					$("form.login .sect#button .description").text(lang[3]);
				}
			});
		}else{
			$("form.login .sect#button .description").text(lang[4]);
			if(empty(ip)){
				$("form.login .sect#ip .input input#ip").addClass("error");
			}
			if(empty(port)){
				$("form.login .sect#port .input input#port").addClass("error");
			}
			if(empty(rconpass)){
				$("form.login .sect#rcon .input input#rconpass").addClass("error");
			}
		}
	},
	ready: function(){
		$("form.login").keypress(function(e){
			if(getkeyCode(e) == 13) login.press();
		});
		$("form.login .sect#button .input .button-blue").click(function(){
			login.press();
		});
	}
}

var tabs = {
	i: "",
	buttons: new Array(),
	setselecteds: function(){
		for(var i = 0; i < tabs.buttons.length; i++){
			if(tabs.buttons[i][1] == "selected"){
				$(".buttons .button#"+tabs.buttons[i][0], tabs.i).addClass("selected");
				$(".tab#tab_"+tabs.buttons[i][0], tabs.i).show();
			}else{
				$(".buttons .button#"+tabs.buttons[i][0], tabs.i).removeClass("selected");
				$(".tab#tab_"+tabs.buttons[i][0], tabs.i).hide();
			}
		}
	},
	setclick: function(){
		$(".buttons .button", tabs.i).click(function(){
			var id = $(this).attr("id");
			for(var i = 0; i < tabs.buttons.length; i++){
				if(tabs.buttons[i][0] == id){
					tabs.buttons[i][1] = "selected";
				}else{
					tabs.buttons[i][1] = "";
				}
			}
			tabs.setselecteds();
		});
	},
	ready: function(i, selected){
		tabs.i = i;
		var buttons_ = $(".buttons", i).find("div");
		for(var i = 0; i < buttons_.length; i++){
			var id = $(buttons_[i]).attr("id");
			var selected_ = "";
			if(selected == id){
				selected_ = "selected";
			}
			tabs.buttons[i] = new Array(id, selected_);
		}
		tabs.setselecteds();
		tabs.setclick();
	}
}

var basic_config = {
	press: function(){
		$(".sect#button .description").text("");
		$(".sect .input input").removeClass("error");
		var hostname = $.trim($("form#basic_config .sect#hostname .input input#hostname").val());
		var map = $("form#basic_config .sect#map .input select#map").val();
		var network = $("form#basic_config .sect#network .input select#network").val();
		var rcon_pass = $.trim($("form#basic_config .sect#rcon_pass .input input#rcon_pass").val());
		var player_pass = $.trim($("form#basic_config .sect#player_pass .input input#player_pass").val());
		$("form#basic_config .sect#button .description").text(lang[0]);
		if(!empty(hostname)){
			$.ajax({
				type: 'post',
				dataType: 'json',
				url: 'ajax/basic_config.php',
				data: {
					hostname: hostname,
					map: map,
					network: network,
					rcon_pass: rcon_pass,
					player_pass: player_pass
				},
				success: function(r){
					switch(r.status){
						case 1:
							$("form#basic_config .sect#button .description").text(lang[5]);
						break;
						default:
							$("form#basic_config .sect#button .description").text(lang[3]);
					}
				},
				error: function(){
					$("form#basic_config .sect#button .description").text(lang[3]);
				}
			});
		}else{
			$("form#basic_config .sect#button .description").text(lang[4]);
			$("form#basic_config .sect#hostname .input input#hostname").addClass("error");
		}
	},
	ready: function(){
		$("form#basic_config .sect#button .input .button-blue").click(function(){
			basic_config.press();
		});
	}
}