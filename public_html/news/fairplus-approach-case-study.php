<?php
   $title = "APPROACH case study: Some data are more equal than others";
   $description = "FAIRplus squad teams have finished working on making the APPROACH data more Findable, Accessible, Interoperable and Reusable (FAIR).";
   $section = "news";
   $page = "news";
   include $_SERVER['DOCUMENT_ROOT']."/includes/header.inc";
?>

    <main id="main-content">
       <div class="inner-container">
          <div class="flex-container">
             <div class="percent-75">
                <article>
                  <h1 class="low-bottom-margin">APPROACH case study: Some data are more equal than others</h1>
                    <p><i>FAIRplus squad teams have finished working on making the APPROACH data more Findable, Accessible, Interoperable and Reusable (FAIR).</i></p>
                   <p>The <a href="https://www.imi.europa.eu/projects-results/project-factsheets/approach" target="_blank">IMI APPROACH project</a> created a platform comprising data from thousands of osteoarthritis patients and healthy people to identify groups of patients with similar profiles and validate biomarkers to measure disease progression.</p>

                    <figure class="top-margin">
                        <a href="https://zenodo.org/record/6685729#.YrrvTuzMKw0" target="_blank"> <img src="/images/approach-case-study.png" alt="APPROACH case study: Some data are more equal than others" style="max-width: 40%;" class="low-top-margin right-margin float-right"></a>
                    </figure>

                    <p>Although osteoarthritis has a major impact on the quality of life of those involved, there is no universally accepted standard yet to describe the needed clinical data. Hence data cannot easily be shared and evaluated across clinical research projects.</p>

                    <p>Data sharing and reuse require appropriate licensing and data sharing conditions. A dedicated recipe in this respect in the FAIR Cookbook provides guidance on licensing <a href="https://faircookbook.elixir-europe.org/content/recipes/reusability/expressing-data-use.html#fcb-reusability-data-use" target="_blank">[FCB035]</a>.</p>

                    <p>APPROACH data scored a FAIRness level of 30% based on concrete <a href="https://fairplus.github.io/fairification-results/" target="_blank">indicators</a>. After efforts from the FAIRplus project, the APPROACH data FAIRness level rose to 80%.</p>

                    <p>This case study details how the project achieved the increase in FAIRness level, from the challenges and solutions applied, to the benefit in the future.</p>

                    <p>The FAIRification of the APPROACH data has increased the shareability and interoperability of the data set. It also enriched the FAIR Cookbook and will facilitate future research that combines data from multiple (osteoarthritis) studies.</p>

                    <p>Read/download/share the APPROACH case study, openly available on Zenodo: <a href="https://zenodo.org/record/6685729#.YrrvTuzMKw0" target="_blank"> https://zenodo.org/record/6685729#.YrrvTuzMKw0</a></p>

                </article>
            </div>
            <div class="percent-25">
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
