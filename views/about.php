<?php

$alphpa  = $data["alpha"];
$support = $data["support"];
$github  = $data["github"];
$app     = $data["app"];
$adn     = $data["adn"];

if ($adn->getSession()) {
    // get the authorised user's data
    $auth_user_data = $adn->getUser();
    $auth_username = $auth_user_data['username'];

    // get headers
    $app->render("header_auth.php", get_defined_vars());
} else {
    $app->render("header_unauth.php", get_defined_vars());
}
?>

<div class="col-md-12">
    <div class="page-header">
      <h1>About Purplapp <small> &copy; 2013-<?php echo date("Y") ?></small></h1>
    </div>
</div>

<div class="col-md-6">
    <h2>The Idea</h2>
    <p>
        Purplapp was first conceived by Charlotte (@charl) in September 2013. You can see the posts on App.net about the idea <a href="https://alpha.app.net/charl/post/11384578">here</a>.
        <br><br>
        From that, an iOS app concept was produced and uploaded as Charlotte's debut on Dribbble. You can find this concept <a href="http://dribbble.com/shots/1253484-Post-Count-Achievements">here</a>. We've not actually developed the iOS app concept into reality, but that's a future goal... when we find an iOS developer.
        <br><br>
        Charlotte kidnapped Johannes (@jvimedia) and made him host the site.
        <br><br>
        We wrote the web app in October 2013. It wasn't exactly the best thing in the world, but it worked.
        <br><br>
        After that, Charlotte and Johannes (who got roped in somehow...) found Hugo (@hu) in November. He wrote the Post Count Achievement thing to be useful! It was pretty good before (it wasn't), but afterwards it was even better! ;)
        <br><br>
        We "bootstrapped" it in February 2014. After that, we retired the old site, and switched all our work to the new site. We don't update the old one any more.
    </p>
</div>

<div class="col-md-6">
    <h2>Team</h2>
    <h4>Lead Team:</h4>
    <ul class="list-unstyled">
        <li>Charlotte W. (<a href="<?php echo $alpha; ?>charl" target="_blank">@charl</a>)</li>
        <li>Johannes V. (<a href="<?php echo $alpha; ?>jvimedia" target="_blank">@jvimedia</a>)</li>
    </ul>
    <h4>Contributors:</h4>
    <ul class="list-unstyled">
        <li>Hugo (<a href="<?php echo $alpha; ?>hu" target="_blank">@hu</a>)</li>
        <li>Brandon (<a href="<?php echo $alpha; ?>remus" target="_blank">@remus</a>)</li>
        <li>Jessica Dennis (<a href="<?php echo $alpha; ?>jessicadennis" target="_blank">@jessicadennis</a>)</li>
    </ul>

    <h2>Credits</h2>
    <ul class='list-unstyled'>
        <li>Font Awesome by Dave Gandy - <a href="http://fontawesome.io" target="_blank">fontawesome.io</a></li>
        <li>PCA Icons by Yusuke Kamiyamane - <a href="http://p.yusukekamiyamane.com" target="_blank">p.yusukekamiyamane.com</a></li>
        <li>Glyphicon Halflings by Glyphicons - <a href="http://glyphicons.com" target="_blank">glyphicons.com</a></li>
    </ul>

    <h2>Other Stuff</h2>
    <ul class='list-unstyled'>
        <li>We have to display an imprint, so here is our <a href="images/imprint.png">imprint</a>.</li>
    </ul>
</div>

<div class="col-md-12">
    <h2>Contact</h2>
    <p>Feel free to drop any suggestions at us via the following methods:</p>
    <ul>
        <li><a href="<?php echo $alpha; ?>purplapp" target="_blank">@purplapp on ADN</a></li>
        <li><a href="mailto:<?php echo $support; ?>" target="_top">Email</a></li>
        <li><a href="<?php echo $github; ?>" target="_blank">GitHub</a></li>
    </ul>
</div>

<?php
$app->render("footer.php", get_defined_vars());
