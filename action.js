function submitForm() {
    // Get input values
    var name = document.getElementById("name").value;
    var age = document.getElementById("age").value;
    var salary = document.getElementById("salary").value;

    // Construct the message
    var message;
    if (salary >= 1000) {
        message = "high";
    } else if (salary <= 500 && salary > 100) {
        message = "middle";
    } else {
        message = "lower";
    }

    // Send data to PHP script using AJAX
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "update_database.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            // Display response from server
            document.getElementById("display").innerHTML = xhr.responseText;
        }
    };
    xhr.send("name=" + name + "&age=" + age + "&salary=" + salary + "&message=" + message);
}
