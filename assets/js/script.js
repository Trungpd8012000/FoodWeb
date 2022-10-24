document.addEventListener("DOMContentLoaded", () => {
  $('.sec1 .slider').slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    prevArrow: '<button><i class="fa-solid fa-chevron-left"></i></button>',
    nextArrow: '<button><i class="fa-solid fa-chevron-right"></i></button>',
  });
  $('.secBx1 .product-slider, .secSlider2 .slider').slick({
  infinite: true,
  slidesToShow: 5,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2000,
  prevArrow: '<div><i class="fa-solid fa-chevron-left"></i></div>',
  nextArrow: '<div><i class="fa-solid fa-chevron-right"></i></div>',
  responsive: [
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 2
      }
    },
    {
      breakpoint: 992,
      settings: {
        slidesToShow: 3
      }
    }
    ,
    {
      breakpoint: 576,
      settings: {
        slidesToShow: 1,
        arrows: false,
        centerMode: true,
        centerPadding: '80px',
      }
    }
  ]
  });
  $('.secSlider1 .slider').slick({
  infinite: true,
  slidesToShow: 7,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2000,
  prevArrow: '<div><i class="fa-solid fa-chevron-left"></i></div>',
  nextArrow: '<div><i class="fa-solid fa-chevron-right"></i></div>',
  responsive: [
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 4
      }
    },
    {
      breakpoint: 992,
      settings: {
        slidesToShow: 5
      }
    }
    ,
    {
      breakpoint: 576,
      settings: {
        slidesToShow: 4,
        arrows: false
      }
    }
  ]
  });
  $('.secSlider3 .slider').slick({
  infinite: true,
  slidesToShow: 4,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2000,
  prevArrow: '<div><i class="fa-solid fa-chevron-left"></i></div>',
  nextArrow: '<div><i class="fa-solid fa-chevron-right"></i></div>',
  responsive: [
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 2
      }
    },
    {
      breakpoint: 992,
      settings: {
        slidesToShow: 3
      }
    }
    ,
    {
      breakpoint: 576,
      settings: {
        slidesToShow: 1,
        arrows: false,
        centerMode: true,
        centerPadding: '80px',
      }
    }
  ]
  });
  
  $('.sec2 .slider').slick({
  infinite: true,
  dots:true,
  slidesToShow: 1,
  slidesToScroll: 1,
  });
    
  $('.pro-sidebar .pro-slider').slick({
  infinite: true,
  slidesToShow: 1,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2000,
  prevArrow: '<button><i class="fa-solid fa-chevron-left"></i></button>',
  nextArrow: '<button><i class="fa-solid fa-chevron-right"></i></button>',
  responsive: [
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 2
        }
      },
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 3
        }
      },
      {
        breakpoint: 576,
        settings: {
          slidesToShow: 1,
          centerMode: true,
          centerPadding: '60px',
        }
      }
    ]
  })
    
  // Start Js info-pro
  $('.md-slider-info-pro').slick({
  infinite: true,
  slidesToShow: 1,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2000
  });
  $('.post-pro .slider-info').slick({
  infinite: true,
  slidesToShow: 3,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2000,
  prevArrow: '<button><i class="fa-solid fa-chevron-left"></i></button>',
  nextArrow: '<button><i class="fa-solid fa-chevron-right"></i></button>',
  responsive: [
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 2
      }
    },
    {
      breakpoint: 992,
      settings: {
        slidesToShow: 3
      }
    },
    {
      breakpoint: 576,
      settings: {
        slidesToShow: 1,
        centerMode: true,
        centerPadding: '60px',
      }
    }
  ]
  });
// End Js info-pro
  // Start Js home page
  const iconMenu = document.querySelector(".js-icon-menu");
  const showMenu = document.querySelector(".js-md-menu");
  const bodyElement = document.querySelector(".body");
  const showModalMenu = document.querySelector(".js-modal-menu");
  const iconClose = document.querySelector(".js-icon-close");
  const btnVideos = document.querySelectorAll(".js-btn-video");
  const showVideos = document.querySelectorAll(".js-modal-video");
  const handleOpenMenu = () => {
    iconMenu.onclick = () => {
      showModalMenu.classList.add("d-block");
      showMenu.classList.add("show-menu");
      bodyElement.classList.add("overflow-hidden");
    }
  } 
  const handleCloseMenu = () => {
    iconClose.onclick = () => {
      showMenu.classList.remove("show-menu");
      showModalMenu.classList.remove("d-block");
      bodyElement.classList.remove("overflow-hidden");
    }
  }
  const handleOpenVideo = () => {
    for(let i = 0; i < btnVideos.length; i++){
      btnVideos[i].addEventListener("click", () => {
        if(showVideos.length){
          showVideos[i].classList.add("show-video");
          bodyElement.classList.add("overflow-hidden");
          showVideos[i].addEventListener("click", ()=>{
            showVideos[i].classList.remove("show-video");
            bodyElement.classList.remove("overflow-hidden");
          })
        }
      })
    }
  }
  const btnCart = document.querySelector(".cart");
  const showCartOrder = document.querySelector(".js-cart-order");
  const handleOpenCart = () => {
    btnCart.onclick = (e) => {
      e.stopPropagation();
      showCartOrder.classList.toggle("d-block");
    }
    showCartOrder.onclick = (e) => {
      e.stopPropagation();
    }
    document.body.onclick = () => {
      showCartOrder.classList.remove("d-block");
    }
  }
  handleOpenMenu();
  handleCloseMenu();
  handleOpenVideo();
  handleOpenCart();

  const storeItems = document.querySelectorAll(".sec2 .hanoi .store-item");
  const btnHideShow = document.querySelector(".sec2 .show-more-store .btn-show");
  const storeItems2 = document.querySelectorAll(".slick-slide .hanoi2 .store-item");
  const btnHideShow2 = document.querySelector(".slick-slide .show-more-store .btn-show");
  const handleHideAndMoreBtn = (arr, btn) => {
    if(arr.length){
      for(let i = 3; i < arr.length; i++){
        arr[i].classList.add("d-none");
      }
      btn.addEventListener("click", () => {
        for(let j = 3; j < arr.length; j++){
          arr[j].classList.toggle("d-none");
            if(arr[j].classList.contains("d-none")){
              btn.innerHTML = `Xem thêm các cơ sở khác <i class="fa-solid fa-angle-down"></i>`
            } else {
              btn.innerHTML = `Ẩn bớt <i class="fa-solid fa-angle-up"></i>`
            }
        }
      })
    }
  }
  handleHideAndMoreBtn(storeItems, btnHideShow);
  handleHideAndMoreBtn(storeItems2, btnHideShow2);

  const backTop = document.querySelector(".backToTop");
  const handleBackTopBtn = () => {
    window.addEventListener("scroll", () => {
      backTop.classList.toggle("scroll-top", window.scrollY > 400)
    })
    backTop.addEventListener("click", () => {
      window.scrollTo(0, 0)
    })
  }
  handleBackTopBtn();
  // End Js home page

  // Start Js pro detail
  const btnShowTexts = document.querySelectorAll(".btn-show-text");
  const showText = document.querySelector(".pro-text");
  const handleShowTextBtn = () => {
    btnShowTexts.forEach((btnShowText) => {
      btnShowText.onclick = () => {
        showText.classList.toggle("show-text");
        if(showText.classList.contains("show-text")) {
          btnShowText.innerHTML = `Thu gọn <i class="fa-solid fa-angle-up"></i>`;
        } else {
          btnShowText.innerHTML =  `Xem thêm <i class="fa-solid fa-angle-down"></i>`;
        }
      }
    })
  }
  handleShowTextBtn();
  // End Js pro detail

  // Start Js pro-list
  const prItems = document.querySelectorAll(".pr-item");
  const rotateIcons = document.querySelectorAll(".pr-item .angle-icon");
  const rotateIcons2 = document.querySelectorAll(".pr-item2 .angle-icon2");
  const prItems2 = document.querySelectorAll(".pr-item2");
  const showSubPros = document.querySelectorAll(".sub-pro");
  const showSubPros2 = document.querySelectorAll(".sub-pro2");
  const rotateIconUp = document.querySelector(".icon-ad");
  const showSmProCate = document.querySelector(".sm-pro-category");
  const handleShowSubPro = (arr1, arr2, arr3) => {
    if(arr1.length && arr2.length && arr3.length) {
      for(let i = 0; i < arr1.length; i++) {
        arr1[i].onclick = () => {
          arr1[i].classList.toggle("active");
          arr2[i].classList.toggle("rotate");
          if (arr3[i].classList.contains('d-none')) arr3[i].classList.remove('d-none');
          else arr3[i].classList.add('d-none');
        }
      }
    }
  } 
  handleShowSubPro(prItems, rotateIcons, showSubPros);
  handleShowSubPro(prItems2, rotateIcons2, showSubPros2);
  if(rotateIconUp && showSmProCate){
     rotateIconUp.addEventListener("click", () => {
      rotateIconUp.classList.toggle("rotate-up");
      showSmProCate.classList.toggle("show-sm-pro-cate");
     }) 
  }   
  // End Js pro-list

  const dataApi = 'http://localhost:3000/data';

  // get data
  const getData = (callback) => {
    const options = {
      method: 'GET',
      headers: {
        'Content-Type': 'application/json'
      }
    }
    fetch(dataApi, options)
      .then(response => response.json())
      .then(callback)
  }

  // code handle input search function
  const renderInputSearchData = (data) => {
    const { products } = data;
    const inputSearchs = document.querySelectorAll('input[name="search"]');
    const resultSearchBox = document.querySelector('.result-search');
    const loadSearch = document.querySelector(".load-search");
    const showData = (arr) => {
      return resultSearchBox.innerHTML = `
        <ul>
          ${
            arr.length 
            ? arr.map((item) => {
              return `
                <li class="d-flex">
                  <a href="#" class="img-search">
                    <img src=${item.img} alt=${item.title} />
                  </a>
                  <div class="info">
                    <a href="#">${item.title}</a>
                    <div class="price">${item.newPrice}</div>
                  </div>
                </li>
              `;
            }).join('') 
            : `<li class="no-result">Không tìm thấy sản phẩm nào !</li>`
          }
        </ul>
      ` + `<a class="linkSearchPage" href="">Kết quả tìm kiếm cho: </a>`
    }
    const hideResultSearch = () => {
      resultSearchBox.classList.add('d-none');
    }
    const openResultSearch = () => {
      resultSearchBox.classList.remove('d-none');
    }
    const hideLoadSearch = () => {
      loadSearch.classList.add('d-none');
    }
    const openLoadSearch = () => {
      loadSearch.classList.remove('d-none');
    }
    const createLinkPassParamToSearchPage = (param) => {
      const linkSearchPage = resultSearchBox.querySelector('.linkSearchPage');
      linkSearchPage.innerHTML = `Kết quả tìm kiếm : <span style="color: red">${param}</span>`;
      linkSearchPage.href = './Pages/search.php?keyword=' + param;
    }
    inputSearchs.forEach((item) => {
     item.onkeyup = (e) => {
       const convertLowerCase = e.target.value.toLowerCase();
       const filterData = products.filter((el) => {
         return el.title.toLowerCase().includes(convertLowerCase);
       })
       const sliceFilterData = filterData.slice(0, 4);
       showData(sliceFilterData);
       if (!convertLowerCase) {
         hideResultSearch();
       } else {
         createLinkPassParamToSearchPage(convertLowerCase);
         hideResultSearch();
         openLoadSearch();
         setTimeout(() => {
           hideLoadSearch();
           openResultSearch();
         }, 1000)
       }
     }
    })
  }

  const start = () => {
    // input search function
    getData(renderInputSearchData);
  }
  start();
})

