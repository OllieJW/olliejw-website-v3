<!DOCTYPE html>
<html lang="en">
  <script src="js/index.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>AOS.init({disable: 'mobile'});</script>
  <script>
    $(".clipboard__copy").click(function() {
      copyToClipboard('.clipboard__copy')
    })
    function copyToClipboard(element) {
      var $temp = $("<input>");
      $("body").append($temp);
      $temp.val($(element).text()).select();
      document.execCommand("copy");
      $temp.remove();

      var text = $(element).text();
      $(element).text("Copied!");
      
      setTimeout(function() {
        $(element).text(text);
      }, 1000);
    }
  </script>
</html>