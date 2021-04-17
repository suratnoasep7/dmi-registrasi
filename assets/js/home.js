$(document).ready(function() {
	$('#btn-register').click(function() {
		var $form = $("#register");
		var dataRegister = getDataForm($form);
		if (dataRegister.nama == "" || dataRegister.tempat == "" || dataRegister.tanggal_lahir == "" || dataRegister.jenis_kelamin == "" || dataRegister.paket == "") {
			toastr.error('Isi Data Dengan Baik Dan Benar');
		} else {
			var tanggal_lahir = convertDate(new Date(dataRegister.tanggal_lahir));
			dataRegister.tanggal_lahir = tanggal_lahir;
			var register =  ajaxPost("POST","api/register",dataRegister);
			if(register.status) {

				toastr.success(register.message);
				setTimeout(function(){ $("#register")[0].reset(); location.reload(); }, 3000);
			} else {
				toastr.error(register.message);
			}
		}
	});
});

function convertDate(date) {
	var year = date.getFullYear();
	var month = date.getMonth()+1;
	var day = date.getDate();

	if (day < 10) {
		day = '0' + day;
	}
	if (month < 10) {
		month = '0' + month;
	}

	var formattedDate = year + '-' + month + '-' + day;
	return formattedDate
}

function ajaxPost(type, url, data) {
	var json = {};
	$.ajax({
		async: false,
		global: false,
		url: base_url + url,
		type: type,
		data: data,
		complete: function (e) {
			if (e.status == 200) {
				json = JSON.parse(e.responseText);
			} else {
				json = JSON.parse(e.responseText);
			}
		}
	});
	return json;
}

function getDataForm($form) {
	var unindexed_array = $form.serializeArray();
	var indexed_array = {};

	$.map(unindexed_array, function (n, i) {
		indexed_array[n['name']] = n['value'];
	});

	return indexed_array;
}
