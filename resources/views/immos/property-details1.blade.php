<!DOCTYPE html>
<html lang="en">
  <head>
  <title>rencontre immo</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Roboto+Mono:300,400,500"> 
    <link rel="stylesheet" href="{{ asset('fonts/icomoon/style.css')}}">

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{ asset('css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{ asset('css/mediaelementplayer.css')}}">
    <link rel="stylesheet" href="{{ asset('css/animate.css')}}">
    <link rel="stylesheet" href="{{ asset('fonts/flaticon/font/flaticon.css')}}">
    <link rel="stylesheet" href="{{ asset('css/fl-bigmug-line.css')}}">
    
  
    <link rel="stylesheet" href="{{ asset('css/aos.css')}}">

    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    
  </head>
  <body>
  
  <div class="site-loader"></div>
  
  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->

    <div class="site-section site-section-sm">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div>
            <?php foreach($details as $key=>$value): ?>
              <div class="slide-one-item home-slider owl-carousel">
              
              <?php foreach($value['photos'] as $key=>$value): ?>
                <div><img src="{{asset('photos_house/'.$value)}}" alt="Image" class="img-fluid"></div>
                <?php endforeach; ?>
                
              </div>
              <?php endforeach; ?>
            </div>
            <div class="bg-white property-body border-bottom border-left border-right">
              <div class="row mb-5">
              <?php foreach($details as $key=>$value): ?>
                <div class="col-md-6">
                  <strong class="text-success h1 mb-3">FCFA {{ $value['prix'] }}</strong>
                </div>
                <div class="col-md-6">
                  <ul class="property-specs-wrap mb-3 mb-lg-0  float-lg-right">
                  <li>
                    <span class="property-specs">Besoin</span>
                    <span class="property-specs-number">{{ $value['nature'] }}</span>
                    
                  </li>
                </ul>
                </div>
                <?php endforeach; ?>
              </div>
              <div class="row mb-5">
              <?php foreach($details as $key=>$value): ?>
                <div class="col-md-6 col-lg-4 text-center border-bottom border-top py-3">
                  <span class="d-inline-block text-black mb-0 caption-text">ville</span>
                  <strong class="d-block">{{ $value['ville'] }}</strong>
                </div>
                <div class="col-md-6 col-lg-4 text-center border-bottom border-top py-3">
                  <span class="d-inline-block text-black mb-0 caption-text">quartier</span>
                  <strong class="d-block">{{ $value['quartier'] }}</strong>
                </div>
                <div class="col-md-6 col-lg-4 text-center border-bottom border-top py-3">
                  <span class="d-inline-block text-black mb-0 caption-text">superficie</span>
                <strong class="property-price text-primary mb-3 d-block text-danger">{{ $value['superficie'] }} <var>m<sup>2</sup></var></strong>
                </div>
                <?php endforeach; ?>
              </div>

              <div class="row no-gutters mt-5">
                <div class="col-12">
                  <h2 class="h4 text-black mb-3">Gallerie</h2>
                </div>
                <?php foreach($details as $key=>$value): ?>
                <div class="col-sm-6 col-md-4 col-lg-3">
                <?php foreach($value['photos'] as $key=>$value): ?>
                  <a href="{{asset('photos_house/'.$value)}}" class="image-popup gal-item"><img src="{{asset('photos_house/'.$value)}}" alt="Image" class="img-fluid"></a>
                  <?php endforeach; ?>
                </div>
                <?php endforeach; ?>
      
              </div>
            </div>
          </div>
          <div class="col-lg-4">

            <div class="bg-white widget border rounded">

              <h3 class="h4 text-black widget-title mb-3">Contact du propriétaire</h3>
              <form action="" class="form-contact-agent">
              <?php foreach($details as $key=>$value): ?>
                <div class="form-group">
                  <label for="name">nom</label>
                  <input type="text" id="name" class="form-control" disabled="disabled" placeholder="{{ $value['nom'] }}">
                </div>
                <div class="form-group">
                  <label for="email">telephone</label>
                  <input type="email" id="email" class="form-control" disabled="disabled" placeholder="{{ $value['userPhone'] }}">
                </div>
                </form>
                <div class="form-group">
                
                  <center><a href="{{asset('localisation_doc/'.$value['localisation'])}}" id="plan" class="btn btn-outline-primary waves-effect">obtenir plan de localisation</a></center>
                </div>
                <?php endforeach; ?>
              
            </div>

            <div class="bg-white widget border rounded">
            <?php foreach($details as $key=>$value): ?>
              <h3 class="h4 text-black widget-title mb-3">Description</h3>
              <p>{{ $value['description'] }}</p>
              <?php endforeach; ?>
            </div>

          </div>
          
        </div>
      </div>
    </div>

    <div class="site-section site-section-sm bg-light">
      <div class="container">


  </div>
  <script>

</script>
  <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
  <script src="{{asset('js/jquery-migrate-3.0.1.min.js')}}"></script>
  <script src="{{asset('js/jquery-ui.js')}}"></script>
  <script src="{{asset('js/popper.min.js')}}"></script>
  <script src="{{asset('js/bootstrap.min.js')}}"></script>
  <script src="{{asset('js/owl.carousel.min.js')}}"></script>
  <script src="{{asset('js/mediaelement-and-player.min.js')}}"></script>
  <script src="{{asset('js/jquery.stellar.min.js')}}"></script>
  <script src="{{asset('js/jquery.countdown.min.js')}}"></script>
  <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{asset('js/bootstrap-datepicker.min.js')}}"></script>
  <script src="{{asset('js/aos.js')}}"></script>
  <script src="{{asset('js/circleaudioplayer.js')}}"></script>

  <script src="{{asset('js/main.js')}}"></script>
    
  </body>
</html>