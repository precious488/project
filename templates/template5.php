<?php include "fetch.php"?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>
    
    <style>
        body {
    font-family: Arial, sans-serif;
    line-height: 1.6;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
}

#resume {
    max-width: 700px;
    margin: 20px auto;
    padding: 20px;
    background: #fff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    border: 1px solid #e6e6e6;
}


header {
    text-align: center;
    border-bottom: 2px solid #000;
    padding-bottom: 10px;
    margin-bottom: 20px;
    display: flex;
    justify-content: space-around;
}
.flex{
    display: flex;
    justify-content: flex-start;
    gap: 100px;

}

header h1 {
    font-size: 1rem;
    margin: 0;
    text-transform: uppercase;
    letter-spacing: 2px;
}

header h2 {
    font-size: 0.75rem;
    font-weight: normal;
    text-transform: uppercase;
    color: #888;
    margin: 5px 0 15px;
}

.contact-info p {
    margin: 3px 0;
    font-size: 14px;
    color: #555;
}

/* Section Titles */
section h3 {
    font-size: 14px;
    text-transform: uppercase;
    border-bottom: 1px solid #ddd;
    padding-bottom: 5px;
    margin-bottom: 10px;
}

/* About Me */
.about-me {
    margin-bottom: 20px;
}

.about-me p {
    font-size: 10px;
    color: #555;
}

/* Experience Section */
.experience .job {
    margin-bottom: 20px;
}

.experience .year {
    font-size: 10px;
    color: #555;
    font-weight: bold;
}

.experience h4 {
    font-size: 14px;
    margin: 5px 0;
    text-transform: uppercase;
}

/* Education Section */
.education p {
    font-size: 10px;
    color: #555;
    margin: 5px 0;
}
p{
    font-size:10px;
}

/* Expertise Section */
.expertise ul {
    list-style-type: none;
    padding: 0;
}

.expertise ul li {
    font-size: 10px;
    margin-bottom: 5px;
}

/* Achievements Section */
.achievements p {
    font-size: 10px;
    color: #555;
}

/* References Section */
.references p {
    font-size: 10px;
    color: #555;
    margin-bottom: 15px;
}
.split {
  display: flex;
  gap: 100px;
}
button{
    width: 75px;
    height: 40px;
    background-color:lightblue;
    border: none;
    border-radius: 10px;
    cursor: pointer;
}

.left-column {
  flex: 1;
  max-width: 35%;
        }

        .right-column {
            flex: 2;
        }
        #download-pdf {
      display: none;
      margin-top: 20px;
    }
    </style>
    <link rel="stylesheet" href="styles.css">
</head>


<body>
<button id="generate-pdf">Generate PDF</button>
<a id="download-pdf" href="#" download="example.pdf">Download PDF</a>

    <div id="resume">
        
    <?php if ($info): ?>
        <header>
            <div>
            <h1><?php echo strtoupper($info[0]['full_name']); ?></h1>
           
        </div>
            <div class="contact-info">
                <p><?php echo $info[0]['country']; ?> </p>
                <p><?php echo $info[0]['phone']; ?></p>
                <p><?php echo $info[0]['email']; ?></p>
                
            </div>
            
        </header>
        <?php endif; ?>

        <section class="about-me">
        <?php if ($summary): ?>
            <h3>ABOUT ME</h3>
            <p><?php echo $summary[0]['summ']; ?></p>
            <?php endif; ?>
        </section>

   
        <section class="experience">
        <?php if ($experience): ?>
            <h3>EXPERIENCE</h3>
            <?php foreach ($experience as $job): ?>

            <div class="job">
                <p style="font-size:14px"><?php echo $job['role_company']; ?></p>
                <p style="font-size:14px"><?php echo $job['company_name']; ?></p>
                <p style="font-size:10px">
                <?php echo $job['experience_description']; ?>
                </p>
            </div>
            <?php endforeach; ?>
            <?php endif; ?>
        </section>


        <section class="experience">
        <?php if ($certifications): ?>
            <h3>CERTIFICATIONS</h3>
            <?php foreach ($certifications as $cert): ?>

            <div class="job">
                <h style="font-size:14px"><?php echo $cert['certification_name'] . ' - ' . $cert['certification_organisation']; ?></h>
                <p style="font-size:10px">
                <?php echo $cert['certification_importance']; ?>
                </p>
            </div>
            <?php endforeach; ?>
            <?php endif; ?>
        </section>



        <section class="experience">
        <?php if ($volunteering): ?>
            <h3>VOLUNTEERING</h3>
            <?php foreach ($volunteering as $vol): ?>

            <div class="job">
                <h style="font-size:14px"><?php echo $vol['role'] . ' - ' . $vol['vulun_organisation']; ?></h>
                <p style="font-size:10px">
                <?php echo $vol['vulun_description']; ?>
                </p >
            </div>
            <?php endforeach; ?>
            <?php endif; ?>
        </section>



        <div class="split">
            <div class="left">
        <section class="">


        <div class="education">
        <?php if ($education): ?>
            <h3>EDUCATION</h3>
            <?php foreach ($education as $edu): ?>
            <p style="font-size:10px"><strong><?php echo $edu['date']; ?></strong>-<?php echo $edu['title']; ?></p>
                 <p style="font-size:14px"> <?php echo $edu['institution']; ?> </p>
                 <?php endforeach; ?>
            
            <?php endif; ?>
            
        </div>


        <div class="expertise">
        <?php if ($skills): ?>
            <h3>SKILLS</h3>
            <ul>
                        <?php foreach ($skills as $skill): ?>
                            <li style="font-size:10px;"><?php echo $skill['skills']; ?></li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
        </div>

        <div class="achievements">
        <?php if ($languages): ?>
            <h3>LANGUAGE</h3>
            <?php foreach ($languages as $lang): ?>
            <p><strong><?php echo $lang['lang']?></strong></p>
            <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </section>
    </div>
    <div class="right">

<section class="">

        <section class="experience">
        <?php if ($projects): ?>
            <h3>PROJECTS</h3>
            <?php foreach ($projects as $project): ?>

            <div class="job">
                <h style="font-size:14px"> <?php echo $project['project_title'] . ' - ' . $project['organisation']; ?></h>
                <p style="font-size:10px">
                <?php echo $project['project_description']; ?>
                </p>
            </div>
            <?php endforeach; ?>
            <?php endif; ?>
        </section>

 

            <div class="expertise">
            <?php if ($hobbies): ?>
            <h3>HOBBIES</h3>
            <ul>
            <?php foreach ($hobbies as $hobby): ?>
                            <li style="font-size:10px;"><li><?php echo $hobby['hobby']; ?></li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
        </div>
    </section>
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
