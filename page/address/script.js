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
            searchId: $("#searchId").val()
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
            id: $("#insertCarId").val(),
            buidling: $("#insertCarBuidling").val(),
            street: $("#insertCarStreet").val(),
            city: $("#insertCarCity").val(),
            country: $("#insertCarCountry").val(),
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
            id: $("#id").val(),
            buidling: $("#buidling").val(),
            street: $("#street").val(),
            city: $("#city").val(),
            country: $("#country").val(),
        },
            function (data, status) {
                // Reload data after update
                loadAllData();
                // Clear update made form fields
                $("#updateMadeForm")[0].reset();
            });
    });

});