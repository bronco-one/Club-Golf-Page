<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Club Golf Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
  </head>
   <body>
    <div class="container" style="margin-top:10px">
      <!-- header -->
      <header class="jumbotron text-center row rounded"
       style="margin-bottom:2px; background:linear-gradient( #78b5f2 , #0073e6);padding:20px;">          <?php include 'partials/header.php' ?>
      </header>
      <!-- Body Section -->  
      <div class="row" style="padding-left: 0px;">
      <!-- Left-side Column Menu Section -->   
      <nav class="col-sm-2">
        <ul class="nav nav-pills flex-column">
      <?php include('partials/nav.php'); ?>
        </ul>
      </nav>
      <!-- Center Column Content Section -->
       <div class="col-sm-8">
      <?php include dirname(__DIR__).'/'.$content.'.php'; ?>
      </div>
      <!-- Right-side Column Content Section -->
      <aside class="col-sm-2">
      <?php include 'partials/info.php'; ?>
      </aside>
    </div>
    <!-- Footer Content Section -->
    <footer class="jumbotron text-center row"
    style="padding-bottom:1px; padding-top:8px;">
    <?php include 'partials/footer.php'; ?>
    </footer>
    </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
  </body>
</html>
