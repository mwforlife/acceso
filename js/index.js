$(document).ready(function () {
  $("#formlogin").on("submit", function (e) {
    e.preventDefault();
    var rut = $("#rut").val();
    // Obtén todas las cookies como una cadena
    var cookies = document.cookie;

    // Divide la cadena de cookies en un array
    var cookieArray = cookies.split("; ");

    // Busca la cookie "tabletId" en el array
    var tabletId = null;
    for (var i = 0; i < cookieArray.length; i++) {
      var cookie = cookieArray[i];
      if (cookie.indexOf("tabletId=") === 0) {
        // Encuentra la cookie "tabletId"
        tabletId = cookie.substring(9);
        break;
      }
    }

    // Comprueba si se encontró la cookie
    if (tabletId !== null) {
      // La cookie "tabletId" se encontró y su valor está en la variable "tabletId"
      console.log("El valor de la cookie tabletId es: " + tabletId);
    } else {
      // La cookie "tabletId" no se encontró
      console.log("La cookie tabletId no se encontró.");
    }

    if (!validarRut(rut)) {
      $("#message").html(
        "<div class='alert alert-danger' role='alert'>Rut inválido</div>"
      );
      return false;
    }
    $.ajax({
      type: "POST",
      url: "php/validation/login.php",
      data: $(this).serialize() + "&tabletId=" + tabletId,
      success: function (response) {
        try {
          var jsonData = JSON.parse(response);
          if (jsonData.status == true) {
            $("#message").html(
              "<div class='alert alert-success' role='alert'>" +
                jsonData.message +
                "</div>"
            );
            setTimeout(function () {
              location.reload();
            }, 1500);
          } else {
            $("#message").html(
              "<div class='alert alert-danger' role='alert'>" +
                jsonData.message +
                "</div>"
            );
          }
        } catch (error) {
          $("#message").html(
            "<div class='alert alert-danger' role='alert'>" +
              response +
              "</div>"
          );
        }
      },
    });
  });

  $("body").on("click", function () {
    // Verificamos si la API de Pantalla Completa es compatible con el navegador
    ponerenfullscreen();
    //Verificar si se cerró el fullscreen cada 0.5 segundos
    /*setInterval(function () {
      verificarfullscreen();
    }, 500);*/
  });
});

//Ejecutar clic en el body para activar el fullscreen
function crearclickbody() {
  var body = document.getElementsByTagName("body")[0];
  body.click();
}

function verificarfullscreen() {
  if (document.fullscreenElement) {
    // alert('Hay un elemento en pantalla completa');
    return true;
  } else {
    crearclickbody();
  }
}

function ponerenfullscreen() {
  // Verificamos si la API de Pantalla Completa es compatible con el navegador
  if (document.documentElement.requestFullscreen) {
    // Solicitamos el modo de pantalla completa para el elemento raíz del documento (puede ser cualquier elemento HTML)
    document.documentElement.requestFullscreen();
  } else if (document.documentElement.mozRequestFullScreen) {
    // Firefox
    document.documentElement.mozRequestFullScreen();
  } else if (document.documentElement.webkitRequestFullscreen) {
    // Chrome, Safari y Opera
    document.documentElement.webkitRequestFullscreen();
  } else if (document.documentElement.msRequestFullscreen) {
    // Internet Explorer
    document.documentElement.msRequestFullscreen();
  }
}

function sacarfullsreen() {
  if (document.exitFullscreen) {
    document.exitFullscreen();
  } else if (document.mozCancelFullScreen) {
    // Firefox
    document.mozCancelFullScreen();
  } else if (document.webkitExitFullscreen) {
    // Chrome, Safari y Opera
    document.webkitExitFullscreen();
  } else if (document.msExitFullscreen) {
    // Internet Explorer
    document.msExitFullscreen();
  }
}
