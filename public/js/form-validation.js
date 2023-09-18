
    $(document).ready(function() {
        $('#myForm').submit(function(event) {
            event.preventDefault(); 

            var csrfToken = $('meta[name="csrf-token"]').attr('content');

            var formData = {
                name: $('#name').val(),
                email: $('#email').val(),
                phone: $('#phone').val(),
                NIC: $('#NIC').val()
            };

            if (formData.name.trim() === '') {
                alert('Please enter a valid name.');
                return;
            }

            if (formData.email.trim() === '' || !isValidEmail(formData.email)) {
                alert('Please enter a valid email address.');
                return;
            }

            // Check if the phone number is exactly 10 digits and starts with '0'
            var phoneRegex = /^0\d{9}$/;
            if (formData.phone.trim() === '' || !phoneRegex.test(formData.phone)) {
                alert('Please enter a valid 10-digit phone number starting with 0.');
                return;
            }

            if (formData.NIC.trim() === '' || isNaN(formData.NIC)) {
                alert('Please enter a valid NIC number.');
                return;
            }

            // AJAX call to send form data to the server
            $.ajax({
                type: 'POST',
                url: '/url eka danna methana', 
                data: formData,
                headers: {
                    'X-CSRF-TOKEN': csrfToken 
                },
                success: function(response) {
                    alert('User added successfully!');
                },
                error: function(xhr, status, error) {
                    alert('Error occurred while adding the user. Please try again.');
                }
            });
        });

        function isValidEmail(email) {
            var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return emailRegex.test(email);
        }
    });
