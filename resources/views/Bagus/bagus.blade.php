<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Resume</title>
  <script src="https://unpkg.com/feather-icons"></script>
  <link rel="stylesheet" href="{{ asset('Assets-bagus/style.css') }}">
</head>

<body>
  <div class="container">
    <div class="profile">
      <div class="profile_container">
        <div class="profile_profileImg">
          <img src="{{ asset('Assets-bagus/bagus.jpg') }}" alt="shaif arfan">
        </div>
        <div>
          <h1 class="profile_name">
            <span class="profile_name_firstName">Bagus</span>
            <span class="profile_name_lastName">Tri maulana</span>
          </h1>
          <p class="profile_title">Software Developer</p>
          <p class="description profile_description">
             wellcome to my cv Happy reading
          </p>
          <a class="downloadBtn" href="#" download="Resume.pdf">Download Resume</a>
        </div>
      </div>
    </div>
    <div class="group-1">
      <div class="skills">
        <h3 class="title">Expertise</h3>
        <ul class="skills_list description">
          <li>JavaScript</li>
          <li>PHP</li>
          <li>HTML CSS</li>
        </ul>
      </div>
      <div class="ref">
        <h3 class="title">Teacher</h3>
        <div class="ref_item">
          <h4 class="ref_name">Mr.Agus</h4>
          <p class="description">Teacher From SMK Tharuna Bhakti Depok</p>
        </div>
        <div class="ref_item">
          <h4 class="ref_name">Mr.Eraldo</h4>
          <p class="description"> Teacher From SMK Tharuna Bhakti Depok </p>
        </div>
      </div>

      <div class="edu">
        <h3 class="title">Education</h3>
        <div class="edu_item">
          <p class="item_preTitle">2020-2022</p>
          <h4 class="item_title">SMK</h4>
          <p class="item_subtitle">
            Tharuna Bhakti
          </p>
        </div>
      </div>

      <div class="certification">
        <h3 class="title">certification</h3>
        <div class="certification_item">
          <p class="item_preTitle">2022</p>
          <h4 class="item_title">Frontend Developer</h4>
          <p class="description">
          </p>
        </div>
      </div>
    </div>
    <div class="group-2">
      <div class="exp">
        <h3 class="title">address</h3>
        <div class="exp_item">
          <!-- <p class="item_preTitle">2019 - present</p> -->
          <!-- <h4 class="item_title">Rashid Software LTD.</h4> -->
          <!-- <p class="item_subtitle">Frontend Developer</p> -->
          <p class=" description">
           No.44/Rt5.Rw9/mekarsari/cimanggis/Depok/jawa barat/Indonesia
          </p>
        </div>
        <!-- <div class="exp_item">
          <p class="item_preTitle">2019 - present</p>
          <h4 class="item_title">Rashid Software LTD.</h4>
          <p class="item_subtitle">Frontend Developer</p>
          <p class="description">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
            dolore
            magna aliqua. Ut enim ad minim veniam,
          </p>
        </div> -->
      </div>
      <div class="awards">
        <h3 class="title">Awards</h3>
        <div class="awards_item">
          <!-- <p class="item_preTitle">2019</p> -->
          <h4 class="item_title">None</h4>
          <!-- <p class=" description">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
            dolore
            magna aliqua. Ut enim ad minim veniam,
          </p> -->
        </div>
        <!-- <div class="awards_item">
          <p class="item_preTitle">2019</p>
          <h4 class="item_title">Rashid Software LTD.</h4>
          <p class="description">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
            dolore
            magna aliqua. Ut enim ad minim veniam,
          </p>
        </div> -->
      </div>

      <div class="interest">
        <h3 class="title">Interest</h3>
        <div class="interest_items">
          <div class="interest_item">
            <i data-feather="music"></i>
            <span>Music</span>
          </div>
          <div class="interest_item">
            <i data-feather="book"></i>
            <span>Books</span>
          </div>
          <div class="interest_item">
            <i data-feather="map"></i>
            <span>Travel</span>
          </div>
        </div>

      </div>
    </div>
    <hr>
    <div class="group-3">
      <div class="contact">
        <h3 class="title">Contact</h3>
        <div class="contact_info">
          <p class="description">
            Depok, Indonesia
          </p>
          <p class="description">
            +62 8965 2335 201
          </p>
          <p class="description">
            sandiuban82@gmail.com
          </p>
        </div>
      </div>
      <div class="social">
        <h3 class="title">Socials</h3>
        <div class="social_items">
          <a href="#" target="_b" class="social_item">
            <i data-feather="github"></i>
            <span>/Bagus Tri Maulana</span>
          </a>
          <a href="#" target="_blank" class="social_item">
            <i data-feather="twitter"></i>
            <span>/Bagus Tri Maulana</span>
          </a>
          <a href="#" target="_blank" class="social_item">
            <i data-feather="linkedin"></i>
            <span>/Bagus Tri Maulana</span>
          </a>
        </div>
      </div>
    </div>
  </div>
  <script>
    feather.replace()
  </script>
</body>

</html>