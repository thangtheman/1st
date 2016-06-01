<?php include 'meta.php';?>
<body>
<div id="homepage">
  <div class="header">
    <div class="topnav">
      <div class="container">
        <div class="row">
          <div class="col-sm-6" > <span class="quote" id="dscQuote"></span></div>
          <div class="col-sm-6 col-xs-12 text-right langauage social"> <a href="#" class="language">English / हिंदी</a> <a href="https://www.facebook.com/DrSubhashChandraDSC" target="_blank" ><i class="fa fa-facebook-square" aria-hidden="true"></i></a> <a href="https://twitter.com/_SubhashChandra" target="_blank" ><i class="fa fa-twitter-square" aria-hidden="true"></i></a> <a href="https://www.youtube.com/channel/UCuVnhh7xEv78fEawk_WiAEQ?sub_confirmation=1" target="_blank" ><i class="fa fa-youtube" aria-hidden="true"></i></a> <a href="https://www.instagram.com/_subhashchandra/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a> </div>
        </div>
      </div>
    </div>
    <nav class="navbar navbar-inverse" >
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
          <a class="navbar-brand" href="index.php"><img src="images/logo-header.png" class="logo"/></a> </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="about-dsc.php">जीवनी</a></li>
            <li><a href="events.php">आयोजन</a></li>
            <li><a href="shop.php">दुकान</a></li>
            <li><a href="dsc-show.php">डीएससी शो</a></li>
            <li><a href="blog.php">ब्लॉग</a></li>
            <li><a href="news.php">समाचार</a></li>
            <li><a href="contact.php">संपर्क</a></li>
            <li><a href="#modal" data-toggle="modal" data-target="#myModal" type="button">जुडें ईमेल <br/>
              सूची</a></li>
            <li><a href="charities.php">समर्थन <br>
              दान</a></li>
          </ul>
        </div>
        <!--/.navbar-collapse --> 
      </div>
    </nav>
    
    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog " role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <p>सूचित रहें, जानें, कामयाबी!</p>
            <h3 class="modal-title" style="margin-top: -15px" id="myModalLabel"> न्यूज़लेटर प्राप्त कर</h3>
            <form method="post" action="http://coreesseldigital.com/DSC/pre-launch/process-subscriptions.php">
              <input class="newsletter" type="text" name="email" id="email" required placeholder="name@domain.com"/>
              <input type="submit"  value="प्रस्तुत करना"/>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- Nav Container -->
    <div class="container">
      <div class="snippet">
        <h2>नेता, लोकोपकारक, व्यवसायी और लेखक</h2>
        <p>देश की उदारीकरण यात्रा देश के सामाजिक-आर्थिक तबके के उत्थान के लिए और करने के लिए डीएससी के योगदान, अमित किया गया है। उनकी बुद्धि, दृढ़ संकल्प, प्रेरणा और उनके अग्रणी दृष्टि ऊपर सबसे; सफलता की दिशा में पथ और एक बेहतर कल के देखने के लिए हम सब कर सकती! </p>
        <button class="secondary" onClick="window.location.href='about-dsc.php';">और अधिक जानें</button>
        <button class="primary" onClick="window.location.href='events.php';">मिलिए डीएससी</button>
      </div>
      <!-- snippet --> 
      
    </div>
    <img src="images/dsc-hp.png" class="dsc"/>
    <div class="join-newsletter">
      <div class="container">
        <p>सूचित रहें, जानें, कामयाबी!</p>
        <label>न्यूज़लेटर प्राप्त करें</label>
        <form method="post" action="http://coreesseldigital.com/DSC/pre-launch/process-subscriptions.php">
          <input type="text" name="email" id="email" placeholder="name@domain.com"/>
          <input type="submit" value="प्रस्तुत करना"/>
        </form>
      </div>
    </div>
    <!-- join-newsletter --> 
  </div>
  
  <!-- header -->
  
  <section class="promo">
    <div class="container">
      <div class="row">
        <div class="col-sm-4">
          <h3>और अधिक जानें</h3>
          <p>डॉ सुभाष चंद्रा, एस्सेल ग्रुप कंपनियों के अध्यक्ष, वैश्विक मीडिया और मनोरंजन उद्योग के अग्रदूतों में से एक है। स्वनिर्मित पुरूप, और एक सच्चे दूरदर्शी। उनसे मिलने का अवसर पाने के लिए नीचे दी गयी लिंक की जांच करें।<br/>
            <br/>
            <br/>
          </p>
          <a class="button secondary" href="events.php">और अधिक जानें</a> </div>
        <!-- col end -->
        <div class="col-sm-4">
          <h3>आयोजन</h3>
          <p>आगे की इवेंट्स की जानकारी के लिए इस लिंक की जांच करें।<br/>
            <br/>
            <br/>
            <br/>
            <br/>
          </p>
          <a class="button secondary" href="events.php">और अधिक जानें</a> </div>
        <!-- col end -->
        <div class="col-sm-4">
          <h3> दान करना</h3>
          <p>डॉ सुभाष चंद्र (DSC) कई प्रमुख परियोजनाओं में साथ जुड़े हुए हैं और देश की सामाजिक-आर्थिक तबके के उत्थान की दिशा में लगातार काम कर रहा है।
            उनकी पहल का समर्थन और देश में एक सकारात्मक बदलाव लाने में मदद करने के लिए शामिल हों। अधिक जानने के लिए नीचे दिए गए लिंक पर क्लिक करें। </p>
          <a class="button secondary" href="charities.php">और अधिक जानें</a> </div>
        <!-- col end --> 
      </div>
    </div>
  </section>
  <!-- promo -->
  
  <section id="community">
    <div class="wrapper">
      <h2>समुदाय</h2>
      <div class="connect-with-dsc">
        <p> कनेक्ट के साथ डीएससी <a href="https://www.facebook.com/DrSubhashChandraDSC" target="_blank" ><i class="fa fa-facebook-square" aria-hidden="true"></i></a> <a href="https://twitter.com/_SubhashChandra" target="_blank" ><i class="fa fa-twitter-square" aria-hidden="true"></i></a> <a href="https://www.youtube.com/channel/UCuVnhh7xEv78fEawk_WiAEQ?sub_confirmation=1" target="_blank" ><i class="fa fa-youtube" aria-hidden="true"></i></a> <a href="https://www.instagram.com/_subhashchandra/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a> </p>
      </div>
    </div>
    <div id="socialWall" class="social-wall">
      <div class="container">
        <div class="mr-space" id="mr-space_dsc-website" data-space-id="asia-tv/dsc-website" style="min-height: 500px;"></div>
        <script>!function(a,b,c,d,e,f,g,h,i,j,k){h=a[d]=a[d]||{},h.ui=h.ui||[],i=a[e]=a[e]||{},i[f]||(j=b.getElementsByTagName(c)[0],k=b.createElement(c),k.src="//platform.massrelevance.com/js/massrel.js",j.parentNode.insertBefore(k,j),i[f]=function(){h.ui.push([].slice.call(arguments))}),i[f]("load",{el:b.getElementById(g)})}(window,document,"script","massrel","spredfast","exp","mr-space_dsc-website");</script> 
      </div>
    </div>
    <a class="social-wall-more"></a> </section>
  <section id="interests">
    <h2>Interests</h2>
    <div class="carousel">
      <div class="container"> <a href="javascript:void(0);" class="arrows left"></a> <a href="javascript:void(0);" class="arrows right"></a>
        <div class="slider">
          <div class="slider-wrapper">
            <div class="slide-1">
              <div class="row">
                <div class="col-sm-6 col-xs-6">
                  <div class="img-wrapper"><img src="images/interest-5.jpg"/></div>
                  <a href="about-dsc.php#political" class="button secondary">राजनीतिक<span>DSC एक जनता के कल्याण के विभाजन के लिए राजनीति के मूल परिभाषा को बदलने में एक गहरी रुचि रखता है। उसे के अनुसार, राजनेताओं विशुद्ध रूप से भारत की जनता की सेवा के प्रति अपने समय और... <u>अधिक पढ़ें</u></span></a> </div>
                <div class="col-sm-6 col-xs-6">
                  <div class="img-wrapper"><img src="images/interest-1.jpg"/></div>
                  <a href="about-dsc.php#entrepreneurial" class="button secondary">उद्यमी<span>डीएससी, एक स्वयं बनाया आदमी के लिए एक सच्चे दूरदर्शी जा रहा है, लगातार नए व्यवसायों की पहचान करने और उन्हें सफलता के रास्ते पर नेतृत्व करने के लिए अपनी... <u>अधिक पढ़ें</u></span></a> </div>
              </div>
              <div class="row">
                <div class="col-sm-6 col-xs-6"> <a href="about-dsc.php#social" class="button secondary">सामाजिक<span>डीएससी भारत में एक प्रभावशाली परोपकारी के रूप में अपनी छाप छोड़ी है। वह दूरी और ओपन लर्निंग के माध्यम से गुणवत्ता की शिक्षा के लिए पहुँच प्रदान करने के... <u>अधिक पढ़ें</u></span></a>
                  <div class="img-wrapper"><img src="images/interest-4.jpg"/></div>
                </div>
                <div class="col-sm-6 col-xs-6"> <a href="about-dsc.php#economy" class="button secondary">अर्थव्यवस्था<span>डीएससी लगातार भारत के आर्थिक विकास से पहले और बाद स्वतंत्रता का दस्तावेजीकरण जागरूकता और अच्छे और बुरे चरणों के बीच एक निरा भेदभाव उत्पन्न करने के लिए, क्रम में भविष्य... <u>अधिक पढ़ें</u></span></a>
                  <div class="img-wrapper"><img src="images/interest-2.jpg"/></div>
                </div>
              </div>
            </div>
            <!-- Slide 1-->
            <div class="slide-2">
              <div class="row">
                <div class="col-sm-6 col-xs-6"> <a href="about-dsc.php#community" class="button secondary">समुदाय<span>डीएससी गर्व से Aggarwals के वैश्य समुदाय का प्रतिनिधित्व करता है। इस समुदाय की उत्पत्ति एक जगह अग्रोहा, जहां यह माना जाता है कि देवी लक्ष्मी के... <u>अधिक पढ़ें</u></span></a>
                  <div class="img-wrapper"><img src="images/interest-10.jpg"/></div>
                </div>
                <div class="col-sm-6 col-xs-6"> <a href="about-dsc.php#media" class="button secondary">मीडिया<span>डीएससी ठीक ही देश की पहली निजी उपग्रह टेलीविजन चैनल शुरू करने में अपनी अग्रणी प्रयासों के साथ जाना जाता है एक मीडिया मुगल, - जी टीवी, पहले 24 घंटे के समाचार चैनल द्वारा पीछा किया... <u>अधिक पढ़ें</u></span></a>
                  <div class="img-wrapper"><img src="images/interest-3.jpg"/></div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6 col-xs-6">
                  <div class="img-wrapper"><img src="images/interest-8.jpg"/></div>
                  <a href="about-dsc.php#family" class="button secondary">परिवार<span>डीएससी एक परिवार के आदमी है और इसे एक मुद्दा बना देता है अपने प्रियजनों के साथ के रूप में ज्यादा समय के रूप में वह कर सकते हैं खर्च करने के लिए। सबसे ऊपर, वह लगातार... <u>अधिक पढ़ें</u></span></a> </div>
                <div class="col-sm-6 col-xs-6">
                  <div class="img-wrapper"><img src="images/interest-6.jpg"/></div>
                  <a href="about-dsc.php#philanthropy" class="button secondary">लोकोपकार<span>DSC और उनके पूरे परिवार को हमेशा के लिए एक एकीकृत डीएससी फाउंडेशन, जो बदले में समाज के उत्थान की दिशा में काम करता है की दिशा में अपने लाभ का 10% दान करने की दिशा में अभ्यास किया है।... <u>अधिक पढ़ें</u></span></a> </div>
              </div>
            </div>
            <!-- Slide 2-->
            <div class="slide-3">
              <div class="row">
                <div class="col-sm-6 col-xs-6"> <a href="about-dsc.php#motivator" class="button secondary">प्रेरक<span>DSC भारत के युवाओं को प्रेरित करने के लिए, अपने लोकप्रिय रूप डीएससी शो शीर्षक शो के माध्यम से अपने अनुभव, ज्ञान और ज्ञान बांटने से जारी है। इस शो के साथ, डीएससी देश... <u>अधिक पढ़ें</u></span></a>
                  <div class="img-wrapper"><img src="images/interest-7.jpg"/></div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6 col-xs-6"> <a href="about-dsc.php#cultural" class="button secondary">सांस्कृतिक<span>बुद्ध के शिक्षण, जो उसे शांत और ध्यान केंद्रित रहता अनुसार डीएससी प्रथाओं विपश्यना। उन्होंने कहा कि मुंबई, जो एक बहुत ही दुर्लभ स्मारक, जहां लोगों... <u>अधिक पढ़ें</u></span></a>
                  <div class="img-wrapper"><img src="images/interest-9.jpg"/></div>
                </div>
              </div>
            </div>
            <!-- Slide 3--> 
          </div>
          <!-- Slider Wrapper--> 
        </div>
        <!-- Slider --> 
      </div>
    </div>
  </section>
  <section id="upcoming-events">
    <h2>आने वाले कार्यक्रम</h2>
    <div class="wrapper">
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <div class="event-preview" onClick="window.location.href='events.php';">
              <h6>आने वाले कार्यक्रम</h6>
              <h4>ZEE LEADERSHIP SERIES</h4>
              <!--<p><strong></strong>-->
              <p>London, UK</p>
              <p>Monday June 30th, 2016</p>
              <div id="getting-started" class="timer"></div>
            </div>
          </div>
          <div class="col-sm-6 hidden-xs">
            <div class="event-list">
              <h4><a href="events.php">Simhast Kumbh Mahaparva</a></h4>
              <p>Ujjain, Madhya Pradesh  - 6 May</p>
              <hr/>
              <h4><a href="events.php">2nd Smart Cities in India Expo 2016</a></h4>
              <p>Pragati Maidan, New Delhi - 11-13 May</p>
              <hr/>
              <h4><a href="events.php">Vision 2020 Meet</a></h4>
              <p>Goa, India  -  16-19 May</p>
              <hr/>
              <h4><a href="events.php">Zee Leadership Series</a></h4>
              <p>London, UK - 30th June</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="blog-and-news">
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <h3>हाल के ब्लॉग</h3>
          <ul>
            <li>
              <div class="row">
                <div class="col-md-2 col-sm-3 col-xs-3"><img src="images/blog-7.jpg"/></div>
                <div class="col-md-10 col-sm-9 col-xs-9">
                  <h6><a href="blog-7.php">एस्सेल समूह के 90 गौरवशाली वर्ष</a></h6>
                  <p>सआपको ये बताते हुए मुझे गर्व का एहसास हो रहा है कि एस्सेल समूह ने वर्ष 2016 में मई माह में अपनी यात्रा के 90 गौरवपूर्ण वर्ष पूरे कर लिए हैं। मेसर्स रामगोपाल... <a href="blog-7.php">अधिक पढ़ें</a></p>
                </div>
              </div>
            </li>
            <li>
              <div class="row">
                <div class="col-md-2 col-sm-3 col-xs-3"> <img src="images/blog-4-t.jpg"/></div>
                <div class="col-md-10 col-sm-9 col-xs-9">
                  <h6><a href="blog-4.php">समय का प्रबंधन ही जीवन का प्रबंधन हैै</a></h6>
                  <p>हम जब भी अतीत के बारे में सोचते हैं तो हमें लगता है कि काश तब हमारे पास थोड़ा और समय होता। हम बचपन से ही हमें अपना काम समय पर... <a href="blog-4.php">अधिक पढ़ें</a></p>
                </div>
              </div>
            </li>
            <li>
              <div class="row">
                <div class="col-md-2 col-sm-3 col-xs-3"><img src="images/dsc-8.jpg"/></div>
                <div class="col-md-10 col-sm-9 col-xs-9">
                  <h6><a href="blog-2.php">सफल उद्यमी की सफलता के रहस्य का उजागर होना</a></h6>
                  <p>मुझे सोशल मीडिया के माध्यम से अपने प्रशंसकों के सवाल लगातार मिलते रहते हैं, सभी ये जानना चाहते हैं कि एक उद्यमी की सफलता का रहस्य क्या है।... <a href="blog-2.php">अधिक पढ़ें</a></p>
                </div>
              </div>
            </li>
          </ul>
        </div>
        <div class="col-sm-6">
          <h3>ताज़ा खबर</h3>
          <ul>
          <li>
              <div class="row">
                <div class="col-md-2 col-sm-3 col-xs-3"><img src="images/news-06.jpg"/></div>
                <div class="col-md-10 col-sm-9 col-xs-9">
                  <h6><a href="news-6.php">सुभाष चंद्र गैर कार्यकारी ज़ी मीडिया कॉर्प के अध्यक्ष के रूप में नीचे कदम</a></h6>
                  <p>हम जब भी अतीत के बारे में सोचते हैं तो हमें लगता है कि काश तब हमारे पास थोड़ा और समय होता। हम बचपन से ही हमें अपना काम समय परै... <a href="news-6.php">अधिक पढ़ें</a></p>
                </div>
              </div>
            </li>
            <li>
              <div class="row">
                <div class="col-md-2 col-sm-3  col-xs-3"><img src="images/news-1.jpg"/></div>
                <div class="col-md-10 col-sm-9   col-xs-9">
                  <h6><a href="news-5.php">एस्सेल ग्रुप के चेयरमैन डॉ सुभाष चंद्र 4000 रुपये का निवेश करने के लिए...</a></h6>
                  <p>आओ बुधवार, मुंबई 6:30 पर आईआईटी बॉम्बे दीक्षांत समारोह हॉल में संस्कृत के लिए लड़ाई साक्षी इतिहास में एक जगह का हिस्सा होगा... <a href="news-5.php">अधिक पढ़ें</a></p>
                </div>
              </div>
            </li>
            <li>
              <div class="row">
                <div class="col-md-2 col-sm-3 col-xs-3"><img src="images/news-2.jpg"/></div>
                <div class="col-md-10 col-sm-9 col-xs-9">
                  <h6><a href="news-3.php">प्रधानमंत्री नरेंद्र मोदी ने एस्सेल ग्रुप के चेयरमैन की शुरूआत...</a></h6>
                  <p>नई दिल्ली: बुधवार को प्रधानमंत्री नरेंद्र मोदी ने एस्सेल ग्रुप के चेयरमैन डॉ सुभाष चंद्र की आत्मकथा का शुभारंभ... <a href="news-3.php">अधिक पढ़ें</a></p>
                </div>
              </div>
            </li>
            
          </ul>
        </div>
      </div>
    </div>
  </section>
  <?php include 'footer.php';?>
  <script src="js/jquery.countdown.min.js"></script> 
  <script type="text/javascript">
    $('#getting-started').countdown('2016/06/30', function(event) {
        $(this).html(event.strftime('<div>%w</div> <div class="days">%d</div> <div class="hours">%H</div> <div class="mins">%M</div><div class="secs">%S</div>'));
    });
	if($(window).width()>767){
		$(".promo .row div").css('height',$(".promo").height());
	}
</script> 
</div>
<!-- page -->
</body>
</html>
