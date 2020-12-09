

@extends('layouts.app')

@section('container')

<?php  function writeMsg() {   echo "Hello world!"; } ?>

<div class="row border">

  


        <div class="container" >

          <div class="btn-group btn-group-toggle" data-toggle="buttons">
            <label class="btn btn-secondary active">
              <input type="radio" name="options" id="option1" autocomplete="off" checked> Celíaco
            </label>
            <label class="btn btn-secondary">
              <input type="radio" name="options" id="option2" autocomplete="off"> Diabético
            </label>
            <label class="btn btn-secondary">
              <input type="radio" name="options" id="option3" autocomplete="off"> Vegetariano
            </label>
            <label class="btn btn-secondary">
              <input type="radio" name="options" id="option3" autocomplete="off"> Vegano
            </label>
          </div>
            
                <div class="d-flex align-content-center flex-wrap">
                    <div class="card" style="width: 18rem;">
                        <h5 class="card-title">Lemonpie sin TACC</h5>
                       
                        <img class="card-img-top" src="https://content-recetas.lecturas.com/medio/2018/07/19/tarta-lemon-pie-con-merengue_43048292_800x800.jpg" alt="Card image cap">
                        <div class="card-body">
                          
                          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                          <a href="#" class="btn btn-primary">Guardar</a>
                        </div>
                     </div>
                      <div class="card" style="width: 18rem;">
                        <h5 class="card-title">Hummus</h5>
                        <img src="https://turkishfoodchef.com/wp-content/uploads/2017/03/Hummus-Humus-4-500x500.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          
                          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                          <a href="#" class="btn btn-primary">Guardar</a>
                        </div>
                      </div>
                      <div class="card" style="width: 18rem;">
                        <h5 class="card-title">Sopa de arvejas</h5> 
                        <img src="https://d1kxxrc2vqy8oa.cloudfront.net/wp-content/uploads/2019/03/29162709/RIG-1503-1-cremadearvejas-300x300.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          
                          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                          <a href="#" class="btn btn-primary">Guardar</a>      
                        </div>
                      </div>

                      <div class="card" style="width: 18rem;">
                        <h5 class="card-title">Sopa de arvejas</h5>
                        <img src="./maquetado/fotos/christopher-alvarenga-5uYH4yTDp34-unsplash.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          
                          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                          <a href="#" class="btn btn-primary">Guardar</a>
                        </div>
                      </div>                      <div class="card" style="width: 18rem;">
                        <h5 class="card-title">Sopa de arvejas</h5>
                        <img src="./maquetado/fotos/christopher-alvarenga-5uYH4yTDp34-unsplash.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          
                          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                          <a href="#" class="btn btn-primary">Guardar</a>
                        </div>
                      </div>                      <div class="card" style="width: 18rem;">
                        <h5 class="card-title">Sopa de arvejas</h5>
                        <img src="./maquetado/fotos/christopher-alvarenga-5uYH4yTDp34-unsplash.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          
                          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                          <a href="#" class="btn btn-primary">Guardar</a>
                        </div>
                      </div>
                      <div class="card" style="width: 18rem;">
                        <h5 class="card-title">Sopa de arvejas</h5>
                        <img src="./maquetado/fotos/christopher-alvarenga-5uYH4yTDp34-unsplash.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          
                          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                          <a href="#" class="btn btn-primary">Guardar</a>
                        </div>
                      </div>
                      <div class="card" style="width: 18rem;">
                        <h5 class="card-title">Sopa de arvejas</h5>
                        <img src="./maquetado/fotos/christopher-alvarenga-5uYH4yTDp34-unsplash.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          
                          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                          <a href="#" class="btn btn-primary">Guardar</a>
                        </div>
                      </div>
 
                </div>
            
        </div>
      
</div>

@endsection

?>
