document.addEventListener('DOMContentLoaded', function () {
  document.getElementById('myCartDropdownButton1').click();
});

function previewImage() {
  frame.src = URL.createObjectURL(event.target.files[0]);
}

const title = document.querySelector("#book_title");
const slug = document.querySelector("#slug");

title.addEventListener('change', function() {
  fetch('/admin/books/checkSlug?title=' + title.value)
      .then(response => response.json())
      .then(data => slug.value = data.slug)
}); 





// title.addEventListener("keyup", function() {
//     let preslug = title.value;
//     preslug = preslug.replace(/ /g,"-");
//     slugBook.value = preslug.toLowerCase();
// });

