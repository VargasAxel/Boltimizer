
<!DOCTYPE html>
<html lang="en">
<footer>



</footer>

<script>
  let lastScrollTop = 0;
  const header = document.getElementById('header');

  window.addEventListener('scroll', function () {
    const scrollTop = window.pageYOffset || document.documentElement.scrollTop;

    if (scrollTop > lastScrollTop) {
      header.classList.add('hide-header');
    } else {
      header.classList.remove('hide-header');
    }

    lastScrollTop = scrollTop <= 0 ? 0 : scrollTop;
  });
</script>

</body>
</html>

</body>
</html>


 
 <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>
  <script>
    function toggleDarkMode() {
      document.body.classList.toggle('dark-mode');
      // Optional: store preference
      const isDark = document.body.classList.contains('dark-mode');
      localStorage.setItem('darkMode', isDark);
    }

    // Optional: Load saved preference
    window.onload = () => {
      const darkMode = localStorage.getItem('darkMode') === 'true';
      if (darkMode) {
        document.body.classList.add('dark-mode');
      }
    }
    
  </script>
  <script>
  function toggleDarkMode() {
    document.body.classList.toggle('dark-mode');

    const icon = document.getElementById("theme-icon");
    if (document.body.classList.contains('dark-mode')) {
      icon.classList.remove("bi-moon-fill");
      icon.classList.add("bi-sun-fill");
    } else {
      icon.classList.remove("bi-sun-fill");
      icon.classList.add("bi-moon-fill");
    }
  }
</script>