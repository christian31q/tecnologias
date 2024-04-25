window.onload = function () {
    document.querySelector('form').addEventListener('input', (e) => {
        const data = new FormData(e.currentTarget);
        console.log(data.get('title'));

        document.getElementById("texto").innerHTML = data.get('title');

        
      });
}