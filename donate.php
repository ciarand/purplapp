<?php $title = "Donate to Purplapp"; include('include/header.php'); ?>

<div class="col-md-12">
  <h1>Like what we've done?</h1>
  <p>It costs money to keep Purplapp going, and we want to continue bringing you new features we cannot currently. You can help us improve ADN by donating! :)</p>
  <h4>Bitcoin:</h4>
  <small>Address: 1Phr61c451vK5T2iiKn7PfHim6U829foA7</small>
  <br>
  <script src="http://coinwidget.com/widget/coin.js"></script>
  <script>
  CoinWidgetCom.go({
    wallet_address: "1Phr61c451vK5T2iiKn7PfHim6U829foA7"
    , currency: "bitcoin"
    , counter: "count"
    , alignment: "btc"
    , qrcode: true
    , auto_show: false
    , lbl_button: "Donate"
    , lbl_address: "Our Bitcoin Address:"
    , lbl_count: "donations"
    , lbl_amount: "BTC"
  });
  </script>
  <br><br>
  <h4>Litecoin:</h4>
  <small>Address: LPXzH5qVbFEHGwWUFCJX6AYwzFm6u6FVnX</small>
  <br>  
  <script src="http://coinwidget.com/widget/coin.js"></script>
  <script>
  CoinWidgetCom.go({
    wallet_address: "LPXzH5qVbFEHGwWUFCJX6AYwzFm6u6FVnX"
    , currency: "litecoin"
    , counter: "count"
    , alignment: "ltc"
    , qrcode: true
    , auto_show: false
    , lbl_button: "Donate"
    , lbl_address: "Our Litecoin Address:"
    , lbl_count: "donations"
    , lbl_amount: "LTC"
  });
  </script>
  <br><br>
  <h4>Flattr:</h4>
  <script id='fbz61pq'>(function(i){var f,s=document.getElementById(i);f=document.createElement('iframe');f.src='http://api.flattr.com/button/view/?uid=jvimedia&button=compact&url=http%3A%2F%2Fpurplapp.eu';f.title='Flattr';f.height=20;f.width=110;f.style.borderWidth=0;s.parentNode.insertBefore(f,s);})('fbz61pq');</script>
</div>

<?php include('include/footer.php'); ?>