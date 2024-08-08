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
            searchCarName: $("#searchCarName").val()
        },
            function (data, status) {
                $("#res").html(data);
                $("#res table").addClass("result-table");
            });
    });

    $("#updateCarPart").click(function (event) {
        console.log("Values: ", $("#carName").val(), $("#partNo").val());
        event.preventDefault();
        $.post("./php/update.php", {
            car: $("#carName").val(),
            part: $("#partNo").val(),
        
        },
            function (data, status) {
                // Reload data after update
                loadAllData();
                // Clear update made form fields
                $("#updateCarPartForm")[0].reset();
            });
    });

});