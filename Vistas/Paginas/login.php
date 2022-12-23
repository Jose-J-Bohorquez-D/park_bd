<style type="text/css">
  body {
  height: 100%;
}

body {
  display: flex;
  align-items: center;
  padding-top: 40px;
  padding-bottom: 40px;
  background-color: #f5f5f5;
}

.form-signin {
  max-width: 330px;
  padding: 15px;
}

.form-signin .form-floating:focus-within {
  z-index: 2;
}

.form-signin input[type="email"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}

.form-signin input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
</style>
<main class="form-signin w-100 m-auto">
  <form class="text-center" method="post">
    <!--<img class="mb-4" src="/docs/5.2/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">-->
    <br><br><br>
    <h1 class="h3 mb-3 fw-normal">Parking</h1>
    <br>
    <div class="form-floating">
      <input name="usr_ing" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Usuario</label>
    </div><br>
    <div class="form-floating">
      <input type="pwd_ing" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Contraseña</label>
    </div>

    <div class="checkbox mb-3">
      <br>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Ingresar</button>
    <p class="mt-5 mb-3 text-muted">Todos los derechos reservados Developments_BD 2022</p>
  </form>
</main>