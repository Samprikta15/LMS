
button_to_popup_map ={
    'user-profile-btn':'studentDashboardPopup',
  }
  
create_button=document.getElementById('user-profile-btn')
create_button.addEventListener( "click",
        function() {document.getElementById(button_to_popup_map[create_button.id]).style.display = "block";}
  )
  
  
  

  
  window.onclick = function(event) {
    target = event.target
    if (target.id == "studentDashboardPopup")
      target.style.display='none'  
  };
/* edit button */
  function toggleEditMode() {
      const editMode = document.querySelector('.student_edit-btn').innerText === 'Edit';
      document.querySelectorAll('.editable').forEach(element => {
          element.contentEditable = editMode;
      });
      document.querySelector('.student_edit-btn').innerText = editMode ? 'Cancel' : 'Edit';
      document.querySelector('.action-buttons').style.display = editMode ? 'block' : 'none';
  }
  
  function submitForm() {
      document.querySelectorAll('.editable').forEach(element => {
          element.contentEditable = false;
      });
      document.querySelector('.student_edit-btn').innerText = 'Edit';
      document.querySelector('.action-buttons').style.display = 'none';
      // Here you would typically send the data to the server
  }
/*search bar*/
const suggestions = [
  'Apple', 'Banana', 'Cherry', 'Date', 'Elderberry', 'Fig', 'Grape', 'Honeydew', 
  'Kiwi', 'Lemon', 'Mango', 'Nectarine', 'Orange', 'Papaya', 'Quince', 'Raspberry', 
  'Strawberry', 'Tomato', 'Ugli fruit', 'Vanilla', 'Watermelon', 'Xigua', 'Yellow Passion Fruit', 'Zucchini'
];

function showSuggestions(value) {
  let suggestionBox = document.getElementById('suggestions');
  suggestionBox.innerHTML = '';
  if (value.length === 0) {
      suggestionBox.style.display = 'none';
      return;
  }
  const filteredSuggestions = suggestions.filter(suggestion => 
      suggestion.toLowerCase().includes(value.toLowerCase())
  );

  filteredSuggestions.forEach(suggestion => {
      const suggestionDiv = document.createElement('div');
      suggestionDiv.textContent = suggestion;
      suggestionDiv.onclick = function() {
          document.getElementById('search').value = suggestion;
          suggestionBox.innerHTML = '';
          suggestionBox.style.display = 'none';
      };
      suggestionBox.appendChild(suggestionDiv);
  });

  if (filteredSuggestions.length > 0) {
      suggestionBox.style.display = 'block';
  } else {
      suggestionBox.style.display = 'none';
  }
}

document.addEventListener('click', function(event) {
  const suggestionBox = document.getElementById('suggestions');
  if (!event.target.closest('.search-container')) {
      suggestionBox.style.display = 'none';
  }
});
