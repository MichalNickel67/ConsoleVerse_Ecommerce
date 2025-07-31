document.getElementById('ConsoleVerseCarousel').setAttribute('data-bs-interval', '5000');

function removeEntireElement(elementId) {
    var element = document.getElementById(elementId);
    if (element) {
      element.parentNode.removeChild(element);
    } else {
      console.error('Element with ID ' + elementId + ' not found.');
    }
}

function onSubmit(token) {
    document.getElementById("demo-form").submit();
  }

  function validateForm() {
    var form = document.getElementById('registrationForm');
    if (form.checkValidity()) {
        form.submit();
    } else {
        form.reportValidity();
    }
}

function incrementValue(e) {
  e.preventDefault();
  var fieldName = $(e.target).data('field');
  var parent = $(e.target).closest('div');
  var currentVal = parseInt(parent.find('input[name=' + fieldName + ']').val(), 10);

  if (!isNaN(currentVal)) {
      parent.find('input[name=' + fieldName + ']').val(currentVal + 1);
  } else {
      parent.find('input[name=' + fieldName + ']').val(0);
  }
}