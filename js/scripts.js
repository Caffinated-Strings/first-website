document.addEventListener('DOMContentLoaded', function() {
    const contactForm = document.getElementById('contact-form');
  
    if (contactForm) {
        contactForm.addEventListener('submit', function(event) {
            const name = document.getElementById('name').value.trim();
            const email = document.getElementById('email').value.trim();
  
            if (name === '' || email === '') {
                alert('Please fill in all required fields.');
                event.preventDefault();
            }

        });

    }
  
    const appointmentForm = document.getElementById('appointment-form');
  
    if (appointmentForm) {
        appointmentForm.addEventListener('submit', function(event) {
            const date = document.getElementById('date').value;
  
            if (new Date(date) < new Date()) {
                alert('Please select a future date.');
                event.preventDefault();
            }
      });

    }

  });