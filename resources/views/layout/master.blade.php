<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hello Bulma!</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <style>
      .ontop-image{
        object-fit:cover;
        width:1600px;
        height:400px;
        filter:blur(3px);
        -webkit-transition: .3s ease-in-out;
	      transition: .3s ease-in-out;
      }
      .ontop-image:hover{
        filter:blur(0px);
      }

      .thumbnail-img{
        object-fit:cover;
        width:280px;
        height:160px;
      }

      @media only screen and (max-width: 768px) {

        .thumbnail-img{
        object-fit:cover;
        width:700px;
        height:280px;
        }
      }
    </style>
  </head>
  <body>

    <nav class="navbar" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
          <a class="navbar-item" href="/">
            <img src="http://via.placeholder.com/112x28" width="112" height="28">
          </a>
      
          <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
          </a>
        </div>
      
        <div id="navbarBasicExample" class="navbar-menu">
          <div class="navbar-start">
            <a class="navbar-item">
              Home
            </a>
      
            <a class="navbar-item">
              Découvrir la sélection
            </a>
      
            <!-- <div class="navbar-item has-dropdown is-hoverable">
              <a class="navbar-link">
                More
              </a>
      
                <div class="navbar-dropdown">
                    <a class="navbar-item">
                    About
                    </a>
                    <a class="navbar-item">
                    Jobs
                    </a>
                    <a class="navbar-item">
                    Contact
                    </a>
                    <hr class="navbar-divider">
                    <a class="navbar-item">
                    Report an issue
                    </a>
                </div>
                
            </div> -->

          </div>
      
          <div class="navbar-end">
            <div class="navbar-item">
                
                <a href="{{ route('admin.index')}}" class="button is-light is-small">  
                    <span>Administration</span>
                    <span class="icon is-small">
                        <i class="fa fa-user-shield"></i>
                    </span>
                </a>

            </div>
          </div>
        </div>
      </nav>


  <section class="section">

    
    <div class="container">

      @yield('content')

    </div>

  </section>

  <script>

document.addEventListener('DOMContentLoaded', () => {
  (document.querySelectorAll('.notification .delete') || []).forEach(($delete) => {
    const $notification = $delete.parentNode;

    $delete.addEventListener('click', () => {
      $notification.parentNode.removeChild($notification);
    });
  });
});

    
    document.addEventListener('DOMContentLoaded', () => {

      // Get all "navbar-burger" elements
      const $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

      // Check if there are any navbar burgers
      if ($navbarBurgers.length > 0) {

        // Add a click event on each of them
        $navbarBurgers.forEach( el => {
          el.addEventListener('click', () => {

            // Get the target from the "data-target" attribute
            const target = el.dataset.target;
            const $target = document.getElementById(target);

            // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
            el.classList.toggle('is-active');
            $target.classList.toggle('is-active');

          });
        });
      }
});
  </script>

</body>
</html>