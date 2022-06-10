const checkbox = document.getElementById('speaker');

const box = document.getElementById('div_hide');

checkbox.addEventListener('click', function showMe() {
  if (checkbox.checked) {
    box.style.display = 'block';
  } else {
    box.style.display = 'none';
  }
});


$('.carousel').carousel()