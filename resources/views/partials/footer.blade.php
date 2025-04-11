<div class="row"><!-- AddToAny BEGIN -->
    <div class="a2a_kit a2a_kit_size_32 a2a_default_style">
        <p>مشاركة</p>
        <a class="a2a_dd" href="https://www.addtoany.com/share"></a>
        <a class="a2a_button_whatsapp"></a>
        <a class="a2a_button_facebook"></a>
        <a class="a2a_button_facebook_messenger"></a>
    </div>
</div>


<div id="copyright text-right">© جميع الحقوق محفوظة 2023 <a href="https://egycodecrafters.com/">egycodecrafters.com</a>
    |

    <a href="/privacy-policy">سياسة الخصوصية</a>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>


<script>
    function updatePhoneErrorMessage() {
        var input = document.getElementById('phone');
        var errorMessage = document.getElementById('phone-error-message');

        if (!input.checkValidity()) {
            errorMessage.textContent = input.title;
            input.classList.add('is-invalid');
        } else {
            errorMessage.textContent = '';
            input.classList.remove('is-invalid');
        }


    }

    function updateWhatsappErrorMessage() {

        var input = document.getElementById('whatsapp');
        var errorMessage = document.getElementById('whatsapp-error-message');

        if (!input.checkValidity()) {
            errorMessage.textContent = input.title;
            input.classList.add('is-invalid');
        } else {
            errorMessage.textContent = '';
            input.classList.remove('is-invalid');
        }
    }


    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function () {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.prototype.slice.call(forms)
            .forEach(function (form) {
                form.addEventListener('submit', function (event) {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            })
    })()

</script>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script async src="https://static.addtoany.com/menu/page.js"></script>
<!-- AddToAny END -->

<script>
    document.addEventListener("DOMContentLoaded", function () {
        if (window.innerWidth < 992) {
            const toggler = document.querySelector(".navbar-toggler");
            if (toggler) {
                toggler.click(); // simulate click
            }
        }
    });
</script>

</body>


