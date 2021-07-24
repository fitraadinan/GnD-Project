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
    <script type="text/javascript" src="javascript.js"></script>

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
          <a href="#skill" id="btnSkill">
            <span class="icon"><i class="fas fa-users-cog"></i></span>
            <span class="title">Skills</span>
          </a>
        </li>
        <li>
          <a href="#experience">
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
          Galih Saputra, commonly called Galih or Gatra. I'm a student in Computer Engineering, Faculty of Engineering, Diponegoro University.
          I have <b>4 years</b> experience in the computer world, especially in <b>Network Engineering</b>.
          The fields that I control such as <b>Switching</b>, <b>Routing</b>, <b>Subnetting</b>, and so on.
          The devices that I have operated are products from <b>Mikrotik</b>, <b>Cisco</b>, <b>Aruba</b>, and <b>Engenius</b>.
          <br>
          <br>
          In addition to experience in the field of <b>Network Engineering</b>, I also have experience in the field of <b>Software Engineering</b>.
          My focus on <b>Software Engineering</b> is <b>Web Programming</b>, specifically <b>PHP</b>, <b>Javascript</b>, <b>HTML</b>, and <b>CSS</b>.
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

        <p class="aboutd">
          My name is <b>Fitra Adina Nuzulia</b>, you can call me <b>Dina</b>. 
          I'm a student of <b>Computer Engineering, Faculty of Engineering, Diponegoro University</b>. 
          I've been in the computer engineering for <b>two years</b> and lean towards <b>Software Engineering</b>. 
          I'm currently studying <b>Web Programming</b> using <b>JavaScript, HTML, and CSS</b>. 
          In addition to Web Programming, I also learned a little about making logos using <b>CorelDraw</b>.
          <br>
          <br>
          I'm not only busy in the computer engineering, but I'm also <b>building a business</b> and <b>honing my hobbies</b>, 
          namely <b>photography and videography</b>.</p>
        <p style="width: 20%; text-align: center; float: right; margin-top: 280px; margin-right: -320px;">Front-End Developer</p>
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
            <div class="skills baris1" style="width: 80%; animation: soft80 3s;">80%</div>
          </div>
          <p>Team work</p>
          <div class="soft">
            <div class="skills baris2" style="width: 85%; animation: soft85 3s;">85%</div>
          </div>
          <p>Public Speaking</p>
          <div class="soft">
            <div class="skills baris3" style="width: 75%; animation: soft75 3s;">75%</div>
          </div>
          <p>Problem Solving</p>
          <div class="soft">
            <div class="skills baris4" style="width: 75%; animation: soft75 3s;;">75%</div>
          </div>
          <p>Time Management</p>
          <div class="soft">
            <div class="skills baris5" style="width: 60%; animation: soft60 3s;">60%</div>
          </div>
        </div>

        <div class="column">
          <h1>Hard Skills</h1>
          <p>Web Programming</p>
          <div class="soft">
            <div class="skills baris1" style="width: 80%; animation: soft80 3s;">80%</div>
          </div>
          <p>Routing</p>
          <div class="soft">
            <div class="skills baris2" style="width: 85%; animation: soft85 3s;">85%</div>
          </div>
          <p>Office</p>
          <div class="soft">
            <div class="skills baris3" style="width: 90%; animation: soft90 3s;">90%</div>
          </div>
          <p>Coaching</p>
          <div class="soft">
            <div class="skills baris4" style="width: 80%; animation: soft80 3s;;">80%</div>
          </div>
          <p>Writing</p>
          <div class="soft">
            <div class="skills baris5" style="width: 75%; animation: soft75 3s;">75%</div>
          </div>
        </div>
      </div>

      <div class="lang">
        <h1>Language Programming</h1>
            <div class="container-cir">
            <div class="column2">
              <p>PHP</p>
              <div class="circle-wrap">
                <div class="circle">
        
                  <div class="mask full">
                    <div class="fill" style="background-color: #084c61; transform: rotate(144deg); animation: hard80 ease-in-out 3s;"></div>
                  </div>
      
                  <div class="mask half">
                    <div class="fill" style="background-color: #084c61;"></div>
                  </div>
        
                  <div class="inside-circle">
                    80%
                  </div>
                </div>     
              </div>
            </div>
            <div class="column2">
            <p>JavaScript</p>
              <div class="circle-wrap">
                <div class="circle">
        
                  <div class="mask full">
                    <div class="fill" style="background-color: #ffc857; transform: rotate(108deg); animation: hard60 ease-in-out 3s;"></div>
                  </div>
      
                  <div class="mask half">
                    <div class="fill" style="background-color: #ffc857; "></div>
                  </div>
        
                  <div class="inside-circle">
                    60%
                  </div>
                </div>
              </div>
            </div>
            <div class="column2">
            <p>HTML&CSS</p>
              <div class="circle-wrap">
                <div class="circle">
        
                  <div class="mask full">
                    <div class="fill" style="background-color: #7cb518; transform: rotate(117deg); animation: hard65 ease-in-out 3s;"></div>
                  </div>
      
                  <div class="mask half">
                    <div class="fill" style="background-color: #7cb518;"></div>
                  </div>
        
                  <div class="inside-circle">
                    65%
                  </div>
                </div>
              </div>
            </div>
            <div class="column2">
            <p>Python</p>
              <div class="circle-wrap">
                <div class="circle">
        
                  <div class="mask full">
                    <div class="fill" style="background-color: #db3a34; transform: rotate(117deg); animation: hard65 ease-in-out 3s;"></div>
                  </div>
      
                  <div class="mask half">
                    <div class="fill" style="background-color: #db3a34;"></div>
                  </div>
        
                  <div class="inside-circle">
                    65%
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
          <h1>Soft Skills</h1>
          <p>Leadership</p>
          <div class="soft">
            <div class="skills baris1" style="width: 65%; animation: soft65 3s;">65%</div>
          </div>
          <p>Team work</p>
          <div class="soft">
            <div class="skills baris2" style="width: 85%; animation: soft85 3s;">85%</div>
          </div>
          <p>Public Speaking</p>
          <div class="soft">
            <div class="skills baris3" style="width: 60%; animation: soft60 3s;">60%</div>
          </div>
          <p>Problem Solving</p>
          <div class="soft">
            <div class="skills baris4" style="width: 75%; animation: soft75 3s;">75%</div>
          </div>
          <p>Time Management</p>
          <div class="soft">
            <div class="skills baris5" style="width: 80%; animation: soft80 3s;">80%</div>
          </div>
        </div>

        <div class="column">
          <h1>Hard Skills</h1>
          <p>Web Programming</p>
          <div class="soft">
            <div class="skills baris1" style="width: 70%; animation: soft70 3s;">70%</div>
          </div>
          <p>Social Media Management</p>
          <div class="soft">
            <div class="skills baris2" style="width: 75%; animation: soft75 3s;">75%</div>
          </div>
          <p>Office</p>
          <div class="soft">
            <div class="skills baris3" style="width: 85%; animation: soft85 3s;">85%</div>
          </div>
          <p>Videography</p>
          <div class="soft">
            <div class="skills baris4" style="width: 85%; animation: soft85 3s;;">85%</div>
          </div>
          <p>Writing</p>
          <div class="soft">
            <div class="skills baris5" style="width: 75%; animation: soft75 3s;">75%</div>
          </div>
        </div>
      </div>

      <div class="lang">
        <h1>Language Programming</h1>
          <div class="container-cir">
            <div class="column2">
              <p>HTML&CSS</p>
              <div class="circle-wrap">
                <div class="circle">
        
                  <div class="mask full">
                    <div class="fill" style="background-color: #084c61; transform: rotate(117deg); animation: hard75 ease-in-out 3s;"></div>
                  </div>
      
                  <div class="mask half">
                    <div class="fill" style="background-color: #084c61;"></div>
                  </div>
        
                  <div class="inside-circle">
                    65%
                  </div>
                </div>
              </div>
            </div>
            <div class="column2">
            <p>Java</p>
              <div class="circle-wrap">
                <div class="circle">
        
                  <div class="mask full">
                    <div class="fill" style="background-color: #ffc857; transform: rotate(108deg); animation: hard60 ease-in-out 3s;"></div>
                  </div>
      
                  <div class="mask half">
                    <div class="fill" style="background-color: #ffc857; "></div>
                  </div>
        
                  <div class="inside-circle">
                    60%
                  </div>
                </div>
              </div>
            </div>
            <div class="column2">
            <p>JavaScript</p>
              <div class="circle-wrap">
                <div class="circle">
        
                  <div class="mask full">
                    <div class="fill" style="background-color: #7cb518; transform: rotate(90deg); animation: hard50 ease-in-out 3s;"></div>
                  </div>
      
                  <div class="mask half">
                    <div class="fill" style="background-color: #7cb518;"></div>
                  </div>
        
                  <div class="inside-circle">
                    50%
                  </div>
                </div>
              </div>
            </div>
            <div class="column2">
            <p>Python</p>
              <div class="circle-wrap">
                <div class="circle">
        
                  <div class="mask full">
                    <div class="fill" style="background-color: #db3a34; transform: rotate(90deg); animation: hard50 ease-in-out 3s;"></div>
                  </div>
      
                  <div class="mask half">
                    <div class="fill" style="background-color: #db3a34;"></div>
                  </div>
        
                  <div class="inside-circle">
                    50%
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    
  </div>

</section>

<!-- Experiences -->
<section id="experience">
  <div class="containerdst">
    <div class="titleexperience">
      <h2><span>Experiences Us</span></h2>
    </div>
    <div class="containerexp">
    <p class="nama">Galih Saputra</p>
    <h1>Organization</h1>
    <div class="wrapper">
      <div class="center-line">
        <a href="#" class="scroll-icon"><i class="fas fa-caret-up"></i></a>
      </div>
      <div class="row row-1">
        <section>
          <i class="icon">2021</i>
          <div class="details">
            <span class="title">Al Muharrik</span>
          </div>
          <p>
            <b>Head of Al Muharrik 2021</b><br />
            Computer Engineering, Faculty of Enigneering, Diponegoro University
          </p>
        </section>
      </div>
      <div class="row row-2">
        <section>
          <i class="icon fas fa-circle"></i>
          <div class="details">
            <span class="title">Izzati</span>
          </div>
          <p>
            <b>Head Division of Kaderisasi</b><br />
            Faculty of Engineering, Diponegoro University
          </p>
        </section>
      </div>
      <div class="row row-1">
        <section>
          <i class="icon">2020</i>
          <div class="details">
            <span class="title">Inspirator Muda</span>
          </div>
          <p><b>Member of Inspirator Muda Indonesia</b></p>
        </section>
      </div>
      <div class="row row-2">
        <section>
          <i class="icon fas fa-circle"></i>
          <div class="details">
            <span class="title">Rebana Diponegoro University</span>
          </div>
          <p><b>Staff of PSDM</b><br />
            Diponegoro University</p>
        </section>
      </div>
      <div class="row row-1">
        <section>
          <i class="icon fas fa-circle"></i>
          <div class="details">
            <span class="title">Karya Salemba Empat</span>
          </div>
          <p><b>Grantee and Staff of Edukasi dan Teknologi</b><br />
            Karya Salemba Empat Diponegoro University</p>
        </section>
      </div>
      <div class="row row-2">
        <section>
          <i class="icon fas fa-circle"></i>
          <div class="details">
            <span class="title">Izzati</span>
          </div>
          <p>
            <span><b>Staff of Kaderisasi</b></span> <br />
            Faculty of Engineering, Diponegoro University</p>
        </section>
      </div>
      <div class="row row-1">
        <section>
          <i class="icon fas fa-circle"></i>
          <div class="details">
            <span class="title">Al Muharrik</span>
          </div>
          <p><b>Staff of Mentoring</b><br />
            Computer Engineering, Faculty of Engineering, Diponegoro University</p>
        </section>
      </div>
      <div class="row row-2">
        <section>
          <i class="icon fas fa-circle"></i>
          <div class="details">
            <span class="title">Himpunan Mahasiswa Teknik Komputer</span>
          </div>
          <p>
            <b>Staff of PSDM</b><br />
            Computer Engineering, Faculty of Engineering, Diponegoro University
          </p>
        </section>
      </div>
      <div class="row row-1">
        <section>
          <i class="icon fas fa-circle"></i>
          <div class="details">
            <span class="title">Andesbon Reborn</span>
          </div>
          <p><b>Secretary of the Youth Community Association</b><br />
             Kebonmanis Village RW 3 Mangunsari Gunungpati</p>
        </section>
      </div>
      <div class="row row-2">
        <section>
          <i class="icon">2019</i>
          <div class="details">
            <span class="title">Tunas Muda</span>
          </div>
          <p>
            <b>Head of Youth Posyandu</b><br />
            Kebonmanis Village RW 3 Mangunsari Gunungpati</p>
        </section>
      </div>
    </div>
    <h1 style="border-top: 3px solid #0ead69;">Committee</h1>
    <div class="wrapper">
      <div class="center-line">
        <a href="#" class="scroll-icon"><i class="fas fa-caret-up"></i></a>
      </div>
      <div class="row row-1">
        <section>
          <i class="icon">2021</i>
          <div class="details">
            <span class="title">Mosaic FT</span>
          </div>
          <p>
            <b>Member of Event</b><br />
            Izzati, Faculty of Enigneering, Diponegoro University
          </p>
        </section>
      </div>
      <div class="row row-2">
        <section>
          <i class="icon fas fa-circle"></i>
          <div class="details">
            <span class="title">International Scholarship Seminar</span>
          </div>
          <p>
            <b>Head of Event</b><br />
            Karya Salemba Empat, Diponegoro University
          </p>
        </section>
      </div>
      <div class="row row-1">
        <section>
          <i class="icon fas fa-circle"></i>
          <div class="details">
            <span class="title">Community and Development</span>
          </div>
          <p>
            <b>Head of Equipment</b><br />
            Community and Development with PLN, Karya Salemba Empat, Diponegoro University
          </p>
        </section>
      </div>
      <div class="row row-2">
        <section>
          <i class="icon fas fa-circle"></i>
          <div class="details">
            <span class="title">Mosaic FT</span>
          </div>
          <p>
            <b>Moderator</b><br />
            Izzati, Faculty of Enigneering, Diponegoro University
          </p>
        </section>
      </div>
      <div class="row row-1">
        <section>
          <i class="icon fas fa-circle"></i>
          <div class="details">
            <span class="title">Tabligh Akbar READY</span>
          </div>
          <p>
            <b>Chairman of Event</b><br />
            Rebana Diponegoro University, Diponegoro University
          </p>
        </section>
      </div>
      <div class="row row-2">
        <section>
          <i class="icon">2020</i>
          <div class="details">
            <span class="title">SIGMA</span>
          </div>
          <p>
            <b>Chairman of Event</b><br />
            Karya Salemba Empat, Diponegoro University
          </p>
        </section>
      </div>
      <div class="row row-1">
        <section>
          <i class="icon fas fa-circle"></i>
          <div class="details">
            <span class="title">Tabligh Akbar Al Muharrik</span>
          </div>
          <p>
            <b>Head of Event</b><br />
            Computer Engineering, Faculty of Enigneering, Diponegoro University
          </p>
        </section>
      </div>
      <div class="row row-2">
        <section>
          <i class="icon fas fa-circle"></i>
          <div class="details">
            <span class="title">GOM</span>
          </div>
          <p>
            <b>Head of Event</b><br />
            Computer Engineering, Faculty of Enigneering, Diponegoro University
          </p>
        </section>
      </div>
      <div class="row row-1">
        <section>
          <i class="icon fas fa-circle"></i>
          <div class="details">
            <span class="title">LKMMPD HIMASKOM</span>
          </div>
          <p>
            <b>Main Secretary of Event</b><br />
            Computer Engineering, Faculty of Enigneering, Diponegoro University
          </p>
        </section>
      </div>
      <div class="row row-2">
        <section>
          <i class="icon fas fa-circle"></i>
          <div class="details">
            <span class="title">EXPOSURE HIMASKOM</span>
          </div>
          <p>
            <b>Head of Public Relation</b><br />
            Computer Engineering, Faculty of Enigneering, Diponegoro University
          </p>
        </section>
      </div>
      <div class="row row-1">
        <section>
          <i class="icon">2019</i>
          <div class="details">
            <span class="title">CYBER AEGIS</span>
          </div>
          <p>
            <b>Chairman of Event</b><br />
            Computer Engineering, Faculty of Enigneering, Diponegoro University
          </p>
        </section>
      </div>
    </div>

    <h1 style="border-top: 3px solid #0ead69;">Training</h1>
    <div class="wrapper">
      <div class="center-line">
        <a href="#" class="scroll-icon"><i class="fas fa-caret-up"></i></a>
      </div>
      <div class="row row-1">
        <section>
          <i class="icon">2021</i>
          <div class="details">
            <span class="title">Muda Inspiratif</span>
          </div>
          <p>
            <b>How to be Master of Ceremony</b><br />
            </p>
        </section>
      </div>
      <div class="row row-2">
        <section>
          <i class="icon fas fa-circle"></i>
          <div class="details">
            <span class="title">Muda Inspiratif</span>
          </div>
          <p><b>3 Ways to be Leader in Pandemic</b><br />
          </p>
        </section>
      </div>
      <div class="row row-1">
        <section>
          <i class="icon fas fa-circle"></i>
          <div class="details">
            <span class="title">Progate</span>
          </div>
          <p><b>SQL</b><br />
            </p>
        </section>
      </div>
      <div class="row row-2">
        <section>
          <i class="icon fas fa-circle"></i>
          <div class="details">
            <span class="title">Progate</span>
          </div>
          <p><b>HTML and CSS</b><br />
            </p>
        </section>
      </div>
      <div class="row row-1">
        <section>
          <i class="icon">2020</i>
          <div class="details">
            <span class="title">Element 2020</span>
          </div>
          <p><b>Training Rohis 2</b><br />
          Faculty of Engineering, Diponegoro University
            </p>
        </section>
      </div>
      <div class="row row-2">
        <section>
          <i class="icon fas fa-circle"></i>
          <div class="details">
            <span class="title">BEM FT</span>
          </div>
          <p><b>LKMM Dasar FT</b><br />
          Faculty of Engineering, Diponegoro University
            </p>
        </section>
      </div>
      <div class="row row-1">
        <section>
          <i class="icon fas fa-circle"></i>
          <div class="details">
            <span class="title">Muda Inspiratif</span>
          </div>
          <p><b>LPC for ICL</b><br />
          Muda Inspiratif, Indonesia
            </p>
        </section>
      </div>
      <div class="row row-2">
        <section>
          <i class="icon">2019</i>
          <div class="details">
            <span class="title">Al Muharrik</span>
          </div>
          <p><b>Training Rohis 1</b><br />
            Computer Engineering, Faculty of Engineering, Diponegoro University</p>
        </section>
      </div>
      <div class="row row-1">
        <section>
          <i class="icon fas fa-circle"></i>
          <div class="details">
            <span class="title">Himpunan Mahasiswa Teknik Komputer</span>
          </div>
          <p><b>LKMM Pra Dasar</b><br />
            Computer Engineering, Faculty of Engineering, Diponegoro University</p>
        </section>
      </div>
      <div class="row row-2">
        <section>
          <i class="icon fas fa-circle"></i>
          <div class="details">
            <span class="title">Himpunan Mahasiswa Teknik Komputer</span>
          </div>
          <p><b>Exposure</b><br />
            Computer Engineering, Faculty of Engineering, Diponegoro University</p>
        </section>
      </div>
    </div>

    <div class="containerexp">
    <p class="nama" style="width: 250px;">Fitra Adina Nuzulia</p>
    <h1>Organization</h1>
    <div class="wrapper">
      <div class="center-line">
        <a href="#" class="scroll-icon"><i class="fas fa-caret-up"></i></a>
      </div>
      <div class="row row-1">
        <section>
          <i class="icon">2021</i>
          <div class="details">
            <span class="title">Al Muharrik</span>
          </div>
          <p>
            <b>Head of Annisa</b><br />
            Computer Engineering, Faculty of Engineering, Diponegoro University
          </p>
        </section>
      </div>
      <div class="row row-2">
        <section>
          <i class="icon fas fa-circle"></i>
          <div class="details">
            <span class="title">Himpunan Mahasiswa Teknik Komputer</span>
          </div>
          <p>
            <b>Treasurer of Minat, Bakat, dan Kegemaran</b><br />
            Computer Engineering, Faculty of Engineering, Diponegoro University
          </p>
        </section>
      </div>
      <div class="row row-1">
        <section>
          <i class="icon">2020</i>
          <div class="details">
            <span class="title">Al Muharrik</span>
          </div>
          <p><b>Staff of Annisa</b><br />
            Computer Engineering, Faculty of Engineering, Diponegoro University</p>
        </section>
      </div>
      <div class="row row-2">
        <section>
          <i class="icon fas fa-circle"></i>
          <div class="details">
            <span class="title">Himpunan Mahasiswa Teknik Komputer</span>
          </div>
          <p><b>Staff of Minat, Bakat, dan Kegemaran</b><br />
            Computer Engineering, Faculty of Engineering, Diponegoro University</p>
        </section>
      </div>
    </div>
    <h1 style="border-top: 3px solid #0ead69;">Committee</h1>
    <div class="wrapper">
      <div class="center-line">
        <a href="#" class="scroll-icon"><i class="fas fa-caret-up"></i></a>
      </div>
      <div class="row row-1">
        <section>
          <i class="icon">2020</i>
          <div class="details">
            <span class="title">IDEAS 5.0 BEM UNDIP</span>
          </div>
          <p>
            <b>Staff of Licensing and Security</b><br />
            BEM Undip</p>
        </section>
      </div>
      <div class="row row-2">
        <section>
          <i class="icon fas fa-circle"></i>
          <div class="details">
            <span class="title">CYBER TEKKOM</span>
          </div>
          <p><b>Staff of Event</b><br />
            Computer Engineering, Faculty of Engineering, Diponegoro University</p>
        </section>
      </div>
      <div class="row row-1">
        <section>
          <i class="icon fas fa-circle"></i>
          <div class="details">
            <span class="title">POR TEKKOM</span>
          </div>
          <p>
            <b>Treasurer</b><br />
            Computer Engineering, Faculty of Engineering, Diponegoro University</p>
        </section>
      </div>
    </div>

    <h1 style="border-top: 3px solid #0ead69;">Training</h1>
    <div class="wrapper">
      <div class="center-line">
        <a href="#" class="scroll-icon"><i class="fas fa-caret-up"></i></a>
      </div>
      <div class="row row-1">
        <section>
          <i class="icon">2021</i>
          <div class="details">
            <span class="title">Progate</span>
          </div>
          <p>
            <b>SQL</b><br />
            </p>
        </section>
      </div>
      <div class="row row-2">
        <section>
          <i class="icon fas fa-circle"></i>
          <div class="details">
            <span class="title">Himpunan Mahasiswa Teknik Komputer</span>
          </div>
          <p><b>Leadership Training</b><br />
            Computer Engineering, Faculty of Engineering, Diponegoro University</p>
        </section>
      </div>
      <div class="row row-1">
        <section>
          <i class="icon">2019</i>
          <div class="details">
            <span class="title">Al-Muharrik Teknik Komputer</span>
          </div>
          <p><b>Training Rohis I</b><br />
            Computer Engineering, Faculty of Engineering, Diponegoro University</p>
        </section>
      </div>
      <div class="row row-2">
        <section>
          <i class="icon fas fa-circle"></i>
          <div class="details">
            <span class="title">Himpunan Mahasiswa Teknik Komputer</span>
          </div>
          <p><b>LKMM Pra Dasar</b><br />
            Computer Engineering, Faculty of Engineering, Diponegoro University</p>
        </section>
      </div>
      <div class="row row-1">
        <section>
          <i class="icon fas fa-circle"></i>
          <div class="details">
            <span class="title">Himpunan Mahasiswa Teknik Komputer</span>
          </div>
          <p><b>Exposure</b><br />
            Computer Engineering, Faculty of Engineering, Diponegoro University</p>
        </section>
      </div>
    </div>
  </div>
</section>

<section id="contact">
  <div class="containerdst">
    <div class="titlecontact">
      <h2><span>Contact Us</span></h2>
    </div>
    <div class="contactg">
      <h1>Galih Saputra</h1>
      <ul>
        <li><i class="fas fa-phone"></i><b> Phone:</b>085712247539</li>
      </ul>
    </div>
  </div>

</section>
  </body>
</html>
