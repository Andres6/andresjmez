$(function(){
	$("#radio").buttonset();
	$(".dogAgeButton").button();

	$( ".dogAgeButton" ).click(function() {
  		
		var age = parseFloat($("#humanAge").val());
		var size = parseFloat($("input[name=dogAgeRadio]:checked").val());
		var Dage = 0;

		if (size == 4){
			if (age < 3){
				if (age == 1){
					Dage = 9;
				} else if (age == 2){
					Dage = 17;
				}
			} else if ( age > 2 && age <= 6) {
				Dage = (((age - 2) * 8.6) + 17);
			} else if (age > 6){
				Dage = (((age - 2) * 7.7) + 17);
			}
		
		} else if (size < 4){
			
			if (age < 3){
				if (age == 1){
					Dage = 14;
			    	} else if (age == 2){
					Dage = 23;
				}
			
			} else if (size == 3){
			    	if (age > 2){
					Dage = (((age - 2) * 5.34) + 24);
				}
			
			} else if (size == 2){
			    	if (age > 2){
					Dage = (((age - 2) * 4.5) + 23.8);
				}
			
			} else if (size == 1){
			    	if (age > 2){
					Dage = (((age - 2) * 4) + 23.4);
				}		
			}	
		}

	    //var Dge = size + age;

	    alert(Dage);



	});
	

    //document.getElementById("answer").innerHTML = Dage;


})


