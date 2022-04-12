const phoneBtn = document.getElementById("phone-cta") 
        nav = document.querySelector('nav')
       const phoneBtnExit  = document.getElementById("phone-exit")

    phoneBtn.addEventListener('click', () =>{
      nav.classList.add('menu-btn')
      //this adds the nav menu when button is clicked in phone view
    })
    phoneBtnExit.addEventListener('click', () =>{
      nav.classList.remove('menu-btn')
      //exits nav bar drop down menu
    })