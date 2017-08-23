<html>
<head>
<title>WebcamQRCode exemple</title>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.webcamqrcode.min.js"></script>
</head>
<body>
WebcamQRCode View:<br />
<script>
(function($){
	$('document').ready(function(){
		$('#qrcodebox').WebcamQRCode({
			onQRCodeDecode: function( p_data ){
				$('#qrcode_result').html( p_data );
				$.ajax({
                url: 'home.php',
                type: 'POST',
                data: {nama: p_data},
				success: function(data) {
					if (data != ""){
					$("#gambar").empty();
					$("#gambar").append(data);
					}else{
						alert("siswa tidak ditemukan");
						$("#gambar").empty();
					}
				return data;
				},
            });
					
			}
		});
		
		$('#btn_start').click(function(){
			$('#qrcodebox').WebcamQRCode().start();
		});
		
		$('#btn_stop').click(function(){
			$('#qrcodebox').WebcamQRCode().stop();
		});
	});
})(jQuery);
 $(document).ready(function () {
        $("#btnSend").click(function () {
            $.ajax({
                url: 'home.php',
                type: 'POST',
                data: {nama: $("#bar").val()},
				success: function(data) {
					if (data != ""){
					$("#gambar").empty();
					$("#gambar").append(data);
					}else{
						alert("siswa tidak ditemukan");
					}
				alert(data);
				return data;
				},
            });
        });
    });
</script>
<label for="bar">A bar</label>
<input id="bar" name="nama" type="text"/>
<input id="btnSend" type="button" value="Send" />

<!-- The result of the search will be rendered inside this div -->
<div id="result"></div>
<div style="width: 500px; height: 500px;" id="qrcodebox">
</div>
<input type="button" value="Start" id="btn_start" /> 
<input type="button" value="Stop" id="btn_stop" />
<p>
Last QRCode value: <span id="qrcode_result">none</span>
</p>
<div id = "gambar">

</div>
<a href="insert.php"><input type="button" value="insert"></a>
</body>