<!-- header section start -->
<header class="header-4 header-center">
    <div class="mobile-fix-header">
    </div>
    <div class="container">
        <div class="row header-content">
            <div class="col-12">
                <div class="left-part">
                    <div class="navbar">
                        <a href="javascript:void(0)" onclick="openNav()">
                            <div class="bar-style"><i class="fa fa-bars sidebar-bar text-dark" aria-hidden="true"></i></div>
                        </a>
                        <div id="mySidenav" class="sidenav">
                            <a href="javascript:void(0)" class="sidebar-overlay" onclick="closeNav()"></a>
                            <nav class="">
                                <div onclick="closeNav()">
                                    <div class="sidebar-back text-left"><i class="fa fa-angle-left pr-2" aria-hidden="true"></i> Back</div>
                                </div>
                                <ul id="sub-menu" class="sm pixelstrap sm-vertical ">

                               
                            <li><a href="/"><i class="fa fa-home home-icon" aria-hidden="true"></i>&nbsp;Home</a>
                               
                            </li>
                            <li><a href="/about">About Us</a>
                               
                            </li>
                            <li><a href="/shop">shop</a>
                               
                            </li>
                            <li><a href="/contact">Contact Us</a>
                               
                            </li>
                            <li><a href="/faq">FAQ</a>
                               
                            </li>
                            
                                                            </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="search-bar">
                        <input class="search__input" type="text" id="myInput1" placeholder="Search a product" autocomplete="off">
                        <div class="search-icon "></div>

                        <script>
  function autocomplete(inp, arr) {
  /*the autocomplete function takes two arguments,
  the text field element and an array of possible autocompleted values:*/
  var currentFocus;
  /*execute a function when someone writes in the text field:*/
  inp.addEventListener("input", function(e) {
      var a, b, i, val = this.value;
      /*close any already open lists of autocompleted values*/
      closeAllLists();
      if (!val) { return false;}
      currentFocus = -1;
      /*create a DIV element that will contain the items (values):*/
      a = document.createElement("DIV");
      a.setAttribute("id", this.id + "autocomplete-list");
      a.setAttribute("class", "autocomplete-items");
      /*append the DIV element as a child of the autocomplete container:*/
      this.parentNode.appendChild(a);
      /*for each item in the array...*/
      for (i = 0; i < arr.length; i++) {
        /*check if the item starts with the same letters as the text field value:*/
        if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
          /*create a DIV element for each matching element:*/
          b = document.createElement("DIV");
          /*make the matching letters bold:*/
          b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
          b.innerHTML += arr[i].substr(val.length);
          /*insert a input field that will hold the current array item's value:*/
          b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
          /*execute a function when someone clicks on the item value (DIV element):*/
          b.addEventListener("click", function(e) {
              /*insert the value for the autocomplete text field:*/
              inp.value = this.getElementsByTagName("input")[0].value;
              /*close the list of autocompleted values,
              (or any other open lists of autocompleted values:*/

              var ps=inp.value;
			  
			  
              var res = ps.split("<span  style=float:right;color:#fd7e14;><b>");
              var namee=res[0];
              
              
              inp.value=namee;
			  window.location.href='product_details?p_name='+namee;
              closeAllLists();
          });
          a.appendChild(b);
        }
      }
  });
  /*execute a function presses a key on the keyboard:*/
  inp.addEventListener("keydown", function(e) {
      var x = document.getElementById(this.id + "autocomplete-list");
      if (x) x = x.getElementsByTagName("div");
      if (e.keyCode == 40) {
        /*If the arrow DOWN key is pressed,
        increase the currentFocus variable:*/
        currentFocus++;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 38) { //up
        /*If the arrow UP key is pressed,
        decrease the currentFocus variable:*/
        currentFocus--;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 13) {
        /*If the ENTER key is pressed, prevent the form from being submitted,*/
        e.preventDefault();
        if (currentFocus > -1) {
          /*and simulate a click on the "active" item:*/
          if (x) x[currentFocus].click();
        }
      }
  });
  function addActive(x) {
    /*a function to classify an item as "active":*/
    if (!x) return false;
    /*start by removing the "active" class on all items:*/
    removeActive(x);
    if (currentFocus >= x.length) currentFocus = 0;
    if (currentFocus < 0) currentFocus = (x.length - 1);
    /*add class "autocomplete-active":*/
    x[currentFocus].classList.add("autocomplete-active");
  }
  function removeActive(x) {
    /*a function to remove the "active" class from all autocomplete items:*/
    for (var i = 0; i < x.length; i++) {
      x[i].classList.remove("autocomplete-active");
    }
  }
  function closeAllLists(elmnt) {
    /*close all autocomplete lists in the document,
    except the one passed as an argument:*/
    var x = document.getElementsByClassName("autocomplete-items");
    for (var i = 0; i < x.length; i++) {
      if (elmnt != x[i] && elmnt != inp) {
        x[i].parentNode.removeChild(x[i]);
      }
    }
  }
  /*execute a function when someone clicks in the document:*/
  document.addEventListener("click", function (e) {
      closeAllLists(e.target);
  });
}
/*An array containing all the country names in the world:*/


var countries = [
			"Matte Full Rim Escobar VCE12392 - C1 Eyeglasses<span  style=float:right;color:#fd7e14;><b></b></span>",
			"Full Rim Rectangle Frame<span  style=float:right;color:#fd7e14;><b></b></span>",
			"gfh<span  style=float:right;color:#fd7e14;><b></b></span>",
			"fdh<span  style=float:right;color:#fd7e14;><b></b></span>",
			"dfg<span  style=float:right;color:#fd7e14;><b></b></span>",
			"sf4<span  style=float:right;color:#fd7e14;><b></b></span>",
			"UV Protection Cat-eye Sunglasses For Girls<span  style=float:right;color:#fd7e14;><b></b></span>", 
  ];

/*initiate the autocomplete function on the "myInput" element, and pass along the countries array as possible autocomplete values:*/
autocomplete(document.getElementById("myInput1"), countries);
</script>
                        <i class="ti-search mobile-icon-search" onclick="openSearch()"></i>
                        <div id="search-overlay" class="search-overlay">
                            <div>
                                <span class="closebtn" onclick="closeSearch()" title="Close Overlay">×</span>
                                <div class="overlay-content">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-xl-12">
                                                <form>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control"  placeholder="Search a Product" >
                                                    </div>
                                                    <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                                                </form>
 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="brand-logo">
                    <a href="#"> <img src="{{URL::asset('user/images/10.png')}}" class=" img-fluid" alt=""></a>
                </div>

                <div class="nav-right" >
                <style>

                @media  screen and (max-width: 700px) {
                    #mobile1{display: none;}
                    #mobile2{display: none;}
                    #mobile3{display: none;}
                    #mobile4{display: none;}
                }
                
                @media  screen and (min-width: 700px) {
                    #desktop1{display: none;}
                    #desktop2{display: none;}
                    #desktop3{display: none;}
                    #desktop4{display: none;}
                    #desktop5{display: none;}
                }
                </style>
                    <div class="nav-icon" id="desktop_menu">
                        <ul>

                            <li class="onhover-div user-icon" onclick="openAccount()" id="mobile3">
                                <img src="../user_assets/images/icon/black-icon/profile.png" alt="" class="user-img">
                                <a onclick="openAccount()"> Login</a>
                            </li>
                            <li class="onhover-div user-icon" id="mobile4">
                                <img src="../user_assets/images/icon/black-icon/profile.png" alt="" class="user-img">
                             <a href="/register" style="color:black"> Register</a>
                            </li>
                            <li class="onhover-div user-icon" id="desktop3">
                                <a  onclick="openAccount()">
                                    <img src="../user_assets/images/icon/black-icon/profile.png" alt="" class="user-img">
                                    <i class="ti-user mobile-icon"></i>
                                </a>
                                </li>
                                <li class="onhover-div wishlist-icon"  onclick="openAccount()" id="desktop4">
                                <img src="../user_assets/images/icon/black-icon/like.png" alt="" class="wishlist-img">
                                <i class="ti-heart mobile-icon"></i>0
                            </li>
                            <li class="onhover-div cart-icon"  onclick="openAccount()" id="desktop5">
                                <img src="../user_assets/images/icon/black-icon/shopping-cart.png" alt="" class="cart-image">
                                <i class="ti-shopping-cart mobile-icon"></i>0
                                
                            </li>

                            <li class="onhover-div setting-icon" id="desktop2">

                                <div><img src="../user_assets/images/icon/black-icon/settings.png" class=" img-fluid setting-img" alt="">
                                    <i class="ti-settings mobile-icon"></i>
                                </div>
                                <div class="show-div setting">
                                            <h6 onclick="openAccount()">Login</h6>
                                          
                                          <h6>  <a href="/register" style="color:black"> Register</a></h6>
                                          
                                        </div>
                            </li>
                                                    <!--
                            <li class="onhover-div wishlist-icon"  onclick="openWishlist()">
                                <img src="../user_assets/images/icon/black-icon/like.png" alt="" class="wishlist-img">
                                <i class="ti-heart mobile-icon"></i>
                            </li>
                            <li class="onhover-div cart-icon"  onclick="openCart()">
                                <img src="../user_assets/images/icon/black-icon/shopping-cart.png" alt="" class="cart-image">
                                <i class="ti-shopping-cart mobile-icon"></i>
                                <div class="cart">
                                    <span>2 item</span>
                                    <h6>my cart</h6>
                                </div>
                            </li>-->
                        </ul>
                    </div>
                
            </div>
        </div>
    </div>
    <div class="bg-class">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav id="main-nav">
                        <div class="toggle-nav">
                            <i class="ti-menu-alt"></i>
                        </div>
                        <ul id="main-menu" class="sm pixelstrap sm-horizontal dark-font">
                            <li>
                                <div class="mobile-back text-right">
                                    Back<i class="fa fa-angle-right pl-2" aria-hidden="true"></i>
                                </div>
                            </li>
                                
                            <li class="mega"><a href="/shop?cat=1">Men Eyeglasses</a>
                            <ul class="mega-menu feature-menu full-mega-menu">


                                                                <li>
                                                                    <div class="container">
                                                                        <div class="row">
                                                                        
                                                                            <div class="col-xl-2 mega-box">
                                                                                <div class="link-section">
                                                                                    <div class="demo">
                                                                                        <div class="menu-title">
                                                                                        <a href="/shop?cat=1&&sub_cat=8"> <h6><b>Aviator</b></h6></a>
                                                                                        </div>
                                                                                                                                                                                                                                                                        </div>
                                                                                </div>
                                                                            </div>
                                                                            
                                                                            <div class="col-xl-2 mega-box">
                                                                                <div class="link-section">
                                                                                    <div class="demo">
                                                                                        <div class="menu-title">
                                                                                        <a href="/shop?cat=1&&sub_cat=9"> <h6><b>Cat-Eye</b></h6></a>
                                                                                        </div>
                                                                                                                                                                                                                                                                        </div>
                                                                                </div>
                                                                            </div>
                                                                            
                                                                            <div class="col-xl-2 mega-box">
                                                                                <div class="link-section">
                                                                                    <div class="demo">
                                                                                        <div class="menu-title">
                                                                                        <a href="/shop?cat=1&&sub_cat=10"> <h6><b>Round Reflector</b></h6></a>
                                                                                        </div>
                                                                                                                                                                                                                                                                        </div>
                                                                                </div>
                                                                            </div>
                                                                                                                        
                                                                            
                                                                        </div>
                                                                    </div>
                                                                    <br><br>
                                                                </li>
                                                            

                            
                            </ul>


                            </li>
                            <li class="mega"><a href="/shop?cat=2">Woman Eyeglasses</a>

                            <ul class="mega-menu feature-menu full-mega-menu">


                                                                <li>
                                                                    <div class="container">
                                                                        <div class="row">
                                                                        
                                                                            <div class="col-xl-2 mega-box">
                                                                                <div class="link-section">
                                                                                    <div class="demo">
                                                                                        <div class="menu-title">
                                                                                        <a href="/shop?cat=2&&sub_cat=12"> <h6><b>Half Rim frames</b></h6></a>
                                                                                        </div>
                                                                                                                                                                                                                                                                        </div>
                                                                                </div>
                                                                            </div>
                                                                            
                                                                            <div class="col-xl-2 mega-box">
                                                                                <div class="link-section">
                                                                                    <div class="demo">
                                                                                        <div class="menu-title">
                                                                                        <a href="/shop?cat=2&&sub_cat=13"> <h6><b>Rectangle Frames</b></h6></a>
                                                                                        </div>
                                                                                                                                                                                                                                                                        </div>
                                                                                </div>
                                                                            </div>
                                                                            
                                                                            <div class="col-xl-2 mega-box">
                                                                                <div class="link-section">
                                                                                    <div class="demo">
                                                                                        <div class="menu-title">
                                                                                        <a href="/shop?cat=2&&sub_cat=14"> <h6><b>Wayfarer Frames</b></h6></a>
                                                                                        </div>
                                                                                                                                                                                                                                                                        </div>
                                                                                </div>
                                                                            </div>
                                                                            
                                                                            <div class="col-xl-2 mega-box">
                                                                                <div class="link-section">
                                                                                    <div class="demo">
                                                                                        <div class="menu-title">
                                                                                        <a href="/shop?cat=2&&sub_cat=15"> <h6><b>Round Frames</b></h6></a>
                                                                                        </div>
                                                                                                                                                                                                                                                                        </div>
                                                                                </div>
                                                                            </div>
                                                                            
                                                                            <div class="col-xl-2 mega-box">
                                                                                <div class="link-section">
                                                                                    <div class="demo">
                                                                                        <div class="menu-title">
                                                                                        <a href="/shop?cat=2&&sub_cat=16"> <h6><b>Aviator Frames</b></h6></a>
                                                                                        </div>
                                                                                                                                                                                                                                                                        </div>
                                                                                </div>
                                                                            </div>
                                                                            
                                                                            <div class="col-xl-2 mega-box">
                                                                                <div class="link-section">
                                                                                    <div class="demo">
                                                                                        <div class="menu-title">
                                                                                        <a href="/shop?cat=2&&sub_cat=17"> <h6><b>Cat-Eye Frames</b></h6></a>
                                                                                        </div>
                                                                                                                                                                                                                                                                        </div>
                                                                                </div>
                                                                            </div>
                                                                            
                                                                            <div class="col-xl-2 mega-box">
                                                                                <div class="link-section">
                                                                                    <div class="demo">
                                                                                        <div class="menu-title">
                                                                                        <a href="/shop?cat=2&&sub_cat=18"> <h6><b>Rimless Frames</b></h6></a>
                                                                                        </div>
                                                                                                                                                                                                                                                                        </div>
                                                                                </div>
                                                                            </div>
                                                                                                                        
                                                                            
                                                                        </div>
                                                                    </div>
                                                                    <br><br>
                                                                </li>
                                                            

                            
                            </ul>


                            </li>
                            <li class="mega"><a href="/shop?cat=3">Man Sunglasses</a>

                            <ul class="mega-menu feature-menu full-mega-menu">


                                                                <li>
                                                                    <div class="container">
                                                                        <div class="row">
                                                                        
                                                                            <div class="col-xl-2 mega-box">
                                                                                <div class="link-section">
                                                                                    <div class="demo">
                                                                                        <div class="menu-title">
                                                                                        <a href="/shop?cat=3&&sub_cat=1"> <h6><b>Half Rim frames</b></h6></a>
                                                                                        </div>
                                                                                                                                                                                                                                                                            <div class="menu-content">
                                                                                        <!--  <img src="../assets/images/mega-menu/1.jpg" class="mega-menu-img  img-fluid" alt="">-->
                                                                                            <ul>
                                                                                                                                                                                                                                <li><a href="/shop?sub_sub_cat=1">Shaded glass</a></li>
                                                                                                                                                            

                                                                                            </ul>
                                                                                        </div>
                                                                                                                                                </div>
                                                                                </div>
                                                                            </div>
                                                                            
                                                                            <div class="col-xl-2 mega-box">
                                                                                <div class="link-section">
                                                                                    <div class="demo">
                                                                                        <div class="menu-title">
                                                                                        <a href="/shop?cat=3&&sub_cat=2"> <h6><b>Rectangle Frames</b></h6></a>
                                                                                        </div>
                                                                                                                                                                                                                                                                            <div class="menu-content">
                                                                                        <!--  <img src="../assets/images/mega-menu/1.jpg" class="mega-menu-img  img-fluid" alt="">-->
                                                                                            <ul>
                                                                                                                                                                                                                                <li><a href="/shop?sub_sub_cat=2">Full Rim</a></li>
                                                                                                                                                            

                                                                                            </ul>
                                                                                        </div>
                                                                                                                                                </div>
                                                                                </div>
                                                                            </div>
                                                                            
                                                                            <div class="col-xl-2 mega-box">
                                                                                <div class="link-section">
                                                                                    <div class="demo">
                                                                                        <div class="menu-title">
                                                                                        <a href="/shop?cat=3&&sub_cat=3"> <h6><b>Wayfarer Frames</b></h6></a>
                                                                                        </div>
                                                                                                                                                                                                                                                                        </div>
                                                                                </div>
                                                                            </div>
                                                                            
                                                                            <div class="col-xl-2 mega-box">
                                                                                <div class="link-section">
                                                                                    <div class="demo">
                                                                                        <div class="menu-title">
                                                                                        <a href="/shop?cat=3&&sub_cat=4"> <h6><b>Round Frames</b></h6></a>
                                                                                        </div>
                                                                                                                                                                                                                                                                        </div>
                                                                                </div>
                                                                            </div>
                                                                            
                                                                            <div class="col-xl-2 mega-box">
                                                                                <div class="link-section">
                                                                                    <div class="demo">
                                                                                        <div class="menu-title">
                                                                                        <a href="/shop?cat=3&&sub_cat=5"> <h6><b>Aviator Frames</b></h6></a>
                                                                                        </div>
                                                                                                                                                                                                                                                                        </div>
                                                                                </div>
                                                                            </div>
                                                                            
                                                                            <div class="col-xl-2 mega-box">
                                                                                <div class="link-section">
                                                                                    <div class="demo">
                                                                                        <div class="menu-title">
                                                                                        <a href="/shop?cat=3&&sub_cat=6"> <h6><b>Cat-Eye Frames</b></h6></a>
                                                                                        </div>
                                                                                                                                                                                                                                                                        </div>
                                                                                </div>
                                                                            </div>
                                                                            
                                                                            <div class="col-xl-2 mega-box">
                                                                                <div class="link-section">
                                                                                    <div class="demo">
                                                                                        <div class="menu-title">
                                                                                        <a href="/shop?cat=3&&sub_cat=7"> <h6><b>Rimless Frames</b></h6></a>
                                                                                        </div>
                                                                                                                                                                                                                                                                        </div>
                                                                                </div>
                                                                            </div>
                                                                                                                        
                                                                            
                                                                        </div>
                                                                    </div>
                                                                    <br><br>
                                                                </li>
                                                            

                            
                            </ul>


                            </li>
                            <li class="mega"><a href="/shop?cat=4">Woman Sunglasses</a>
                            <ul class="mega-menu feature-menu full-mega-menu">


                                                                <li>
                                                                    <div class="container">
                                                                        <div class="row">
                                                                        
                                                                            <div class="col-xl-2 mega-box">
                                                                                <div class="link-section">
                                                                                    <div class="demo">
                                                                                        <div class="menu-title">
                                                                                        <a href="/shop?cat=4&&sub_cat=19"> <h6><b>Aviator</b></h6></a>
                                                                                        </div>
                                                                                                                                                                                                                                                                        </div>
                                                                                </div>
                                                                            </div>
                                                                            
                                                                            <div class="col-xl-2 mega-box">
                                                                                <div class="link-section">
                                                                                    <div class="demo">
                                                                                        <div class="menu-title">
                                                                                        <a href="/shop?cat=4&&sub_cat=20"> <h6><b>Rectangle</b></h6></a>
                                                                                        </div>
                                                                                                                                                                                                                                                                        </div>
                                                                                </div>
                                                                            </div>
                                                                            
                                                                            <div class="col-xl-2 mega-box">
                                                                                <div class="link-section">
                                                                                    <div class="demo">
                                                                                        <div class="menu-title">
                                                                                        <a href="/shop?cat=4&&sub_cat=21"> <h6><b>Cat Eye</b></h6></a>
                                                                                        </div>
                                                                                                                                                                                                                                                                        </div>
                                                                                </div>
                                                                            </div>
                                                                            
                                                                            <div class="col-xl-2 mega-box">
                                                                                <div class="link-section">
                                                                                    <div class="demo">
                                                                                        <div class="menu-title">
                                                                                        <a href="/shop?cat=4&&sub_cat=22"> <h6><b>Reflector</b></h6></a>
                                                                                        </div>
                                                                                                                                                                                                                                                                        </div>
                                                                                </div>
                                                                            </div>
                                                                            
                                                                            <div class="col-xl-2 mega-box">
                                                                                <div class="link-section">
                                                                                    <div class="demo">
                                                                                        <div class="menu-title">
                                                                                        <a href="/shop?cat=4&&sub_cat=23"> <h6><b>Wayfarer Round</b></h6></a>
                                                                                        </div>
                                                                                                                                                                                                                                                                        </div>
                                                                                </div>
                                                                            </div>
                                                                                                                        
                                                                            
                                                                        </div>
                                                                    </div>
                                                                    <br><br>
                                                                </li>
                                                            

                            
                            </ul>


                            </li>
                            <li class="mega"><a href="/shop?cat=5">Contact Lenses</a>
                            <ul class="mega-menu feature-menu full-mega-menu">


                                                                <li>
                                                                    <div class="container">
                                                                        <div class="row">
                                                                        
                                                                            <div class="col-xl-2 mega-box">
                                                                                <div class="link-section">
                                                                                    <div class="demo">
                                                                                        <div class="menu-title">
                                                                                        <a href="/shop?cat=5&&sub_cat=24"> <h6><b>Pure Vision</b></h6></a>
                                                                                        </div>
                                                                                                                                                                                                                                                                        </div>
                                                                                </div>
                                                                            </div>
                                                                            
                                                                            <div class="col-xl-2 mega-box">
                                                                                <div class="link-section">
                                                                                    <div class="demo">
                                                                                        <div class="menu-title">
                                                                                        <a href="/shop?cat=5&&sub_cat=25"> <h6><b>Aqualens Bausch Lomb</b></h6></a>
                                                                                        </div>
                                                                                                                                                                                                                                                                        </div>
                                                                                </div>
                                                                            </div>
                                                                            
                                                                            <div class="col-xl-2 mega-box">
                                                                                <div class="link-section">
                                                                                    <div class="demo">
                                                                                        <div class="menu-title">
                                                                                        <a href="/shop?cat=5&&sub_cat=26"> <h6><b>Johnson &amp; Johnson</b></h6></a>
                                                                                        </div>
                                                                                                                                                                                                                                                                        </div>
                                                                                </div>
                                                                            </div>
                                                                            
                                                                            <div class="col-xl-2 mega-box">
                                                                                <div class="link-section">
                                                                                    <div class="demo">
                                                                                        <div class="menu-title">
                                                                                        <a href="/shop?cat=5&&sub_cat=27"> <h6><b>Soflens</b></h6></a>
                                                                                        </div>
                                                                                                                                                                                                                                                                        </div>
                                                                                </div>
                                                                            </div>
                                                                            
                                                                            <div class="col-xl-2 mega-box">
                                                                                <div class="link-section">
                                                                                    <div class="demo">
                                                                                        <div class="menu-title">
                                                                                        <a href="/shop?cat=5&&sub_cat=28"> <h6><b>Acuvue</b></h6></a>
                                                                                        </div>
                                                                                                                                                                                                                                                                        </div>
                                                                                </div>
                                                                            </div>
                                                                            
                                                                            <div class="col-xl-2 mega-box">
                                                                                <div class="link-section">
                                                                                    <div class="demo">
                                                                                        <div class="menu-title">
                                                                                        <a href="/shop?cat=5&&sub_cat=29"> <h6><b>Iconnect</b></h6></a>
                                                                                        </div>
                                                                                                                                                                                                                                                                        </div>
                                                                                </div>
                                                                            </div>
                                                                                                                        
                                                                            
                                                                        </div>
                                                                    </div>
                                                                    <br><br>
                                                                </li>
                                                            

                            
                            </ul>


                            </li>
                            <li class="mega"><a href="/shop?cat=6">Oil</a>
                            </li>
                            <li class="mega"><a href="/shop?cat=7">Baby Sunglass</a>
                            <ul class="mega-menu feature-menu full-mega-menu">


                                                                <li>
                                                                    <div class="container">
                                                                        <div class="row">
                                                                        
                                                                            <div class="col-xl-2 mega-box">
                                                                                <div class="link-section">
                                                                                    <div class="demo">
                                                                                        <div class="menu-title">
                                                                                        <a href="/shop?cat=7&&sub_cat=32"> <h6><b>Round Shape</b></h6></a>
                                                                                        </div>
                                                                                            <div class="menu-content">
                                                                                        <!--  <img src="../assets/images/mega-menu/1.jpg" class="mega-menu-img  img-fluid" alt="">-->
                                                                                            <ul>
                                                                                                <li><a href="/shop?sub_sub_cat=3">Black Frame</a></li>
                                                                                                <li><a href="/shop?sub_sub_cat=4">Brown Frame</a></li>
                                                                                                                                                        
                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            
                                                                            <div class="col-xl-2 mega-box">
                                                                                <div class="link-section">
                                                                                    <div class="demo">
                                                                                        <div class="menu-title">
                                                                                        <a href="/shop?cat=7&&sub_cat=33"> <h6><b>Square Shape Glass</b></h6></a>
                                                                                        </div>
                                                                                            <div class="menu-content">
                                                                                        <!--  <img src="../assets/images/mega-menu/1.jpg" class="mega-menu-img  img-fluid" alt="">-->
                                                                                            <ul>
                                                                                                <li><a href="/shop?sub_sub_cat=5">Black Frame</a></li>
                                                                                                <li><a href="/shop?sub_sub_cat=6">Brown Frame</a></li>
                                                                                                                                                            
                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            
                                                                            <div class="col-xl-2 mega-box">
                                                                                <div class="link-section">
                                                                                    <div class="demo">
                                                                                        <div class="menu-title">
                                                                                        <a href="/shop?cat=7&&sub_cat=34"> <h6><b>Half Rim Sunglass</b></h6></a>
                                                                                        </div>
                                                                                            <div class="menu-content">
                                                                                        <!--  <img src="../assets/images/mega-menu/1.jpg" class="mega-menu-img  img-fluid" alt="">-->
                                                                                            <ul>
                                                                                            <li><a href="/shop?sub_sub_cat=7">Black Frame</a></li>
                                                                                            <li><a href="/shop?sub_sub_cat=8">Brown Frame</a></li>
                                                                                                                                                            

                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>                                            
                                                                        </div>
                                                                    </div>
                                                                    <br><br>
                                                                </li>
                                                            
                            </ul>
                            </li>
                            <li class="mega"><a href="/shop?cat=8">BISCUIT</a>
                            <ul class="mega-menu feature-menu full-mega-menu">

                                                                <li>
                                                                    <div class="container">
                                                                        <div class="row">
                                                                        
                                                                            <div class="col-xl-2 mega-box">
                                                                                <div class="link-section">
                                                                                    <div class="demo">
                                                                                        <div class="menu-title">
                                                                                        <a href="/shop?cat=8&&sub_cat=37"> <h6><b>SALT</b></h6></a>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            
                                                                            <div class="col-xl-2 mega-box">
                                                                                <div class="link-section">
                                                                                    <div class="demo">
                                                                                        <div class="menu-title">
                                                                                        <a href="/shop?cat=8&&sub_cat=38"> <h6><b>SWEET</b></h6></a>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>                                    
                                                                        </div>
                                                                    </div>
                                                                    <br><br>
                                                                </li>
                                                            
                            </ul>


                            </li>  
                            <li class="mega"><a href="/shop?cat=9">TEA</a>
                            </li>
                            <li class="mega"><a href="/shop?cat=10">BREADS</a>
                            </li>
                            <li class="mega"><a href="/shop?cat=11">SPICES</a>
                            </li>
                            <li class="mega"><a href="/shop?cat=12">SHOES</a>
                            <ul class="mega-menu feature-menu full-mega-menu">


                                                                <li>
                                                                    <div class="container">
                                                                        <div class="row">
                                                                        
                                                                            <div class="col-xl-2 mega-box">
                                                                                <div class="link-section">
                                                                                    <div class="demo">
                                                                                        <div class="menu-title">
                                                                                        <a href="/shop?cat=12&&sub_cat=35"> <h6><b>KIDS</b></h6></a>
                                                                                        </div>
                                                                                            <div class="menu-content">
                                                                                        <!--  <img src="../assets/images/mega-menu/1.jpg" class="mega-menu-img  img-fluid" alt="">-->
                                                                                            <ul>
                                                                                                                                                                                                                                <li><a href="/shop?sub_sub_cat=9">FORMAL</a></li>
                                                                                                                                                                <li><a href="/shop?sub_sub_cat=10">CASUAL</a></li>
                                                                                                                                                                <li><a href="/shop?sub_sub_cat=11">SPORTS</a></li>
                                                                                                                                                            

                                                                                            </ul>
                                                                                        </div>
                                                                                                                                                </div>
                                                                                </div>
                                                                            </div>
                                                                            
                                                                            <div class="col-xl-2 mega-box">
                                                                                <div class="link-section">
                                                                                    <div class="demo">
                                                                                        <div class="menu-title">
                                                                                        <a href="/shop?cat=12&&sub_cat=36"> <h6><b>GENTS</b></h6></a>
                                                                                        </div>
                                                                                                                                                                                                                                                                        </div>
                                                                                </div>
                                                                            </div>
                                                                            
                                                                            <div class="col-xl-2 mega-box">
                                                                                <div class="link-section">
                                                                                    <div class="demo">
                                                                                        <div class="menu-title">
                                                                                        <a href="/shop?cat=12&&sub_cat=39"> <h6><b>LADIES</b></h6></a>
                                                                                        </div>
                                                                                                                                                                                                                                                                        </div>
                                                                                </div>
                                                                            </div>
                                                                                                                        
                                                                            
                                                                        </div>
                                                                    </div>
                                                                    <br><br>
                                                                </li>
                                                            

                            
                            </ul>


                            </li>
                            <li class="mega"><a href="/shop?cat=13">CLL</a>

                            </li>                                   
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header section end -->