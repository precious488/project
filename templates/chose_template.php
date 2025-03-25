
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>template library</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            flex-direction: column;
        }
        .image-links {
            display: flex;
            align-items: center;
            gap: 20px;
            flex-wrap: wrap;
            background-color: white;
            width: 80%;
            justify-content: center;
            border-radius: 10px;
            box-shadow: 10px 10px 5px 5px lightblue;
        }
        .image-links a {
            text-decoration: none;
        }
        .image-links img {
            max-width: 400px;
            border-radius: 8px;
            transition: transform 0.3s, box-shadow 0.3s;
        }
        .image-links img:hover {
            transform: scale(1.1);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            
        }
        .image-links div{
           
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            margin: 10px;
            
            

        }
        .image-links div{
            text-align: center;
        }
        .image-links div img{
         
            height: 250px;
            width: 200px;
            /* margin: 10px; */
        }
    </style>
</head>
<body>
    <h1>Choose your template</h1>
    <div class="image-links">
        <div>
                    <a href="template2.php" target="_blank">
            <img src="../landing/images/11.jpg" alt="Placeholder Image 1">
            <h4>proffesional template</h4>
        </a>
    </div>
                <div>
                    <a href="template4.php" target="_blank">
            <img src="../landing/images/33.jpg" alt="Placeholder Image 1">
            <h4>mordern template</h4>

            </a>
            </div>
        <div>
            <a href="template3.php" target="_blank">
        <img src="../landing/images/33.jpg" alt="Placeholder Image 1">
        </a>
        </div>

        
        <div>
            <a href="template1.php" target="_blank">
        <img src="../landing/images/11.jpg" alt="Placeholder Image 1">
        </a>
        </div>
        <div>
            <a href="template5.php" target="_blank">
        <img src="../landing/images/5.jpg" alt="Placeholder Image 1">
        </a>
        </div>
    
    

    </div>
    
        

     
    </div>
</body>
</html>

</body>
</html>