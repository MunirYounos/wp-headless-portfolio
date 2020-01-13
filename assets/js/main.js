// Select dom items
const menuBtn = document.querySelector('.menu-wrap');
const menu = document.querySelector('.menu');
const menuNav = document.querySelector('.menu-nav');
const navItems = document.querySelectorAll('.nav-item');

// Set Intiaal state of the menu
let showMenu = false;

menuBtn.addEventListener('click', toggleMenu);

function toggleMenu () {
    if(!showMenu){
        menuBtn.classList.add('close');
        menu.classList.add('show');
        menuNav.classList.add('show');
        navItems.forEach(item => item.classList.add('show'));

        //set menu state
        showMenu = true;
    } else {
        menuBtn.classList.remove('close');
        menu.classList.remove('show');
        menuNav.classList.remove('show');
        navItems.forEach(item => item.classList.remove('show'));

        showMenu = false;
    }
}

const searchForm = document.querySelector('.search-form');
document.getElementById('search').addEventListener('click', function(e){
        searchForm.classList.toggle('search-show');
});




//Time counter Dom Elements 
const time = document.getElementById('time'),
      greeting = document.getElementById('greeting'),
      bg = document.getElementById('bg-image');
      // show time
function showTime() {
    let today = new Date(),
        hour = today.getHours(),
        min = today.getMinutes(),
        sec = today.getSeconds();

    // output time
    time.innerHTML = `${addZero(hour)}<span>:</span>${addZero(min)}<span>:</span><span class="text-secondary">${addZero(sec)}</span>`;
    setTimeout(showTime, 1000);
}
//add zero
function addZero(n) {
    return (parseInt(n,10) < 10 ? '0' : '') + n;
}
function setbgAndGreet () {
   const bg = document.getElementById('bg-image');
    let today = new Date(),
        hour = today.getHours();
        if(hour < 12 ) {
            //Morning
        bg.style.backgroundImage = "url('http://multimunir.com/portfolio/wp-content/themes/portfolio/assets/images/morning.jpg')";
        greeting.innerHTML = "Good" + "<span class=" + "text-secondary" + ">" + "Morning" + "</span>";
        bg.classList.add('morning');
        }else if(hour < 14){
            // noon
            bg.style.backgroundImage = "url('http://multimunir.com/portfolio/wp-content/themes/portfolio/assets/images/boab.jpg')";
            greeting.textContent = 'Happy Noon';
            bg.classList.add('noon');
        } else if(hour < 16){
            // Afternoon
            bg.style.backgroundImage = "url('http://multimunir.com/portfolio/wp-content/themes/portfolio/assets/images/boatsun.jpg')";
            greeting.textContent = 'Good Afternoon';
            bg.classList.add('afternoon');
        }
        else if(hour < 20){
            // Afternoon
            bg.style.backgroundImage = "url('http://multimunir.com/portfolio/wp-content/themes/portfolio/assets/images/boat.jpg')";
            greeting.textContent = 'Good Evening';
            bg.classList.add('evening');
        } else {
            // Evening
            bg.style.backgroundImage = "url('http://multimunir.com/portfolio/wp-content/themes/portfolio/assets/images/herobw.jpg')";
            greeting.textContent = 'Good Night';
            bg.classList.add('night');
        }
}

const getDate = function(){
    let dateDiv = document.getElementById('date');
    let currentDate = new Date().toLocaleString('en-us',{month:'long', year:'numeric', day:'numeric'});
    // let formatDate = moment(currentDate).format('MMM dd YY');
    dateDiv.innerHTML = currentDate;
}
//run
getDate();
showTime();
setbgAndGreet();




