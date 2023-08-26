<!-- include jQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>

<script>
  $(document).ready(function() {
    // Auth Modal
    $(".openModalButton").click(function() {
      $("#authModal").fadeIn();
    });
    $(".closeModalButton").click(function() {
      $("#authModal").fadeOut();
    });

    // Products Modal
    $(".openProducts").click(function() {
      $("#productsModal").fadeIn();
    });
    $(".closeProducts").click(function() {
      $("#productsModal").fadeOut();
    });

    // tabs
    $(".tab-button").click(function() {
      var tabId = $(this).data("tab");
      $(".tab-content").removeClass("active");
      $("#" + tabId).addClass("active");
    });

    // ajax config
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });

    $("#signUpForm").submit(function(e) {
      var name = $("#signup_name").val();
      var email = $("#signup_email").val();
      var password = $("#signup_password").val();

      e.preventDefault();
      $.ajax({
        type: "POST",
        url: "{{ route('register') }}",
        data: {
          name,
          email,
          password
        },
        success: function(response) {
          if (response.error_status == true) {
            Object.entries(response.errors).forEach(([key, value]) => {
              $(".signup_errors").removeClass("hidden");
              $(".signup_errors").html("");
              $(".signup_errors").append(`<span class="text-xs block text-red-600">${value}</span>`);
            });
            return;
          }

          window.location.reload();
        }
      });
    });

    $("#loginForm").submit(function(e) {
      var email = $("#login_email").val();
      var password = $("#login_password").val();

      e.preventDefault();
      $.ajax({
        type: "POST",
        url: "{{ route('login') }}",
        data: {
          email,
          password
        },
        success: function(response) {
          console.log(response);
          if (response.error_status == true) {
            Object.entries(response.errors).forEach(([key, value]) => {
              $(".login_errors").removeClass("hidden");
              $(".login_errors").html("");
              $(".login_errors").append(`<span class="text-xs block text-red-600">${value}</span>`);
            });
            return;
          }

          window.location.reload();
        }
      });
    });
  });
</script>