$(".calculator input").on("input change", function (event) {
    var parameterName =  $(this).attr("id").split("calc-")[1];

    switch (parameterName) {
        case "age":
            $("#calc-age_value").html("Age: " + $(this).val());
            break;
    }

    var age = parseInt($("#calc-age").val(), 10);
});
