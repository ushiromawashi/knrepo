@extends('layouts.app')
@section('content')
    <h2 class="page-heading">Strona główna</h2>

    <div id="carousel-example-generic2" class="carousel slide" data-ride="carousel">
        <!-- Wskaźniki w postaci kropek -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic2" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic2" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic2" data-slide-to="2"></li>
        </ol>

        <!-- Slajdy -->
        <div class="carousel-inner">
            <div class="item active">
                <img src="img/lechi.jpg" alt="">
            </div>

            <div class="item">
                <img src="img/lechi1.jpg" alt="">
            </div>

            <div class="item">
                <img src="img/fight1.jpg" alt="">
            </div>

        </div>





        <!-- Strzałki do przewijania -->
        <a class="left carousel-control" href="#carousel-example-generic2" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic2" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </div><br><br>

    <!-- Tabela -->


    
 <h2 class="nazwastrony" class="page-heading">Aktualności</h2>

        <div class="row no-gutters">
          <div class="col-6 col-md-6">

            <p class="tytuł1"><a href="/kolepka">Tytuł 1</a> </p>

                    <!-- <img src="img/tlo1.jpg" alt=""> -->

                    <img  width="220" height="220" src="img/tlo1.jpg" alt=""  style="float:left; margin:6px">
                    <p class="akapit" >Przykładowy artykuł || Przykładowy artykuł  ||Przykładowy artykuł || Przykładowy artykuł  ||Przykładowy artykuł || Przykładowy artykuł  ||Przykładowy artykuł || Przykładowy artykuł  ||Przykładowy artykuł || Przykładowy artykuł  ||Przykładowy artykuł || Przykładowy artykuł  ||Przykładowy artykuł || Przykładowy artykuł  ||Przykładowy artykuł || Przykładowy artykuł  ||</p>




            <p class="tytuł1">Tytuł 2</p>

                    <!-- <p class="tytuł">Założyciel Kyokushinkai</p> -->

                    <p class="akapit">Przykładowy artykuł || Przykładowy artykuł  ||Przykładowy artykuł || Przykładowy artykuł  ||Przykładowy artykuł || Przykładowy artykuł  ||Przykładowy artykuł || Przykładowy artykuł  ||Przykładowy artykuł || Przykładowy artykuł  ||Przykładowy artykuł || Przykładowy artykuł  ||Przykładowy artykuł || Przykładowy artykuł  ||Przykładowy artykuł || Przykładowy artykuł  ||</p>

          </div>


          <div class="col-6 col-md-6">

            <p class="tytuł1">Tytuł 3</p>

                    <p class="akapit">Przykładowy artykuł || Przykładowy artykuł  ||Przykładowy artykuł || Przykładowy artykuł  ||Przykładowy artykuł || Przykładowy artykuł  ||Przykładowy artykuł || Przykładowy artykuł  ||Przykładowy artykuł || Przykładowy artykuł  ||Przykładowy artykuł || Przykładowy artykuł  ||Przykładowy artykuł || Przykładowy artykuł  ||Przykładowy artykuł || Przykładowy artykuł  ||Przykładowy artykuł || Przykładowy artykuł  ||Przykładowy artykuł || Przykładowy artykuł  ||Przykładowy artykuł || Przykładowy artykuł  ||</p>

          </div>

@endsection
