// for form validation
(() => {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  const forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.from(forms).forEach(form => {
    form.addEventListener('submit', event => {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      }

      form.classList.add('was-validated')
    }, false)
  })
})()



//for dashboard
for (let i = 1; i <= 6; i++) {
  let button = document.getElementById(`show-button${i}`);
  let div = document.getElementById(`hidden-div${i}`);
  
  button.addEventListener('click', function() {
    // Hide all divs
    for (let j = 1; j <= 6; j++) {
      let otherDiv = document.getElementById(`hidden-div${j}`);
      otherDiv.style.display = 'none';
    }
    
    // Show the selected div
    div.style.display = 'block';
  });
}

