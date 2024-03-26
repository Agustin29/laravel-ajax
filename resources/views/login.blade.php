@extends('layouts.app')

@section('title', 'Inicio de sesión')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-sm-9 col-md-7 col-lg-5 mx-auto my-5">
      <div class="card border-0 shadow rounded-3 my-5">
        <div class="card-body p-4 p-sm-5">
          <h5 class="card-title text-center mb-5 fw-bold fs-5">Sistema de Usuarios</h5>
          <form>
            <div class="form-floating mb-3">
              <input type="email" class="form-control" placeholder="usuario">
              <label for="floatingInput">Email</label>
            </div>
            <div class="form-floating mb-3">
              <input type="password" class="form-control" id="floatingPassword" placeholder="contraseña">
              <label for="floatingPassword">Contraseña</label>
            </div>
            <div class="d-grid">
              <button class="btn btn-primary btn-login text-uppercase fw-bold" type="submit">Ingresar</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('custom-css')
<style>
  .btn-login {
    font-size: 0.9rem;
    letter-spacing: 0.05rem;
    padding: 0.75rem 1rem;
  }
</style>
@endsection