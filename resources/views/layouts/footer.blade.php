<section class="footer-style1 pt25 pb-0">
    <div class="container">
      <div class="row bb-white-light pb10 mb60">
        <div class="col-md-7">
          <div class="d-block text-center text-md-start justify-content-center justify-content-md-start d-md-flex align-items-center mb-3 mb-md-0">
            <a class="fz17 fw500 text-white mr15-md mr30" href="#">Conditions d'utilisation</a>
            <a class="fz17 fw500 text-white mr15-md mr30" href="#">Politique de confidentialité</a>
          </div>
        </div>
        <div class="col-md-5">
          <div class="social-widget text-center text-md-end">
            <div class="social-style1">
              <a class="text-white me-2 fw500 fz17" href="#">Suivez-nous</a>
              <a href="#"><i class="fab fa-facebook-f list-inline-item"></i></a>
              <a href="#"><i class="fab fa-twitter list-inline-item"></i></a>
              <a href="#"><i class="fab fa-instagram list-inline-item"></i></a>
              <a href="#"><i class="fab fa-linkedin-in list-inline-item"></i></a>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-6 col-lg-3">
          <div class="link-style1 mb-4 mb-sm-5">
            <h5 class="text-white mb15">Lien de Navigation</h5>
            <div class="link-list">
              <a href="/">Accueil</a>
              <a href="/about">A Propos</a>
              <a href="/services">Touver un service</a>
              <a href="/contact">Contact</a>
              <a href="/login">Se Connecter</a>
              <a href="/register">S'Inscrire</a>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3">
          <div class="link-style1 mb-4 mb-sm-5">
            <h5 class="text-white mb15">Nos départements</h5>
            <ul class="ps-0">
                @foreach ($categories as $categorie )
                    <li><a href="#" style="text-transform: uppercase">{{$categorie->libelle}}</a></li>
                @endforeach

            </ul>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3">
          <div class="link-style1 mb-4 mb-sm-5">
            <h5 class="text-white mb15">Support</h5>
            <ul class="ps-0">
              <li><a href="#">Faq</a></li>
              <li><a href="#">Help & Support</a></li>
              <li><a href="#">Trust & Safety</a></li>
            </ul>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3">
          <div class="footer-widget">
            <div class="footer-widget mb-4 mb-sm-5">
              <div class="mailchimp-widget">
                <h5 class="title text-white mb20">S'abonner</h5>
                <div class="mailchimp-style1">
                  <input type="email" class="form-control" placeholder="Entrer votre Email">
                  <button type="submit">Envoyer</button>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
    <div class="container white-bdrt1 py-4">
      <div class="row align-items-center">
        <div class="col-md-6">
          <div class="text-center text-lg-start">
            <p class="copyright-text mb-2 mb-md-0 text-white-light ff-heading">© ElBaraGroup 2023. Tous les droits sont réservés.</p>
          </div>
        </div>
        <div class="col-md-6">
          <div class="footer_bottom_right_btns text-center text-lg-end">
            <ul class="p-0 m-0">

              <li class="list-inline-item">
                <select class="selectpicker show-tick">
                  <option>Français</option>
                  <option>English</option>
                  <option>Spanish</option>
                </select>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>