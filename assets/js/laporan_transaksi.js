var table = $('#tbl_laporan_transaksi').DataTable({
	"ajax": {
		"type": "GET",
		"url": base_url + 'api/laporan_transaksi',
		"beforeSend" : function(xhr) {
			xhr.setRequestHeader('Authorization',access_token);
		}
	},
	"columns": [
		{ "data": "nama" },
		{ "data": "paket" },
		{ "data": "harga" }
	]
});
