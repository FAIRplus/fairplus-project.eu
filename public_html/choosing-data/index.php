<?php
   $title = "How the FAIRplus project selects datasets for FAIRification| FAIRplus";
   $description = "Choosing datasets for the FAIRplus project";
   $section = "choosing-data";
   $page = "choosing-data";
   include $_SERVER['DOCUMENT_ROOT']."/includes/header.inc";
?>

    <main id="main-content">
       <div class="inner-container">
          <div class="flex-container">
             <div class="percent-75">
                <article>
                  <h1>Choosing a dataset</h1>
                   <figure class="float-right percent-40">
                     <img src="../images/phil-gribbon.jpg" alt="Phil Gribbon at the FAIRplus SME event" class="fill" />
                     <figcaption>Phil Gribbon (Fraunhofer) presenting the work of FAIRplus Work Package 1, who are identifying datasets to FAIRify.</figcaption>
                  </figure>
                  <p>A goal of FAIRplus is to develop a common approach for identifying and prioritising datasets to FAIRify. Both public (<a href="https://www.imi.europa.eu/">IMI</a> funded) and industry (<a href="https://www.efpia.eu/">EFPIA</a>) datasets will be included.  The project will:</p>
                  <ol>
                    <li>Identify datasets from IMI consortia and example datasets from EFPIA participants, including pilot datasets from IMI projects. <a href="/choosing-data/datasets">See the selected IMI projects</a>.</li>
                    <li>Evaluate the relevance, ELSI (Ethical, Legal and Social Implications) requirements and scientific value of datasets.</li>
                    <li>Propose and implement selection criteria for dataset identification. These criteria will include availability, scientific value, and societal impact. </li>
                    <li>Adjust guidelines and competency questions to help external (i.e. non-IMI and non-EFPIA) communities to FAIRify their datasets.</li>
                  </ol>
                  <div class="tinted inner-padding">
                    <h2 class="no-top-margin low-bottom-margin">Work completed</h2>
                    <table class="no-left-padding">
                      <tr>
                        <td><a href="https://zenodo.org/record/3274230#.XSRF4y2ZNTY">First three datasets selected and available</a></td>
                        <td class="percent-20">June 2019</td>
                      </tr>
                      <tr>
                        <td><a href="https://zenodo.org/record/3596024#.XgtevC2cZQI">A report containing the selection criteria and guidelines for data sources from IMI projects and EFPIA internal databases</a></td>
                          <td>December 2019</td>
                      </tr>
                    </table>
                  </div>
                  <p class="x-top-margin">This work will be carried out by Work Package 1 (WP1) within the project. For an overview of this WP and how it interacts with the other WPs see  <a href="/about/how-project-organised">How the project is organised</a>.</p>

                </article>
             </div>
             <div class="percent-25">
               <?php
                 include $_SERVER['DOCUMENT_ROOT']."/includes/subnav-choosing-data.inc";
               ?>
               <?php
                  include $_SERVER['DOCUMENT_ROOT']."/includes/stay-in-touch.inc";
               ?>
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
