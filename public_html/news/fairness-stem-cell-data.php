<?php
$title = "FAIRplus news - Fairness of stem cell data | FAIRplus";
$description = "News article about improving FAIRness of stem cell data";
$section = "news";
$page = "news";
include $_SERVER['DOCUMENT_ROOT']."/includes/header.inc";
?>

<main id="main-content">
    <div class="inner-container">
        <div class="flex-container">
            <div class="percent-75">
                <article>

                    <h1>EBiSC2 and FAIRplus are improving FAIRness of stem cell data</h1>

                    <h3>The <a href="https://fairplus-project.eu/" target="_blank">FAIRplus</a> and <a href="http://www.ebisc.org/" target="_blank">EBiSC2</a> projects are joining forces to improve how ‘FAIR’ standards (Findability, Accessibility, Interoperability and Reusability) can be applied to human induced Pluripotent Stem Cell (iPSC) line data . The joint effort will improve how iPSC line data can be made more findable, standardised and reusable for researchers.</h3>

                    <p>&nbsp;</p>

                    <p>The European Bank for induced Pluripotent Stem Cells (EBiSC) is a centralised, not-for-profit, iPSC bank providing researchers across academia and industry with access to scalable, cost-efficient, and consistent high-quality tools for the development of new medicines. </p>
                    <p>The EBiSC bank collects iPSC lines from European Union (EU) and non-EU countries as well as the accompanied data from individual research groups and makes these available to scientists for research use. FAIRplus delivers guidelines and tools to facilitate the application of ‘FAIR’ principles to data from selected projects, including those funded under the Innovative Medicines Initiative (IMI - https://www.imi.europa.eu/).
                    </p>

                    <figure class="top-margin">
                        <img src="/images/ebisc-fairplus.png" alt="Improving FAIRness of stem cell data" style="max-width: 30%;" class="low-top-margin right-margin float-right"></a>
                    </figure>
                    <p>Dr Andreas Kurtz, coordinator of the Human Pluripotent Stem Cell registry (<a href="https://hpscreg.eu/">hPSCreg</a>) and responsible for the EBiSC2 IT infrastructure explains: <blockquote>By working with FAIRplus, we will make it easier for scientists to find the information they need and improve how we collect, store and standardise data for new cohorts of iPSC lines which are joining the EBiSC collection in the future. This will improve the efficiency and robustness of iPSC-based research and help to accelerate the path to understanding disease pathology and developing new therapeutic opportunities.</blockquote>
                    </p>
                    <p>Dr Serena Scollen, project coordinator of FAIRplus says: <blockquote>The aim of the FAIRplus project is to develop methodologies and tools to increase the FAIRness of biomedical data and demonstrate the added value of the FAIR data management on selected IMI projects, such as EBiSC2. Our hope is that by helping EBiSC2 create fully FAIR datasets, we can support the research community towards more efficient and robust research.</blockquote>
                    </p>
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
