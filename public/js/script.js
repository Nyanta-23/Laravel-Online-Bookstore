

document.addEventListener('DOMContentLoaded', function () {
  document.getElementById('myCartDropdownButton1').click();
});

function previewImage() {
  frame.src = URL.createObjectURL(event.target.files[0]);
}

const title = document.querySelector("#book_title");
const slug = document.querySelector("#slug");

if (title != null) {
  title.addEventListener('change', function () {
    fetch('/admin/books/checkSlug?title=' + title.value)
      .then(response => response.json())
      .then(data => slug.value = data.slug)
  });
}

// title.addEventListener("keyup", function() {
//     let preslug = title.value;
//     preslug = preslug.replace(/ /g,"-");
//     slugBook.value = preslug.toLowerCase();
// });



// Cart
function dataCarts() {
  const cart = document.getElementById('carts');


  return fetch('/carts')
    .then(response => response.json())
    .then(data => {

      let cartItemsHtml = '';

      const cartData = data.carts;
      
      cartData.forEach(item => {
        
        // console.log(item.user_id);
        if (item.username != data.user) {
          return null;
        }

        cartItemsHtml += `
      <div>
          <a href="#" class="truncate text-sm font-semibold leading-none text-gray-900 dark:text-white hover:underline">
              ${item.book_title}
          </a>
          <p class="mt-0.5 truncate text-sm font-normal text-gray-500 dark:text-gray-400">
          Rp.${item.price.toLocaleString('id-ID')}
          </p>
      </div>
      
      <div class="flex items-center justify-end gap-6">
          <p class="text-sm font-normal leading-none text-gray-500 dark:text-gray-400">Qty: ${item.quantity}</p>
      
          <button type="button" class="text-red-600 hover:text-red-700 dark:text-red-500 dark:hover:text-red-600">
              <span class="sr-only"> Remove </span>
              <svg class="h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                  fill="currentColor" viewBox="0 0 24 24">
                  <path fill-rule="evenodd"
                      d="M2 12a10 10 0 1 1 20 0 10 10 0 0 1-20 0Zm7.7-3.7a1 1 0 0 0-1.4 1.4l2.3 2.3-2.3 2.3a1 1 0 1 0 1.4 1.4l2.3-2.3 2.3 2.3a1 1 0 0 0 1.4-1.4L13.4 12l2.3-2.3a1 1 0 0 0-1.4-1.4L12 10.6 9.7 8.3Z"
                      clip-rule="evenodd" />
              </svg>
          </button>
      </div>
      `;
      })

      cart.innerHTML = cartItemsHtml;
    })
}

dataCarts();

// console.log(dataCarts())

// const cartData = [
//   { name: 'Apple iPhone 15', price: '$599', quantity: 1 },
//   { name: 'Samsung Galaxy S23', price: '$699', quantity: 2 },
//   { name: 'Google Pixel 8', price: '$499', quantity: 1 }
// ];


