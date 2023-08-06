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
            $("#history").append('<div class="chat-out"><div class="chat-out-item">' + data.message + '</div>') + "</div>";
         } else {
            $("#history").append('<div class="chat-in"><div class="chat-in-item">' + data.message + '</div>') + "</div>";
         }
      });

      // sender
      var send = function() {
         comet.doRequest({
            message: template + $("#message").val()
         }, function() {
            $("#message").val('').focus();
         })
      }
   </script>

   <div class="container">
      <div class="chat-text">
         <div class="col-lg-4 col-12 mb-3">
            <input type="text" autofocus id="message" placeholder="Your message!" class="form-control form-control-lg message">
         </div>
         <button onclick="send()" class="col-lg-1 btn btn-primary btn-lg send">Send</button><br><br>
         <div id="history"></div>
      </div>
   </div>

</main>

<?php include(ROOT . '/views/layouts/footer.php') ?>