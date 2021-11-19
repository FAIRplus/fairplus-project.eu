<?php
  $title = "Privacy | FAIRplus project";
  $description = "Privacy statement of the FAIRplus project website";
  $section = "privacy";
  $page = "privacy";
  include_once('includes/header.inc');
?>

<main id="main-content">
   <div class="inner-container">
      <div class="flex-container">
         <div class="percent-75">
                    <article>
                        <h1>Privacy</h1>
                        <h2 class="no-top-margin">What personal data we collect</h2>
                        <p>We collect the IP addresses of users. The site does not use cookies or collect any other personal data.</p>
                        <h2>IP addresses</h2>
                        <h3>What IP addresses are</h3>
                        <p>The FAIRplus website is on a web server, a type of computer that allows websites to be seen over the web. The web server collects the Internet Protocol addresses (IP addresses) of the site visitors. IP addresses are unique numeric identifiers that every device connected to the internet must have.</p>
                        <h3>Why we collect IP addresses</h3>
                        <p>Web servers log IP addresses by default so that errors on websites can be diagnosed, and so that malicious activity can be detected. They are important for the maintenance and security of websites, so that people can use the sites safely. Our justification for collecting IP addresses is therefore legitimate interest.</p>
                        <p>With the right software, you can identify the location of the IP address down to city level. Also, in some circumstances it is possible to put IP addresses together with other information in order to personally identify a user. It is for this reason that IP address are considered personal data under <a href="https://gdpr.eu/">GDPR</a>. However, <strong>we do not collect sufficient information to identify people from their IP address.</strong></p>
                        <p>The server is in the UK, and the IP addresses are not shared with any third party.</p>
                        <h2>Contact</h2>
                        <p>If you have any informal questions or concerns about privacy on the website, including exercising you rights to view or amend personal data you think we may have, feel free to email <a href="malto:webmaster@elixir-europe.org">webmaster@elixir-europe.org</a>.</p>
                        <h2>Data controller for the website</h2>
                        <p>The website is developed by the <a href="https://elixir-europe.org/about-us/who-we-are">ELIXIR Hub</a>.</p>
                        <p>Niklas Blomberg, ELIXIR Director<br />
                        Email: data-controller@ebi.ac.uk<br />
                        EMBL-EBI, Wellcome Genome Campus, CB10 1SD Hinxton, Cambridgeshire, UK</p>

                        <h2 id="contact-us">How to contact us</h2>
                        <p>Legally ELIXIR forms part of the <a href="https://www.embl.de/">European Molecular Biology Laboratory (EMBL)</a> and therefore uses EMBL's legal personality.</p>
                        <p>EMBL Data Protection Officer<br />
                        Tel: +49 6221 387-0<br />
                        Email: dpo@embl.org<br />
                        EMBL Heidelberg, Meyerhofstraße 1, 69117 Heidelberg, Germany</p>

                    </article>
                </div>
                <div class="percent-25">
                  <?php
                     include $_SERVER['DOCUMENT_ROOT']."/includes/stay-in-touch.inc";
                  ?>
                </div>
             </div>
          </div>
       </main>
   <?php
     include $_SERVER['DOCUMENT_ROOT']."/includes/footer.inc";
   ?>
