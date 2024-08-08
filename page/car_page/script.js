$(document).ready(function () {
    // Function to load all data initially
    function loadAllData() {
        $.post("./php/search.php", {},
            function (data, status) {
                $("#res").html(data);
                $("#res table").addClass("result-table");
            });
    }

    // Load all data initially
    loadAllData();

    // Handle search button click
    $("#myButton").click(function () {
        console.log('Clicked');
        $.post("./php/search.php", {
            carName: $("#carName").val()
        },
            function (data, status) {
                $("#res").html(data);
                $("#res table").addClass("result-table");
            });
    });

    // Handle insert form submission
    $("#insertForm").submit(function (event) {

        console.log("Insert Clicked!");
        event.preventDefault();

        $.post("./php/insert.php", {
            carName: $("#insertCarName").val(),
            carModel: $("#insertCarModel").val(),
            carYear: $("#insertCarYear").val(),
            carMade: $("#insertCarMade").val(),
        },
            function (data, status) {
                // Reload data after insertion
                loadAllData();
                // Clear insert form fields
                $("#insertForm")[0].reset();
            });
    });

    //  Handle update made form submission
    $("#updateMadeForm").submit(function (event) {
        event.preventDefault();

        $.post("./php/update.php", {
            carName: $("#updateCarName").val(),
            carModel: $("#updateCarModel").val(),
            carYear: $("#updateCarYear").val(),
            carMade: $("#updateCarMade").val(),
        },
            function (data, status) {
                // Reload data after update
                loadAllData();
                // Clear update made form fields
                $("#updateMadeForm")[0].reset();
            });
    });

});