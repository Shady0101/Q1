// action.js
function submitForm() {
    var formData = {
        name: document.getElementById("name").value,
        age: document.getElementById("age").value,
        salary: document.getElementById("salary").value
    };
    // Logging form data for debugging
    console.log(formData);

    fetch('db.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify(formData)
    })
    .then(response => response.text())
    .then(data => {
        document.getElementById("display").innerText = data;
    })
    .catch(error => {
        console.error('Error:', error);
        document.getElementById("display").innerText = "Error occurred while submitting data";
    });
}
