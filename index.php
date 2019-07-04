<!DOCTYPE html>

<?php
	
	function getAllData()
	{
		$url = "http://sistem-informasi-lbb.000webhostapp.com/api/get_me_data";    
		$apikey = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1c2VybmFtZSI6ImJhZ3VzZWtvIiwiaXNpIjpbeyJuaXMiOiIxMDAiLCJuYW1hX3Npc3dhIjoiUGFpam8gIiwiamVuaXNfa2VsYW1pbl9zaXN3YSI6Ikxha2kgLSBMYWtpIiwiYWxhbWF0X3Npc3dhIjoiTWxldG8gMSIsInRnbF9sYWhpcl9zaXN3YSI6IjE5OTctMDgtMjMifSx7Im5pcyI6IjE1NCIsIm5hbWFfc2lzd2EiOiJOR0FLQU4gUFVUVSBBTkRSQVlPR0EgSy5XIiwiamVuaXNfa2VsYW1pbl9zaXN3YSI6Ikxha2kgLSBMYWtpIiwiYWxhbWF0X3Npc3dhIjoiUEFLSVMgVElSVE9TQVJJIElYIDE0LCBTVSIsInRnbF9sYWhpcl9zaXN3YSI6IjIwMDgtMDItMDIifSx7Im5pcyI6IjM2MCIsIm5hbWFfc2lzd2EiOiJTVVNZIEhBTkRBWUFOSSIsImplbmlzX2tlbGFtaW5fc2lzd2EiOiJQZXJlbXB1YW4iLCJhbGFtYXRfc2lzd2EiOiJEVUtVSCBCVUxBSyBCVEcgU1VST1BBVCBJIiwidGdsX2xhaGlyX3Npc3dhIjoiMjAwOC0wNy0xOCJ9LHsibmlzIjoiNDA4IiwibmFtYV9zaXN3YSI6IkRFVkkgQU5HR1JBSU5JIiwiamVuaXNfa2VsYW1pbl9zaXN3YSI6IlBlcmVtcHVhbiIsImFsYW1hdF9zaXN3YSI6IkdSSVlBIEtFQlJBT04gVEVOR0FIIDYiLCJ0Z2xfbGFoaXJfc2lzd2EiOiIyMDA4LTAxLTAxIn0seyJuaXMiOiI0MjEiLCJuYW1hX3Npc3dhIjoiTlVOSUsgTUVJIElSQVdBVEkiLCJqZW5pc19rZWxhbWluX3Npc3dhIjoiUGVyZW1wdWFuIiwiYWxhbWF0X3Npc3dhIjoiV0VET1JPIFVUQVJBIDI4IFdBUlUsIFNJRCIsInRnbF9sYWhpcl9zaXN3YSI6IjIwMDgtMTAtMDkifSx7Im5pcyI6IjQzNiIsIm5hbWFfc2lzd2EiOiJIQVJESU1BTiIsImplbmlzX2tlbGFtaW5fc2lzd2EiOiJMYWtpIC0gTGFraSIsImFsYW1hdF9zaXN3YSI6IkpMIE1BTlVLQU4gU0FSSSBSQVlBIDNLIDEiLCJ0Z2xfbGFoaXJfc2lzd2EiOiIyMDA4LTAyLTE0In0seyJuaXMiOiI0NDEiLCJuYW1hX3Npc3dhIjoiTU9DSEFNQUQgU0FNU1UgSi5XIiwiamVuaXNfa2VsYW1pbl9zaXN3YSI6Ikxha2kgLSBMYWtpIiwiYWxhbWF0X3Npc3dhIjoiSkwuQVIuSEFLSU0gREVMRVMgSS0xOEEgUyIsInRnbF9sYWhpcl9zaXN3YSI6IjIwMDgtMTEtMjUifSx7Im5pcyI6IjQ2OSIsIm5hbWFfc2lzd2EiOiJQUklNQSBDSVRSQSBXSUJPV08iLCJqZW5pc19rZWxhbWluX3Npc3dhIjoiTGFraSAtIExha2kiLCJhbGFtYXRfc2lzd2EiOiJLTEFNUElTIEFKSSAyIE5PIDksIFBST0JPIiwidGdsX2xhaGlyX3Npc3dhIjoiMjAwOC0wNS0wNiJ9LHsibmlzIjoiNDcxIiwibmFtYV9zaXN3YSI6IkVSSUVaQSBBTkRSWUFOVE8iLCJqZW5pc19rZWxhbWluX3Npc3dhIjoiTGFraSAtIExha2kiLCJhbGFtYXRfc2lzd2EiOiJEVVBBSyBCQU5EQVJFSk8gIDcsIFNVUkFCIiwidGdsX2xhaGlyX3Npc3dhIjoiMjAwOC0wOC0yNyJ9LHsibmlzIjoiNDk1IiwibmFtYV9zaXN3YSI6Ik0uIElCTlUgTVVORFpJUiIsImplbmlzX2tlbGFtaW5fc2lzd2EiOiJMYWtpIC0gTGFraSIsImFsYW1hdF9zaXN3YSI6IktMQU1QSVMgTkdBU0VNIDU1QiwgTEFNUFUiLCJ0Z2xfbGFoaXJfc2lzd2EiOiIyMDA4LTEyLTMwIn0seyJuaXMiOiI1MDgiLCJuYW1hX3Npc3dhIjoiQ0FORFJBIEFESElUQU1BIEsuIiwiamVuaXNfa2VsYW1pbl9zaXN3YSI6Ikxha2kgLSBMYWtpIiwiYWxhbWF0X3Npc3dhIjoiSkwgU0VNT0xPV0FSVSBTRUxBVEFOIEkgNCIsInRnbF9sYWhpcl9zaXN3YSI6IjIwMDgtMDMtMTcifSx7Im5pcyI6IjU1MCIsIm5hbWFfc2lzd2EiOiJBR1VORyBTVU5BUllBTlRPIiwiamVuaXNfa2VsYW1pbl9zaXN3YSI6Ikxha2kgLSBMYWtpIiwiYWxhbWF0X3Npc3dhIjoiSkFHSVIgU0lET1JFU01PIDcgTk8gMTIyLCIsInRnbF9sYWhpcl9zaXN3YSI6IjIwMDgtMDctMjkifSx7Im5pcyI6IjU1OSIsIm5hbWFfc2lzd2EiOiJTVUxJUyBUWUFOSU5HU0lIIiwiamVuaXNfa2VsYW1pbl9zaXN3YSI6IlBlcmVtcHVhbiIsImFsYW1hdF9zaXN3YSI6IktMQU1QSVMgTkdBU0VNIDMgMTZBLCBERU4iLCJ0Z2xfbGFoaXJfc2lzd2EiOiIyMDA4LTAxLTMxIn0seyJuaXMiOiI1NjAiLCJuYW1hX3Npc3dhIjoiWU9HQSBQUkFNVURJVFlBIiwiamVuaXNfa2VsYW1pbl9zaXN3YSI6Ikxha2kgLSBMYWtpIiwiYWxhbWF0X3Npc3dhIjoiU0VNT0xPV0FSVSBCQUhBUkkgQkxPSyA1IiwidGdsX2xhaGlyX3Npc3dhIjoiMjAwOC0xMS0xMSJ9LHsibmlzIjoiNTY5IiwibmFtYV9zaXN3YSI6IkggQSBOIEQgTyBZIE8iLCJqZW5pc19rZWxhbWluX3Npc3dhIjoiTGFraSAtIExha2kiLCJhbGFtYXRfc2lzd2EiOiJLUkFNUFVORyBURU5HQUggMywgU1VSQUJBIiwidGdsX2xhaGlyX3Npc3dhIjoiMjAwOC0xMC0xNCJ9LHsibmlzIjoiNTk3IiwibmFtYV9zaXN3YSI6Ik1FSVJBIFdVTEFOSU5HRElZQUgiLCJqZW5pc19rZWxhbWluX3Npc3dhIjoiUGVyZW1wdWFuIiwiYWxhbWF0X3Npc3dhIjoiS0VQVVRJSCAzQyBOTyAxNiwgVFVMVU5HQSIsInRnbF9sYWhpcl9zaXN3YSI6IjIwMDgtMDktMTkifSx7Im5pcyI6IjYwMSIsIm5hbWFfc2lzd2EiOiJNT0NILiBOQVNSVUxMQUggS0hVTUFJTkkiLCJqZW5pc19rZWxhbWluX3Npc3dhIjoiTGFraSAtIExha2kiLCJhbGFtYXRfc2lzd2EiOiJUQU5BSCBNRVJBSCBVVEFSQTcgIDQ1LCBTIiwidGdsX2xhaGlyX3Npc3dhIjoiMjAwOC0wNi0xMCJ9LHsibmlzIjoiNjMwIiwibmFtYV9zaXN3YSI6Ik1PSEFNTUFEIFpBTVJPTkkiLCJqZW5pc19rZWxhbWluX3Npc3dhIjoiTGFraSAtIExha2kiLCJhbGFtYXRfc2lzd2EiOiJTSU5EVUpPWU8gMiBOTyA1NkEsIEdSRVNJIiwidGdsX2xhaGlyX3Npc3dhIjoiMjAwOC0wOC0wMyJ9LHsibmlzIjoiNjM3IiwibmFtYV9zaXN3YSI6IkVSQSBXSVJBU1RVVEkiLCJqZW5pc19rZWxhbWluX3Npc3dhIjoiUGVyZW1wdWFuIiwiYWxhbWF0X3Npc3dhIjoiTkdBR0VMIFRJTVVSIDQ0LCBTVVJBQkFZQSIsInRnbF9sYWhpcl9zaXN3YSI6IjIwMDgtMDUtMTgifSx7Im5pcyI6IjY0MCIsIm5hbWFfc2lzd2EiOiJOVU5JSyBXSURZSUFTVFVUSSIsImplbmlzX2tlbGFtaW5fc2lzd2EiOiJQZXJlbXB1YW4iLCJhbGFtYXRfc2lzd2EiOiJLQVJTQUggQlVOVFUgMTAsIFNVUkFCQVlBIiwidGdsX2xhaGlyX3Npc3dhIjoiMjAwOC0xMi0xMCJ9LHsibmlzIjoiNjQxIiwibmFtYV9zaXN3YSI6IkhFUk1BTiBaQUtBUklBIiwiamVuaXNfa2VsYW1pbl9zaXN3YSI6Ikxha2kgLSBMYWtpIiwiYWxhbWF0X3Npc3dhIjoiQ0FOREkgTE9OVEFSLCBTVVJBQkFZQSIsInRnbF9sYWhpcl9zaXN3YSI6IjIwMDgtMDItMDEifSx7Im5pcyI6IjY1MCIsIm5hbWFfc2lzd2EiOiJUSE9IQVJJIiwiamVuaXNfa2VsYW1pbl9zaXN3YSI6Ikxha2kgLSBMYWtpIiwiYWxhbWF0X3Npc3dhIjoiU0VNT0xPV0FSVSBVVEFSQSAxIDExNkEsIiwidGdsX2xhaGlyX3Npc3dhIjoiMjAwOC0xMS0wNSJ9LHsibmlzIjoiNjY4IiwibmFtYV9zaXN3YSI6IkxVVEZJWUFUSSIsImplbmlzX2tlbGFtaW5fc2lzd2EiOiJQZXJlbXB1YW4iLCJhbGFtYXRfc2lzd2EiOiJLRUJSQU9OIFRFR0FMIE5PIDMzLCBTVVJBIiwidGdsX2xhaGlyX3Npc3dhIjoiMjAwOC0wOS0wNyJ9LHsibmlzIjoiNjg2IiwibmFtYV9zaXN3YSI6IlJPTkkgVEVHVUggSlVXQU5UTyIsImplbmlzX2tlbGFtaW5fc2lzd2EiOiJMYWtpIC0gTGFraSIsImFsYW1hdF9zaXN3YSI6IkJLIFRFTUVOR0dVTkdBTiBCTCBCRU5ETywiLCJ0Z2xfbGFoaXJfc2lzd2EiOiIyMDA4LTA4LTA4In0seyJuaXMiOiI2ODciLCJuYW1hX3Npc3dhIjoiRklEWUFIIFJBSE1BV0FUSSIsImplbmlzX2tlbGFtaW5fc2lzd2EiOiJQZXJlbXB1YW4iLCJhbGFtYXRfc2lzd2EiOiJKTCBKT0pPUkFOIDUgTk8gMjMsIFNVUkFCIiwidGdsX2xhaGlyX3Npc3dhIjoiMjAwOC0xMC0wNCJ9LHsibmlzIjoiNzA2IiwibmFtYV9zaXN3YSI6IlRFVEVOIFJVTExZQU5UTyIsImplbmlzX2tlbGFtaW5fc2lzd2EiOiJMYWtpIC0gTGFraSIsImFsYW1hdF9zaXN3YSI6IkpMIFRFQkVMIEJBUkFUIFJUMDQgUlcwMiIsInRnbF9sYWhpcl9zaXN3YSI6IjIwMDgtMDMtMjIifSx7Im5pcyI6IjcxNSIsIm5hbWFfc2lzd2EiOiJNT0NIQU1BRCBBUklFRiIsImplbmlzX2tlbGFtaW5fc2lzd2EiOiJMYWtpIC0gTGFraSIsImFsYW1hdF9zaXN3YSI6IktBUEFTTUFEWUEgMUExIE5PIDEsIFNVUkEiLCJ0Z2xfbGFoaXJfc2lzd2EiOiIyMDA4LTAxLTEyIn0seyJuaXMiOiI3MzYiLCJuYW1hX3Npc3dhIjoiVFJJIFNFVElBUklOSSIsImplbmlzX2tlbGFtaW5fc2lzd2EiOiJQZXJlbXB1YW4iLCJhbGFtYXRfc2lzd2EiOiJCUklHSkVOIEtBVEFNU08gMSA4MSBELCBTIiwidGdsX2xhaGlyX3Npc3dhIjoiMjAwOC0wNy0yOCJ9LHsibmlzIjoiNzQzIiwibmFtYV9zaXN3YSI6IkFDSE1BRCBCQVNPUkkiLCJqZW5pc19rZWxhbWluX3Npc3dhIjoiTGFraSAtIExha2kiLCJhbGFtYXRfc2lzd2EiOiJKTC5TSVdBTEFOS0VSVE8gNjRFIFNVUkFCIiwidGdsX2xhaGlyX3Npc3dhIjoiMjAwOC0wNC0xOSJ9LHsibmlzIjoiOTIxIiwibmFtYV9zaXN3YSI6IkJhZ3VzIEVrbyIsImplbmlzX2tlbGFtaW5fc2lzd2EiOiJMYWtpIC0gTGFraSIsImFsYW1hdF9zaXN3YSI6Ik1sZXRvIiwidGdsX2xhaGlyX3Npc3dhIjoiMTk3MC0wMS0wMSJ9LHsibmlzIjoiOTkiLCJuYW1hX3Npc3dhIjoiUGFpam8gVXBkYXRlIiwiamVuaXNfa2VsYW1pbl9zaXN3YSI6Ikxha2kgLSBMYWtpIiwiYWxhbWF0X3Npc3dhIjoiTWxldG8gMSIsInRnbF9sYWhpcl9zaXN3YSI6IjE5OTctMDgtMjMifV19.Lev4ROTWYYjs8bezYgrBBvX9nSV1z4OfhtlWKEFoVDM';
		 
		$curl = curl_init($url);
		curl_setopt($curl, CURLOPT_HEADER, false);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($curl, CURLOPT_HTTPHEADER, array("Content-type: application/json", "Authorization: ".$apikey));
		curl_setopt($curl, CURLOPT_POST, true);
		 
		$result = curl_exec($curl);
		 
		curl_close($curl);

		return $result;
	}

	function getSiswaByNIS()
    {
        $url = 'https://sistem-informasi-lbb.000webhostapp.com/api/siswa?nis=100';
        $ch = curl_init();
        curl_setopt_array($ch, array(
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_SSL_VERIFYHOST => 2
        ));
 
        $result = curl_exec($ch);
        curl_close($ch);

        return $result;

    }
	
	 
	$response = json_decode(getAllData(), true);

	//print_r($response);


    $hasil = json_decode(getSiswaByNIS(), true);

   // print_r($hasil);
 
     
?>
<html>
<head>
	<title>Tes</title>
</head>
<body>
	<table border="1">
		<thead>
			<tr>
				<th>NIS</th>
				<th>Nama Siswa</th>
				<th>Jenis Kelamin</th>
				<th>Alamat</th>
				<th>Tanggal Lahir</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($response['data']['isi'] as $row) 
				{
			?>
				<tr>
					<td><?php echo $row['nis']; ?></td>
					<td><?php echo $row['nama_siswa']; ?></td>
					<td><?php echo $row['jenis_kelamin_siswa']; ?></td>
					<td><?php echo $row['tgl_lahir_siswa']; ?></td>
					<td><?php echo $row['tgl_lahir_siswa']; ?></td>
				</tr>
			<?php
				}
			?>
		</tbody>
	</table>
	<br><br>
	<table border="1">
		<thead>
			<tr>
				<th>NIS</th>
				<th>Nama Siswa</th>
				<th>Jenis Kelamin</th>
				<th>Alamat</th>
				<th>Tanggal Lahir</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($hasil['data'] as $row) 
				{
			?>
				<tr>
					<td><?php echo $row['nis']; ?></td>
					<td><?php echo $row['nama_siswa']; ?></td>
					<td><?php echo $row['jenis_kelamin_siswa']; ?></td>
					<td><?php echo $row['tgl_lahir_siswa']; ?></td>
					<td><?php echo $row['tgl_lahir_siswa']; ?></td>
				</tr>
			<?php
				}
			?>
		</tbody>
	</table>

</body>
</html>
