//Calculate actual age of dog using the slope formula based on the graph values
function calculateAge(age, size, Dage) {
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
		return Dage;
}

//show this when age is calculated using animations
function showTrueAge() {

	if ($("#humanAge").val()){

		var age = parseFloat($("#humanAge").val());
		var size = parseFloat($("input[name=dogAgeRadio]:checked").val());
		var Dage = 0;

		var finalAge = calculateAge(age, size, Dage);
		finalAge = finalAge.toFixed(1);

		$("#ageResult").hide();
		$("#ageResult").show("blind", 1000);
		$("#answer").empty();
		$("#answer").append(finalAge);
		//alert("dog is " + finalAge);
	}

}



$(function(){
	$("#dogAgeCalcDiv").show();

	$( "input[type='radio']" ).checkboxradio({
		icon: false
	});
	
	$(".dogAgeButton").button();

	$("#ageResult").hide();

	$("#getDogInfo").validate({

		messages: {
			dogAgeRadio: "Please select a size",
			humanAge: "Please enter a valid age"
		},
		errorPlacement: function(error, element) {
			if (element.is("input[name='dogAgeRadio']")) {
				error.appendTo("#dogSizeError");
			}
			if (element.is("input[name='humanAge']")) {
				error.appendTo("#humanAgeError");
			}
 		}
		
	});


	//show dogs true age when clicking the submit/woof button
	$( ".dogAgeButton" ).on("click", function() {
		if ($("#getDogInfo").valid()) {
			showTrueAge();
		}
		
	});

	//show dogs true age when pressing the enter key
	$("#humanAge").keypress(function(event){
    	if(event.keyCode == 13){
    		event.preventDefault();
			if ($("#getDogInfo").valid()) {
				showTrueAge();
			}
    	}
	});




})


