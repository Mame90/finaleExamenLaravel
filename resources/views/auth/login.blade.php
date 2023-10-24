
<!-- *********************************************************** -->

	
		<header>
            
			<div class="bg-successs zerogrid" style="width: 100%;">
				<div class="row">
					<div class="col-2-3">
						<img src="assets\login\images\auth.jpeg">
					</div>
					<div class="col-1-3">
						<div class="header-text">
						<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-0" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 " type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Mots de Passe')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ml-2 text-sm text-gray-600">{{ __('Souvenez moi') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Mots de passe oublié?') }}
                </a>
            @endif

            <x-primary-button class="ml-3">
                {{ __('Connexion') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
                            </form>
						</div>
					</div>
				</div>
			</div>
		</header>


        <!-- ************************************************************* -->
        <head>
    <!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>zKidzone</title>
	<meta name="description" content="Free Responsive Html5 Css3 Templates | Zerotheme.com">
	<meta name="author" content="www.zerotheme.com">
	
    <!-- Mobile Specific Metas
	================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <!-- CSS
	================================================== -->
  	<link rel="stylesheet" href="assets/login/css/zerogrid.css">
	<link rel="stylesheet" href="assets/login/css/style.css">
	<link rel="stylesheet" href="assets/login/css/lightbox.css">
	
	<!-- Custom Fonts -->
    <link href="assets/login/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	
	
	<link rel="stylesheet" href="assets/login/css/menu.css">
	<script src="assets/login/js/jquery1111.min.js" type="text/javascript"></script>
	<script src="assets/login/js/script.js"></script>
	
</head>
