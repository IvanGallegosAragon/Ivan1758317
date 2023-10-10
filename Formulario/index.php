<?php
include "head.php"
?>
<body>
    <div class="row">
        <form class="col s12" action="form.php" method="post">
          <div class="row">
            <div class="input-field col s6">
              <i class="material-icons prefix">account_circle</i>
              <input id="icon_prefix" name="txtnombre" type="text" class="validate">
              <label class="active" for="icon_prefix">Nombre Completo</label>
              <!-- Agregamos la class "active" para que no se supeponga la entrada a lo que pide -->
            </div>
            <div class="input-field col s6">
              <i class="material-icons prefix">star</i>
              <input id="icon_telephone" type="tel" name="txtedad" class="validate">
              <label class="active" for="icon_telephone"  >Edad</label>
            </div>
            <div class="input-field col s6">
              <i class="material-icons prefix">email</i>
              <input id="icon_telephone" type="tel" name="txtemail" class="validate">
              <label class="active" for="icon_telephone"  >Email</label>
            </div>
            <div class="input-field col s6">
              <i class="material-icons prefix">vpn_key</i>
              <input id="icon_telephone" type="tel" name="txtcontrasena" class="validate">
              <label class="active" for="icon_telephone"  >Contraseña</label>
            </div>
          </div>
          <button>Enviar</button>
        </form>
      </div>
</body>
<?php
include "footer.php"
?>