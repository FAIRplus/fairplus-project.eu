<?php
   $title = "Why the FAIRplus project is needed| FAIRplus";
   $description = "Why the FAIRplus project is needed";
   $section = "about";
   $page = "why-project-needed";
   include $_SERVER['DOCUMENT_ROOT']."/includes/header.inc";
?>

    <main id="main-content">
       <div class="inner-container">
          <div class="flex-container">
             <div class="percent-75">
                <article>
                  <h1>Why the project is needed</h1>
                  <p>The volume and complexity of life science data being produced by researchers around the world is growing exponentially. The European Innovative Medicines Initiative (IMI) alone has funded over 100 individual projects to date across all areas of pharmaceutical R&D, representing €5.3 billion in public-private investment.</p>
                  <p>The knowledge and data produced by these projects needs to be shared widely for science to gain the maximum benefit. But too often this knowledge lies beyond the reach of the wider life science community. Data that could have societal impact beyond the scope of the original project is inaccessible, annotated inconsistently across projects, and difficult to share because it is in proprietary formats.</p>
                  <p>Our project lays the groundwork for responsible data sharing, unlocking closer and deeper collaboration by making sure data is FAIR:</p>
                  <ul class="line-height-1">
                    <li><strong>F</strong>indable</li>
                    <li><strong>A</strong>ccessible</li>
                    <li><strong>I</strong>nteroperable</li>
                    <li><strong>R</strong>eusable</li>
                  </ul>
                  <p>Making data FAIR means that massive cost reductions and time efficiencies will be realised in academia, SMEs, and the world of pharma. In the long run this will translate into faster advancements for the benefit of humanity.</p>
                  <ul class="inline-links x-top-margin">
                    <li><a href="/about">About the project</a></li>
                    <li><a href="#main-header">Back to the top</a></li>
                  </ul>
                </article>
             </div>
             <div class="percent-25">
               <?php
                 include $_SERVER['DOCUMENT_ROOT']."/includes/subnav-about.inc";
               ?>
             </div>
          </div>
       </div>
    </main>

<?php
  include $_SERVER['DOCUMENT_ROOT']."/includes/footer.inc";
?>
