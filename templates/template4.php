<?php include "fetch.php"?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spencer Willington - Resume</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="resume-container">
        <header>
            <?php if ($info): ?>
                <h1><?php echo strtoupper($info[0]['full_name']); ?></h1>
                <p><?php echo $info[0]['country']; ?> • <?php echo $info[0]['phone']; ?> • <?php echo $info[0]['email']; ?></p>
            <?php endif; ?>
        </header>

        <section class="profile">
            <h2>Professional Profile</h2>
            <?php if ($summary): ?>
                <p><?php echo $summary[0]['summ']; ?></p>
            <?php else: ?>
                <p>Write a brief, engaging text about yourself. Provide information about your educational background, work experience, skills, and key achievements relevant to the role you are applying for. Describe in one sentence your most impressive achievement and quantify it. Fill the personal profile with keywords from the job description. Try to cover all mandatory requirements within four to five sentences.</p>
            <?php endif; ?>
        </section>

        <section class="work-experience">
            <h2>Work Experience</h2>
            <?php if ($experience): ?>
                <?php foreach ($experience as $job): ?>
                    <div class="job">
                        <h3><?php echo $job['role_company']; ?></h3>
                        <p><?php echo $job['company_name']; ?> (<?php echo $job['company_location']; ?>)</p>
                        <p><?php echo $job['date']; ?></p>
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
                    <p><?php echo $edu['title']; ?></p>
                    <p><?php echo $edu['institution']; ?>, <?php echo $edu['location']; ?></p>
                    <p><?php echo $edu['date']; ?></p>
                <?php endforeach; ?>
            <?php else: ?>
                <p>No education information to display.</p>
            <?php endif; ?>
        </section>

        <section class="skills">
            <h2>Skills</h2>
            <?php if ($skills): ?>
                <p>Languages: 
                    <?php echo implode(', ', array_column($skills, 'language')); ?>
                </p>
                <p>Computer skills: 
                    <?php echo implode(', ', array_column($skills, 'computer_skill')); ?>
                </p>
                <p>Other skills: 
                    <?php echo implode(', ', array_column($skills, 'other_skill')); ?>
                </p>
            <?php else: ?>
                <p>No skills information to display.</p>
            <?php endif; ?>
        </section>

        <section class="certifications">
            <h2>Certifications</h2>
            <?php if ($certifications): ?>
                <ul>
                    <?php foreach ($certifications as $cert): ?>
                        <li><?php echo $cert['certification_name'] . ' - ' . $cert['certification_organisation']; ?></li>
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

        <section class="languages">
            <h2>Languages</h2>
            <?php if ($languages): ?>
                <ul>
                    <?php foreach ($languages as $lang): ?>
                        <li><?php echo $lang['lang'] . ' (' . $lang['level'] . ')'; ?></li>
                    <?php endforeach; ?>
                </ul>
            <?php else: ?>
                <p>No language information to display.</p>
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
</body>
</html>
