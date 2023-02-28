// EVENT ADD FORM
const nameInput = document.getElementById('nama');
const addButton = document.getElementById('add-button');
const addBox = document.getElementById('add-box');
const addButtonSubmit = document.getElementsByClassName('btn-button')[0];

addButton.addEventListener('click', function() {
  addBox.classList.toggle('active');
  nameInput.setAttribute('required', '');
});

addButtonSubmit.addEventListener('click', function() {
  if(nameInput === '') {
    addBox.classList.toggle('active');
  }
});