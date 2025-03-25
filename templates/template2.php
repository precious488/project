<?php include "fetch.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume Template</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>

    <style>
        body {
            font-family: 'Times New Roman', serif;
            margin: 0;
            padding: 0;
            background-color: #f7f4ed;
            color: #333;
        }

        .resume {
            max-width:60%;
            margin: 40px auto;
            background: #fff;
            padding: 40px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border: 1px solid #e6e6e6;
        }
        li{
            font-size:10px;
        }

        .header {
            text-align: left;
            border-bottom: 2px solid #ccc;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }

        .header h1 {
            font-size: 1rem;
            margin: 0;
            color: #333;
        }

        .header p {
            font-size: 1.2em;
            margin: 5px 0;
            color: #555;
        }

        .section {
            margin: 20px 0;
        }

        .section h2 {
            font-size: 1rem;
            color: #444;
            border-bottom: 1px solid #ccc;
            padding-bottom: 5px;
            margin-bottom: 10px;
        }

        .contact-info {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            margin-top: 10px;
        }

        .contact-info div {
            font-size: 1em;
        }

        .education, .skills, .languages {
            margin-bottom: 20px;
        }

        .work-experience p {
            margin: 5px 0;
        }

        ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        ul li {
            margin: 5px 0;
        }

        .footer {
            text-align: center;
            margin-top: 30px;
            font-size: 0.9em;
            color: #888;
        }

        .split {
            display: flex;
            gap: 20px;
        }

        .left-column {
            flex: 1;
            max-width: 35%;
        }

        .right-column {
            flex: 2;
        }

        .sub-section h3 {
            font-size: 14px;
            margin-bottom: 5px;
        }

        .sub-section p {
            margin: 0;
        }
        button{
    width: 75px;
    height: 40px;
    background-color:lightblue;
    border: none;
    border-radius: 10px;
    cursor: pointer;
}
#download-pdf {
      display: none;
      margin-top: 20px;
    }
    </style>
</head>
<body>
<button id="generate-pdf">Generate PDF</button>
<a id="download-pdf" href="#" download="example.pdf">Download PDF</a>
    <div id="resume">

    <div class="resume">
        <div class="header">
        <?php if ($info): ?>
            <h1><?php echo strtoupper($info[0]['full_name']); ?></h1>
            <?php endif; ?>
        </div>

        <div class="split">
            <div class="left-column">
                <div class="section">
                    <h2>Contact</h2>
                    <?php if ($info): ?>
                    <div class="contact-info">
                        <div><?php echo $info[0]['phone']; ?></div>
                        <div><?php echo $info[0]['email']; ?></div>
                        <div><?php echo $info[0]['country'];?></div>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="section">
                <?php if ($education): ?>
                    <h2>Education</h2>
                    <?php foreach ($education as $edu): ?>
                    <div class="sub-section">
                        <h3><?php echo $edu['title']; ?></h3>
                        <p><?php echo $edu['institution']; ?> </p>
                        <p><?php echo $edu['date']; ?></p>
                        <?php endforeach; ?>
                    </div>
                    <?php endif; ?>

                </div>
               

                <div class="section">
                <?php if ($skills): ?>
                    <h2>Skills</h2>
                   
                    <ul>
                    <?php foreach ($skills as $skill): ?>
                        <li><?php echo $skill['skills']; ?></li>
                        <?php endforeach; ?>

                    </ul>
                    <?php endif; ?>
                </div>

                <div class="section">
                <?php if ($languages): ?>
                    <h2>Languages</h2>
                    <ul>
                    <?php foreach ($languages as $lang): ?>
                        <li style="font-size:10px"><?php echo $lang['lang'] . ' (' . $lang['level'] . ')'; ?></li>


                    <?php endforeach; ?>
                </ul>
                <?php endif; ?>
                </div>

                <div class="section">
                <?php if ($hobbies): ?>

                    <h2>Hobby</h2>
                    <ul>
                    <?php foreach ($hobbies as $hobby): ?>
                        <li style="font-size:10px"><?php echo $hobby['hobby']; ?></li>
                    <?php endforeach; ?>
                </ul>
                <?php endif; ?>

                </div>
                    </div>
       


            <div class="right-column">
                <div class="section">
                <?php if ($summary): ?>
                     <h2>Summary</h2>
                    <p style="font-size:10px"><?php echo $summary[0]['summ']; ?></p> 
                    <?php endif; ?>
                    
                    </div>

                <div class="section">
                <?php if ($experience): ?>
                    <h2>Work Experience</h2>
                    <?php foreach ($experience as $job): ?>

                    <div class="sub-section">
                        <h3><?php echo $job['role_company']; ?></h3>
                        <p><?php echo $job['company_name']; ?> (<?php echo $job['company_location']; ?>)</p>
                        <ul>
                            <li><?php echo $job['experience_description']; ?></li>
                        </ul>
                        <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                </div>
                            


                <div class="section">
                <?php if ($projects): ?>
                    <h2>project</h2>
                    <?php foreach ($projects as $project): ?>

                    <div class="sub-section">
                        <p><?php echo $project['project_title'] . ' - ' . $project['organisation']; ?></p>
                        <ul>
                            <li><?php echo $project['project_description']; ?></li>
                        </ul>
                        <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                </div>



                <div class="section">
                <?php if ($certifications): ?>
                    <h2>Certifications</h2>
                    <?php foreach ($certifications as $cert): ?>

                    <div class="sub-section">
                        <p><?php echo $cert['certification_name'] . ' - ' . $cert['certification_organisation']; ?></p>
                        <ul>
                            <li><?php echo $cert['certification_importance']; ?></li>
                        </ul>
                        <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                </div>



                
                <div class="section">
                <?php if ($volunteering): ?>
                    <h2>volunteering</h2>
                    <?php foreach ($volunteering as $vol): ?>

                    <div class="sub-section">
                        <p><?php echo $vol['role'] . ' - ' . $vol['vulun_organisation']; ?>
                        <ul>
                            <li><?php echo $vol['vulun_description']; ?></li>
                        </ul>
                        <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                </div>








            </div>
        </div>

    </div>


    <script>
    document.getElementById('generate-pdf').addEventListener('click', () => {
      const element = document.getElementById('resume');
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
