<?php

  require 'core/init.php';
  require 'view/header.php';

  // jika blm login
  if (!isset($_SESSION["login"])) {
    echo "<script>
        alert('Anda Belum Login, Silahkan Login !');
        document.location.href='login.php';
      </script>";
  }


?>
    
    <div class="container">
        <form>
            <div class="form-group">
                <label for="exampleFormControlInput1">Email address</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" requred>
            </div>
            <div class="form-group">
                <label for="Name">Name</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Example : Sukiyem" requred>
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Message</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <button class="btn btn-primary my-2" name="kirim">Kirim</button>
        </form>
    </div>

<?php require 'view/footer.php'; ?>