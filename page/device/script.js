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
            searchNo: $("#searchNo").val()
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
            no: $("#insertNo").val(),
            name: $("#insertName").val(),
            price: $("#insertPrice").val(),
            weight: $("#insertWeight").val(),
            made: $("#insertMade").val(),
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
            no: $("#no").val(),
            name: $("#name").val(),
            price: $("#price").val(),
            weight: $("#weight").val(),
            made: $("#made").val(),
        },
            function (data, status) {
                // Reload data after update
                loadAllData();
                // Clear update made form fields
                $("#updateMadeForm")[0].reset();
            });
    });

});