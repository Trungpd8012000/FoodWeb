document.addEventListener('DOMContentLoaded', () => {
  const cart = new Array();
  let amount = 1;
  // handle get param from URL
  const getParamFromUrl = () => {
    let urlStr = window.location.href;
    let url = new URL(urlStr);
    let keyword = url.searchParams.get('keyword');
    return keyword;
  }
  const handleParamFromURL = () => {
    let keyword = getParamFromUrl();
    const titleMain = document.querySelector('h1.title-main');
    if (!keyword) {
      alert('Chưa nhập từ khóa vào ô tìm kiếm!');
      window.location = '../index.html'; 
    } 
    else {
      titleMain.innerText = 'Tìm kiếm: ' + keyword;
    }
  }
  const dataApi = 'http://localhost:3000/data';
  const getData = (callback) => {
    fetch(dataApi, {
      method: 'GET',
      headers: {
        'Content-Type': 'application/json'
      }
    })
      .then((response) => response.json())
      .then(callback)
  }
  const filterDataByParam = (arr) => {
    let keyword = getParamFromUrl();
    return arr.filter((item) => item.title.toLowerCase().includes(keyword));
  }
  const displayData = (arr, wrapper, rows, currentPage) => {
    currentPage--;
    let start = currentPage * rows;
    let end = start + rows;
    const sliceArr = arr.slice(start, end);
    wrapper.innerHTML = sliceArr.length
    ? sliceArr.map((item) => {
      const arrPrice = item.newPrice.split('đ/');
      return `
        <div class="box mb-3">
          <div class="pro-item">
            <div class="pro-img">
              <a href="#!">
                <img src=${item.img} alt=${item.title}>
                <div class="pro-cart">
                  <span class="addCart" data-id=${item.id} data-price=${arrPrice[0]} data-weight=${arrPrice[1]} >
                    <img class="me-1" src="../img/icon_add_cart.png" alt="icon_add_cart">Thêm vào giỏ hàng
                    <div class="d-none">${item.title}</div>
                  </span>
                </div>
              </a> 
            </div>
            <div class="pro-desc">
              <h4 class="pro-title">
                <a href="#">${item.title}</a>
              </h4>
              <div class="pro-price pr-empty d-flex justify-content-between flex-wrap">
                  <del>${item.oldPrice}</del>
                  <div>${item.newPrice}</div>
              </div>
            </div>
          </div>
        </div>
      `;
    }).join('')
    : `<div style="margin-left: 10px; font-size: 20px; color: #ccc">Không có sản phẩm nào !</div>`;
  }
  const handleProductBuy = () => {
    const addCarts = document.querySelectorAll('.addCart');
    const toast = document.querySelector('.toast-pro');
    addCarts.forEach((addCart) => {
      addCart.onclick = () => {
        toast.innerHTML = `
          <div class="toast-successs">
            <i class="fa-regular fa-circle-check"></i>
            Bạn đã thêm sản phẩm vào giỏ hàng thành công!
          </div>
        `;
        toast.style = 'opacity: 1; visibility: visible';
        setTimeout(() => {
          toast.style = 'opacity: 0';
        } , 2000)
        addToCart(addCart);
      }
    })
    toast.onclick = () => {
      toast.style = 'opacity: 0';
    }
  }
  const handlePagination = (arr, wrapper) => {
    let currentPage = 1, rows = 12;
    let totalPage = Math.ceil(arr.length / rows);
    displayData(arr, wrapper, rows, currentPage);
    handleProductBuy();
    const pagination = document.querySelector('ul.pagination');
    for (let i = 0; i < totalPage; i++) {
      const liElement = document.createElement('li');
      liElement.classList.add('page-item');
      liElement.innerHTML = `<button class="page-link">${ i + 1 }</button>`;
      pagination.appendChild(liElement);
    }
    const paginationItems = document.querySelectorAll('.page-item');
    paginationItems[0].classList.add('active');
    paginationItems.forEach((paginationItem) => {
      paginationItem.onclick = () => {
        window.scrollTo(0, 200);
        paginationItems.forEach((item) => {
          item.classList.remove('active');
        })
        paginationItem.classList.add('active');
        currentPage = paginationItem.innerText;
        displayData(arr, wrapper, rows, currentPage);
        handleProductBuy();
      }
    })
  }
  const showProductQuantity = () => {
    document.querySelector('.quantity').innerText = localStorage.getItem('quantity');;
  }
  const addToCart = (param) => {
    const img = param.parentElement.parentElement.children[0].src;
    const title = param.children[1].innerText;
    const id = param.getAttribute('data-id');
    const price = param.getAttribute('data-price');
    const ct = new Array(id, img, title, price, amount);
    let count = 0;
    if (localStorage.getItem('quantity') === null) {
      cart.push(ct);
      localStorage.setItem('cart', JSON.stringify(cart));
      localStorage.setItem('quantity', cart.length);
    } else {
      const crt = localStorage.getItem('cart');
      const carts = JSON.parse(crt);
      for (let i = 0; i < carts.length; i++) {
        if (carts[i][0] === id) {
          count++;
          ++carts[i][4];
          localStorage.setItem('cart', JSON.stringify(carts));
        }
      }
      if (count !== 1) {
        carts.push(ct);
        localStorage.setItem('cart', JSON.stringify(carts));
        localStorage.setItem('quantity', carts.length);
      }
    }
    showProductQuantity();
    showMyCart();
  }
  const handlePriceTotal = (sum) => {
    let i = 0, str = '', result = '';
    const arr = sum.toString().split('').reverse();
    while(i < arr.length) {
      str += `${arr.slice(i, i + 3).join('')}.`;
      i = i + 3;
    }
    const newArr = str.split('').reverse();
    for (let i = 1; i < newArr.length; i++) {
      result += newArr[i];
    }
    return result;
  }
  const handleProductDelete = (id) => {
    let idStr = id.toString();
    const ct = localStorage.getItem('cart');
    const carts = JSON.parse(ct);
    const filterCarts = carts.filter((item) => item[0] !== idStr);
    localStorage.setItem('cart', JSON.stringify(filterCarts));
    localStorage.setItem('quantity', filterCarts.length);
    showProductQuantity();
    showMyCart();
  }
  const showMyCart = () => {
    let sum = 0;
    window.handleProductDelete = handleProductDelete;
    const myCart = document.querySelector('.myCart');
    const ct = localStorage.getItem('cart');
    if (ct !== null) {
      const carts = JSON.parse(ct);
      myCart.innerHTML = '';
      if (carts.length) {
        for (let i = 0; i < carts.length; i++) {
          let price = carts[i][3].split('.').join('');
          sum += parseInt(price) * carts[i][4];
          myCart.innerHTML += `
            <div class="myCart-${carts[i][0]} d-flex" style="border-bottom: 1px solid #ddd; padding: 10px 0; position: relative">
              <div style="height: 70px; flex: 0 0 70px; overflow: hidden; margin-right: 12px; object-fit: cover">
                <img src=${carts[i][1]} alt=${carts[i][2]} />
              </div>
              <div style="font-size: 14px">
                <h5 style="font-size: 15px; margin-bottom: 0">${carts[i][2]}</h5>
                <div style="color: red">${carts[i][3]}đ</div>
                <div>x${carts[i][4]}</div>
              </div>
              <div onclick="handleProductDelete(${carts[i][0]})" 
              class="d-flex justify-content-center align-items-center"
              style="position: absolute; top: 0; right: 0; width: 20px; height: 20px; background: #ddd">
                <i class="fa-solid fa-xmark"></i>
              </div>
            </div>
          `;
        }
      } else {
        myCart.innerHTML = '';
      }
      let result = handlePriceTotal(sum);
      localStorage.setItem('sumPrice', result);
      let sumLocal = localStorage.getItem('sumPrice');
      document.querySelector('.sumPrice').innerText = sumLocal + 'đ';
    } 
  }
  const loadWindow = () => {
    window.onload = () => {
      window.scrollTo(0, 0);
      if (localStorage.getItem('quantity') === null) document.querySelector('.quantity').innerText = 0;
      else document.querySelector('.quantity').innerText = localStorage.getItem('quantity');
      showMyCart();
      if (localStorage.getItem('sumPrice') === null) {
        document.querySelector('.sumPrice').innerText = '0đ';
      } 
    }
  }
  const renderSearchPageData = (data) => {
    const { products } = data;
    const filterData = filterDataByParam(products);
    const productList = document.querySelector('.productList');
    handlePagination(filterData, productList);
  }
  const run = () => {
    handleParamFromURL();
    loadWindow();
    getData(renderSearchPageData);
  }
  run();
})

