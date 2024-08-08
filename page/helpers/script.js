
function get_values(id, table_name, column_name) {
    console.log(id, table_name, column_name);
    $.post("../helpers/get_values.php", {
        table_name: table_name,
        column_name: column_name
    },
        function (data, status) {
            console.log(data);

            // Assuming data is an array of options, you can append them to the select element
            var selectElement = document.getElementById(id);

            // Clear existing options
            selectElement.innerHTML = "";
            data = JSON.parse(data)
            // Append new options based on the received data
            for (var i = 0; i < data.length; i++) {
                var option = document.createElement("option");
                option.text = data[i];
                option.value = data[i];
                selectElement.add(option);
            }
        });
}