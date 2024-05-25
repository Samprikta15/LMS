
button_to_popup_map ={
    'user-profile-btn':'teacherDashboardPopup',
  }
  
create_button=document.getElementById('user-profile-btn')
create_button.addEventListener( "click",
        function() {document.getElementById(button_to_popup_map[create_button.id]).style.display = "block";}
  )
  
  
  

  
  window.onclick = function(event) {
    target = event.target
    if (target.id == "teacherDashboardPopup")
      target.style.display='none'  
  };
/* edit button */
  function toggleEditMode() {
      const editMode = document.querySelector('.teacher_edit-btn').innerText === 'Edit';
      document.querySelectorAll('.editable').forEach(element => {
          element.contentEditable = editMode;
      });
      document.querySelector('.teacher_edit-btn').innerText = editMode ? 'Cancel' : 'Edit';
      document.querySelector('.action-buttons').style.display = editMode ? 'block' : 'none';
  }
  
  function submitForm() {
      document.querySelectorAll('.editable').forEach(element => {
          element.contentEditable = false;
      });
      document.querySelector('.teacher_edit-btn').innerText = 'Edit';
      document.querySelector('.action-buttons').style.display = 'none';
      // Here you would typically send the data to the server
  }
