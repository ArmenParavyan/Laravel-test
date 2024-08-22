const login = document.getElementById("login");
login.addEventListener("click", function(event) {
    event.preventDefault(); 
    myFunction();
});

function myFunction() {
    const form = document.querySelector('form');
    const formData = new FormData(form);

    const formDataObj = Object.fromEntries(formData.entries());
    fetch('/api/login', {
        method: "POST",
        headers: {
            'Content-Type': 'application/json',
            'Accept': 'application/json'
        },
        body: JSON.stringify(formDataObj)
    })
    .then(response => response.json())
    .then(data => {
        console.log(data);
        alert(data.message);
        if (data.success) {
            localStorage.setItem('auth_token', data.token);
            window.location.href = "/dashboard";
        }
    })
    .catch(error => {
        console.error('Ошибка:', error);
    });
}