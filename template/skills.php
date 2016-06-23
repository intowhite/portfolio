<?php
    // exposes $skills
    require 'data/skills.php';
    foreach ($skills as $key=>$skill)
    {
        $skill_html = '';
        foreach ($skill as $skey=>$s)
        {
            $skill_html .= <<<html
<li class="{$s['class']}">{$s['title']}</li>
html;
        }
        $skills_html .= <<<html
<div class="group">
    <div class="title">{$key}</div>
    <ul>
        $skill_html
    </ul>
</div>
html;

    }
?>
<div class="Skills">
    <h2 class="section_title">Skills</h2>
    <?=$skills_html;?>
</div>

<!--<div class="group">-->
<!--    <div class="title">Client</div>-->
<!--    <ul>-->
<!--        <li class="high">HTML5</li>-->
<!--        <li class="high">CSS3</li>-->
<!--        <li>Less/Sass/Stylus</li>-->
<!--        <li>Javascript</li>-->
<!--        <li>jQuery</li>-->
<!--        <li>Object Oriented JS</li>-->
<!--        <li>CSS Animation</li>-->
<!--        <li>React.js</li>-->
<!--        <li>Javascript Animation</li>-->
<!--        <li>SVG</li>-->
<!--        <li>NPM/Grunt/Gulp</li>-->
<!--        <li>API</li>-->
<!--        <li class="low">SPA</li>-->
<!--        <li class="low">Angular.js</li>-->
<!--    </ul>-->
<!--</div>-->
<!--<div class="group">-->
<!--    <div class="title">Server</div>-->
<!--    <ul>-->
<!--        <li>PHP</li>-->
<!--        <li>Node.JS</li>-->
<!--        <li>MVC Design</li>-->
<!--        <li>REST</li>-->
<!--        <li>MongoDB</li>-->
<!--        <li>MySQL</li>-->
<!--        <li>Meteor.js</li>-->
<!--        <li class="low">Web Services</li>-->
<!--        <li class="low">Clojure</li>-->
<!--        <li class="low">Java</li>-->
<!--    </ul>-->
<!--</div>-->
<!--<div class="group">-->
<!--    <div class="title">Design</div>-->
<!--    <ul>-->
<!--        <li>Adobe Photoshop</li>-->
<!--        <li>Adobe Illustrator</li>-->
<!--        <li>Sketch 3</li>-->
<!--        <li class="low">Adobe InDesign</li>-->
<!--        <li class="low">Adobe Flash</li>-->
<!--    </ul>-->
<!--</div>-->
<!--<div class="group">-->
<!--    <div class="title">Misc</div>-->
<!--    <ul>-->
<!--        <li>User Experience</li>-->
<!--        <li>Data-driven Design</li>-->
<!--        <li>A/B Testing</li>-->
<!--        <li>SEO</li>-->
<!--        <li>Cross-browser Testing</li>-->
<!--        <li>Google Analytics</li>-->
<!--        <li>Windows/OSX</li>-->
<!--        <li class="low">Git</li>-->
<!--    </ul>-->
<!--</div>-->