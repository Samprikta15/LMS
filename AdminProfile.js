
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


user_info_btn.addEventListener("click", ()=>change_database_display("UserData"))
book_info_btn.addEventListener("click",  ()=>change_database_display("BooksData"))
specific_book_info_btn.addEventListener("click",  ()=>change_database_display("SpecificBooksData"))
record_info_btn.addEventListener("click",  ()=>change_database_display("Records"))
admin_info_btn.addEventListener("click",  ()=>change_database_display("Admin"))