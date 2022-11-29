 <!-- menu-mobile -->

 <input hidden type="checkbox" id="menu-input" class="nav-input">
 <label for="menu-input" class="menu-overplay"> </label>
 <div class="menu__mobile" id="nav">
     <div class="nav__container">
         <div class="nav_logo">
             <a href="index.html">
                 <img src="/img/logo2.svg" alt="logo">
             </a>
         </div>
         <div class="search__container-mobile">
             <input class="search" type="text" placeholder="Search..">
             <i class="fa-solid fa-magnifying-glass"></i>
         </div>
         <div class="nav__main">
             <!-- <input type="radio" name="move" id="home" checked>
                            <input type="radio" name="move" id="discovery">
                            <input type="radio" name="move" id="list">
                            <input type="radio" name="move" id="history">
                            <input type="radio" name="move" id="sign-in"> -->
             <h3 id="mn">MENU</h3>
             <label for="menu-input"><i class="fa-solid fa-xmark"></i></label>
             <ul class="nav__main-list">
                 <div class="border" id="bd"></div>
                 <li class="nav__main-first">
                     <a href="#" class="blue">

                         <!-- <label for="home" class="home"> -->
                         <i class="fa-solid fa-house"></i>
                         <span>Home</span>
                         <!-- </label> -->
                     </a>
                 </li>
                 <li>
                     <a href="#">
                         <!-- <label for="discovery" class="discovery"> -->
                         <i class="fa-solid fa-compass"></i>
                         <span>Discovery</span>
                         <!-- </label> -->
                     </a>
                 </li>
                 <li>
                     <a href="/explore.html">

                         <!-- <label for="list" class="list">                     -->
                         <i class="fa-solid fa-display light"></i>
                         <span>Explore</span>
                         <!-- </label> -->
                     </a>

                 </li>
                 <li>
                     <a href="">
                         <!-- <label for="history" class="history"> -->
                         <i class="fa-solid fa-clock-rotate-left"></i>
                         <span>History</span>
                         <!-- </label> -->
                     </a>
                 </li>
             </ul>
             <h3>PERSONAL</h3>
             <ul class="nav__main-list">
                 <li>
                     <a href="">
                         <!-- <label for="sign-in" class="sign-in"> -->
                         <i class="fa-solid fa-right-to-bracket light"></i>
                         <span><a href="/sign-in.html">Sign In</a></span>
                         <!-- </label> -->
                     </a>
                 </li>
                 <!-- <li class="dark__mode">
                                    <i class="fa-solid fa-sun"></i>
                                    <input  type="checkbox" id="light-dark" class="switch">
                                    <i class="fa-solid fa-moon"></i>
                                </li> -->
             </ul>
         </div>
     </div>

 </div>