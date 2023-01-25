<?php
require('include/userHeader.php');
?>
<html>
<head>
  <link href="css/style2.css" type="text/css" rel="stylesheet" />
</head>
<body >
<!--Carousel Wrapper-->
<!-- <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel"> -->
<!--Slides-->
<!-- <div class="carousel-inner" role="listbox"> -->

<!--Second slide-->
<!-- <div class="carousel-item active"> -->
<div class="view" style="background-image: url('img/main.jpg'); background-repeat: repeat;  background-size: cover;">

  <!-- Mask & flexbox options-->
  <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

    <!-- Content -->
    <div class="text-center white-text mx-5 wow fadeIn">
      <h1 class="mb-4">
        <strong style="font-family: Papyrus, Fantasy,Red serif;">Reserve Hall Online In Few Clicks</strong>
      </h1>

      <p>
        <strong>Best & suitable halls in Pakistan</strong>
      </p>

      <p class="mb-4 d-none d-md-block">
        <strong>Find most popular and suitable halls from various locations that easily fullfil your needs in a suitable budget</strong>
      </p>
      <!-- <label for="browser" style="font-size:20px;">Choose City:</label> -->
      <div class="d-flex justify-content-center inline">
        <form action="halls.php" method="get" class="form-inline">

          <input type="text" list="cities" name="city" id="browser" style="font-size:20px;width:300px; border-radius: 12px; border:none;" class="select4" placeholder="Select Location">
          <datalist id="cities">
            <option value="Islamabad" class="form-control">Islamabad</option>
            <option value="" disabled>Punjab Cities</option>
            <option value="Ahmed Nager Chatha">Ahmed Nager Chatha</option>
            <option value="Ahmadpur East">Ahmadpur East</option>
            <option value="Ali Khan Abad">Ali Khan Abad</option>
            <option value="Alipur">Alipur</option>
            <option value="Arifwala">Arifwala</option>
            <option value="Attock">Attock</option>
            <option value="Bhera">Bhera</option>
            <option value="Bhalwal">Bhalwal</option>
            <option value="Bahawalnagar">Bahawalnagar</option>
            <option value="Bahawalpur">Bahawalpur</option>
            <option value="Bhakkar">Bhakkar</option>
            <option value="Burewala">Burewala</option>
            <option value="Chillianwala">Chillianwala</option>
            <option value="Chakwal">Chakwal</option>
            <option value="Chichawatni">Chichawatni</option>
            <option value="Chiniot">Chiniot</option>
            <option value="Chishtian">Chishtian</option>
            <option value="Daska">Daska</option>
            <option value="Darya Khan">Darya Khan</option>
            <option value="Dera Ghazi Khan">Dera Ghazi Khan</option>
            <option value="Dhaular">Dhaular</option>
            <option value="Dina">Dina</option>
            <option value="Dinga">Dinga</option>
            <option value="Dipalpur">Dipalpur</option>
            <option value="Faisalabad">Faisalabad</option>
            <option value="Fateh Jhang">Fateh Jang</option>
            <option value="Ghakhar Mandi">Ghakhar Mandi</option>
            <option value="Gojra">Gojra</option>
            <option value="Gujranwala">Gujranwala</option>
            <option value="Gujrat">Gujrat</option>
            <option value="Gujar Khan">Gujar Khan</option>
            <option value="Hafizabad">Hafizabad</option>
            <option value="Haroonabad">Haroonabad</option>
            <option value="Hasilpur">Hasilpur</option>
            <option value="Haveli">Haveli</option>
            <option value="Lakha">Lakha</option>
            <option value="Jalalpur">Jalalpur</option>
            <option value="Jattan">Jattan</option>
            <option value="Jampur">Jampur</option>
            <option value="Jaranwala">Jaranwala</option>
            <option value="Jhang">Jhang</option>
            <option value="Jhelum">Jhelum</option>
            <option value="Kalabagh">Kalabagh</option>
            <option value="Karor Lal Esan">Karor Lal Esan</option>
            <option value="Kasur">Kasur</option>
            <option value="Kamalia">Kamalia</option>
            <option value="Kamoke">Kamoke</option>
            <option value="Khanewal">Khanewal</option>
            <option value="Khanpur">Khanpur</option>
            <option value="Kharian">Kharian</option>
            <option value="Khushab">Khushab</option>
            <option value="Kot Adu">Kot Adu</option>
            <option value="Jauharabad">Jauharabad</option>
            <option value="Lahore">Lahore</option>
            <option value="Lalamusa">Lalamusa</option>
            <option value="Layyah">Layyah</option>
            <option value="Liaquat Pur">Liaquat Pur</option>
            <option value="Lodhran">Lodhran</option>
            <option value="Malakwal">Malakwal</option>
            <option value="Mamoori">Mamoori</option>
            <option value="Mailsi">Mailsi</option>
            <option value="Mandi Bahauddin">Mandi Bahauddin</option>
            <option value="mian Channu">Mian Channu</option>
            <option value="Mianwali">Mianwali</option>
            <option value="Multan">Multan</option>
            <option value="Murree">Murree</option>
            <option value="Muridke">Muridke</option>
            <option value="Mianwali Bangla">Mianwali Bangla</option>
            <option value="Muzaffargarh">Muzaffargarh</option>
            <option value="Narowal">Narowal</option>
            <option value="Okara">Okara</option>
            <option value="Renala Khurd">Renala Khurd</option>
            <option value="Pakpattan">Pakpattan</option>
            <option value="Pattoki">Pattoki</option>
            <option value="Pir Mahal">Pir Mahal</option>
            <option value="Qaimpur">Qaimpur</option>
            <option value="Qila Didar Singh">Qila Didar Singh</option>
            <option value="Rabwah">Rabwah</option>
            <option value="Raiwind">Raiwind</option>
            <option value="Rajanpur">Rajanpur</option>
            <option value="Rahim Yar Khan">Rahim Yar Khan</option>
            <option value="Rawalpindi">Rawalpindi</option>
            <option value="Sadiqabad">Sadiqabad</option>
            <option value="Safdarabad">Safdarabad</option>
            <option value="Sahiwal">Sahiwal</option>
            <option value="Sangla Hill">Sangla Hill</option>
            <option value="Sarai Alamgir">Sarai Alamgir</option>
            <option value="Sargodha">Sargodha</option>
            <option value="Shakargarh">Shakargarh</option>
            <option value="Sheikhupura">Sheikhupura</option>
            <option value="Sialkot">Sialkot</option>
            <option value="Sohawa">Sohawa</option>
            <option value="Soianwala">Soianwala</option>
            <option value="Siranwali">Siranwali</option>
            <option value="Talagang">Talagang</option>
            <option value="Taxila">Taxila</option>
            <option value="Toba Tek  Singh">Toba Tek Singh</option>
            <option value="Vehari">Vehari</option>
            <option value="Wah Cantonment">Wah Cantonment</option>
            <option value="Wazirabad">Wazirabad</option>
            <option value="" disabled>Sindh Cities</option>
            <option value="Badin">Badin</option>
            <option value="Bhirkan">Bhirkan</option>
            <option value="Rajo Khanani">Rajo Khanani</option>
            <option value="Chak">Chak</option>
            <option value="Dadu">Dadu</option>
            <option value="Digri">Digri</option>
            <option value="Diplo">Diplo</option>
            <option value="Dokri">Dokri</option>
            <option value="Ghotki">Ghotki</option>
            <option value="Haala">Haala</option>
            <option value="Hyderabad">Hyderabad</option>
            <option value="Islamkot">Islamkot</option>
            <option value="Jacobabad">Jacobabad</option>
            <option value="Jamshoro">Jamshoro</option>
            <option value="Jungshahi">Jungshahi</option>
            <option value="Kandhkot">Kandhkot</option>
            <option value="Kandiaro">Kandiaro</option>
            <option value="Karachi">Karachi</option>
            <option value="Kashmore">Kashmore</option>
            <option value="Keti Bandar">Keti Bandar</option>
            <option value="Khairpur">Khairpur</option>
            <option value="Kotri">Kotri</option>
            <option value="Larkana">Larkana</option>
            <option value="Matiari">Matiari</option>
            <option value="Mehar">Mehar</option>
            <option value="Mirpur Khas">Mirpur Khas</option>
            <option value="Mithani">Mithani</option>
            <option value="Mithi">Mithi</option>
            <option value="Mehrabpur">Mehrabpur</option>
            <option value="Moro">Moro</option>
            <option value="Nagarparkar">Nagarparkar</option>
            <option value="Naudero">Naudero</option>
            <option value="Naushahro Feroze">Naushahro Feroze</option>
            <option value="Naushara">Naushara</option>
            <option value="Nawabshah">Nawabshah</option>
            <option value="Nazimabad">Nazimabad</option>
            <option value="Qambar">Qambar</option>
            <option value="Qasimabad">Qasimabad</option>
            <option value="Ranipur">Ranipur</option>
            <option value="Ratodero">Ratodero</option>
            <option value="Rohri">Rohri</option>
            <option value="Sakrand">Sakrand</option>
            <option value="Sanghar">Sanghar</option>
            <option value="Shahbandar">Shahbandar</option>
            <option value="Shahdadkot">Shahdadkot</option>
            <option value="Shahdadpur">Shahdadpur</option>
            <option value="Shahpur Chakar">Shahpur Chakar</option>
            <option value="Shikarpaur">Shikarpaur</option>
            <option value="Sukkur">Sukkur</option>
            <option value="Tangwani">Tangwani</option>
            <option value="Tando Adam Khan">Tando Adam Khan</option>
            <option value="Tando Allahyar">Tando Allahyar</option>
            <option value="Tando Muhammad Khan">Tando Muhammad Khan</option>
            <option value="Thatta">Thatta</option>
            <option value="Umerkot">Umerkot</option>
            <option value="Warah">Warah</option>
            <option value="" disabled>Khyber Cities</option>
            <option value="Abbottabad">Abbottabad</option>
            <option value="Adezai">Adezai</option>
            <option value="Alpuri">Alpuri</option>
            <option value="Akora Khattak">Akora Khattak</option>
            <option value="Ayubia">Ayubia</option>
            <option value="Banda Daud Shah">Banda Daud Shah</option>
            <option value="Bannu">Bannu</option>
            <option value="Batkhela">Batkhela</option>
            <option value="Battagram">Battagram</option>
            <option value="Birote">Birote</option>
            <option value="Chakdara">Chakdara</option>
            <option value="Charsadda">Charsadda</option>
            <option value="Chitral">Chitral</option>
            <option value="Daggar">Daggar</option>
            <option value="Dargai">Dargai</option>
            <option value="Darya Khan">Darya Khan</option>
            <option value="dera Ismail Khan">Dera Ismail Khan</option>
            <option value="Doaba">Doaba</option>
            <option value="Dir">Dir</option>
            <option value="Drosh">Drosh</option>
            <option value="Hangu">Hangu</option>
            <option value="Haripur">Haripur</option>
            <option value="Karak">Karak</option>
            <option value="Kohat">Kohat</option>
            <option value="Kulachi">Kulachi</option>
            <option value="Lakki Marwat">Lakki Marwat</option>
            <option value="Latamber">Latamber</option>
            <option value="Madyan">Madyan</option>
            <option value="Mansehra">Mansehra</option>
            <option value="Mardan">Mardan</option>
            <option value="Mastuj">Mastuj</option>
            <option value="Mingora">Mingora</option>
            <option value="Nowshera">Nowshera</option>
            <option value="Paharpur">Paharpur</option>
            <option value="Pabbi">Pabbi</option>
            <option value="Peshawar">Peshawar</option>
            <option value="Saidu Sharif">Saidu Sharif</option>
            <option value="Shorkot">Shorkot</option>
            <option value="Shewa Adda">Shewa Adda</option>
            <option value="Swabi">Swabi</option>
            <option value="Swat">Swat</option>
            <option value="Tangi">Tangi</option>
            <option value="Tank">Tank</option>
            <option value="Thall">Thall</option>
            <option value="Timergara">Timergara</option>
            <option value="Tordher">Tordher</option>
            <option value="" disabled>Balochistan Cities</option>
            <option value="Awaran">Awaran</option>
            <option value="Barkhan">Barkhan</option>
            <option value="Chagai">Chagai</option>
            <option value="Dera Bugti">Dera Bugti</option>
            <option value="Gwadar">Gwadar</option>
            <option value="Harnai">Harnai</option>
            <option value="Jafarabad">Jafarabad</option>
            <option value="Jhal Magsi">Jhal Magsi</option>
            <option value="Kacchi">Kacchi</option>
            <option value="Kalat">Kalat</option>
            <option value="Kech">Kech</option>
            <option value="Kharan">Kharan</option>
            <option value="Khuzdar">Khuzdar</option>
            <option value="Killa Abdullah">Killa Abdullah</option>
            <option value="Killa Saifullah">Killa Saifullah</option>
            <option value="Kohlu">Kohlu</option>
            <option value="Lasbela">Lasbela</option>
            <option value="Lehri">Lehri</option>
            <option value="Loralai">Loralai</option>
            <option value="Mastung">Mastung</option>
            <option value="Musakhel">Musakhel</option>
            <option value="Nasirabad">Nasirabad</option>
            <option value="Nushki">Nushki</option>
            <option value="Panjgur">Panjgur</option>
            <option value="Pishin valley">Pishin Valley</option>
            <option value="Quetta">Quetta</option>
            <option value="Sherani">Sherani</option>
            <option value="Sibi">Sibi</option>
            <option value="Sohbatpur">Sohbatpur</option>
            <option value="Washuk">Washuk</option>
            <option value="Zhob">Zhob</option>
            <option value="Ziarat">Ziarat</option>
          </datalist>&nbsp;&nbsp;
          <input type="text" list="levels" name="level" id="browser" style="font-size:20px;width:200px; border-radius: 12px; border:none;" class="select4" placeholder="Venue Standard">
          <datalist id="levels">
            <option value="Basic" class="form-control">Basic</option>
            <option value="Standard" class="form-control">Standard</option>
            <option value="Premium" class="form-control">Premium</option>
          </datalist>
          <button class="btn btn-primary btn-sm ml-2  pl-4 pr-4 " style="border-radius: 12px;" type="submit">Search</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- </div> -->
<!--/Second slide-->


<!-- </div> -->
<!--/.Slides-->



<!-- </div> -->
<!--/.Carousel Wrapper-->

</header>
<main>
  <div class="container">
    <section class="mt-5 wow fadeIn">
      <div class="row">
        <div class="col-md-6 mb-4">
          <img src="img/home.png" class="img-fluid z-depth-1-half" alt="">
        </div>
        <div class="col-md-6 mb-4">
          <h3 class="h3 mb-3">Easy Hall Booking in Pakistan</h3>
          <p style="font-size: 20px; color:#28282B ;">
          <b>WeGather</b> is online site that helps you <strong>search</strong>, price, and compare wedding venues.
           You can see all the <i>information</i>s you need about a venue such as its budget,
            location, style, and possible guest count.
          </p>
          <hr>
          <p>
            <strong>400+</strong> Available Halls,
            <strong>600+</strong> Customers,
            <strong>74+</strong> Halls booked.
            <strong>Easy few clicks hall booking.</strong>
          </p>
        </div>
      </div>
    </section>
    <hr class="mb-5">

    <section>
      <h2 class="my-5 h3 text-center"></h2>
      <div id="demo" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <!-- <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" ></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul> -->
        <!-- The slideshow -->
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/mlt1.jpg" alt="hall 1">
          </div>
          <div class="carousel-item">
            <img src="img/mlt.jpg" alt="hall 1">
          </div>
          <div class="carousel-item">
            <img src="img/mlt2.jpg" alt="hall 3">
          </div>
        </div>
        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
          <span class="carousel-control-next-icon"></span>
        </a>

      </div>
      <br><br>
      <!-- <div class="content2"> -->
      <div class="container">
        <div class="works-head">
          <div class="logoicon">
            <img alt="we gather" src="img/logoblack.png" style="height:40px" />
          </div>
          <p> WE GATHER.pk</p>
          <h5> How It Works </h5>
        </div>
        <div class="works-data">
          <div class="row">
            <div class="col-sm-3    pad1">
              <div class="work1">
                <img alt="Explore" src="img/icon/p1.png" />
                <h5> Explore </h5>
                <p> Explore and Compare from hundreds of venue options.</p>
              </div>
            </div>
            <div class="col-sm-3   pad1">
              <div class="work1">
                <img alt="Enquire" src="img/icon/p2.png" />
                <h5> Enquire </h5>
                <p> Enquire about their availablity</p>
              </div>
            </div>
            <div class="col-sm-3   pad1">
              <div class="work1">
                <img alt="Visit Venue" src="img/icon/p3.png" style="height:64px;width:64px" />
                <h5> VISIT VENUES </h5>
                <p> Visit venues and taste their food</p>
              </div>
            </div>
            <div class="col-sm-3   pad1">
              <div class="work1">
                <img alt="Booking" src="img/icon/p4.png" />
                <h5> BOOKING </h5>
                <p> Make first payment direct to venue to confirm your booking</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="clearfix"></div>

      <!--First row-->
      <div class="row features-small mt-5 wow fadeIn">
        <br><br><br><br>
        <!--Grid column-->
        <div class="col-xl-3 col-lg-6">
          <!--Grid row-->
          <div class="row">
            <div class="col-2">
              <i class="fab fa-firefox fa-2x mb-1 indigo-text" aria-hidden="true"></i>
            </div>
            <div class="col-10 mb-2 pl-3">
              <h5 class="feature-title font-bold mb-1">Get Discount</h5>
              <p class="grey-text mt-2">Just tell the owner or manager that you find the details and number form <b>We GATHER</b> website and get special discounts, what more you want!
              </p>
            </div>
          </div>
        </div>

        <div class="col-xl-3 col-lg-6">
          <div class="row">
            <div class="col-2">
              <i class="fas fa-level-up-alt fa-2x mb-1 indigo-text" aria-hidden="true"></i>
            </div>
            <div class="col-10 mb-2">
              <h5 class="feature-title font-bold mb-1">Search Banquets</h5>
              <p class="grey-text mt-2">On Venue Bazaar you can easily search the best of best wedding halls , we gather provides you all the details of wedding halls for free , you just have to make call on the given number and booked the desired hall.
              </p>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-6">
          <div class="row">
            <div class="col-2">
              <i class="fas fa-comments fa-2x mb-1 indigo-text" aria-hidden="true"></i>
            </div>
            <div class="col-10 mb-2">
              <h5 class="feature-title font-bold mb-1">Contact Wedding halls Managers</h5>
              <p class="grey-text mt-2">Directly Contact to the owner of the marriage hall or the wedding hall and asked them the date you want and booked the halls directly by the managers with the help of we gather.
              </p>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-6">
          <div class="row">
            <div class="col-2">
              <i class="fas fa-code fa-2x mb-1 indigo-text" aria-hidden="true"></i>
            </div>
            <div class="col-10 mb-2">
              <h5 class="feature-title font-bold mb-1">Support </h5>
              <p class="grey-text mt-2">If you find we gather help full then do Support us by sharing venue bazaar page on social media or our website or just give us a message, its really mean to us.
                it.
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="row features-small mt-4 wow fadeIn">
        <div class="col-xl-3 col-lg-6">
          <div class="row">
            <div class="col-2">
              <i class="fas fa-cubes fa-2x mb-1 indigo-text" aria-hidden="true"></i>
            </div>
            <div class="col-10 mb-2">
              <h5 class="feature-title font-bold mb-1">It’s free</h5>
              <p class="grey-text mt-2">No search fees. No transaction costs. No booking charges. Our service is free to use whatever event you’re planning.</p>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-6">
          <div class="row">
            <div class="col-2">
              <i class="fas fa-question fa-2x mb-1 indigo-text" aria-hidden="true"></i>
            </div>
            <div class="col-10 mb-2">
              <h5 class="feature-title font-bold mb-1">Lowest price guaranteed</h5>
              <p class="grey-text mt-2">Venues post their lowest prices on our platform. Find it cheaper elsewhere and we’ll refund the difference.
              </p>
            </div>
          </div>
        </div>
        <br><br><br>
        <div class="col-xl-3 col-lg-6">
          <div class="row">
            <div class="col-2">
              <i class="fas fa-th fa-2x mb-1 indigo-text" aria-hidden="true"></i>
            </div>
            <div class="col-10 mb-2">
              <h5 class="feature-title font-bold mb-1">Trust your peers</h5>
              <p class="grey-text mt-2">Over 10,000 venues have ratings on our platform. A ‘Book It Again’ percentage score tells you how a venue has performed in the past.</p>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-6">
          <div class="row">
            <div class="col-2">
              <i class="far fa-file-code fa-2x mb-1 indigo-text" aria-hidden="true"></i>
            </div>
            <div class="col-10 mb-2">
              <h5 class="feature-title font-bold mb-1">It's a match

              </h5>
              <p class="grey-text mt-2">No time to search properly? Our Matchmaker tool listens to your needs and tees you up with the ideal venue.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</main>
<br><br><br>

<div class="features ">
  <div class="container">
    <div class="feature-head">
      <div class="logoicon">
        <img alt="we gather" src="img/logonav.png" style="height:40px" />
      </div>
      <p> WE GATHER.pk </p>
      <h5> WE GATHER FEATURES </h5>
    </div>
    <div class="feature-data">
      <div class="row">
        <div class=" col-sm-4 ">
          <div class="feature1">
            <a href="">
              <img alt="Save Your time & Money " src="img/icon/ic1.png" />
            </a>
            <h5> Save Your time & Money !</h5>
            <p> Venuehub.pk guarantee you exclusive deals and the most sought after packages at the best prices; what you do with all those savings is totally up to you.</p>
          </div>
        </div>

        <div class=" col-sm-4 ">
          <div class="feature1">
            <a href="#">
              <img alt="No Online Payment" src="img/icon/ic2.png" />
            </a>
            <h5> No Online Payment ! </h5>
            <p> No online payment required for booking the venue. You can pay the amount directly to Our Support team will guide you in complete booking procedure.</p>
          </div>
        </div>

        <div class=" col-sm-4 ">
          <div class="feature1">
            <a href="#">
              <img alt="No Charges on Booking" src="img/icon/ic3.png" />
            </a>
            <h5> No Charges on Booking, it's<span> FREE !</span> </h5>
            <p> We bring for you venues complete packages for Wedding, Birthday or any other event. From Venues to Menus, be it viewing and booking? is completely FREE along with offered.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="clearfix"></div>

<!-- Catering services -->
<div class="categories" id="Caterers">
  <div class="container">
    <div class="category-data">
      <div class="row">
        <div class="col-md-3 col-sm-4 col-lg-3 col-xs-12">
          <div class="category1">
            <img alt="catering 1" class="none1" src="img/wed/catering1.jpg" />
            <img alt="catering 2" class="none1" src="img/wed/catering2.jpg" />
          </div>
        </div>

        <div class="col-md-3 col-sm-4 col-lg-3 col-xs-12">
          <div class="category1">
            <img alt="catering 3" class="none1" src="img/wed/catering3.jpg" />
            <img alt="catering 4" class="none1" src="img/wed/catering4.jpg" />
          </div>
        </div>

        <div class="col-md-3 col-sm-4 col-lg-3 col-xs-12">
          <div class="category1">
            <img alt="catering 5" class="none1" src="img/wed/catering5.jpg" />
            <img alt="catering 6" src="img/wed/catering6.jpg" />
          </div>
        </div>
        <div class="col-md-3 col-sm-12 col-lg-3 col-xs-12">
          <div class="category2">
            <div class="logoicon">
              <img alt="wegather.pk" src="img/logonav.png" style="height:40px" />
            </div>
            <p> WE GATHER.PK </p>
            <h5> CATERING SERVICE </h5>
            <!-- <a href="/Event-Planners"> VIEW ALL </a> -->
          </div>
        </div>
      </div>

    </div>
  </div>
</div>
<div class="clearfix"></div>
<div class="five">
  <div class="container">
    <div class="enquire1">
      <img alt="YOU ENQUIRE" src="img/icon/new1.png" />
      <p> YOU ENQUIRE </p>
    </div>

    <div class="enquire1">
      <img alt="WE SHORTLIST" src="img/icon/new2.png" />
      <p> WE SHORTLIST </p>
    </div>

    <div class="enquire1">
      <img alt="YOU SELECT" src="img/icon/new3.png" />
      <p> YOU SELECT </p>
    </div>

    <div class="enquire1 enq3">
      <img alt=" WE NEGOTIATE" src="img/icon/new4.png" />
      <p> WE NEGOTIATE </p>
    </div>

    <div class="enquire1 enq3">
      <img alt="YOU ENJOY" src="img/icon/new5.png" />
      <p> YOU ENJOY </p>
    </div>
  </div>
</div>

<div class="clearfix"></div>

<div>
  <?php
  require('include/footer.php');
  ?>
</div>
<div class="gap gap-small"></div>

</body>
</html>