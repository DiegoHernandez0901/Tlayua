paypal.Buttons({
    // Configura el entorno de PayPal
    createOrder: function(data, actions) {
      return actions.order.create({
        purchase_units: [{
          amount: {
            value: '10.00' // Reemplaza con el monto que deseas
          }
        }]
      });
    },

    onApprove: function(data, actions) {
        return actions.order.capture().then(function(details) {
          // Muestra un mensaje de éxito
          document.getElementById('result-message').innerHTML = 'Pago completado. ID de transacción: ' + details.id;
        });
      }
    }).render('#paypal-button-container'); // Renderiza el botón en el elemento con el ID 'paypal-button-container'