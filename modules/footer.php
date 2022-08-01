<div class="footer__top">
  <div class="container">
    <div class="row row--between row--middle">
      <div class="left">
        <h2>Let's work together!</h2>
      </div>
      <div class="right">
        <h3>Sound good?</h3>
        <p>If you've made it this far then send me an email! <a href="contact.php">Let's get in contact!</a></p>
      </div>
    </div>
  </div>
</div>

<div class="footer__body">
  <div class="container">
    <div class="row row--wrap row--between">
      <div class="footer__column">
        <h4>About Me</h4>
        <p>Hey! I'm OllieJW, a freelance web designer who aims to make the web beautiful and easy to use. I have worked with many clients of varying sizes, from small communities to startups to large nations. My websites are blazing fast, editable and work out the zip! Every project is 100% unique and no two websites are the same.</p>
      </div>
      <div class="footer__column">
        <h4>Navigation</h4>
        <ul class="footer__links">
          <li><a href="index.php#">Home</a></li>
          <li><a href="index.php#about">About me</a></li>
          <li><a href="index.php#work">Recent work</a></li>
          <li><a href="index.php#who">Who I work with</a></li>
          <li><a href="index.php#why">Why work with me</a></li>
          <li><a href="tos.php">Terms of Service</a></li>
          <li><a href="tou.php">Terms of Use</a></li>
        </ul>
      </div>
      <div class="footer__column">
        <h4>Services</h4>
        <ul class="footer__links">
          <li><a href="contact.php">Web Design</a></li>
          <li><a href="contact.php">Web Development</a></li>
          <li><a href="contact.php">eCommerce Design</a></li>
          <li><a href="contact.php">Responsive Layout</a></li>
          <li><a href="contact.php">UI/UX</a></li>
        </ul>
      </div>
      <div class="footer__column">
        <h4>Social</h4>
        <ul class="footer__links">
          <li>
            <div class="discord-server">
              <p class="discord__title">Discord Server</p>
              <div class="row row--middle">
                <img src="img/olliejw-square.jpg">
                <div class="server__info">
                  <div class="server__name">OllieJW</div>
                  <div class="server__members">
                  <?php $guildID='SERVER_ID';$botToken='BOT_TOKEN';$going=true;$after=0;$count=0;while($going){$ch=curl_init('https://discordapp.com/api/guilds/'.$guildID.'/members?limit=1000&after='.$after);curl_setopt($ch,CURLOPT_HTTPHEADER,Array('Authorization: Bot '.$botToken));curl_setopt($ch,CURLOPT_HEADER,0);curl_setopt($ch,CURLOPT_RETURNTRANSFER,TRUE);$result=curl_exec($ch);curl_close($ch);$users=json_decode($result);if($users&&is_array($users)){$count+=count($users);if(count($users)<1000){$going=false;break;}$after=$users[999]->user->id;}else{break;}} ?>
                    <i class="online"></i><span><?php echo $count ?></span>
                  </div>
                </div>
                <a class="join" href="go.html?href=discord"><p class="join__button">Join</p></a>
              </div>
            </div>
          </li>
          <li>
            <a href="go.html?href=twitter" class="social__icon twitter"><i class="fa-brands fa-twitter"></i></a>
            <a href="go.html?href=github" class="social__icon github"><i class="fa-brands fa-github"></i></a>
            <a href="go.html?href=youtube" class="social__icon youtube"><i class="fa-brands fa-youtube"></i></a>
            <a href="go.html?href=discord" class="social__icon discord"><i class="fa-brands fa-discord"></i></a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>

<div class="footer__bottom">
  <div class="container">
    <div class="row row--between">
      <p>Copyright &copy; <?php echo date("Y"); ?> OllieJW</p>
      <a href="https://www.dmca.com/Protection/Status.aspx?ID=f374a6ee-5d0a-4421-9284-70cc45168158&refurl=https://olliejw.me/" title="DMCA.com Protection Status" class="dmca-badge"> <img src ="https://images.dmca.com/Badges/dmca-badge-w100-5x1-06.png?ID=f374a6ee-5d0a-4421-9284-70cc45168158" alt="DMCA.com Protection Status" /></a> <script src="https://images.dmca.com/Badges/DMCABadgeHelper.min.js"> </script>
    </div>
  </div>
</div>
