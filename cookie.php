<?php if (isset($_COOKIE['cookie_accept'])) {
    $exist_cookie = false;
}else {
    $exist_cookie = true;
}

if ($exist_cookie) {?>
    

<footer class="fixed-bottom ">
    <div class="jumbotron cookie col-md-4 col-sm-4 shadow" >
      <h4 class="display-5">Veuillez accepter les Cookies <i class="fas fa-cookie    "></i></h4>
      <p class="text-muted">Nous vous informons que notre site contient des cookies <i class="fas fa-cookie    "></i>, et nous vous conseillons de les accepter pour vous permettre de naviguer sur notre site en toute sécurité.</p>
      <hr class="my-2">
      <!-- <p>It uses utility classes for typography and spacing to space content out within the larger container.</p> -->
      <a class="btn btn-warning btn-xl" href="#" onclick="window.location='accept_cookies.php'" role="button">Accepter</a>
    </div>
    </footer>
<?php } ?>
<style>
.cookie{
    padding: 25px;
    border-radius: 30px;
    border: 1px #f84;
    animation: forwards .5s;

}
</style>