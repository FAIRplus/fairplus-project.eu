<?php
$title = "FAIRplus news - eTOX Case Study | FAIRplus";
$description = "News article about FAIRification of toxicology data for drug discovery";
$section = "news";
$page = "news";
include $_SERVER['DOCUMENT_ROOT']."/includes/header.inc";
?>

<main id="main-content">
    <div class="inner-container">
        <div class="flex-container">
            <div class="percent-75">
                <article>

                    <h1>eTOX case study: unlocking  toxicology data for drug discovery</h1>

                    <h3>FAIRplus partners have finished working on making the eTOX data more Findable, Accessible, Interoperable and Reusable (FAIR). They have captured the lessons learned and hurdles found in a case study and the <a href="https://w3id.org/faircookbook/" target="_blank">FAIR Cookbook</a> .</h3>

                    <p>&nbsp;</p>

                    <p>In the <a href="http://www.etoxproject.eu/" target="_blank"> eTOX IMI project</a>, several companies joined forces to create a <a href="http://www.etoxproject.eu/" target="_blank"> large scale toxicology database</a>, covering 8.8 million pre-clinical data points on nearly 2,000 chemicals from 8,196 studies that included predictions on health effects.</p>

                    <figure class="top-margin">
                        <a href="https://zenodo.org/record/5786675#.Ybtqsm3P23I " target="_blank"><img src="https://fairplus-project.eu/images/etox-fairplus.jpeg" alt="eTOX case study" style="max-width: 55%;" class="low-top-margin right-margin float-right"></a>
                    </figure>
                    <p>Such an effort can significantly impact drug development since many new chemicals are discarded for their toxicity despite showing excellent efficacy.</p>
                    <p>However, data must be FAIR to exploit its full potential; eTOX data scored a FAIRness level of 25% based on concrete <a href="https://fairplus.github.io/fairification-results/" target="_blank">indicators</a>.</p>
                    <p>After efforts from the FAIRplus project, the eTOX data FAIRness level rose to 50%, increasing the chances of sharing and reusing this treasure trove of toxicology data. Broadly sharing toxicology knowledge could:</p>

                    <ul>
                        <li>Lower the attrition rate in drug development</li>
                        <li>Significantly reduce animal testing</li>
                        <li>Accelerate the development of novel drugs</li>
                    </ul>

                    <p>This case study analyses how the project achieved a 25% increase in FAIRness level, the hurdles faced, and the solutions applied. It focuses on two main solutions:</p>
                    <ul class="no-bullet">
                        <li>Chemical identifiers. Convert files to commonly accepted standards by extracting identifiers <a href="https://w3id.org/faircookbook/FCB007" target="_blank"> [fcb:FCB007]</a>.</li>
                        <li>Ontology mapping. Control terminology in free-text phrases to avoid subjective interpretations <a href="https://w3id.org/faircookbook/FCB042" target="_blank"> [fcb:FCB042]</a>.</li>
                    </ul>
                    <p>The original eTOX FAIRification recipes have been provided to <a href="https://etransafe.eu/" target="_blank"> eTRANSAFE</a> for further reuse and are also available in the FAIRplus cookbook. The FAIRification of the eTOX-data and the FAIRcookbook recipes will help life sciences researchers in academic and private settings accelerate research by making data more connected.</p>
                    <p>Read/download/share the eTOX case study, openly available on <a href="https://zenodo.org/record/5786675#.Ybtqsm3P23I" target="_blank"> Zenodo</a>.</p>
                    <p>For more information on the eTOX case, visit the <a href="https://w3id.org/faircookbook/FCB042" target="_blank"> FAIR Cookbook applied example</a></p>
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
