<?php include(ROOT . '/views/layouts/header.php') ?>

<main class="main contact-main">
   <script src="../../template/js/AjaxPush.js"></script>
   <script type="text/javascript">
      var comet = new AjaxPush('../../models/listener.php', '../../models/sender.php');
      var n = new Function("return (Math.random()*190).toFixed(0)");

      // create anonymous users
      var c = "rgb(" + n() + ", " + n() + "," + n() + ")";
      let s = n();
      var template = "<strong style='color: " + c + "'>" + 'anonimus_' + s + "</strong>: ";

      // listener
      comet.connect(function(data) {
         if (data.message.match(new RegExp(`anonimus_${s}`))) {
            $("#history").append('<div style="text-align: right; margin: 5px;">' + data.message) + "</div>";
         } else {
            $("#history").append('<div style="margin: 5px;">' + data.message);
         }


      });

      // sender
      var send = function() {
         comet.doRequest({
            message: template + $("#message").val() + "</dii>"
         }, function() {
            $("#message").val('').focus();
         })
      }
   </script>

   <div class="container">
      <div style="display: flex; flex-direction: column;justify-items: center;justify-content: center;align-items: center;flex-wrap: nowrap;align-content: center;">
         <div class="col-sm-4 mb-3">
            <input type="text" autofocus id="message" placeholder="your message!" class="form-control form-control-lg ">
         </div>
         <button onclick="send()" class="col-lg-1 btn btn-primary btn-lg send">Send</button><br><br>
         <div id="history" style="width: 60%;"></div>
      </div>
   </div>

</main>

<?php include(ROOT . '/views/layouts/footer.php') ?>