document.addEventListener('DOMContentLoaded', () => {
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
    const resetMyCart = (arr) => {
        localStorage.setItem('cart', JSON.stringify(arr));
        localStorage.setItem('quantity', arr.length);
        showMyCart();
    }
    const handleProductDelete = (id) => {
        let idStr = id.toString();
        const ct = localStorage.getItem('cart');
        const cart = JSON.parse(ct);
        const filterCart = cart.filter((item) => item[0] !== idStr);
        resetMyCart(filterCart);
    }
    const handleDecrement = (id) => {
        let idStr = id.toString();
        const ct = localStorage.getItem('cart');
        const cart = JSON.parse(ct);
        for (let i = 0; i < cart.length; i++) {
            if (cart[i][0] === idStr && cart[i][4] > 1) {
                --cart[i][4];
                break;
            }
        }
        resetMyCart(cart);
    }
    const handleIncrement = (id) => {
        let idStr = id.toString();
        const ct = localStorage.getItem('cart');
        const cart = JSON.parse(ct);
        for (let i = 0; i < cart.length; i++) {
            if (cart[i][0] === idStr && cart[i][4] < 99) {
                ++cart[i][4];
                break;
            }
        }
        resetMyCart(cart);
    }
    const showMyCart = () => {
        let sum = 0;
        window.handleProductDelete = handleProductDelete;
        window.handleDecrement = handleDecrement;
        window.handleIncrement = handleIncrement;
        const cartList = document.querySelector('.cartList');
        const ct = localStorage.getItem('cart');
        const cart = JSON.parse(ct);
        cartList.innerHTML = ``;
        for (let i = 0; i < cart.length; i++) {
            let price = cart[i][3].split('.').join('');
            let totalPriceItem = handlePriceTotal(parseInt(price) * cart[i][4]);
            sum += parseInt(price) * cart[i][4];
            cartList.innerHTML += `
                <div class="cart-item">
                    <div class="cart-item-img">
                        <img src=${cart[i][1]} alt="" />
                    </div>
                    <div class="cart-info">
                        <h3>${cart[i][2]}</h3>
                        <div>${cart[i][3]}đ</div>
                        <div class="i-number">
                            <button onclick="handleDecrement(${cart[i][0]})"><i class="fa-solid fa-minus"></i></button>
                            <input type="text" min="1" max="99" value="${cart[i][4]}" readonly>
                            <button onclick="handleIncrement(${cart[i][0]})"><i class="fa-solid fa-plus"></i></button>
                        </div>
                    </div>
                    <div class="flex-end">
                        <div class="i-mark" onclick="handleProductDelete(${cart[i][0]})">
                            <i class="fa-solid fa-xmark"></i>
                        </div>
                        <div class="total-price-item">${totalPriceItem}đ</div>
                    </div>
                </div>
            `;
        }
        let result = handlePriceTotal(sum);
        localStorage.setItem('sumPrice', result);
        const cartTotal = document.getElementById('cartTotal');
        if (localStorage.getItem('sumPrice') === null) cartTotal.innerText = '0đ';
        else cartTotal.innerText = localStorage.getItem('sumPrice') + 'đ';
    }
    const run = () => {
        showMyCart();
    }
    run();
})