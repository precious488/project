<?php include "fetch.php"?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Christopher Morgan - Resume</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="resume-container">
        <div class="header">
            <?php if ($info): ?>
                <h1><?php echo strtoupper($info[0]['full_name']); ?></h1>
                <div class="contact-info">
                    <p><strong>Address:</strong> <?php echo $info[0]['address']; ?></p>
                    <p><strong>Phone:</strong> <?php echo $info[0]['phone']; ?></p>
                    <p><strong>Email:</strong> <?php echo $info[0]['email']; ?></p>
                </div>
            <?php endif; ?>
        </div>

        <div class="content">
            <section class="summary">
                <h2>Summary</h2>
                <?php if ($summary): ?>
                    <p><?php echo $summary[0]['summ']; ?></p>
                <?php else: ?>
                    <p>Senior Web Developer specializing in front-end development. Experienced with all stages of the development cycle for dynamic web projects. Well-versed in numerous programming languages including HTML5, PHP OOP, JavaScript, CSS, MySQL. Strong background in project management and customer relations.</p>
                <?php endif; ?>
            </section>

            <section class="skills">
                <h2>Skill Highlights</h2>
                <?php if ($skills): ?>
                    <ul>
                        <?php foreach ($skills as $skill): ?>
                            <li><?php echo $skill['skill_name']; ?></li>
                        <?php endforeach; ?>
                    </ul>
                <?php else: ?>
                    <ul>
                        <li>Project management</li>
                        <li>Strong decision maker</li>
                        <li>Complex problem solver</li>
                        <li>Creative design</li>
                        <li>Innovative</li>
                        <li>Service-focused</li>
                    </ul>
                <?php endif; ?>
            </section>

            <section class="experience">
                <h2>Experience</h2>
                <?php if ($experience): ?>
                    <?php foreach ($experience as $job): ?>
                        <div class="job">
                            <h3><?php echo $job['role_company'] . ' - ' . $job['date']; ?></h3>
                            <p><strong><?php echo $job['company_name']; ?></strong>, <?php echo $job['company_location']; ?></p>
                            <ul>
                                <li><?php echo $job['experience_description']; ?></li>
                            </ul>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p>No work experience to display.</p>
                <?php endif; ?>
            </section>

            <section class="education">
                <h2>Education</h2>
                <?php if ($education): ?>
                    <?php foreach ($education as $edu): ?>
                        <p><?php echo $edu['title']; ?> - <strong><?php echo $edu['date']; ?></strong></p>
                        <p><?php echo $edu['institution']; ?></p>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p>No education information to display.</p>
                <?php endif; ?>
            </section>

            <section class="languages">
                <h2>Languages</h2>
                <?php if ($languages): ?>
                    <ul>
                        <?php foreach ($languages as $lang): ?>
                            <li><?php echo $lang['lang'] . ' – ' . $lang['level']; ?></li>
                        <?php endforeach; ?>
                    </ul>
                <?php else: ?>
                    <p>No language information to display.</p>
                <?php endif; ?>
            </section>

            <section class="certifications">
                <h2>Certifications</h2>
                <?php if ($certifications): ?>
                    <ul>
                        <?php foreach ($certifications as $cert): ?>
                            <li><?php echo $cert['certification_name']; ?></li>
                        <?php endforeach; ?>
                    </ul>
                <?php else: ?>
                    <p>No certifications to display.</p>
                <?php endif; ?>
            </section>

            <section class="projects">
                <h2>Projects</h2>
                <?php if ($projects): ?>
                    <ul>
                        <?php foreach ($projects as $project): ?>
                            <li><?php echo $project['project_title'] . ' - ' . $project['organisation']; ?></li>
                        <?php endforeach; ?>
                    </ul>
                <?php else: ?>
                    <p>No projects to display.</p>
                <?php endif; ?>
            </section>

            <section class="hobbies">
                <h2>Hobbies</h2>
                <?php if ($hobbies): ?>
                    <ul>
                        <?php foreach ($hobbies as $hobby): ?>
                            <li><?php echo $hobby['hobby']; ?></li>
                        <?php endforeach; ?>
                    </ul>
                <?php else: ?>
                    <p>No hobbies to display.</p>
                <?php endif; ?>
            </section>

            <section class="volunteering">
                <h2>Volunteering</h2>
                <?php if ($volunteering): ?>
                    <?php foreach ($volunteering as $vol): ?>
                        <div class="volunteer-job">
                            <h3><?php echo $vol['role']; ?></h3>
                            <p><?php echo $vol['vulun_organisation'] . ' | ' . $vol['duration']; ?></p>
                            <p><?php echo $vol['vulun_description']; ?></p>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p>No volunteering information to display.</p>
                <?php endif; ?>
            </section>
        </div>
    </div>
</body>
</html>
