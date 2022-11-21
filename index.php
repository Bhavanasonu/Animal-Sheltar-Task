<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Animal Shelter</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
      crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
      crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="script.js"></script>
    <link rel="stylesheet" href="shelter.css">
    <script>
      function details(){
          var dog = document.getElementById("dogs");
          var cat = document.getElementById("cats");
          console.log(dog.style.display);
          console.log(cat.style.display);
          
          if(dog.style.display === "block" && cat.style.display === "none"){
              dog.style.display = "none";
              cat.style.display = "block";
          }else{
              cat.style.display = "none";
              dog.style.display = "block";
          }
      
      }
    </script>
  </head>
  <body>
    <nav class="navbar navbar-dark navbar-expand-sm ">
      <div class="container">
        <a href="/" class="navbar-brand ">
        <img src="img/img1.PNG" style="height:40px;width:40px"> &nbsp;
        <b> ANIMAL SHELTER</b>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse">
        <i class="fas fa-bars"></i>
        </button>
        <div id="navbarCollapse" class="collapse navbar-collapse">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a href="" class="nav-link active">
              <span style="font-size: 15px;">Home</span>
              </a>
            </li>
            <li class="nav-item">
              <a href="#footer" class="nav-link active">
              <span style="font-size: 15px;">Contact us</span>
              </a>
            </li>
          </ul>
        </div>
        <div id="navbarCollapse" class="collapse navbar-collapse">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a href="" class="nav-link active">
              <img src="svg/linkedin.svg">
              </a>
            </li>
            <li class="nav-item">
              <a href="" class="nav-link active">
              <img src="svg/twitter.svg">
              </a>
            </li>
            <li class="nav-item">
              <a href="" class="nav-link active">
              <img src="svg/instagram.svg">
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container mt-5">
      <div class="row">
        <div class="col-sm-8">
          <span class="heading">Welcome to the Animal Shelter ! </span>
          <p class="mt-4">Glad that you care for the animals so much. We make sure that you’ll not repent your decision of adopting
            your favorite pet !!
          </p>
        </div>
        <div class="col-sm-4">
          <img src="img/img2.PNG" style="height:100px;width:250px" class="imganimal">
        </div>
      </div>
      <div class="row">
        <div class="btn-design">
          <button type="button" class="btn btn mx-2 adoptbtn" data-toggle="modal" data-target="#adopt-form">
          <span class="btnText">Adopt</span>
          </button>
          <!-- Modal For Adoption -->
          <div class="modal fade" id="adopt-form"  role="dialog" aria-labelledby="petTitle" aria-hidden="true" >
            <div class="modal-dialog" role="document">
              <div class="modal-content" style="background-color: #EBF9FF; padding-left: 10px;">
                <div>
                  <br>
                  <h5 class="modal-title" id="petTitle" >
                    <center>
                      <h2>Adopt a pet</h2>
                    </center>
                  </h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="padding-right: 20px;">
                  <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <label style="margin-top: 30px;">
                    <h3>What pet do you want to adpot ?</h3>
                  </label>
                  <br><br>
                  <form action="adopt.php" method="POST">
                    <div>
                      <label>Pet type </label><span style="color: red;">*</span><br>
                      <div class="btn-group">
                        <!-- <button class="btn btn-outline-secondary btn-lg dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"  style="color:black; background-color: #fff; width: 150px;">
                          Select Pet Type 
                          </button>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Dog</a>
                            <a class="dropdown-item" href="#">Cat</a>
                          </div> -->
                        <select class="btn btn-outline-secondary btn-lg dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"  style="color:black; background-color: #fff; width: 150px;"  name="petType" required>
                          <option selected> Select the Pet Type</option>
                          <option value= "Dog">Dog</option>
                          <option  value = "Cat">Cat</option>
                        </select>
                      </div>
                      <br><br>
                      <label>Breed </label> <span style="color: red;">*</span><br>
                      <div class="btn-group">
                        <select class="btn btn-outline-secondary btn-lg dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"  style="color:black; background-color: #fff; width: 150px;"  name="breed" required>
                          <option selected>Breed</option>
                          <option value ="Lab">Lab</option>
                          <option  value="Papillon">Papillon</option>
                          <option value="Rotweiler">Rotweiler</option>
                          <option value="Shitzu">Shitzu</option>
                        </select>
                      </div>
                      <br><br>
                      <label style="margin-top: 30px;">
                        <h3>Please fill in your details </h3>
                      </label>
                      <br><br>
                      <div class="form-group">
                        <label for="name">Full Name <span style="color: red;">*</span> </label>
                        <input type="text" name = "Fname" class="form-control" id="name" placeholder="Full Name" style="width: 200px; height:30px;">
                      </div>
                      <div class="form-group">
                        <label for="email">Email address <span style="color: red;">*</span></label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="Email ID" style="width: 200px; height:30px;">
                      </div>
                      <div class="form-group">
                        <label for="phone">Phone <span style="color: red;">*</span></label>
                        <input type="tel" name="phno" class="form-control" id="P-no" placeholder="Phone No" style="width: 200px; height:30px;">
                      </div>
                    </div>
                </div>
                <div style="padding-right: 20px;">
                <center><button type="submit" name="submit" class="btn btn-danger" style="float: right; width: 150px; height: 30px;" >REQUEST FOR ADOPTION</button></center>
                </div><br>
                </form>
              </div>
            </div>
          </div>
          <!-- Modal For Giveaway -->
          <div class="modal fade" id="give-form"  role="dialog" aria-labelledby="petTitle" aria-hidden="true" >
            <div class="modal-dialog" role="document">
              <div class="modal-content" style="background-color: #EBF9FF; padding-left: 10px;">
                <div>
                  <br>
                  <h5 class="modal-title" id="petTitle" >
                    <center>
                      <h2>Give Away</h2>
                    </center>
                  </h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="padding-right: 20px;">
                  <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <label style="margin-top: 30px;">
                    <h3>What pet do you want to give ?</h3>
                  </label>
                  <br><br>
                  <form action = "giveaway.php" method="POST">
                    <div>
                      <label>Pet type </label><span style="color: red;">*</span><br>
                      <div class="btn-group">
                        <select class="btn btn-outline-secondary btn-lg dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"  style="color:black; background-color: #fff; width: 150px;"  name="petType" required>
                          <option selected> Select the Pet Type</option>
                          <option value= "Dog">Dog</option>
                          <option  value = "Cat">Cat</option>
                        </select>
                      </div>
                      <br><br>
                      <label>Breed </label> <span style="color: red;">*</span><br>
                      <div class="btn-group">
                        <select class="btn btn-outline-secondary btn-lg dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"  style="color:black; background-color: #fff; width: 150px;"  name="breed" required>
                          <option selected>Breed</option>
                          <option value ="Lab">Lab</option>
                          <option  value="Papillon">Papillon</option>
                          <option value="Rotweiler">Rotweiler</option>
                          <option value="Shitzu">Shitzu</option>
                        </select>
                      </div>
                      <br><br>
                      <label style="margin-top: 30px;">
                        <h3>Please fill in your details </h3>
                      </label>
                      <br><br>
                      <div class="form-group">
                        <label for="name">Full Name <span style="color: red;">*</span> </label>
                        <input type="text" class="form-control"  name = "Fname" id="name" placeholder="Full Name" style="width: 200px; height:30px;">
                      </div>
                      <div class="form-group">
                        <label for="email">Email address <span style="color: red;">*</span></label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Email ID" style="width: 200px; height:30px;">
                      </div>
                      <div class="form-group">
                        <label for="phone">Phone <span style="color: red;">*</span></label>
                        <input type="tel" class="form-control" name="phno" id="P-no" placeholder="Phone No" style="width: 200px; height:30px;">
                      </div>
                    </div>
                </div>
                <div style="padding-right: 20px;">
                <center><button type="submit" name="submit" class="btn btn-danger" style="float: right; width: 150px; height: 30px;" >REQUEST FOR GIVE AWAY</button></center>
                </div><br>
                </form>
              </div>
            </div>
          </div>
          <button type="button" class="btn mx-2 allpets"data-toggle="modal" data-target="#details-form">
          <span class="btnText" style="color: black;">What all pets do we have ?</span>
          </button>
          <!-- Modal For Details -->
          <div class="modal fade" id="details-form" role="dialog" aria-labelledby="Title" aria-hidden="true" >
            <div class="modal-dialog" role="document">
              <div class="modal-content" style="background-color: #EBF9FF; padding-left: 10px;">
                <div>
                  <br>
                  <h2 class="modal-title" id="Title" >What all pets do we have ?</h2>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="padding-right: 20px;">
                  <span aria-hidden="true">&times;</span>
                  </button>
                  <br><br> 
                  <button onclick="details()" class="tab" style="width: 50px;">DOG</button><label style="font-size: 20px;"><b>|</b></label><button onclick="details()" class="tab" style="width: 50px;">CAT</button>
                  <!--DOG DETAILS-->
                  <div id="dogs" style="padding-right: 20px; display: block;">
                    <table class="table table-borderless" >
                      <thead>
                        <tr>
                          <th scope="col">Name</th>
                          <th scope="col">Breed</th>
                          <th scope="col">Contact No</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                          $connect = mysqli_connect("localhost", "root", ""); // Establishing Connection with Server
                          mysqli_select_db($connect, "Animals");
                          $result = mysqli_query($connect, "SELECT * FROM GiveAway where petType= 'Dog' ");
                          
                          if ($result == true) {
                              while ($row = mysqli_fetch_assoc($result)) {
                          
                            echo "<tbody>
                                     <tr>
                                        <td>$row[FullName]</td>
                                        <td>$row[Breed]</td>
                                        <td>$row[PhoneNo]</td>
                                     </tr>
                                    </tbody>";}}
                         ?>
                    </table>
                  </div>
                  <!--CAT DETAILS-->
                  <div id="cats"  style="padding-right: 20px;display:none;">
                    <table class="table table-borderless" >
                      <thead>
                        <tr>
                          <th scope="col">Name</th>
                          <th scope="col">Breed</th>
                          <th scope="col">Contact No</th>
                        </tr>
                      </thead>
                      <?php
                        $connect = mysqli_connect("localhost", "root", ""); // Establishing Connection with Server
                        mysqli_select_db($connect, "Animals");
                        $result = mysqli_query($connect, "SELECT * FROM GiveAway where petType= 'Cat' ");
                        
                        if ($result == true) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo "<tbody>
                                        <tr>
                                        <td>$row[FullName]</td>
                                        <td>$row[Breed]</td>
                                        <td>$row[PhoneNo]</td>
                                        </tr>
                                    </tbody>";}}
                         ?>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="mt-4 auto-layout">
        <span class="heading2"> We do take in pets if you can’t take care of them !</span>
        <br>
        <span class="font-4">Lorem epsum fbsdifcbij fkjebfkjebfkejbfewkjbfwkejbfwkefefb wef wef efnwekjfbkewjfb wkje febf weubfwef wiuefb
        ewfu webfuwe bfewufb efb ebf uewbfiuwefbwefweiuf wueibf iuwbefiu efewiufbwiuefbi euwbiuebfe bfe fejsdefsjnekdf
        ksjdnf kjsdnfkjesdnf kjsekdfjeskfjc fksdjfcekejsdfjkes efjebsf beskdb efkjebf kjbejk fbwekjsf bkewb</span>
        <div class="mt-3">
          <button type="button" class="btn giveawaybtn" data-toggle="modal" data-target="#give-form">
          <span class="btnText" style="color: black;">Give Away</span>
          </button>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-4">
          <img src="img/img3.png" style="height:200px;width:250px" class="imganimal">
        </div>
        <div class="col-sm-8 text">
          <p class="mt-4">Lorem epsum fbsdifcbij fkjebfkjebfkejbfewkjbfwkejbfwkefefb wef wef efnwekjfbkewjfb wkje febf weubfwef wiuefb
            ewfu webfuwe bfewufb efb ebf uewbfiuwefbwefweiuf wueibf iuwbefiu efewiufbwiuefbi euwbiuebfe bfe fejsdefsjnekdf
            ksjdnf kjsdnfkjesdnf kjsekdfjeskfjc fksdjfcekejsdfjkes efjebsf beskdb efkjebf kjbejk fbwekjsf bkewb
          </p>
        </div>
      </div>
    </div>
    <!-- Footer -->
    <footer class="text-center text-lg-start  text-white" id="footer">
      <section class="">
        <div class="container text-center text-md-start">
          <div class="row mt-5">
            <div class="col-sm-3 mx-auto mb-4 mt-5">
              <h6 class="text-uppercase fw-bold mb-4">
                <img src="img/img4.PNG">
                <span class="mx-2">ANIMAL SHELTER</span>
              </h6>
              <p>
                One of the best animal shelter places in India. We’re recognized by the government. Please take a pledge to take care of
                these lovely pets ! 
              </p>
              <button type="button" class="btn btn mx-2 adoptbtn2" data-toggle="modal" data-target="#adopt-form">
              <span class="btnText">Adopt
              <i class='fas fa-arrow-right'></i>
              </span>
              </button>
            </div>
            <div class="col-sm-3 mx-auto mb-4 mt-5">
              <h6 class="text-uppercase fw-bold mb-4">
                GET IN TOUCH
              </h6>
              <span>
              <i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp; llesfnee cnu efoin eoifn oewifnewo inf sdc csdcneno ie wolwemfwokm fwe w ecen cloenwo
              we - 355233
              <br>
              <i class="fa fa-envelope" aria-hidden="true"></i> &nbsp;cisubdcusb@gmail.com</span>
              <br>
              <br>
              <span class="mt-3">
              <b>FOLLOW US</b>
              <br>
              <i class="fa fa-facebook-f" style="font-size:48px;color:white"></i>
              </span>
            </div>
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4 mt-5">
              <h3 class="text-uppercase fw-bold mb-4">QUICK LINKS</h3>
              <p>
                <a href="">
              <h4>Home</h4></a> </p>
              <p>
                <a href="#footer">
              <h4>Contact US</h4></a></p>
            </div>
          </div>
        </div>
      </section>
      <div class="p-4 border-top" style="background-color: rgba(0, 0, 0, 0.05);margin-left:100px;margin-right:100px;">
        Copyright © 2023. Animal Shelter
      </div>
    </footer>
  </body>
</html>