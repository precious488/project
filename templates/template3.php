<?php include "fetch.php"?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Christopher Morgan - Resume</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>
    <link rel="stylesheet" href="template3.css">
</head>
<body>
<button id="generate-pdf">Generate PDF</button>
<a id="download-pdf" href="#" download="example.pdf">Download PDF</a>

    <div id="resume-container">
        <div class="header">
            <?php if ($info): ?>
                <h1><?php echo strtoupper($info[0]['full_name']); ?></h1>
                <div class="contact-info">
                    <p><strong>Address:</strong> <?php echo $info[0]['country']; ?></p>
                    <p><strong>Phone:</strong> <?php echo $info[0]['phone']; ?></p>
                    <p><strong>Email:</strong> <?php echo $info[0]['email']; ?></p>
                </div>
            <?php endif; ?>
        </div>

        <div class="content">
            <section class="summary">
                
                <?php if ($summary): ?>
                    <h2>Summary</h2>
                    <p><?php echo $summary[0]['summ']; ?></p>
           
                <?php endif; ?>
            </section>

            <section class="skills">
                <?php if ($skills): ?>
                <h2>Skill Highlights</h2>

                    <ul>
                        <?php foreach ($skills as $skill): ?>
                            <li><?php echo $skill['skills']; ?></li>
                        <?php endforeach; ?>
                    </ul>
                <?php else: ?>

                <?php endif; ?>
            </section>

            <section class="experience">
                <?php if ($experience): ?>
                <h2>Experience</h2>

                    <?php foreach ($experience as $job): ?>
                        <div class="job">
                            <h3 style="font-size:14px;"><?php echo $job['role_company'] ?></h3>
                            <p style="font-size:14px;"><strong><?php echo $job['company_name']; ?></strong>, <?php echo $job['company_location']; ?></p>
                            <ul>
                                <li><?php echo $job['experience_description']; ?></li>
                            </ul>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    
                <?php endif; ?>
            </section>

            <section class="education">
                <?php if ($education): ?>
                <h2>Education</h2>

                    <?php foreach ($education as $edu): ?>
                        <p><?php echo $edu['title']; ?> - <strong><?php echo $edu['date']; ?></strong></p>
                        <p><?php echo $edu['institution']; ?></p>
                    <?php endforeach; ?>
                <?php else: ?>
                    
                <?php endif; ?>
            </section>

            <section class="languages">
                <?php if ($languages): ?>
                <h2>Languages</h2>

                    <ul>
                        <?php foreach ($languages as $lang): ?>
                            <li style="font-size:10px;"><?php echo $lang['lang'] . ' – ' . $lang['level']; ?></li>
                        <?php endforeach; ?>
                    </ul>
                <?php else: ?>
                   
                <?php endif; ?>
            </section>

            <section class="certifications">
                <?php if ($certifications): ?>
                <h2>Certifications</h2>

                    <ul>
                        <?php foreach ($certifications as $cert): ?>
                            <li style="font-size:14px"><?php echo $cert['certification_name']; ?></li>
                            <ul>
                            <li style="font-size:10px"><?php echo $cert['certification_importance']; ?></li>
                        </ul>
                        <?php endforeach; ?>
                    </ul>
                <?php else: ?>
                   
                <?php endif; ?>
            </section>

            <section class="projects">
                <?php if ($projects): ?>
                <h2>Projects</h2>

                    <ul>
                        <?php foreach ($projects as $project): ?>
                            <li style="font-size:14px"><?php echo $project['project_title'] . ' - ' . $project['organisation']; ?></li>
                            <ul>
                            <li style="font-size: 10px;"><?php echo $project['project_description']; ?></li>
                        </ul>
                        <?php endforeach; ?>
                    </ul>
                <?php else: ?>
                    
                <?php endif; ?>
            </section>

            <section class="hobbies">
                <?php if ($hobbies): ?>
                <h2>Hobbies</h2>

                    <ul>
                        <?php foreach ($hobbies as $hobby): ?>
                            <li style="font-size:10px"><?php echo $hobby['hobby']; ?></li>
                        <?php endforeach; ?>
                    </ul>
                <?php else: ?>
                   
                <?php endif; ?>
            </section>

            <section class="volunteering">
                <?php if ($volunteering): ?>
                <h2>Volunteering</h2>

                    <?php foreach ($volunteering as $vol): ?>
                        <div class="volunteer-job">
                            <li style="font-size:14px"><?php echo $vol['role']; ?></li>
                            <p style="font-size:14px"><?php echo $vol['vulun_organisation'] . ' | ' . $vol['duration']; ?></p>
                            <p style="font-size:10px"><?php echo $vol['vulun_description']; ?></p>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    
                <?php endif; ?>
            </section>
        </div>
    </div>
    <script>
    document.getElementById('generate-pdf').addEventListener('click', () => {
      const element = document.getElementById('resume-container');
      const options = {
        margin: [0.5, 0.5],
        filename: 'example.pdf',
        image: { type: 'jpeg', quality: 1},
        html2canvas: { scale: 10},
        jsPDF: { unit: 'in', format: 'a4', orientation: 'landscape' }
      };

      
      html2pdf().set(options).from(element).outputPdf('blob').then((pdfBlob) => {
        
        const downloadLink = document.getElementById('download-pdf');
        const pdfURL = URL.createObjectURL(pdfBlob);
        downloadLink.href = pdfURL;
        downloadLink.style.display = 'inline-block'; 
      });
    });
    </script>

</body>
</html>
