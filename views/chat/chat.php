<?php include(ROOT . '/views/layouts/header.php') ?>

<main class="main contact-main">
   <script src="../../template/js/AjaxPush.js"></script>
   <script type="text/javascript">
      var comet = new AjaxPush('../../models/listener.php', '../../models/sender.php');
      var n = new Function("return (Math.random()*190).toFixed(0)");

      // create anonymous users
      var c = "rgb(" + n() + ", " + n() + "," + n() + ")";
      var template = "<strong style='color: " + c + "; margin-bottom: 5px;'>" + 'user_' + n() + "</strong>: ";

      // listener
      comet.connect(function(data) {
         $("#history").append(data.message) + "<br>";
      });

      // sender
      var send = function() {
         comet.doRequest({
            message: template + $("#message").val() + "<br>"
         }, function() {
            $("#message").val('').focus();
         })
      }
   </script>

   <div style="display: flex; flex-direction: column;justify-items: center;justify-content: center;align-items: center;flex-wrap: nowrap;align-content: center;">
      <div class="col-sm-4 mb-3">
         <input type="text" autofocus id="message" placeholder="your message!" class="form-control form-control-lg ">
      </div>
      <button onclick="send()" class="col-lg-1 btn btn-primary btn-lg send">Send</button><br><br>
      <div id="history"></div>
   </div>

</main>

<?php include(ROOT . '/views/layouts/footer.php') ?>