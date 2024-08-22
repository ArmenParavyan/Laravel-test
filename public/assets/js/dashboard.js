const token = localStorage.getItem("auth_token"); 

fetch('/api/getAuthUser', {
    method: "GET",
    headers: {
        'Content-Type': 'application/json',
        'Accept': 'application/json', 
        'Authorization': `Bearer ${token}`
    }
})
.then(response => response.json())
.then(data => {
    console.log(data);
})
.catch(error => {
    console.error('Ошибка:', error);
});