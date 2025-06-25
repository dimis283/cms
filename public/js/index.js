// ---
const hamMenuBtn = document.querySelector('.header__main-ham-menu-cont')
const smallMenu = document.querySelector('.header__sm-menu')
const headerHamMenuBtn = document.querySelector('.header__main-ham-menu')
const headerHamMenuCloseBtn = document.querySelector(
  '.header__main-ham-menu-close'
)
const headerSmallMenuLinks = document.querySelectorAll('.header__sm-menu-link')

hamMenuBtn.addEventListener('click', () => {
  if (smallMenu.classList.contains('header__sm-menu--active')) {
    smallMenu.classList.remove('header__sm-menu--active')
  } else {
    smallMenu.classList.add('header__sm-menu--active')
  }
  if (headerHamMenuBtn.classList.contains('d-none')) {
    headerHamMenuBtn.classList.remove('d-none')
    headerHamMenuCloseBtn.classList.add('d-none')
  } else {
    headerHamMenuBtn.classList.add('d-none')
    headerHamMenuCloseBtn.classList.remove('d-none')
  }
})

for (let i = 0; i < headerSmallMenuLinks.length; i++) {
  headerSmallMenuLinks[i].addEventListener('click', () => {
    smallMenu.classList.remove('header__sm-menu--active')
    headerHamMenuBtn.classList.remove('d-none')
    headerHamMenuCloseBtn.classList.add('d-none')
  })
}

// ---
const headerLogoConatiner = document.querySelector('.header__logo-container')

headerLogoConatiner.addEventListener('click', () => {
// Get the base path dynamically
var path = window.location.pathname;
var segments = path.split('/');
// Assuming structure is /cms/public/...
var basePath = '/' + segments[1] + '/' + segments[2] + '/';
location.href = basePath;
})

// Add this to your index.js file

$(document).ready(function() {
    $('.contact__form').on('submit', function(e) {
        e.preventDefault();
        
        let form = $(this);
        let formData = form.serializeArray(); // Get all form data
        
        // Add CSRF token if not already included
        if (!formData.some(item => item.name === '_token')) {
            formData.push({
                name: '_token',
                value: $('meta[name="csrf-token"]').attr('content')
            });
        }
        
        let submitBtn = form.find('.contact__btn');
        let originalText = submitBtn.text();
        submitBtn.prop('disabled', true).text('Sending...');
        
        $.ajax({
            url: form.attr('action'),
            type: 'POST',
            data: $.param(formData), // Properly format the data
            dataType: 'json',
            success: function(response) {
                // Success handling
                alert(response.message || 'Message sent successfully!');
                form[0].reset();
            },
            error: function(xhr) {
                // Improved error handling
                if (xhr.status === 422) {
                    // Validation errors
                    let errors = xhr.responseJSON.errors;
                    let errorMessages = [];
                    
                    // Collect all error messages
                    for (let field in errors) {
                        errorMessages.push(errors[field].join('\n'));
                    }
                    
                    alert('Validation errors:\n' + errorMessages.join('\n'));
                } else {
                    // Other errors
                    alert('Error: ' + (xhr.responseJSON?.message || 'Something went wrong'));
                }
            },
            complete: function() {
                submitBtn.prop('disabled', false).text(originalText);
            }
        });
    });
});
