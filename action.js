function submitForm() {
    // Get input values
    var name = document.getElementById("name").value;
    var age = document.getElementById("age").value;
    var salary = document.getElementById("salary").value;

    // Construct the message
    
    if(salary>=1000){
        var message = "high";
    }else if(salary<=500 & salary>100){
        var message = "middle"
    }else{
        var message = "lower"
    }

    // Display the message in an HTML element
    document.getElementById("display").innerHTML = message;
}
