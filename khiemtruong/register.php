<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>This is register page</title>
	<link rel="stylesheet" href="mystyle.css">
</head>
<body>
	<?php include_once "header.php"; ?>
	<?php include_once "top-nav.php"; ?>


	<section class="register-interface center">
		<div class="center">
			<div class="img_user">
				<img src="icon_user.png">
			</div>

			<div class="inputReg-firstname">
				<input type="text" placeholder="First name">
			</div>

			<div class="inputReg-lastname">
				<input type="text" placeholder="Last name">
			</div>

			<div class="inputReg-username">
				<input type="email" placeholder="email">
			</div>

			<div class="inputReg-password">
				<input type="password" placeholder="password">
			</div>


			<!-- <div>
				<select id="city">
				<option value="" selected>Chọn tỉnh thành</option>           
				</select>
				          
				<select id="district">
				<option value="" selected>Chọn quận huyện</option>
				</select>

				<select id="ward">
				<option value="" selected>Chọn phường xã</option>
				</select>
			 </div> 


			<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" referrerpolicy="no-referrer"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js">	</script>
			<script>
			const host = "https://provinces.open-api.vn/api/";
			var callAPI = (api) => {
			return axios.get(api)
			    .then((response) => {
			        renderData(response.data, "city");
			    });
			}
			callAPI('https://provinces.open-api.vn/api/?depth=1');
			var callApiDistrict = (api) => {
			return axios.get(api)
			    .then((response) => {
			        renderData(response.data.districts, "district");
			    });
			}
			var callApiWard = (api) => {
			return axios.get(api)
			    .then((response) => {
			        renderData(response.data.wards, "ward");
			    });
			}

			var renderData = (array, select) => {
			let row = ' <option disable value="">Chọn</option>';
			array.forEach(element => {
			    row += `<option data-id="${element.code}" value="${element.name}">${element.name}</option>`
			});
			document.querySelector("#" + select).innerHTML = row
			}

			$("#city").change(() => {
			callApiDistrict(host + "p/" + $("#city").find(':selected').data('id') + "?depth=2");
			printResult();
			});
			$("#district").change(() => {
			callApiWard(host + "d/" + $("#district").find(':selected').data('id') + "?depth=2");
			printResult();
			});
			$("#ward").change(() => {
			printResult();
			})

			var printResult = () => {
			if ($("#district").find(':selected').data('id') != "" && $("#city").find(':selected').data('id') != "" &&
			    $("#ward").find(':selected').data('id') != "") {
			    let result = $("#city option:selected").text() +
			        " | " + $("#district option:selected").text() + " | " +
			        $("#ward option:selected").text();
			    $("#result").text(result)
			}

			}
			</script> -->


			<div>
				<button>REGISTER</button>
			</div>

			
		</div>
	</section> 

	<?php include_once "footer.php"; ?>
</body>
</html>