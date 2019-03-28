 <!DOCTYPE html>
<html lang="en">

<?php if (isset($view['headjs'])): ?>
    <?=$this->section('headjs', $this->fetch('headjs', ['view' => $view]))?>
<?php else: ?>
    <?=$this->section('head', $this->fetch('head', ['view' => $view]))?>
<?php endif ?>

  <body>
  <?=$this->section('navbar', $this->fetch('navbar', ['view' => $view]))?>

    <div class="container">
        <div class="row">
            <section class="sect-signing">
            <form class="form-signin" action="login">
                <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
                <div class="form-row"><label for="username" class="sr-only">Username</label>
                <input type="text" id="username" name="username" class="form-control" placeholder="Username" required autofocus>
                </div>
                <div class="form-row">
                <label for="password" class="sr-only">Password</label>
                <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
                </div>
                <div class="form-row"><button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button></div>
            </form>
            </section>
        </div>
    </div>


  <?=$this->section('footer', $this->fetch('footer', ['view' => $view]))?>


  <?php if ($view['bodyjs'] === 1): ?>
    <?=$this->section('bodyjs', $this->fetch('bodyjs', ['view' => $view]))?>
  <?php endif ?>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="<?php echo $view['urlbaseaddr'] ?>js/ie10-viewport-bug-workaround.js"></script>

  </body>
</html>
