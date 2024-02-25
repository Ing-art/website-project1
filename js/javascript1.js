/*Shortcut*/

window.onload = function() {
  document.body.onkeyup = handleShortcut;
}

function handleShortcut(event) {
  if (event.key.toUpperCase() == 'Q' && event.shiftKey) {
    location.href = "contact.html";
  }
}



/*image resizer*/

window.addEventListener('load',bigFig);

function bigFig(){
  var figs = document.querySelectorAll('#gallery figure');

  for(let fig of figs){
      fig.onclick = function(){
          var newFig = this.cloneNode(true);
          newFig.className = 'big';
          newFig.setAttribute('id','bigImage');
          document.body.appendChild(newFig);
          newFig.onclick = function() {
          document.body.removeChild(this);
          }
      }
  }
}

/*slideshow*/

window.addEventListener('load',show);
window.addEventListener('load',next);


var i = 0;
var myInterval = setInterval(next,10000);
var images = ['images/slideshow/bolo1.jpg','images/slideshow/bolo2.jpg',
    'images/slideshow/bolo3.jpg','images/slideshow/bolo4.jpg','images/slideshow/bolo5.jpg','images/slideshow/bolo7.jpg'];



  function show(){
       image1.src = images[i];
       image2.src = images[(i+1)%images.length];
       image3.src = images[(i+2)%images.length];
  }

  function next(){
  i = (i+1)%images.length;
  show();
  }

show();






