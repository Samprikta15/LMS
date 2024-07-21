










/////////////// 
button_to_popup_map ={
  'user-profile-btn':'teacherDashboardPopup',
}


function showDetails(detaild_item) {
  if (detaild_item==="myDetails"){

    document.getElementById("teacherDashboardPopup").style.display = "block";
  }
  if (detaild_item==="borrowedBookDetails"){
    document.getElementById("borrowBookDetailPopup").style.display = "block";
  }
  if (detaild_item==="myDetailsEdit"){

    document.getElementById("teacherDashboardPopupEdit").style.display = "block";
  }
}






window.onclick = function(event) {
  target = event.target
  if (target.id === "teacherDashboardPopup" || target.id == "borrowBookDetailPopup" ||target.id === "teacherDashboardPopupEdit")
    target.style.display='none'  

};



// for search bar //
function searchBooks() {
  let searchInput = document.getElementById('search').value;
  let bookItemsContainer = document.getElementById('bookItems');

  fetch(`search_books.php?search=${searchInput}`)
      .then(response => response.json())
      .then(books => { console.log (books)
          bookItemsContainer.innerHTML = '';
          books.forEach(book => {
              let bookItem = document.createElement('div');
              bookItem.classList.add('book-item');
              bookItem.innerHTML = `
                  <div class="book-title">${book.book_title}</div>
                  <div class="book-author">${book.author_name}</div>
                  <div class="book-copies">${book.quantity}</div>
                  <div class="issue-button-container">
                      <button class="issue-button" id="${book.book_id}"> Borrow </button>
                  </div>
              `;
              bookItemsContainer.appendChild(bookItem);
          });
      });
}
