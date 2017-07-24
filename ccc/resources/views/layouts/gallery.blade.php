@extends('layouts.app')
@section('content')

	<h2 class="nazwastrony" class="page-heading">Galeria</h2>



<!-- 	 <div class="row no-gutters">
          <div class="col-6 col-md-6">


          		<p class="tytuł1"><a href="/kolepka">Kumite</a> </p>
				<img  width="220" height="220" src="img/tlo1.jpg" alt=""  style="float:left; margin:6px">

				
				<a href="/kolepka">
  				<img src="img/tlo1.jpg" alt="" style="float:left; margin:6px"><nr>
  				<h3>Kumite</h3>


</a>

     </div>
     </div> -->



 <div class="row no-gutters">
 <div class="col-12 col-md-12">


      <div class="gallery">
        <a  href="{{ route('kumite') }}">
          <img src="img/zdj test/my.jpg" width="340" height="270">
        </a>
        <div class="desc">Letnia akademia 05.07.2017</div>
      </div>




</div>
</div>  
@endsection

