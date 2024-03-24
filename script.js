var modal = document.querySelector('.modal_product')
var btn = document.getElementById("myBtn")
var closes = document.querySelector(".modal__close")
var btndel = document.getElementById("btndely")
var modaldely = document.querySelector('.modal_delivery')


    btn.addEventListener('click', () => {
        modal.classList.toggle('modal_open')
    })
    
    btndel.addEventListener('click', () => {
      modaldely.classList.toggle('modal_open')
    })
  
  closes.onclick = function(event) {
    if (event.target == modal) {
      modal.style.display = "none"
    }
  }

  window.onclick = function(event) {
    if (event.target == modaldely) {
      modaldely.style.display = "none"
    }
  }