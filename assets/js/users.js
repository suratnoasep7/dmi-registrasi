function convertTanggal(string) {
	var bulanIndo = ['', 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September' , 'Oktober', 'November', 'Desember'];

	var tanggal = string.split("-")[2];
	var bulan = string.split("-")[1];
	var tahun = string.split("-")[0];

	return tanggal + " " + bulanIndo[Math.abs(bulan)] + " " + tahun;
}

var table = $('#tbl_users').DataTable({
    "ajax": {
        "type": "GET",
        "url": base_url + 'api/users',
        "beforeSend" : function(xhr) {
          xhr.setRequestHeader('Authorization',access_token);
        }
    },
    "columns": [
        { "data": "nama" },
        { "data": "tempat" },
		{
			"data": null,
			render:function(data) {
				return convertTanggal(data.tanggal_lahir);
			}
		},
        { 
            "data": null, 
            render:function(data) {
                if(data.jenis_kelamin == "L") {
                    return "Laki - Laki";
                } else {
                    return "Perempuan";
                }     
            } 
        }
    ]
});
