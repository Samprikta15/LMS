
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

// Data Create 
document.getElementById("create-user-btn").addEventListener("click", function() {
  document.getElementById("popupUserForm").style.display = "block";
})

document.getElementById("UserFromClose").addEventListener("click", function() {
  document.getElementById("popupUserForm").style.display = "none";})

window.onclick = function(event) {
  if (event.target == document.getElementById("popupUserForm")) {
    document.getElementById("popupUserForm").style.display = "none";
  }
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

// Attach click event listeners to all edit buttons
editButtons.forEach(button => {
  button.addEventListener('click', handleButtonClick);
});
