@extends('layouts.app')

@section('hero')

    <div class="container col-xxl-8 px-4 py-5 ">

        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">

            <div class="col-10 col-sm-8 col-lg-6">

                <img src="{{ url('/images/heroImg.png') }}" class="d-block mx-lg-auto img-fluid rounded-circle  border-myColor">
            
            </div>

            <div class="col-lg-6">

                <div class="lc-block mb-3 d-flex justify-content-center">

                    <div editable="rich">

                        <h2 class="fw-bold display-5 text-white">Hola! Soy Jhosel</h2>
                    
                    </div>
                
                </div>

                <div class="lc-block mb-3 ">
                    
                    <div editable="rich">

                        <p class="lead text-white">Soy estudiante de Ingenieria en Informatica y esta es mi pagina web.
                        </p>

                        <div class="d-flex justify-content-center">

                            <a href="https://twitter.com/cortesjhosel" class="mr-5" ><i class="fab fa-twitter fa-3x"></i></a>

                            <a href="https://github.com/kichokhrizzz" class="mr-5" ><i class="fab fa-github fa-3x"></i></a>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</main>

@include('inicio.portafolio')

@include('inicio.habilidades')

@endsection