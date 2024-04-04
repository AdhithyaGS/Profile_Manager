function submitform() {
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    var username = document.getElementById("username").value;
    var fullName = document.getElementById("fullName").value;

    var formData = new FormData();
    formData.append('email', email);
    formData.append('password', password);
    formData.append('username', username);
    formData.append('fullName', fullName);


    var xhr = new XMLHttpRequest();
    xhr.open("POST", "http://localhost/Project/Project_Manager/php/register.php", true);
    xhr.onload = function () {
        if (xhr.status == 200) {
            var response = JSON.parse(xhr.responseText);
            if (response.success) {
                window.location.href = "http://localhost/Project/Project_Manager/login.html";
                alert("Successfully Registered...");
            } else {
                alert("Username or Email Already Existed.");
            }
        }
    };
    xhr.send(formData);
}