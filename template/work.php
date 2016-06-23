<?php
    // exposes $projects
    include "data/projects.php";

    $projects_html = '';
    foreach ($projects as $project)
    {
        $project_name = ucfirst($project['name']);
        $prev = 'preview_' . $project['name'] . '.jpg';
        $roles_html = '';
        $roles = $project['role'];
        if(!empty($roles))
        {
            foreach ($roles as $r)
            {
                $roles_html .= <<<html
<div class="role">$r</div>
html;
            }
        }

        $projects_html .= <<<html
<div class="project {$project['name']}" data-project="{$project['name']}">
    <div class="overflow" style="background-image: url('img/{$prev}')">
        <div class="overlay"></div>
        <div class="logo">
            <span>{$project['display']}</span>
        </div>
        <div class="slash"></div>
        <div class="contents">
            <h3>
                <span class="type">{$project['type']}</span>
            </h3>
            $roles_html
        </div>
    </div>
</div>
html;
        $photos_html = '';
        if(!empty($project['images']))
        {
            foreach ($project['images'] as $image)
            {
                $photos_html .= <<<html
<div class="photo">
    <img src="img/projects/{$image['src']}" alt="" class="{$image['class']}" />
    <div class="text">
        {$image['text']}
    </div>
</div>
html;
            }
        }
        $popup_html .= <<<html
<div class="popup_{$project['name']}">
    <div class="name">{$project['display']}</div>
    <div class="type">{$project['type']}</div>
    <div class="roles">
        $roles_html
    </div>
    <div class="description">
        {$project['description']}
    </div>
    <div class="photos">
        $photos_html
    </div>
</div>
html;
    }
?>
<div class="Work" id="Work">
    <div class="square"></div>
    <h2 class="section_title"><span class="first_letter">W</span>ork</h2>
    <div class="grid">
        <?=$projects_html;?>
    </div>
    <div style="display:none;">
        <?=$popup_html;?>
    </div>
</div>