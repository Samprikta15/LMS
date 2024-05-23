
button_to_popup_map ={
    'create-user-btn':'popupUserForm',
    'create-book-btn':'popupBooksForm',
    'create-record-btn':'popupRecordsForm',
    'create-specific-book-btn':'popupSpecificBookForm',
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