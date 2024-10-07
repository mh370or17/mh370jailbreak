<!DOCTYPE html>
<html>
<head>
<!--<script src="js/jquery.min.js"></script> Use Web URL for jQuery library.-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<!--<script src="js/jquery.min.js"></script>-->
<script>
function redirect_point_return_one(){	
	$("#mh370").animate({ top: '10px', left: '1010px'}, 1010 , function(){
		$("#mh370").css("transform", "rotate(450deg)");
	});
	$("#mh370").animate({top: '34px'}, 1010 , function(){
		$("#mh370").css("transform", "rotate(542deg)");
		$("#mh370").animate({ left: '154px'}, 1010 , function(){
			$("#mh370").css("transform", "rotate(809deg)");
			$("#mh370").animate({ top: '109px'}, 1010, function(){
				$("#mh370").css("transform", "rotate(1083deg)");
				$("#mh370").animate({ left: '210px'}, 1010 , function(){
					$("#mh370").css("transform", "rotate(1173deg)");
					$("#mh370").animate({ top: '124px'}, 1010 , function(){
						$("#mh370").css("transform", "rotate(1262deg)");
						$("#mh370").animate({ left: '101px'}, 1010 , function(){
							$("#mh370").css("transform", "rotate(1530deg)");
							$("#mh370").animate({top: '260px'}, 1010 , function(){
								$("#mh370").css("transform", "rotate(1801deg)");
								$("#mh370").animate({ left: '231px'}, 1010 , function(){
									$("#mh370").css("transform", "rotate(1892deg)");
									$("#mh370").animate({ top: '370px'}, 1010 , function(){
										$("#mh370").css("transform", "rotate(2162deg)");
										$("#mh370").animate({ left: '410px'}, 1010 , function(){
											$("#mh370").css("transform", "rotate(2250deg)");
											$("#mh370").animate({ top: '416px'}, 1010 , function(){
												$("#mh370").css("transform", "rotate(2519deg)");
												$("#mh370").animate({ left: '540px'}, 1010 , function(){
													$("#mh370").css("transform", "rotate(2611deg)");
													$("#mh370").animate({ top: '431px'}, 1010 , function(){
														$("#mh370").css("transform", "rotate(2880deg)");
														$("#mh370").animate({ left: '900px'}, 1010 , function(){
															$("#mh370").css("transform", "rotate(2970deg)");
															$("#mh370").animate({ top: '600px'}, 1010 , function(){
																$("#mh370").css("transform", "rotate(3242deg)");
																$("#mh370").animate({ left: '1173px'}, 1010 , function(){
																	$("#mh370").css("transform", "rotate(3333deg)");
																	$("#mh370").animate({ top: '630px'}, 1010 , function(){
																		$("#mh370").css("transform", "rotate(3598deg)");
																		$("#mh370").animate({ left: '1300px'}, 1010 , function(){
																			$("#mh370").css("transform", "rotate(3873deg)");
																			$("#mh370").animate({ top: '19px'}, 1010 , function(){
																				$("#mh370").css("transform", "rotate(4142deg)");
																				$("#mh370").animate({ left: '142px'}, 1010);
																				final_point();
																			});
																		});
																	});
																});
															});
														});
													});
												});
											});
										});
									});
								});
							});
						});
					});
				});
			});
		});
	});
	//$("#mh370").animate({ top: '36px'}, 1010);
}
function final_point () {
	redirect_point_return_one();
}
$(document).ready(function(){ 
	redirect_point_return_one();
});
</script>
<style>
	body  {
			position: absolute;
			background-image:url(Choosen/maze-1010.gif);
			background-repeat:no-repeat;
			background-size:100% 100vh;
	}
	.mh17 {
		float: left;
		width: 16px;
		position: absolute;
		top: 1px;
		color:#FFFFFF;
	}
</style>
</head>
<body>
	<div class="mh17" id="mh370">&#9992;</div>
</body>
</html>
