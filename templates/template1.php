<?php include "fetch.php"?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Charles Bloomberg - Resume</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <header>
            <?php if ($info): ?>
                <h1><?php echo $info[0]['full_name']; ?></h1>
                <p><?php echo $info[0]['location']; ?> · <a href="mailto:<?php echo $info[0]['email']; ?>"><?php echo $info[0]['email']; ?></a> · <?php echo $info[0]['phone']; ?> · <a href="<?php echo $info[0]['linkedin']; ?>">LinkedIn</a></p>
            <?php endif; ?>
        </header>

        <section>
            <h2>Summary</h2>
            <?php if ($summary): ?>
                <p><?php echo $summary[0]['summ']; ?></p>
            <?php else: ?>
                <p>Passion for building inspiring companies and helping people through industry-leading design, experiences, development, branding, and making big exits. Experienced early-stage executive with economics and mathematics degree from the University of Wisconsin.</p>
            <?php endif; ?>
        </section>

        <section>
            <h2>Experience</h2>
            <?php if ($experience): ?>
                <?php foreach ($experience as $job): ?>
                    <div class="job">
                        <h3><?php echo $job['role']; ?></h3>
                        <p><?php echo $job['company_name']; ?></p>
                        <p><?php echo $job['date']; ?></p>
                        <ul>
                            <li><?php echo $job['description']; ?></li>
                        </ul>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p>No work experience to display.</p>
            <?php endif; ?>
        </section>

        <section>
            <h2>Projects</h2>
            <?php if ($projects): ?>
                <?php foreach ($projects as $project): ?>
                    <div class="project">
                        <h3><?php echo $project['project_title']; ?></h3>
                        <p><?php echo $project['organisation']; ?></p>
                        <p><?php echo $project['duration']; ?></p>
                        <p><?php echo $project['description']; ?></p>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p>No projects to display.</p>
            <?php endif; ?>
        </section>

        <section>
            <h2>Education</h2>
            <?php if ($education): ?>
                <?php foreach ($education as $edu): ?>
                    <p><?php echo $edu['degree'] . ', ' . $edu['institution'] . ' · ' . $edu['year']; ?></p>
                <?php endforeach; ?>
            <?php else: ?>
                <p>No education information to display.</p>
            <?php endif; ?>
        </section>

        <section>
            <h2>Skills</h2>
            <?php if ($skills): ?>
                <p><?php echo implode(', ', array_column($skills, 'skill_name')); ?></p>
            <?php else: ?>
                <p>Fund Raising, Leadership, Public Speaking | Front-End: HTML, CSS, JavaScript | Design: Adobe Photoshop, Illustrator, UI/UX</p>
            <?php endif; ?>
        </section>

        <section>
            <h2>Languages</h2>
            <?php if ($languages): ?>
                <ul>
                    <?php foreach ($languages as $language): ?>
                        <li><?php echo $language['language_name'] . ' – ' . $language['proficiency']; ?></li>
                    <?php endforeach; ?>
                </ul>
            <?php else: ?>
                <p>No language information to display.</p>
            <?php endif; ?>
        </section>

        <section>
            <h2>Certifications</h2>
            <?php if ($certifications): ?>
                <ul>
                    <?php foreach ($certifications as $certification): ?>
                        <li><?php echo $certification['certification_name']; ?></li>
                    <?php endforeach; ?>
                </ul>
            <?php else: ?>
                <p>No certifications to display.</p>
            <?php endif; ?>
        </section>

        <section>
            <h2>Hobbies</h2>
            <?php if ($hobbies): ?>
                <ul>
                    <?php foreach ($hobbies as $hobby): ?>
                        <li><?php echo $hobby['hobby_name']; ?></li>
                    <?php endforeach; ?>
                </ul>
            <?php else: ?>
                <p>No hobbies to display.</p>
            <?php endif; ?>
        </section>

        <section>
            <h2>Volunteering</h2>
            <?php if ($volunteering): ?>
                <?php foreach ($volunteering as $vol): ?>
                    <div class="volunteer-job">
                        <h3><?php echo $vol['role']; ?></h3>
                        <p><?php echo $vol['organisation']; ?> | <?php echo $vol['duration']; ?></p>
                        <p><?php echo $vol['description']; ?></p>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p>No volunteering information to display.</p>
            <?php endif; ?>
        </section>
    </div>
</body>
</html>
