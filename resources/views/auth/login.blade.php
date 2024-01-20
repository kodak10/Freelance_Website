@extends('layouts.app')
@section('content')
<style>   
    button{
        background-color: var(--color-jaune) !important;
        border-color: var(--color-jaune) !important;
    }
    .forgot{
        color: var(--color-jaune) !important;
    }
</style>
<style>
  
 
  #header.style-absolute #main-nav #menu-primary-menu>li>a{
      color: #000000 !important;
    }
    #header.style-absolute #main-nav #menu-primary-menu>li>a:hover{
      color: var(--color-jaune) !important;
    }
    #header.style-absolute #main-nav #menu-primary-menu>li.current-item>a{
      color: var(--color-jaune) !important ;
    }
</style>



  <section class="account-section">
    <div class="tf-container">
      <div class="row">
        <div class="wd-form-login">
          <h4 class="mt-5">Connexion</h4>
                @if(session('success') === false)
                <div class="alert alert-danger">
                    {{ session('message') }}
                </div>
            @endif

            @if(session('success') === true)
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
          <form method="post" action="{{route('postLogin')}}">
            @csrf
            <div class="ip">
              <label>Email<span>*</span></label>
              <input type="text" placeholder="Email" name="email">
            </div>
            <div class="ip">
              <label>Mot de passe<span>*</span></label>
              <div class="inputs-group auth-pass-inputgroup">
                <input type="password" class="input-form password-input" placeholder="Mot de passe" id="password-input"
                  required name="password">
                <a class="icon-eye-off password-addon" id="password-addon"></a>
              </div>
            </div>
            <div class="group-ant-choice">
              <div class="sub-ip"><input type="checkbox">Se souvenir de moi</div>
              <a href="/password/reset" class="forgot">Mot de passe oublié</a>
            </div>

            <button type="submit">Se Connecter</button>
            <div class="sign-up">Vous n'avez pas de compte ? <a href="/inscription">S'inscrire</a></div>
          </form>
        </div>
      </div>
    </div>
  </section>
@endsection
