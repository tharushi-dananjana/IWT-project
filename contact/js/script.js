alert('Stay in Touch!');
document.addEventListener('DOMContentLoaded', function() {
    const contactForm = document.getElementById('contactForm');
    const cancelButton = document.getElementById('cancelButton');

    
    contactForm.addEventListener('submit', function(event) {
        event.preventDefault(); 

        
        const name = contactForm.sname.value.trim();
        const email = contactForm.semail.value.trim();
        const contactNo = contactForm.scontact.value.trim();
        const message = contactForm.smassage.value.trim();

        
        if (!name || !email || !contactNo || !message) {
            alert('Please fill in all fields.');
            return; 
        }

       
        contactForm.submit(); 
    });

    
    cancelButton.addEventListener('click', function() {
        
        contactForm.reset();
    });
});
