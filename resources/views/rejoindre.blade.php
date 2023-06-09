@extends('layouts/base')

@section('content')
    <main>
         <section id="banniere_nous_rejoindre">
            <div class="titre_page">
                <h2>Nous Rejoindre</h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing.</p>
            </div>
        </section>
        <!-- ======= rejoindre Section ======= -->
        <section id="rejoindre" class="rejoindre">
        <div class="container" >

            <div class="row">

            <div class="col-lg-5 d-flex align-items-stretch">
                <div class="info ">
                    <div class="mb-5">
                        <img src="{{asset('img/about.jpg')}}" alt="">
                    </div>
                    <!-- <div class="address">
                        <i class="bi bi-geo-alt"></i>
                        <h4>Location:</h4>
                        <p>A108 Adam Street, New York, NY 535022</p>
                    </div> -->

                    <div class="email">
                        <i class="bi bi-envelope"></i>
                        <h4>Email:</h4>
                        <p>info@jae.com</p>
                    </div>

                    <div class="phone">
                        <i class="bi bi-phone"></i>
                        <h4>Appel:</h4>
                        <p>+1 5589 55488 55</p>
                    </div>
                </div>

            </div>

            <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">


                <form action="{{ route('register') }}" method="POST" role="form" class="php-email-form" id="form-rejoindre">
                @csrf
{{--                     @if($errors->any()) <div>{{ $errors->first() }}</div> @endif
 --}}                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="nom">Nom</label>
                            <input type="text" id="nom" name="nom" class="form-control" value="{{ old('nom') }}" required>
                            @error('nom')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="prenom">Prénoms</label>
                            <input type="text" id="prenom" name="prenom" class="form-control" value="{{ old('prenom') }}" required>
                            @error('prenom')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                    </div>

                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="date_naissance">Date De Naissance</label>
                            <input type="date" id="date_naissance" name="date_naissance" class="form-control" value="{{ old('date_naissance') }}" required>
                            @error('date_naissance')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" class="form-control" value="{{ old('email') }}" required>
                            @error('email')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="contact1">Contact 1 (whatsapp)</label>
                            <input type="tel" id="contact1" name="contact1" class="form-control" placeholder="+2250707074523" value="{{ old('contact1') }}" required>
                            @error('contact1')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="contact2">Contact 2 (ligne directe)</label>
                            <input type="tel" id="contact2" name="contact2" class="form-control" placeholder="+2250707074523" value="{{ old('contact2') }}">
                            @error('contact2')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <!-- <x-input-label for="password" :value="__('Password')" /> -->
                            <label for="password">Password</label>
                            <!-- <x-text-input id="password" class="block mt-1 w-full"
                                            type="password"
                                            name="password"
                                            required autocomplete="new-password" /> -->
                            <input id="password" type="password" name="password" class="form-control" autocomplete="new-password" required >
                            @error('password')
                                <div class="text-danger">{{ __($message) }}</div>
                            @enderror
                        </div>

                        <!-- Confirm Password -->
                        <div class="form-group col-md-6">
                            <!-- <x-input-label for="password_confirmation" :value="__('Confirm Password')" /> -->
                            <label for="password_confirmation">Confirm Password</label>
                            <input id="password_confirmation" type="password" name="password_confirmation" class="form-control" autocomplete="new-password" required >
                           <!--  <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                            type="password"
                                            name="password_confirmation" required autocomplete="new-password" />
                                      -->
                            @error('password_confirmation')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>


                    <div class="row">
                        <div class="form-group col-md-12">
                            <label for="zone">Zone</label>
                            <select id="zone" name="zone" class="form-control">
                                @foreach($zones as $zone)
                                    <option value="{{ str($zone->id) }}">{{$zone->nom_zone}}</option>
                                @endforeach
                            </select>
                            @error('zone')
                                <div class="text-danger">{{ __($message) }}</div>
                            @enderror
                        </div>
                    </div>
                    <p class="mx-5 text-center fw-light text_bas_form">Selectionnez votre zone en fonction de votre pays de résidence et non en fonction de votre nationalité</p>

                    <div class="text-center"><button type="submit">J'intègre la JAE</button></div>
                </form>
            </div>

            </div>

        </div>
        </section><!-- End rejoindre Section -->

    </main>

@endsection('content')
