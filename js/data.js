window.onload = function(){
    function ajax() {
        const xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if(xhttp.readyState === 4 && xhttp.status === 200){
                let data = JSON.parse(xhttp.response);
                document.getElementById("rol").innerText += " " + data.roles[0].usuario.nombre; 
            }
                       
          }
        xhttp.open("GET", "registro.json", true);
        xhttp.send();
      }

      ajax();

}