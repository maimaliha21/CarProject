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

        event.preventDefault();

        $.post("./php/insert.php", {
            name: $("#insertName").val(),
            type: $("#insertType").val(),
            city: $("#insertCity").val(),
            country: $("#insertCountry").val(),
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
            name: $("#Name").val(),
            type: $("#Type").val(),
            city: $("#City").val(),
            country: $("#Country").val(),
        },
            function (data, status) {
                // Reload data after update
                loadAllData();
                // Clear update made form fields
                $("#updateMadeForm")[0].reset();
            });
    });

});