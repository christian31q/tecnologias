window.onload = function (){
  
  document.addEventListener('submit', function (event) {

    // Prevent form from submitting to the server
    event.preventDefault();
    var formData = new URLSearchParams(new FormData(event.target));



    ajax("registro.php",formData);
  
  });
}

function serializeForm(form) {
	var obj = {};
	var formData = new FormData(form);
	for (var key of formData.keys()) {
		obj[key] = formData.get(key);
	}
	return obj;
}

function ajax(url,obj) {
  const xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
      if(xhttp.readyState === 4 && xhttp.status === 200){
          console.log(xhttp.response);
        }           
    }
  xhttp.open("post", url, true);
  xhttp.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
  xhttp.send(obj.toString());
}
