<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
    <style>
        body {
    background: linear-gradient(45deg, rgb(214, 145, 66), #8B4513);
    height: 100vh;
    font-family: arial, sans-serif;
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .container {
    position: relative;
  }
  form {
    overflow: hidden;
  background: rgba(255, 255, 255, .3);
  padding: 3rem;
  height: 350px;
  border-radius: 20px;
  border-left: 1px solid rgba(255, 255, 255, .3);
  border-top: 1px solid rgba(255, 255, 255, .3);
  backdrop-filter: blur(10px);
  -webkit-backdrop-filter: blur(10px);
  -moz-backdrop-filter: blur(10px);
  box-shadow: 20px 20px 40px -6px rgba(0, 0, 0, .2);
  text-align: center;
}
p {
  color: white;
  font-weight: 500;
  opacity: .7;
  font-size: 1.4rem;
  margin-bottom: 50px;
  text-shadow: 2px 2px 4px rgba(0, 0, 0, .2);
}

a {
  text-decoration: none;
  color: #ddd;
  font-size: 12px;
}

a:hover {
  text-shadow: 2px 2px 6px #00000040;
}

a:active {
  text-shadow: none;
}
input:not([type="checkbox"]) {
  background: transparent;
  border: none;
  border-left: 1px solid rgba(255, 255, 255, .3);
  border-top: 1px solid rgba(255, 255, 255, .3);
  padding: 1rem;
  width: 200px;
  border-radius: 50px;
  backdrop-filter: blur(5px);
  -webkit-backdrop-filter: blur(5px);
  -moz-backdrop-filter: blur(5px);
  box-shadow: 4px 4px 60px rgba(0, 0, 0, .2);
  color: white;
  font-weight: 500;
  text-shadow: 2px 2px 4px rgba(0, 0, 0, .2);
  transition: all .3s;
  margin-bottom: 2em;
}
input:hover,
input[type="email"]:focus,
input[type="password"]:focus{
  background: rgba(255,255,255,0.1);
  box-shadow: 4px 4px 60px 8px rgba(0,0,0,0.2);
}
.error_message{
    color:#a01313;
    font-size:12px;
    margin-bottom:5px;
}
.remember{
    font-size: 12px;
    color:white;
    width:200px;
    display: flex;
    justify-content:start;
    margin-top:-10px;
    margin-left:5px;
}
.remember label{
    align-self:center;
    margin-left:5px;
}
input[type="checkbox"]{
    width:10px;
}
input[type="submit"] {
  margin-top: 30px;
  width: 150px;
  font-size: 1rem;
  cursor: pointer;
}

::placeholder {
  color: #fff;
}
.drop {
  background: rgba(255, 255, 255, .3);
  backdrop-filter: blur(10px);
  -webkit-backdrop-filter: blur(10px);
  border-radius: 10px;
  border-left: 1px solid rgba(255, 255, 255, .3);
  border-top: 1px solid rgba(255, 255, 255, .3);
  box-shadow: 10px 10px 60px -8px rgba(0,0,0,0.2);
  position: absolute;
  transition: all 0.2s ease;
}
.drop-1 {
  height: 80px; width: 80px;
  top: -20px; left: -40px;
  z-index: -1;
}

.drop-2 {
  height: 80px; width: 80px;
  bottom: -30px; right: -10px;
}

.drop-3 {
  height: 100px; width: 100px;
  bottom: 120px; right: -50px;
  z-index: -1;
}

.drop-4 {
  height: 120px; width: 120px;
  top: -60px; right: -60px;
}

.drop-5 {
  height: 60px; width: 60px;
  bottom: 170px; left: 90px;
  z-index: -1;
}
    </style>
</head>
<body>
    {{-- si la l'inscription à un programme a échouer en raison de la déconnexion de l'utilisateur --}}

    <div class="container">
        <form method="POST" action="{{ route('login') }}">
            @csrf
          <p>Bienvenue à la JAE</p>
          @error('email')
            <span class="error_message">{{ __($message) }}</span><br>
          @enderror
          <input type="email" id="email" name="email" autofocus autocomplete="username"  value="{{ old('email') }}" required placeholder="Email"><br>

          <input id="password" type="password" name="password"  autocomplete="current-password" required placeholder="Mot de passe" ><br>
          <div class="remember">
            <input id="remember_me" type="checkbox" class="" name="remember">
            <label for="remember_me" class="">{{ __('Se souvenir de moi') }}</label> <br>
          </div>


          <input type="submit" value="Connexion"><br>
          @if (Route::has('password.request'))
            <a href="{{ route('password.request') }}" class="my-3">{{__('Mot de passe oublié ?')}}</a>
          @endif
        </form>

        <div class="drop drop-1"></div>
        <div class="drop drop-2"></div>
        <div class="drop drop-3"></div>
        <div class="drop drop-4"></div>
        <div class="drop drop-5"></div>
    </div>
    @if(session('failled_inscrip_program'))
    <script>
        alert(' {{ session('failled_inscrip_program')}}')
    </script>
    @endif
</body>
</html>

