@extends('layouts.app')
@section('content')

<head>
<script>
function openModal() {
  document.getElementById('myModal').style.display = "block";
}

function closeModal() {
  document.getElementById('myModal').style.display = "none";
}

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>
</head>	


<div class="row">
  <div class="column">
    <img src="img/zdj test/my.jpg" width="340" height="270" onclick="openModal();currentSlide(1)" class="hover-shadow">
  </div>
  <div class="column">
    <img src="img/zdj test/my.jpg" width="340" height="270" onclick="openModal();currentSlide(2)" class="hover-shadow">
  </div>
  <div class="column">
    <img src="img/zdj test/my.jpg" width="340" height="270" onclick="openModal();currentSlide(3)" class="hover-shadow">
  </div>
  <div class="column">
    <img src="img/zdj test/my.jpg" width="340" height="270" onclick="openModal();currentSlide(4)" class="hover-shadow">
  </div>
  <div class="column">
    <img src="img/zdj test/my.jpg" width="340" height="270" onclick="openModal();currentSlide(4)" class="hover-shadow">
  </div>
  <div class="column">
    <img src="img/zdj test/my.jpg" width="340" height="270" onclick="openModal();currentSlide(4)" class="hover-shadow">
  </div>
  <div class="column">
    <img src="img/zdj test/my.jpg" width="340" height="270" onclick="openModal();currentSlide(4)" class="hover-shadow">
  </div>
</div>

	<div id="myModal" class="modal">
		  <span class="close cursor" onclick="closeModal()">&times;</span>
		  <div class="modal-content">

			    <div class="mySlides">
			      <div class="numbertext">1 / 7</div>
			        <img src="img/zdj test/my.jpg" style="width:100%">
			    </div>

			    <div class="mySlides">
			      <div class="numbertext">2 / 7</div>
			        <img src="img/zdj test/my.jpg" style="width:100%">
			    </div>

			    <div class="mySlides">
			      <div class="numbertext">3 / 7</div>
			        <img src="img/zdj test/my.jpg" style="width:100%">
			    </div>

			    <div class="mySlides">
			      <div class="numbertext">4 / 7</div>
			        <img src="img/zdj test/my.jpg" style="width:100%">
			    </div>

			     <div class="mySlides">
			      <div class="numbertext">5 / 7</div>
			        <img src="img/zdj test/my.jpg" style="width:100%">
			    </div>

			     <div class="mySlides">
			      <div class="numbertext">6 / 7</div>
			        <img src="img/zdj test/my.jpg" style="width:100%">
			    </div>

			     <div class="mySlides">
			      <div class="numbertext">7 / 7</div>
			        <img src="img/zdj test/my.jpg" style="width:100%">
			    </div>


    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

				   <!--  <div class="caption-container">
				      <p id="caption"></p>
				    </div>

				    <div class="column">
				      <img class="demo" src="img/tlo1.jpg" onclick="currentSlide(1)" alt="">
				    </div>

				    <div class="column">
				      <img class="demo" src="img/tlo1.jpg" onclick="currentSlide(2)" alt="">
				    </div>

				    <div class="column">
				      <img class="demo" src="img/tlo1.jpg" onclick="currentSlide(3)" alt="">
				    </div>

				    <div class="column">
				      <img class="demo" src="img/tlo1.jpg" onclick="currentSlide(4)" alt="">
				    </div> -->
		  </div>
		</div>


@endsection
