$(function () {

	//Provera logovanje START
	$("#uloguj").click(function (event) {
		event.preventDefault();

		var ime = $("form #ime").val();
		var lozinka = $("form #lozinka").val();

		var greske_ime = "";
		var greske_lozinka = "";

		if (!ime.length > 0) {
			greske_ime = "Polje ime je obavezno";
			$(".form-group:nth-child(1)").addClass("has-error has-feedback");
			$(".form-group:nth-child(1) span:nth-child(1)").addClass("glyphicon glyphicon-remove form-control-feedback");
			$(".form-group:nth-child(1) span:nth-child(2)").text(greske_ime);
		} else {
			$(".form-group:nth-child(1)").removeClass("has-error has-feedback");
			$(".form-group:nth-child(1) span:nth-child(1)").removeClass("glyphicon glyphicon-remove form-control-feedback");
			$(".form-group:nth-child(1) span:nth-child(2)").text("");
		}

		if (!lozinka.length > 0) {
			greske_lozinka = "Polje lozinka je obavezno";
			$(".form-group:nth-child(2)").addClass("has-error has-feedback");
			$(".form-group:nth-child(2) span:nth-child(1)").addClass("glyphicon glyphicon-remove form-control-feedback");
			$(".form-group:nth-child(2) span:nth-child(2)").text(greske_lozinka);
		} else {
			$(".form-group:nth-child(2)").removeClass("has-error has-feedback");
			$(".form-group:nth-child(2) span:nth-child(1)").removeClass("glyphicon glyphicon-remove form-control-feedback");
			$(".form-group:nth-child(2) span:nth-child(2)").text("");
		}

		if (greske_ime === "" && greske_lozinka === "") {
			$("#forma_prijava").submit();
		}
	});
	//Provera logovanje END

	//Brisanje START
	$(document).on("click", "button:has(.fa-trash-o)", function () {
		var url = base_url + "admin/brisanje";
		var data = {
			tabela: $(this).closest("table").attr("id"),
			id: this.id
		}
		$.post(url, data, function (data) {
			$("#tabela").html(data);
		});
	});
	//Brisanje END

	$(document).on("click", "button:has(.fa-floppy-o)", function () {
		if (this.id)
		{
			//Izmena START
			var tabela = $(this).closest("table").attr("id");
			var id = this.id;
			var url = base_url + "admin/izmena/" + tabela + '/' + id;
			var data = $("#izmena").serialize();
			$.post(url, data, function (data) {
				$("#tabela").html(data);
			});
			//Izmena END
		} else {
			//Unos START
			var tabela = $(this).closest("table").attr("id");
			var url = base_url + "admin/upis/" + tabela;
			var data = $("#dodavanje").serialize();
			$.post(url, data, function (data) {
				$("#tabela").html(data);
			});
			//Unos END
		}
	});

	//Anketa START
	$(".anketa").click(function () {
		var url = base_url + "anketa/anketiraj";
		var data = {
			anketa_id: this.name,
			odgovor_id: this.id
		}
		$.post(url, data, function (rezultat) {
			var data = JSON.parse(rezultat);
//			var directive = {
//				'#apple-response': 'apple',
//				'#android-response': 'android',
//				'#windows-response': 'windows',
//				'#linux-response': 'linux'
//			};
//			$("#rezultati").render(data, directive);

			var x;
			for (x in data) {
				$('#' + [x] + '-response').animate({width: data[x]});
				$('#' + [x] + '-response').html(data[x]);
				//text += person[x];
				//Kod pisan u ponoc pred predaju sajta i radi!!!
			}
			
//			$("#apple-response").animate({width: data.apple});
//			$("#android-response").animate({width: data.android});
//			$("#windows-response").animate({width: data.windows});
//			$("#linux-response").animate({width: data.linux});
		});
	});
	//Anketa END

	//Admin panel tabovi
	$("[href='']").click(function (event) {
		event.preventDefault();
		$(this).tab("show");
	});

});

function vrati_podatke(tabela, id) {
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function () {
		if (xhttp.readyState === 4 && xhttp.status === 200) {
			document.getElementById("tabela").innerHTML = xhttp.responseText;
		}
	};
	xhttp.open("GET", base_url + "admin/tabela/" + tabela + "/" + id, true);
	xhttp.send();
}
