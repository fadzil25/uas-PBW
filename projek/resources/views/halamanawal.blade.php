<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> --}}

    
    <link rel="shortcut icon" href="assets/icon/blue.png" type="image/x-icon">
    <link rel="stylesheet" href="style/halamanawal.css">
    <title>Halaman Awal</title>
</head>

<body>
<div class="wrapper">
    <div class="wrap" id="q1">
        <div class="text-center pb-4">
            <div class="h5 font-weight-bold"><span id="number"> </span>1 of 3</div>
        </div>
        <div class="h4 font-weight-bold"> 1. siapakah presiden indonesia sekarang?</div>
        <div class="pt-4" style="margin-top:20px">
            <form> 
            <label class="options">soekarno<input type="radio" name="radio"> <span class="checkmark"></span> </label> 
            <label class="options">Megawati <input type="radio" name="radio"> <span class="checkmark"></span> </label> 
            <label class="options">soedirman <input type="radio" name="radio" id="rd" checked> <span class="checkmark"></span> </label> 
            <label class="options">jokowi <input type="radio" name="radio"> <span class="checkmark"></span> </label> </form>
        </div>
        <div class="d-flex justify-content-end pt-2"> <button class="btn btn-primary" id="next1">Next <span class="fas fa-arrow-right"></span> </button> </div>
    </div>
    <div class="wrap" id="q2">
        <div class="text-center pb-4">
            <div class="h5 font-weight-bold"> <span id="number"> </span>2 of 3</div>
        </div>
        <div class="h4 font-weight-bold"> 2. siapakah menteri pariwisata indonesia?</div>
        <div class="pt-4" style="margin-top:20px">
            <form> 
            <label class="options">saladin <input type="radio" name="radio"> <span class="checkmark"></span> </label> 
            <label class="options">suladin <input type="radio" name="radio" checked> <span class="checkmark"></span> </label> 
            <label class="options">salahudin <input type="radio" name="radio" id="rd"> <span class="checkmark"></span> </label> 
            <label class="options">salmadin <input type="radio" name="radio"> <span class="checkmark"></span> </label> </form>
        </div>
        <div class="d-flex justify-content-end pt-2"> <button class="btn btn-primary mx-3" id="back1"> <span class="fas fa-arrow-left pr-1"></span>Previous </button> <button class="btn btn-primary" id="next2">Next <span class="fas fa-arrow-right"></span> </button> </div>
    </div>
    <div class="wrap" id="q3">
        <div class="text-center pb-4">
            <div class="h5 font-weight-bold"> <span id="number"> </span>3 of 3</div>
        </div>
        <div class="h4 font-weight-bold"> 3. siapakah penemu lampu?</div>
        <div class="pt-4" style="margin-top:20px">
            <form> 
            <label class="options">Clarity Style Sheets <input type="radio" name="radio"> <span class="checkmark"></span> </label> 
            <label class="options">Cascading Style Sheets <input type="radio" name="radio"> <span class="checkmark"></span> </label> 
            <label class="options">Confirm Style sheets <input type="radio" name="radio" id="rd" checked> <span class="checkmark"></span> </label> 
            <label class="options">Canvas Style Sheets <input type="radio" name="radio"> <span class="checkmark"></span> </label> </form>
        </div>
        <div class="d-flex justify-content-end pt-2"> <button class="btn btn-primary mx-3" id="back2"> <span class="fas fa-arrow-left pr-2"></span>Previous </button> <button class="btn btn-primary" id="next3">Submit </button> </div>
    </div>
</div>
<div class="d-flex flex-column align-items-center">
    <div class="h3 font-weight-bold text-white" style="margin-left:650px">Go Dark</div> <label class="switch" style="margin-left:650px"> <input type="checkbox"> <span class="slider round"></span> </label>
</div>


<script>
    var q1 = document.getElementById("q1");
var q2 = document.getElementById("q2");
var q3 = document.getElementById("q3");

var next1 = document.getElementById('next1')
var back1 = document.getElementById('back1')
var next2 = document.getElementById('next2')
var back2 = document.getElementById('back2')
document.addEventListener('DOMContentLoaded', function () {
let query = window.matchMedia("(max-width: 767px)");
if (query.matches) {
next1.onclick = function () {
q1.style.left = "-650px";
q2.style.left = "15px";
}
back1.onclick = function () {
q1.style.left = "15px";
q2.style.left = "650px";
}
back2.onclick = function () {
q2.style.left = "15px";
q3.style.left = "650px";
}
next2.onclick = function () {
q2.style.left = "-650px";
q3.style.left = "15px";
}
}
else {
next1.onclick = function () {
q1.style.left = "-650px";
q2.style.left = "50px";
}
back1.onclick = function () {
q1.style.left = "50px";
q2.style.left = "650px";
}
back2.onclick = function () {
q2.style.left = "50px";
q3.style.left = "650px";
}
next2.onclick = function () {
q2.style.left = "-650px";
q3.style.left = "50px";
}
}
});


function uncheck() {
var rad = document.getElementById('rd')
rad.removeAttribute('checked')
}
document.addEventListener('DOMContentLoaded', function () {
const main = document.querySelector('body')
const toggleSwitch = document.querySelector('.slider')

toggleSwitch.addEventListener('click', () => {
main.classList.toggle('dark-theme')
})
})
</script>
</body>
</body>