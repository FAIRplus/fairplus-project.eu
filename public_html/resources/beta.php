<?php
   $title = "Resources of the FAIRplus project| FAIRplus";
   $description = "Resources provided by the FAIRplus project";
   $section = "resources";
   $page = "resources";
   include $_SERVER['DOCUMENT_ROOT']."/includes/header.inc";
?>

    <main id="main-content">
       <div class="inner-container">
          <div class="flex-container">
             <div class="percent-75">
                <article>
                  <h1>Resources</h1>

                  <p>This page will bring together resources produced by the project. These will be added throughout the project, when each has been completed. </p>
                  <p class="no-bottom-margin">Other resources in this section include:</p>
                  <ul class="top-margin">
                    <li><a href="suggested-reading">Suggested reading</a></li>
                    <li><a href="publicity-materials">Publicity materials</a></li>
                    <li><a href="logos">Logos</a></li>
                  </ul>
                  <h2 class="top-margin">Resources from the project</h2>
                  <h3 class="smaller">June 2019</h3>
                  <ul class="low-top-margin">
                    <li>Draft BYOD guidelines (alpha version)</li>
                  </ul>
                  <h3 class="smaller">December 2019</h3>
                  <ul class="low-top-margin">
                    <li>Draft FAIR cookbook (alpha version)</li>
                    <li>FAIRplus handbook</li>
                    <li>Selection criteria and guidelines for data sources</li>
                    <li>Report on IMI projects for data types</li>
                  </ul>
                  <h3 class="smaller">December 2020</h3>
                  <ul class="low-top-margin">
                    <li>Annual update of the FAIRplus Handbook including KPIs</li>
                    <li>IMI FAIR data catalogue</li>
                    <li>Sustainability plan</li>
                  </ul>
                  <h3 class="smaller">December 2021</h3>
                  <ul class="low-top-margin">
                    <li>FAIR Cookbook</li>
                    <li>Annual update of the FAIRplus Handbook including KPIs</li>
                    <li>BYOD guidelines</li>
                    <li>Technical feasibility report</li>
                    <li>FAIRification guidance tool for IMI</li>
                    <li>Use case dissemination package</li>
                  </ul>

                  <p class="x-top-margin">For more information about the project and the context of these resources, see <a href="/about/">About the project</a>.
                </article>
             </div>
             <div class="percent-25">
               <?php
               include $_SERVER['DOCUMENT_ROOT']."/includes/subnav-resources.inc";
               ?>
               <div class="xx-top-margin">
               <?php
                  include $_SERVER['DOCUMENT_ROOT']."/includes/stay-in-touch.inc";
               ?>
             </div>
               <div class="xx-top-margin">
                 <?php
                   include $_SERVER['DOCUMENT_ROOT']."/includes/twitter-feed.inc";
                 ?>
               </div>
             </div>
          </div>
       </div>
    </main>
<?php
  include $_SERVER['DOCUMENT_ROOT']."/includes/footer.inc";
?>