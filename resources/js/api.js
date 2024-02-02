// api de BCV

const apiUrl = 'https://pydolarvenezuela-api.vercel.app/api/v1/dollar/page?page=bcv';
// let priceEur;
// let utInput = document.getElementById('ut');
// let moneda = document.getElementById('pipi');
// var calcularButton = document.getElementById("calcularButton");
// let result = document.getElementById("result");


fetch(apiUrl)
    .then(response => {
        if (!response.ok) {
            throw new Error('Error en la solicitud a la API');
        }
        return response.json();
    })
    .then(data => {

      console.log(data);

        // const dateTime = document.getElementById('date');
        // const date = data.datetime.date;
        // const time = data.datetime.time;
        // dateTime.textContent = "Ultima fecha de actualización: " + date + " a la hora: " + time;


        // const dolar = document.getElementById('usd');
        // const priceUsd = data.monitors.usd.price;
        // dolar.setAttribute('data-count', priceUsd) ;


        // const euro = document.getElementById('eur');
        // priceEur = data.monitors.eur.price;
        // euro.setAttribute('data-count', priceEur) ;;
        
        // $('.counter').each(function() {
        //     var $this = $(this),
        //         countTo = $this.attr('data-count');
            
        //     $({ countNum: $this.text()}).animate({
        //       countNum: countTo
        //     },
        //     {
        //       duration: 4000,
        //       easing:'linear',
        //       step: function() {
        //         $this.text(Math.floor(this.countNum));
        //       },
        //       complete: function() {
        //         $this.text(this.countNum);
        //       }
          
        //     });  
            
        //   });
    })
    .catch(error => {
        console.error('Error: ', error);
    });