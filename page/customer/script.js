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
            id: $("#insertId").val(),
            f_name: $("#insertf_name").val(),
            l_name: $("#insertl_name").val(),
            address: $("#insertAddress").val(),
            job: $("#insertJob").val(),
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
            id: $("#Id").val(),
            f_name: $("#f_name").val(),
            l_name: $("#l_name").val(),
            address: $("#Address").val(),
            job: $("#Job").val(),
        },
            function (data, status) {
                // Reload data after update
                loadAllData();
                // Clear update made form fields
                $("#updateMadeForm")[0].reset();
            });
    });

});