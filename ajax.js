document.addEventListener("DOMContentLoaded", getUser);

function getUser() {
    let getUserButton = document.querySelector('.getUser');
    let result = document.querySelector('.result');

    getUserButton.addEventListener('click', ()=> {
        const ajax = new XMLHttpRequest();
        const method = 'GET';
        const url = "ajax.php";
        const asynchronous = true;

        ajax.open(method, url, asynchronous)
        ajax.send();
        ajax.onreadystatechange = function ()
        {
            if (this.readyState == 4 && this.status == 200)
            {
                const data = JSON.parse(this.responseText);
                result.innerHTML = "Name:" + data[0]['name'] + "<br>" + "Surname:" + + data[0]['surname'] + "<br>" + "Login: " + data[0]['login'] + "<br>"+ "Birthday:" + data[0]['birthday'] + "<br>" + "Pesel:" + data[0]['pesel'];
            }
        }    })

}

