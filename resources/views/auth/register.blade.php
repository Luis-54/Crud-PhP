<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>

    <section class="vh-100 bg-image"
  style="background-image: url('https://images.pexels.com/photos/48896/new-york-buildings-tall-top-view-48896.jpeg?cs=srgb&dl=ciudad-desde-arriba-edificios-foto-aerea-48896.jpg&fm=jpg');">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">Crear Una Cuenta</h2>

              <form action="" method="POST">
                @csrf

                <div class="form-group mb-4">
                  <input type="text" name="name" id="exampleInputName" class="form-control form-control-lg" />
                  <label  for="exampleInputName">Nombre</label>
                  @error('name') {{$message}} @enderror
                </div>

                <div class="form-group mb-4">
                    <input type="text" name="surname"  id="exampleInputSurname" class="form-control form-control-lg" />
                    <label for="exampleInputSurname">Apellido</label>
                    @error('surname') {{$message}} @enderror
                  </div>

                <div class="form-group mb-4">
                  <input type="email" name="email" value= "{{old('email')}}" id="exampleInputEmail" class="form-control form-control-lg" />
                  <label for="exampleInputEmail">Correo Electronico</label>
                  @error('email') {{$message}} @enderror
                </div>

                <div class="form-group mb-4">
                  <input type="password" name="password" id="exampleInputPassword" class="form-control form-control-lg" />
                  <label for="exampleInputPassword">Contraseña</label>
                  @error('password') {{$message}} @enderror
                </div>

                <div class="form-group mb-4">
                  <input type="password" name="password_confirmation" id="exampleInputPassword_Confirmation" class="form-control form-control-lg" />
                  <label for="exampleInputPassword_Confirmation">Repetir Contraseña</label>
                  @error('password_confirmation') {{$message}} @enderror
                </div>



                <div class="d-flex justify-content-center">
                  <button type="submit"
                    class="btn btn-primary btn-block btn-lg gradient-custom-4 text-body">Registrarse</button>
                </div>

                <p class="text-center text-muted mt-5 mb-0">Ya Tienes Una Cuenta? <a href=" {{route('login')}} "
                    class="fw-bold text-body"><u>Ingresa Aqui</u></a></p>

              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

    </form>

    </div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>

</body>
</html>
