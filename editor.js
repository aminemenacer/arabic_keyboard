 
 const imageSources = ["./images/F01L020.png", "./images/F01L040.png"];

 const target = document.getElementById('target');
 const result = document.getElementById('result');
 const onClick = function(imgid) {
   selectedImage = this['data-url'];
   console.log("hi") ;
   console.log(imgid);
   LetterImg(imgid);
 };

// for (let i = 0; i < imageSources.length; i++) {
//   var imgID = 'img' + (i + 1);
  
//   const img = document.createElement('img');
//   img.setAttribute("id", imgID)
//   img.setAttribute("src", imageSources[i]);
//   img.setAttribute("class", "box");
//   img.setAttribute("onclick", "LetterImg('" + imgID + "')");

//   img.onclick = onClick(imgID);
//   img['data-url'] = imageSources[i];
//   target.appendChild(img);
// }

// make array of these
// var elem1 = document.getElementById("Img1");
// var elem2 = document.getElementById("Img2");
// var elem3 = document.getElementById("Img3");
// var elem4 = document.getElementById("Img4");
// var elem5 = document.getElementById("Img5");
// var elem6 = document.getElementById("Img6");

var harakaElem1 = document.getElementById("haraka1");


var c1 = document.getElementById("Canvas1");
var ctx1 = c1.getContext("2d");
var c2 = document.getElementById("Canvas2");
var ctx2 = c2.getContext("2d");
var c3 = document.getElementById("Canvas3");
var ctx3 = c3.getContext("2d");
var c4 = document.getElementById("Canvas4");
var ctx4 = c4.getContext("2d");
var c5 = document.getElementById("Canvas5");
var ctx5 = c5.getContext("2d");
var c6 = document.getElementById("Canvas6");
var ctx6 = c6.getContext("2d");

var ct = document.getElementById("CanvasText");
var ctxText = ct.getContext("2d");


var c ;
var elem, Helem;
var imgClicked = false;
var harakaClicked = false;
 

function LetterImg(imgId){
  elem = document.getElementById(imgId);
  imgClicked = true;
  console.log("HERE" + elem)
}

function harakaImg(imgId){
  Helem = document.getElementById(imgId);
  harakaClicked = true;
}

function myDrawTest(canvasId){

  var x = 0;
  var y = 10;
  var hx = 40;
  var hy = 40;
  
  var c = document.getElementById(canvasId);
  var ctx = c.getContext("2d");

  if (imgClicked == true) {
    ctx.clearRect(x, y, c.width, c.height);
    c.height = 100;
    c.width = 100;
    console.log(elem);
    ctx.drawImage(elem, x,y, c.width , c.height);
    imgClicked = false;
  } else if (harakaClicked == true ) {
    ctx.clearRect(28, -4, hx, hx);
    ctx.drawImage(Helem, 28,-4, hx , hy);
    harakaClicked = false;
  } 
}

function myDrawClear(canvasId) {
  var c = document.getElementById(canvasId);
  var ctx = c.getContext("2d");
  ctx.clearRect(0, 0, c.width, c.height);
}


var position = 800;
var space = 10;
var wordCount = 0;
var offset = 50;

function myDraw3() {
  ct.drawImage(document.getElementById('Canvas1'), 0, 0);

  
}  

$('.dropdown-toggle').dropdown();
$('.dropdown-toggle').dropdown('show');	

// dropdown menu
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}


