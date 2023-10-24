<nav id="navbar" class="navbar">
      @if (Route::has('login'))  <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                    @else
                        

                        @if (Route::has('register'))
                        
                        @endif
                    @endauth
                </div>
            @endif 

        <ul>
          <!-- <li><a href="index.html" class="active">Accueil</a></li> -->

          <li class="dropdown"><a href="{{ route('login') }}" class="getstarted"><span>Connexion</span> <i class="bi bi-chevron-down"></i></a>
            <!-- <ul>
              <li><a href="{{ route('login') }}">client</a></li>
              <li><a href="{{ route('login') }}">Grossiste</a></li>
              <li><a href="{{ route('login') }}">Administrateur</a></li>
             
            </ul> -->
          </li>
         
          <li><a href="{{ route('register') }}" class="getstarted">Creer un compte</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>