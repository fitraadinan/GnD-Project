<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    
    <title>Welcome to Gnd Page!</title>

    <!-- Link CSS Local -->
    <link href="GND.png" rel="icon">
    <link rel="stylesheet" href="style.css">

    <!-- Script JS -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script type="text/javascript">
        function toggleMenu(){
          let sidebar = document.querySelector('.sidebar');
          let toggle = document.querySelector('.toggle');
          sidebar.classList.toggle('active');
          toggle.classList.toggle('active');
        }
    </script>

  </head>
  <body>
    <div class="sidebar">

      <ul>
        <li>
          <a href="#home">
            <span class="icon"><i class="fas fa-qrcode"></i></span>
            <span class="title">Home</span>
          </a>
        </li>
        <li>
          <a href="#about">
            <span class="icon"><i class="far fa-address-card"></i></span>
            <span class="title">About</span>
          </a>
        </li>
        <li>
          <a href="#skill">
            <span class="icon"><i class="fas fa-users-cog"></i></span>
            <span class="title">Skills</span>
          </a>
        </li>
        <li>
          <a href="#">
            <span class="icon"><i class="fas fa-pencil-ruler"></i></span>
            <span class="title">Experience</span>
          </a>
        </li>
        <li>
          <a href="#">
            <span class="icon"><i class="fas fa-address-book"></i></span>
            <span class="title">Contact</span>
          </a>
        </li>
      </ul>
    </div>
    <div class="navbar" class="toggle" onclick="toggleMenu()">
        <img src="GND.png">
        <ul>
          <li><a class="active" href="#home">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
    </div>
    

<!-- Home -->
 <section id="home">
    <div class="container">
      <p class="hi1">Hello,</p>
      <p class="hi2">allow us to introduce ourselves!</p>
      <p class="space"></p>
      <p class="typewriter1">My Name is Galih Saputra</p>
      <p class="typewriter2">My Name is Fitra Adina Nuzulia</p>
    </div>
 </section>

<!-- About -->
<section id="about" class="about">
  <div class="containerdst">
    <div class="section-title">
      <h2><span>About Us</span></h2>
    </div>

    <div class="isiabout">
      <div class="gatra">
        <p class="namag">Galih Saputra</p>
          <img src="gatra.jpg">
          <ul>
            <li><i class="fas fa-phone-alt"></i> <p style="font-weight: bold;">Phone</p> 085712247539 </li>
            <li><i class="fas fa-envelope"></i> <p style="font-weight: bold;">Email</p> gatra881@gmail.com</li>
          </ul>
          <ul>
            <li><i class="fas fa-map-marker-alt"></i> <p style="font-weight: bold;">Location</p> Semarang, Indonesia </li>
            <li><i class="fas fa-calendar-alt"></i> <p style="font-weight: bold;">Date of Birthday</p> 16 Juny 2000</li>
          </ul>
          <p class="aboutg">
          Galih Saputra, biasa dipanggil Galih atau Gatra. Aku adalah mahasiswa S1 Teknik Komputer Fakultas Teknik Universitas Diponegoro.
          Saya berpengalaman selama <b>4 tahun</b> di dunia Kekomputeran, khususnya pada <b>Network Engineering</b>.
          Bidang-bidang yang saya kuasai seperti <b>Switching</b>, <b>Routing</b>, <b>Subnetting</b>, dan lain sebagainya.
          Perangkat yang sudah pernah saya operasikan adalah produk dari <b>Mikrotik</b>, <b>Cisco</b>, <b>Aruba</b>, dan <b>Engenius</b>.
          <br>
          <br>
          Selain pengalaman di bidang <b>Network Engineering</b>, saya juga berpengalaman pada bidang <b>Software Engineering</b>.
          Fokusan saya pada <b>Software Engineering</b> adalah <b>Web Programming</b>, khususnya <b>PHP</b>, <b>Javascript</b>,
          <b>HTML</b>, dan <b>CSS</b>.
          </p>
        
          <p style="width: 20%; text-align: center; margin-top: -65px; margin-left: 100px; ">Back-End Developer</p>
      </div>

      

      <div class="dina">
        <p class="namad">Fitra Adina Nuzulia</p>
        <img src="dina.jpg">
        <ul>
          <li><i class="fas fa-map-marker-alt"></i> <p style="font-weight: bold;">Location</p> Semarang, Indonesia </li>
          <li><i class="fas fa-calendar-alt"></i> <p style="font-weight: bold;">Date of Birthday</p> 28 November 2001</li>
        </ul>
        <ul>
          <li><i class="fas fa-phone-alt"></i> <p style="font-weight: bold;">Phone</p> 0816662367 </li>
          <li><i class="fas fa-envelope"></i> <p style="font-weight: bold;">Email</p> fanfitraadina@gmail.com</li>
        </ul>

        <p class="aboutd">My name is <b>Fitra Adina Nuzulia</b>, you can call me <b>Dina</b>. I'm a student of <b>Computer Engineering, Faculty of Engineering, Diponegoro University</b>. I've been in the computer engineering for <b>two years</b> and lean towards <b>Software Engineering</b>. I'm currently studying <b>Web Programming</b> using <b>JavaScript, HTML, and CSS</b>. In addition to Web Programming, I also learned a little about making logos using <b>CorelDraw</b>.</p>
        <p class="aboutd">I'm not only busy in the computer engineering, but I'm also <b>building a business</b> and <b>honing my hobbies</b>, namely <b>photography and videography</b>.</p>
        <p style="width: 20%; text-align: center; float: right; margin-top: 275px; margin-right: -320px;">Front-End Developer</p>
      </div>
    </div>
  </div>
</section>

<!-- SKILL -->
<section id="skill">
  <div class="containerdst">
    <div class="titleskill">
      <h2><span>Skill Us</span></h2>
    </div>

    <div class="skill">
      <p class="skillp">Galih Saputra</p>
      <div class="container-skill">
        <div class="column">
          <h1>Soft Skills</h1>
          <p>Leadership</p>
          <div class="soft">
            <div class="skills lead" style="width: 80%;">80%</div>
          </div>
          <p>Team work</p>
          <div class="soft">
            <div class="skills team" style="width: 85%;">85%</div>
          </div>
          <p>Public Speaking</p>
          <div class="soft">
            <div class="skills public" style="width: 75%;">75%</div>
          </div>
          <p>Problem Solving</p>
          <div class="soft">
            <div class="skills problem" style="width: 75%;">75%</div>
          </div>
          <p>Time Management</p>
          <div class="soft">
            <div class="skills time" style="width: 60%;">60%</div>
          </div>
        </div>

        <div class="column">
          <h1>Hard Skills</h1>
          <div class="container-cir">
          <div class="column2">
          <p>PHP</p>
            <div class="circle-wrap">
              <div class="circle">
      
                <div class="mask full">
                  <div class="fill"></div>
                </div>
    
                <div class="mask half">
                  <div class="fill"></div>
                </div>
      
                <div class="inside-circle">
                  80%
                </div>
      
              </div>
                    
            </div>
          </div>
          <p>JavaScript</p>
            <div class="circle-wrap">
              <div class="circle">
      
                <div class="mask full">
                  <div class="fill"></div>
                </div>
    
                <div class="mask half">
                  <div class="fill"></div>
                </div>
      
                <div class="inside-circle">
                  60%
                </div>
      
              </div>
                    
            </div>
          <p>HTML</p>
            <div class="circle-wrap">
              <div class="circle">
      
                <div class="mask full">
                  <div class="fill"></div>
                </div>
    
                <div class="mask half">
                  <div class="fill"></div>
                </div>
      
                <div class="inside-circle">
                  50%
                </div>
      
              </div>
                    
            </div>
          <p>CSS</p>
            <div class="circle-wrap">
              <div class="circle">
      
                <div class="mask full">
                  <div class="fill"></div>
                </div>
    
                <div class="mask half">
                  <div class="fill"></div>
                </div>
      
                <div class="inside-circle">
                  50%
                </div>
      
              </div>
                    
            </div>
          </div>
        
      </div>

    </div>

    <div class="skill">
      <p class="skillp">Fitra Adina Nuzulia</p>
      <div class="container-skill">
        <div class="column">
          <p>Leadership</p>
          <div class="soft">
            <div class="skills lead" style="width: 65%;">65%</div>
          </div>
          <p>Team work</p>
          <div class="soft">
            <div class="skills team" style="width: 85%;">85%</div>
          </div>
          <p>Public Speaking</p>
          <div class="soft">
            <div class="skills public" style="width: 60%">60%</div>
          </div>
          <p>Problem Solving</p>
          <div class="soft">
            <div class="skills problem" style="width: 75%;">75%</div>
          </div>
          <p>Time Management</p>
          <div class="soft">
            <div class="skills time" style="width: 80%;">80%</div>
          </div>
        </div>

        <div class="column">
          <p>Nyoba</p>
        </div>
        
      </div>
    </div>
    
  </div>

</section>

  </body>
</html>
