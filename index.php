<?php

?>
<html>
<head>
<link rel="stylesheet" href="main.css">
<title>Twitter API Project</title>
</head>

<div class="signup__container">
  <div class="container__child signup__thumbnail">
    <div class="thumbnail__logo">
      <svg class="logo__shape" width="25px" viewBox="0 0 634 479"></svg>
      <h1 class="logo__text">Twitter</h1>
    </div>
    <div class="thumbnail__content text-center">
      <h1 class="heading--primary" align="center">Welcome to David Tran's Final Project.</h1>
      <h2 class="heading--secondary"align="center">Do you want to see How Twitter is going by different topics?</h2>
    </div>
    <div class="signup__overlay"></div>
  </div>
  <div class="container__child signup__form">
    <form action="result.php" method="get" align="center">
      <div class="form-group">
        <label for="keyword">Keyword</label>
        <input class="form-control" type="text" name="keyword" id="keyword" placeholder="What do you interested in?" required />
      </div>
      <div class="form-group">
        <label for="count">Count</label>
        <input class="form-control" type="number" name="count" id="count" placeholder="How many results you want to see?" required />
      </div>
      <div class="m-t-lg">
        <ul class="list-inline">
          <li>
            <input class="btn btn--form" type="submit" value="Let's Find Out" />
          </li>
        </ul>
      </div>
    </form>  
  </div>
</div>
</html>
