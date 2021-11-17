<div class="container">
    <form action="">
        <h1 class="title is-1">Registrate aquí:</h1>
        <div class="field">

            <label class="label">Nombre de usuario</label>
            <div class="control">
                <input class="input" type="text" placeholder="e.g Alex Smith">
            </div>

            <label class="label">Email</label>
            <div class="control">
                <input class="input" type="email" placeholder="e.g. alexsmith@gmail.com">
            </div>
            
            <label class="label pt-4">Contraseña</label>
            <div class="control">
                <input class="input" type="password" name="contrasena" id="" style="text-transform: capitalize;"
                    required>
            </div>

            <label class="label">Numero de telefono</label>
            <div class="control">
                <input class="input" type="text" placeholder="e.g Alex Smith">
            </div>

            <label class="label">Fecha de nacimiento</label>
            <div class="control">
                <input class="input" type="text" placeholder="e.g Alex Smith">
            </div>

            <label class="label">Genero</label>
            <div class="control">
                <input class="input" type="text" placeholder="e.g Alex Smith">
            </div>

            <div class="control">
                <input class="button mt-4 is-link" type="submit" name="btn_registrar" id="" value="Enviar">

            </div>
        </div>
    </form>

    <div class="notification">
  <button class="delete"></button>
  Lorem ipsum
</div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', () => {
  (document.querySelectorAll('.notification .delete') || []).forEach(($delete) => {
    const $notification = $delete.parentNode;

    $delete.addEventListener('click', () => {
      $notification.parentNode.removeChild($notification);
    });
  });
});
</script>