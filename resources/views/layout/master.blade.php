<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <meta name="keywords" content="@yield('meta_keywords')">
    <meta name="description" content="@yield('meta_description')">
    <link rel="icon" href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIAAAACACAYAAADDPmHLAAAIZklEQVR4Xu2dachNXRTH12OeM8/KWCghIQkZQki+SJJIESLKF8kspJTI9EXkgxQZEiGZkhCFhJB5lpkns7f/rrdX8tp7r3PvPfvu81/1fLpr7XP3+v+ec/fZe+19SkTkp9Aym4ESApBZ7U3HCUC29ScAGdefABAADgIzzQDHAJmWn4PAjMtPAAgA5wGyzQDHANnWn4+BGdefABAAzgNkmgGOATItPx8DMy4/ASAAnAfINgMcA2Rbfz4GZlx/AkAAOA+QaQY4Bsi0/HwMzLj8BIAAcB4g2wxwDJBt/cN+DJwwYYKsWLEiLxL9+PFDPn36JB8/fpS3b9+av5cvX8rVq1dl3759cvny5bxcN7RGg74DLFy4UBYsWJBKzgDI06dPDQjr1683UMRoBMBR1Q8fPsiOHTtk/vz58vDhQ8eo8N0IgEKjc+fOyfDhw+XZs2eK6LBCCIBSD/xELFu2TObNm6dsIYwwApBQB4wTevToIXfv3k3YUjrhBCAHeS8tLZUuXbrI9evXc9BaYZsgADnK95cvX6R79+5y8eLFHLVYmGaiAODUqVPy6NEjr4xVqlRJatSoITVr1pTq1atLo0aNpGrVql5t/O789etXad26tdy/fz9RO4UMjgKAoUOHyoEDBxLnrVq1ajJw4ECZOHGi9O/fX8qXL+/d5rVr16R9+/becWkFEID/yXyZMmVk+vTpZiayYsWKXvrMnDlTVq9e7RWTljMBsGQed4U9e/aYO4Kr4aegXr16Zno5dCMAjgqtW7dOpk6d6ugtsmTJEjNrGLoRAA+Ftm7dKmPHjnWKuHfvnjRv3tzJN00nAuCZ/RcvXkjdunWdourXry/wD9kIgKc6ffr0kePHjztFLVq0SLCiGbIRAIU6qBuoXbu2NXLnzp0ycuRIq1+aDgRAkf3NmzfL+PHjrZFnzpwx6wQhGwFQqDNu3DjZsmWLNfLOnTvSsmVLq1+aDgRAkX38V58+fdoa+fr1a6efCmtDeXQgAIrkduvWTc6ePWuNfPPmjdSqVcvql6YDAVBkf9SoUbJ9+3Zr5OPHj6VJkyZWvzQdCIAi+4sXL3aqBEJ9QLt27RRXKFwIAVDkGpXCHTp0sEYeO3ZM+vXrZ/VL04EAeGYfS8TYT4DVQpvNnTtXli5danNL9XMC4Jn+5cuXy+zZs52iWrVqJbdv33byTcuJAHhkvk6dOmazSLly5axR2EeASqPQjQB4KHT+/HlT/Olia9euNQUloRsBcFQIW8OGDRvm5P3z50/z/M+CEKd0/b+T697AXNUE/umboBxs7969MmjQIOfeYK0AG1uLwXgH+ItKAwYMkF27dnn9lmP2D/UC379/Lwb9w94ensYdoGzZsua3e8aMGd4VPdguhuf+EydOFIX4+JKZvgNgb0DTpk2NaPjr3LmzWb1zGeX/rjDEx0/RwYMHi0b8aADAoAs7c1yspKTECOwykePSHnwg/pAhQ+TQoUOuIcH4RXEHSDObAA9bxYtR/GjuAGkBgP0CqBLGpE+xGu8AnsrhTCH8zqPmH+cJFbsRAIWCz58/N4+Hc+bMEVT9FLMRgATqYfB58uRJGT16tDx58iRBS+mFEoAc5P7bt2+m/j/0pd8/dZUA5ACAf5vA4RCoF8Tm0GKxKADA8W03btzwznmVKlXMwRB4jsdGD+zoxRo+Do3Q2oMHD0y1UDEsBEXzGJjrxSAsAA0ePFhmzZolPXv29J40wvFxKAYthvWAKO4AuQbg1/9+3CVwHBzWB3xmDw8fPuy1gqi94ySNIwCOGcQawZEjR6RFixaOEWKgQWFIyEYAPNXBKaFdu3Z1isKkEU4YCdkIgKc6+Bm4cuWKc70/lpXXrFnjeZXCuRMARa5R7oXZQJdlYwwIGzZsqLhKYUIIgDLPPuXheMQMdcqYACgBQBgmfFzuAjhcasOGDQmulL9QApAgt65l4iE/EhKABABgomjlypXWFm7duiVt2rSx+qXhQAASZL1Xr15mNdBmIQ8ECYBNvb98julel9fHhLxNjAAkAAAl5FgKthnqBn3PG7a1mavPCUCCTOIkUBwEZTM8LVSoUMHmlsrnBCBB2vv27StHjx61toDzBCpXrmz1S8OBACTIOg6ExiEQNkO5WOPGjW1uqXxOABKk3fWoGCwg4XUyIRoBUKqCbWXv3793mgnctm2bjBkzRnml/IYRAGV+N23a5LwFfMqUKbJx40bllfIbRgAU+UUdIZ7/XSqEUDqOAeDnz58VV8p/CAHwzDEKPPCSSJwX5GIYJ3Ts2NHFNRUfAuCRdlQNX7hwQZo1a+YcNW3aNMHrZkI1AuCozOTJk01lj8+r5F69euV8p3D8Gjl3IwB/SSkqgvFy6EmTJqlO/R4xYoQ5XyhkiwKAVatWCY5l1Rr+q3GuD97x06BBA3NSCF7+mOSk70uXLkmnTp20X6lgcVEAULBsOV7o3bt35nyhUMvAfu0GAXAU1dUNK39t27Z1WiRybTOffgQgh9mF+L1793Z6mUQOL5uoKQKQKH3/Bd+8eVNQIYTqn2IyApADtYrlXOA/dZUAKAHAlvL9+/ebAyVdikKUl8l7GAHwSDHm9bEjCKt7qAMoLS31iA7TNWgA8HJGHLxcKIPA+EOdHxZvsLkTj3J4Rdzu3bvN6WDFsOffJ19BA+DTEfrqMkAAdHmLJooARCOlriMEQJe3aKIIQDRS6jpCAHR5iyaKAEQjpa4jBECXt2iiCEA0Uuo6QgB0eYsmigBEI6WuIwRAl7dooghANFLqOkIAdHmLJooARCOlriMEQJe3aKIIQDRS6jpCAHR5iyaKAEQjpa4jBECXt2iiCEA0Uuo6QgB0eYsmigBEI6WuIwRAl7dooghANFLqOkIAdHmLJuof3kEfPVGXCMgAAAAASUVORK5CYII=" />
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

      :root {
  --primary: #d1fefc;
  --secondary: #ffe1e1;
  --accent: #ffeb37;
}
  *{
    
  }

.artist-card {
  display: grid;
  grid-template-columns: repeat(5, 1fr);
  grid-template-rows: 1fr 1rem auto;
  max-width: 40rem;
  margin: auto;
  position: relative;
  box-shadow: 0.75rem -0.5rem 0 var(--accent), 0 -0.5rem 0 var(--primary), -0.8rem -1rem 0 var(--secondary);
}

.artist-card__title {
  margin: 0;
  grid-column: 1/5;
  grid-row: 2/span 1;
  align-self: center;
  padding: 0.25em;
  position: relative;
  z-index: 1;
  font-size: 9vmin;
  text-align: center;
  font-family: "Major Mono Display", monospace;
  text-transform: uppercase;
}

.artist-card__img {
  max-width: 100%;
  display: block;
  grid-column: 1/-1;
  grid-row: 1/3;
  align-self: center;
}

@supports (clip-path: circle(25%)) {
  .artist-card {
    clip-path: circle(0%);
    animation: circle-grow 2000ms 450ms forwards;
  }
  .artist-card:hover .artist-card__img {
    clip-path: polygon(0% 0%, 100% 0%, 100% 50%, 100% 100%, 0% 100%);
  }

  .artist-card__img {
    clip-path: polygon(18.11% 16.5%, 50% 0%, 75% 50%, 54.09% 90.44%, 13.7% 63.94%);
    transition: clip-path 400ms ease-in-out;
  }

  .artist-card__title {
    clip-path: inset(50% 50%);
    animation: heading-in 400ms 1000ms forwards;
  }
}
@keyframes circle-grow {
  to {
    clip-path: circle(100%);
  }
}
@keyframes heading-in {
  to {
    clip-path: inset(0% 0%);
  }
}
@supports (mix-blend-mode: darken) {
  .artist-card {
    background-image: linear-gradient(to top right, var(--primary) 25%, transparent), radial-gradient(circle at bottom right, transparent 15%, var(--secondary) 15%, var(--secondary) 20%, transparent 20%, transparent 22%, var(--secondary) 22%, transparent 30%);
  }
  .artist-card::after {
    content: "";
    grid-column: 4/5;
    grid-row: 1/2;
    background: linear-gradient(to bottom left, var(--accent) 40%, transparent);
    mix-blend-mode: multiply;
    clip-path: circle(19%);
    transition: clip-path 400ms ease-in-out;
  }
  .artist-card:hover::after {
    clip-path: circle(100%);
  }

  .artist-card__img {
    mix-blend-mode: multiply;
    filter: grayscale(1) contrast(1.5) brightness(0.9);
  }
}
@supports (-webkit-text-stroke: 1px black) {
  .artist-card__title {
    -webkit-text-stroke: 0.035em #001;
    color: transparent;
    text-shadow: 0.075em 0.075em var(--secondary);
  }
}
@media screen and (min-width: 25rem) {
  .artist-card__title::before {
    content: "";
    position: absolute;
    left: 0;
    top: 10%;
    width: 100%;
    height: 60%;
    clip-path: circle(3% at 95%);
    background-image: linear-gradient(150deg, var(--primary) 30%, var(--secondary) 50%, var(--accent));
    z-index: -1;
    transition: clip-path 400ms ease-in-out;
  }
  .artist-card:hover .artist-card__title::before {
    clip-path: circle(100%);
  }
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
            <img src="{{url('logo.png')}}" width="112" height="28">
          </a>
      
          <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
          </a>
        </div>
      
        <div id="navbarBasicExample" class="navbar-menu">
          <div class="navbar-start">
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