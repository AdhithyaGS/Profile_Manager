function auth() {
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;

    var formData = new FormData();
    formData.append('email', email);
    formData.append('password', password);

    var xhr = new XMLHttpRequest();
    xhr.open("POST", "http://localhost/Project/Profile Manager/php/login.php", true);
    xhr.onload = function () {
        if (xhr.status == 200) {
            var response = JSON.parse(xhr.responseText);
            if (response.success) {
                window.location.href = "http://localhost/Project/Profile Manager/profile.html";
            } else {
                alert("Incorrect email or password. Please try again.");
            }
        }
    };
    xhr.send(formData);
}
