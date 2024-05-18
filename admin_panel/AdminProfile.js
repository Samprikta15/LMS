
// Required Functions 
function change_database_display (id){
    for (i = 0 ; i< data_content.length; i++)
    if (data_content[i].id !=id)
        data_content[i].style.display = "none"
    else 
        data_content[i].style.display = "block"
}



// Getting Page Content
data_content = document.getElementsByClassName("DatabaseEntity")
// Display Default Selected 
change_database_display("UserData")
// Getting Nav buttons 
user_info_btn = document.getElementById("user_info_btn")
book_info_btn = document.getElementById("book_info_btn")
specific_book_info_btn = document.getElementById("specific_book_info_btn")
record_info_btn = document.getElementById("record_info_btn")
admin_info_btn = document.getElementById("admin_info_btn")

// Adding click event listener for each table
user_info_btn.addEventListener("click", ()=>change_database_display("UserData"))
book_info_btn.addEventListener("click",  ()=>change_database_display("BooksData"))
specific_book_info_btn.addEventListener("click",  ()=>change_database_display("SpecificBooksData"))
record_info_btn.addEventListener("click",  ()=>change_database_display("Records"))
admin_info_btn.addEventListener("click",  ()=>change_database_display("Admin"))

// Data Create for all table




button_to_popup_map ={
  'create-user-btn':'popupUserForm',
  'create-book-btn':'popupBooksForm',
  'create-specific-book-btn':'popupRecordsForm',
  'create-record-btn':'popupSpecificBookForm',
  'create-admin-btn':'popupAdminForm'
}

create_button_list=Array.from(document.getElementsByClassName('create-btn'))
create_button_list.forEach( (create_button)=>create_button.addEventListener( "click",
      function() {document.getElementById(button_to_popup_map[create_button.id]).style.display = "block";}
))



close_button_list=Array.from(document.getElementsByClassName('close'))
close_button_list.forEach( (close_btn)=>close_btn.addEventListener( "click",
      function() {close_btn.parentNode.parentNode.style.display = "none";}
))

window.onclick = function(event) {
  target = event.target
  if (target.className == "popup")
    target.style.display='none'  
};














// Select all edit buttons
const editButtons = document.querySelectorAll('.edit-btn');

// Function to toggle edit mode
function toggleEditMode(row) {
  const cells = row.querySelectorAll('td[contenteditable]');
  cells.forEach((cell,index) => {
    if (index !== 0) {
      const contentEditable = cell.getAttribute('contenteditable') === 'true';
      cell.setAttribute('contenteditable', !contentEditable);
    }
  });
}

// Function to handle button click
function handleButtonClick(event) {
  const button = event.target;
  const row = button.parentNode.parentNode;
  const isEditMode = button.textContent === 'Submit';

  if (isEditMode) {
    // Save changes
    const rowData = {
      user_id: row.cells[0].textContent,
      name: row.cells[1].textContent,
      email: row.cells[2].textContent,
      phone_no: row.cells[3].textContent,
      roll_no_or_id: row.cells[4].textContent,
      category: row.cells[5].textContent,
      password: row.cells[6].textContent,
    };








    // Send data to PHP script using fetch API
    fetch('AdminProfileUserDataUpdate.php', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json'
      },
      body: JSON.stringify(rowData)
    })
    .then(response => {
      if (response.ok) {
        // Change button text back to Edit
        button.textContent = 'Edit';
        toggleEditMode(row);
      } else {
        throw new Error('Failed to save data');
      }
    })
    .catch(error => {
      console.error('Error:', error);
    });
  } else {
    // Enter edit mode
    toggleEditMode(row);
    // Change button text to Submit
    button.textContent = 'Submit';
  }
}








// Function to handle button click
function handleButtonClick(event) {
  const button = event.target;
  const row = button.parentNode.parentNode;
  const isEditMode = button.textContent === 'Submit';

  if (isEditMode) {
    // Save changes
    const rowData = {
      book_id: row.cells[0].textContent,
      book_title: row.cells[1].textContent,
      author_name: row.cells[2].textContent,
      category: row.cells[3].textContent,
    };








    // Send data to PHP script using fetch API
    fetch('AdminProfileBooksDataUpdate.php', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json'
      },
      body: JSON.stringify(rowData)
    })
    .then(response => {
      if (response.ok) {
        // Change button text back to Edit
        button.textContent = 'Edit';
        toggleEditMode(row);
      } else {
        throw new Error('Failed to save data');
      }
    })
    .catch(error => {
      console.error('Error:', error);
    });
  } else {
    // Enter edit mode
    toggleEditMode(row);
    // Change button text to Submit
    button.textContent = 'Submit';
  }
}

// Function to handle button click
function handleButtonClick(event) {
  const button = event.target;
  const row = button.parentNode.parentNode;
  const isEditMode = button.textContent === 'Submit';

  if (isEditMode) {
    // Save changes
    const rowData = {
      specific_book_id: row.cells[0].textContent,
      book_id: row.cells[1].textContent,
    };








    // Send data to PHP script using fetch API
    fetch('AdminProfileSpecificBookDataUpdate.php', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json'
      },
      body: JSON.stringify(rowData)
    })
    .then(response => {
      if (response.ok) {
        // Change button text back to Edit
        button.textContent = 'Edit';
        toggleEditMode(row);
      } else {
        throw new Error('Failed to save data');
      }
    })
    .catch(error => {
      console.error('Error:', error);
    });
  } else {
    // Enter edit mode
    toggleEditMode(row);
    // Change button text to Submit
    button.textContent = 'Submit';
  }
}






// Function to handle button click
function handleButtonClick(event) {
  const button = event.target;
  const row = button.parentNode.parentNode;
  const isEditMode = button.textContent === 'Submit';

  if (isEditMode) {
    // Save changes
    const rowData = {
      record_id: row.cells[0].textContent,
      specific_book_id: row.cells[1].textContent,
      user_id: row.cells[2].textContent,
      issue_date: row.cells[3].textContent,
      return_date: row.cells[4].textContent,
    };








    // Send data to PHP script using fetch API
    fetch('AdminProfileRecordsDataUpdate.php', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json'
      },
      body: JSON.stringify(rowData)
    })
    .then(response => {
      if (response.ok) {
        // Change button text back to Edit
        button.textContent = 'Edit';
        toggleEditMode(row);
      } else {
        throw new Error('Failed to save data');
      }
    })
    .catch(error => {
      console.error('Error:', error);
    });
  } else {
    // Enter edit mode
    toggleEditMode(row);
    // Change button text to Submit
    button.textContent = 'Submit';
  }
}


// Function to handle button click
function handleButtonClick(event) {
  const button = event.target;
  const row = button.parentNode.parentNode;
  const isEditMode = button.textContent === 'Submit';

  if (isEditMode) {
    // Save changes
    const rowData = {
      admin_id: row.cells[0].textContent,
      name: row.cells[1].textContent,
      email: row.cells[2].textContent,
      phone_no: row.cells[3].textContent,
    };








    // Send data to PHP script using fetch API
    fetch('AdminProfileAdminDataUpdate.php', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json'
      },
      body: JSON.stringify(rowData)
    })
    .then(response => {
      if (response.ok) {
        // Change button text back to Edit
        button.textContent = 'Edit';
        toggleEditMode(row);
      } else {
        throw new Error('Failed to save data');
      }
    })
    .catch(error => {
      console.error('Error:', error);
    });
  } else {
    // Enter edit mode
    toggleEditMode(row);
    // Change button text to Submit
    button.textContent = 'Submit';
  }
}


// Attach click event listeners to all edit buttons
editButtons.forEach(button => {
  button.addEventListener('click', handleButtonClick);
});




