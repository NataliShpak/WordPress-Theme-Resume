<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">    
    <?php wp_head(); ?>
</head>
<body>
    <main>
        <div class="author">
             <?php echo wp_get_attachment_image( get_field("photo"), "full") ?>

             <div class="author-bio">
                <h1><?php the_field("title"); ?></h1>
                <p><?php the_field("subtitle"); ?></p>
             </div>
        </div>
        <div class="contacts">
            <h2><?php the_field("contact_title"); ?></h2>
            <p><?php the_field("phone"); ?></p>
            <p><?php the_field("email"); ?></p>
        </div>
        <div class="projects">
            <h2><?php the_field("projects_title"); ?></h2>
            <ol>
                <?php foreach( get_field("projects") as $project ): ?>
                <li><a href="<?php echo $project["link"]?>"><?php echo $project["link"]?></a> — <?php echo $project["details"] ?></li>
                <?php endforeach; ?>
            </ol>
        </div>
        <div class="soft-skills">
            <h2><?php the_field("soft_skills"); ?></h2>
            <ul>
                <?php foreach( get_field("soft_list") as $skill ): ?>
                <li><?php echo $skill["soft_skill"]; ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
        <div class="hard-skills">
            <h2>Hard skills</h2>
            <ul>
                <li>HTML5</li>
                <li>CSS3</li>
                <li>JavaScript</li>
                <li>React.js</li>
                <li>WordPress</li>
                <li>Git</li>
                <li>Python</li>
            </ul>
        </div>

    </main>
</body>
</html>