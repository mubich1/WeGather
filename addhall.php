<?php
require('include/providerSideNav.php');





if (!isset($_SESSION['email'])) {
  header('location:listYourServicesLogin.php');
}
if (isset($_POST['title'])) {
  $title = $_POST['title'];
  $description = $_POST['description'];
  $city = $_POST['city'];
  $pic1 = rand(10, 99999) . $_FILES['pic1']['name'];
  $pic2 = rand(10, 99999) . $_FILES['pic2']['name'];
  $pic3 = rand(10, 99999) . $_FILES['pic3']['name'];
  $pic4 = rand(10, 99999) . $_FILES['pic4']['name'];
  $pic1t = $_FILES['pic1']['tmp_name'];
  $pic2t = $_FILES['pic2']['tmp_name'];
  $pic3t = $_FILES['pic3']['tmp_name'];
  $pic4t = $_FILES['pic4']['tmp_name'];
  $contact = $_POST['contact'];
  $address = $_POST['address'];
  $duration = $_POST['duration'];
  $price = $_POST['price'];
  $capacity = $_POST['capacity'];
  $services = $_POST['services'];
  $level = $_POST['level'];
  $srvcs = implode('<br>', $services);
  $email = $_POST['email'];
  $target = "img/halls/";
  $target1 = $target . $pic1;
  $target2 = $target . $pic2;
  $target3 = $target . $pic3;
  $target4 = $target . $pic4;
  echo $target1;
  move_uploaded_file($pic1t, $target1);
  move_uploaded_file($pic2t, $target2);
  move_uploaded_file($pic3t, $target3);
  move_uploaded_file($pic4t, $target4);
  $uid = $_SESSION['randId'];



  $sq = "INSERT INTO halls(randId,title,description,contact,city,pic1,pic2,pic3,pic4,address,duration,price,capacity,services,level,email,status) VALUES('$uid','$title','$description','$contact','$city','$pic1','$pic2','$pic3','$pic4','$address','$duration','$price','$capacity','$srvcs','$level','$email','available')";
  echo $sq;
  $res = mysqli_query($con, $sq);
  if ($res) {
    // header('location:addhall.php');
    echo '<script>window.location.href="addhall.php"</script>';
  }
}
?>

<!-- <div style="background:black;height:70px;"></div> -->
<div style="  padding-left: 200px; padding-top:40px;">
  <h1 class="p-3 mb-2  border-top-0 text-center rounded-circle font-weight-bold " style="border: 10px solid black; border-color:orange">ADD HALL</h1>
  <br>
  <div class="container">
    <div class="row d-flex justify-content-center">

      <div class="col-md-6">
        <form action="" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label for="">Venue Name</label>
            <input type="text" class="form-control" name="title" required>
          </div>
          <div class="form-group">
            <label for="">Description</label>
            <input type="text" class="form-control" name="description" required>
          </div>
          <div class="form-group">
            <label for="">Picture #1</label>
            <input type="file" class="form-control" name="pic1" required>
          </div>
          <div class="form-group">
            <label for="">Picture #2</label>
            <input type="file" class="form-control" name="pic2" required>
          </div>
          <div class="form-group">
            <label for="">Picture #3</label>
            <input type="file" class="form-control" name="pic3" required>
          </div>
          <div class="form-group">
            <label for="">Picture #4</label>
            <input type="file" class="form-control" name="pic4" required>
          </div>
          <div class="form-group">
            <label for="">City</label>
            <select name="city" id="Location" class="form-control" required>
              <option value="" disabled selected>Select The City</option>
              <option value="Islamabad">Islamabad</option>
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
            </select>
          </div>
          <div class="form-group">
            <label for="">Address</label>
            <input type="text" name="address" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="">Contact Number</label>
            <input type="number" name="contact" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="">Email</label>
            <input type="email" name="email" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="">Price /=</label>
            <input type="number" name="price" class="form-control">
          </div>
          <div class="form-group">
            <label for="">Capacity</label>
            <input type="number" name="capacity" class="form-control">
          </div>
          <div class="form-group">
            <label for="">Standard</label>
            <select name="level" id="levels" class="form-control" required>

              <option value="" selected disabled>Select the standards</option>
              <option value="Basic">Basic</option>
              <option value="Standard">Standard</option>
              <option value="Premium">Premium</option>
            </select>
          </div>
          <div class="form-group">
            <label for="">Duration</label>
            <input type="text" name="duration" class="form-control" placeholder="eg:hourly,daily,per person" required>
          </div>
          <div>


            <input type="checkbox" name="services[]" value="WIFI"> <b>&nbsp;WIFI</b> <br>
            <input type="checkbox" name="services[]" value=" Music System"> <b>&nbsp;Music System</b> <br>
            <input type="checkbox" name="services[]" value="Decoration"> <b>&nbsp;Decoration</b> <br>
            <input type="checkbox" name="services[]" value=" Lights"> <b>&nbsp;Lights</b> <br>
            <input type="checkbox" name="services[]" value="Dj"> <b>&nbsp;Dj</b> <br>
            <input type="checkbox" name="services[]" value="AirCondition"> <b>&nbsp;Air Condition</b> <br>
            <input type="checkbox" name="services[]" value=" Projector"> <b>&nbsp;Projector</b> <br>
            <input type="checkbox" name="services[]" value="Catering"> <b>&nbsp;Catering</b> <br>
            <input type="checkbox" name="services[]" value="Car Parking"> <b>&nbsp;Car Parking</b> <br>
            <input type="checkbox" name="services[]" value="Security"> <b>&nbsp;Security</b> <br>
            <input type="checkbox" name="services[]" value="Bridal Room"> <b>&nbsp;Bridal Room</b> <br>
            <input type="checkbox" name="services[]" value="Changing Facilities"> <b>&nbsp;Changing Facilities</b> <br>
            <input type="checkbox" name="services[]" value="Entrance"> <b>&nbsp;Entrance</b> <br>
            <input type="checkbox" name="services[]" value="Kitchen"> <b>&nbsp;Kitchen</b> <br>
            <input type="checkbox" name="services[]" value="Open Out Door Seating"> <b>&nbsp;Open Out Door Seating</b> <br>
            <input type="checkbox" name="services[]" value="Roof Top"> <b>&nbsp;Roof Top</b> <br>
            <input type="checkbox" name="services[]" value="Smoking Area"> <b>&nbsp;Smoking Area</b> <br>
            <input type="checkbox" name="services[]" value="Doctor on Call"> <b>&nbsp;Doctor on Call</b> <br>
            <input type="checkbox" name="services[]" value="Power Backup"> <b>&nbsp;Power Backup</b> <br>
            
          </div><br><br>
          <div class="form-group d-flex justify-content-center">
            <button class="btn btn-primary btn-lg" type="submit">ADD HALL</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- INSERT INTO `halls` (`id`, `question`, `answer`, `pic1`, `pic2`, `pic3`, `pic4`, `price`, `duration`, `address`, `start_date`, `end_date`, `status`, `title`, `description`, `contact`, `city`) VALUES (NULL, 'longe', '2', 'i.png', '2.png', '3.png', '4.png', '1200', 'person', 'kumhara wala chowk', '', '', 'available', 'arroma garden', 'arooma garden locates in multann', '041-1212121', 'Multan'); -->