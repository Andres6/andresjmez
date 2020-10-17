//Calculate actual age of dog using the slope formula based on the graph values
function calculateAge(age, size, Dage) {
	if (size == 4) {
		if (age < 3) {
			if (age == 1) {
				Dage = 9;
			} else if (age == 2) {
				Dage = 17;
			}
		} else if (age > 2 && age <= 6) {
			Dage = (((age - 2) * 8.6) + 17);
		} else if (age > 6) {
			Dage = (((age - 2) * 7.7) + 17);
		}

	} else if (size < 4) {

		if (age < 3) {
			if (age == 1) {
				Dage = 14;
			} else if (age == 2) {
				Dage = 23;
			}

		} else if (size == 3) {
			if (age > 2) {
				Dage = (((age - 2) * 5.34) + 24);
			}

		} else if (size == 2) {
			if (age > 2) {
				Dage = (((age - 2) * 4.5) + 23.8);
			}

		} else if (size == 1) {
			if (age > 2) {
				Dage = (((age - 2) * 4) + 23.4);
			}
		}
	}
	return Dage;
}


//show this when age is calculated using animations
function showTrueAge() {

	if ($("#humanAge").val()) {

		var age = parseFloat($("#humanAge").val());
		var size = parseFloat($("input[name=dogAgeRadio]:checked").val());
		var Dage = 0;

		var finalAge = calculateAge(age, size, Dage);
		finalAge = finalAge.toFixed(1);

		$("#ageResult").hide();
		$("#ageResult").show();
		//$("#ageResult").show("blind", 1000);
		$("#answer").empty();
		$("#answer").append(finalAge);
		//alert("dog is " + finalAge);
	}

}



//get image and info for breed
function getDogByBreed(breed_id) {
	// search for images that contain the breed (breed_id=) and attach the breed object (include_breed=1)
	$.get('https://api.thedogapi.com/v1/images/search?breed_id=' + breed_id, function (data) {
		image = data[0];
		console.log(data);
		$('#breed_img').attr('src', image.url);
		$("#breed_table tr").remove();
		var breed_data = image.breeds[0]
		$.each(breed_data, function (key, value) {
			// as 'weight' and 'height' are objects that contain 'metric' and 'imperial' properties, just use the metric string
			if (key == 'weight' || key == 'height') value = value.metric
			// add a row to the table
			$("#breed_table").append("<tr><td>" + key + "</td><td>" + value + "</td></tr>");
		});


	});
}


// Load all the Breeds info from API
function getBreeds() {
	$.get("https://api.thedogapi.com/v1/breeds", function (data) {
		populateBreedsSelect(data)
		//breeds = data
	});

}


// Put the breeds in the Select control
function populateBreedsSelect(breeds) {
	$(".breedSelect").empty().append(function () {
		var output = "";
		output = '<option disabled selected>Select a breed</option>';
		$.each(breeds, function (key, value) {
			output += '<option id="' + value.id + '">' + value.name + '</option>';
		});
		return output;
	});
}



$(function () {
	$("#dogAgeCalcDiv").show();

	$("input[name='dogAgeRadio']").checkboxradio({
		icon: false
	});

	$(".dogAgeButton").button();

	$("#ageResult").hide();

	$("#getDogInfo").validate({

		messages: {
			dogAgeRadio: "Please select a size",
			humanAge: "Please enter a valid age"
		},
		errorPlacement: function (error, element) {
			if (element.is("input[name='dogAgeRadio']")) {
				error.appendTo("#dogSizeError");
			}
			if (element.is("input[name='humanAge']")) {
				error.appendTo("#humanAgeError");
			}
		}

	});


	//show dogs true age when clicking the submit/woof button
	$(".dogAgeButton").on("click", function () {
		if ($("#getDogInfo").valid()) {
			showTrueAge();
		}

	});

	//show dogs true age when pressing the enter key
	$("#humanAge").keypress(function (event) {
		if (event.keyCode == 13) {
			event.preventDefault();
			if ($("#getDogInfo").valid()) {
				showTrueAge();
			}
		}
	});

	//$(".breedSelect").selectmenu();

	$("#breed_img_div").hide();
	$("#breed_info").hide();


	// Get the dog breeds and place them in selection - need to use jquery UI docs instead of regular jquery
	$(".breedSelect").selectmenu({
		appendTo: "#breedSelectid"
	});

	// Dog breed information
	$(".breedSelect").selectmenu({
		change: function (event, ui) {
			$("#breed_img_div").show();
			$("#breed_info").show();
			var id = $(this).children(":selected").attr("id");
			getDogByBreed(id)
		}
	});

	getBreeds();

})

