<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>INFOTEK PRATAMA - RF Expert!</title>
  </head>
  <body>
		<nav class="navbar navbar-expand-lg navbar-light bg-info">
			<div class="container">
				<a class="navbar-brand" href="<?= site_url() ?>">
                    <img src="<?= base_url('images/logo.png') ?>" height="30" alt="" style="margin-right:5px;">
                    INFOTEK PRATAMA
                </a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav mr-auto">
                        <?php foreach ($this->navigation as $url => $label): ?>
						<li class="nav-item <?= current_url() == site_url($url) ? 'active' : '' ?>">
							<a class="nav-link" href="<?= site_url($url) ?>"><?= $label ?></a>
						</li>
                        <?php endforeach ?>
					</ul>
					<!-- <form class="form-inline my-2 my-lg-0">
						<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
						<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
					</form> -->
				</div>
			</div>
		</nav>

		<?= $content ?>

        <footer class="bg-info text-white" style="padding:20px 0;">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h4 style="font-weight:lighter;">CV. INFOTEK PRATAMA</h4>
                        <address>
                            Puri Nirwana Residences Blok MF No. 45-46 <br>
                            Cikarang, Bekasi - Indonesia
                            <br><br>
                            Phone: 021 22182261 <br>
                            Email : <a class="text-white" href="mailto:admin@infotekpratama.com">admin@infotekpratama.com</a>
                        </address>
                    </div>
                    <div class="col-3">
                        <ul class="list-unstyled">
                            <li><a class="text-white" href="<?= site_url() ?>">Home</a></li>
                            <li><a class="text-white" href="<?= site_url('about') ?>">About Us</a></li>
                            <li><a class="text-white" href="<?= site_url('services') ?>">Our Service</a></li>
                            <li><a class="text-white" href="<?= site_url('customers') ?>">Our Customers</a></li>
                            <li><a class="text-white" href="<?= site_url('projects') ?>">Our Projects</a></li>
                            <li><a class="text-white" href="<?= site_url('contact') ?>">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <footer class="bg-dark text-white" style="padding:15px 0;">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <small>&copy; <?= date('Y') ?> - Infotek Pratama</small>
                    </div>
                    <div class="col text-right">
                        <small>Designed by <a class="" href="mailto:udibagas@gmail.com">udibagas</a></small>
                    </div>
                </div>
            </div>
        </footer>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
