//Convert to uppercase

window.addEventListener('load', function(){
    var inputs = document.querySelectorAll('input.upper');

    for(let input of inputs){
        input.onkeyup = function(){
            this.value = this.value.toUpperCase();
        }
    }
})

