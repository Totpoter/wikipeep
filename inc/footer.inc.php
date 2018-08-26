<!-- <button id="myBtn">Open Modal</button> -->

<div class="modal" id="myModal" class="modal">

  <div class="modal-content">
    <div class="modal-header">
      <h2>Adblock Detected</h2>
    </div>
    <div class="modal-body">
      <p>It seems that you are using adblock.</p>
      <p>This website is dependent on ads and will not survive without them. Please disable it and then refresh the page.</p>
    </div>
    <div class="modal-footer">
      <h3>&copy; WikiPeep 2017</h3>
    </div>
  </div>

</div>
<script src="https://code.jquery.com/jquery-3.1.1.js" integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA=" crossorigin="anonymous"></script>
<script>
        if( window.canRunAds === undefined ){
        var modal = document.getElementById('myModal');
        var btn = document.getElementById("myBtn");
        var span = document.getElementsByClassName("close")[0];

        btn.onclick = function() {
            modal.style.display = "block";
        }
        span.onclick = function() {
            modal.style.display = "none";
          }
        }
window.onload = adBlock;
    </script>
<script src="js/global.js">

</script>
</body>
</html>
