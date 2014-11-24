
	<script
		src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDY0kkJiTPVd2U7aTOAwhc9ySH6oHxOIYM&sensor=false">
	</script>

	<script>
	function initialize() {
		var mapProp = {
  			center:new google.maps.LatLng(16.4732751,102.8227264),zoom:17,mapTypeId:google.maps.MapTypeId.ROADMAP
  		};
		var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
	}
	google.maps.event.addDomListener(window, 'load', initialize);
	</script>

    <div class="container">
		<div class="row">
			<div class="col-sm-3 col-md-3 col-lg-3">
				<img class="img-responsive img-thumbnail" src="<?= base_url() . 'assets/img/boss.jpg' ?>" alt="Boss">
				<p class="text-center" style="margin-top:10px;">ผศ.ดร.สมเกียรติ ศรีจารนัย</p>
		  	</div>
		  	<div class="col-sm-12 col-md-8 col-md-offset-1 col-lg-8 col-lg-offset-1">
		  		<h3>คณะวิทยาศาสตร์ มหาวิทยาลัยขอนแก่น</h3>
		  		<div id="googleMap" style="width:500px;height:380px;"></div>
		  		<p>เลขที่ 123 ถนนมิตรภาพ ตำบลในเมือง อำเภอเมือง จังหวัดขอนแก่น 40002<br>โทรศัพท์ 043-202372,202532 โทรสาร 043-202371 </p>
		  	</div>
		</div><!-- ./row -->
    </div><!-- ./container -->
