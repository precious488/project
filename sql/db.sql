CREATE TABLE users(
    id INT PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(100) NOT NULL,
    email VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL
    
);
CREATE TABLE cvs( 
   cv_id   INT PRIMARY KEY    ,
   cv_title VARCHAR(255) NOT NULL,
   created_at  DATE,
   user_id INT,
   FOREIGN KEY (user_id) REFERENCES users(id)
);


CREATE TABLE info(
    id INT PRIMARY KEY AUTO_INCREMENT,
    full_name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    phone INT NOT NULL,
    country VARCHAR(255) NOT NULL,
    cv_id  INT,
    FOREIGN KEY (cv_id) REFERENCES cvs(cv_id)
);

CREATE TABLE experience(
    id INT PRIMARY KEY AUTO_INCREMENT,
    role_company VARCHAR(355) NOT NULL,
    company_name VARCHAR(255) NOT NULL,
    company_duration VARCHAR(255) NOT NULL,
    company_location VARCHAR(255) NOT NULL,
    experience_description TEXT(65535) NOT NULL,
    cv_id  INT,
    FOREIGN KEY (cv_id) REFERENCES cvs(cv_id)
);

CREATE TABLE projects(
    id INT PRIMARY KEY AUTO_INCREMENT,
    project_title VARCHAR(255) NOT NULL,
    organisation VARCHAR(255) NOT NULL,
    project_duration VARCHAR(255) NOT NULL,
    project_description TEXT(65535) NOT NULL,
    cv_id  INT,
    FOREIGN KEY (cv_id) REFERENCES cvs(cv_id)
);

CREATE TABLE education(
    id INT PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(255) NOT NULL,
    institution VARCHAR(255) NOT NULL,
    date DATE NOT NULL,
    cv_id  INT,
    FOREIGN KEY (cv_id) REFERENCES cvs(cv_id)
);

 CREATE TABLE certifications(
    id INT PRIMARY KEY AUTO_INCREMENT,
    certification_name VARCHAR(255) NOT NULL,
    certification_organisation VARCHAR(255)  NULL,
    certification_date DATE NOT NULL,
    certification_importance TEXT(65535) NOT NULL,
    cv_id  INT,
    FOREIGN KEY (cv_id) REFERENCES cvs(cv_id)
 );

CREATE TABLE vuluntering(
    id INT PRIMARY KEY AUTO_INCREMENT,
    role VARCHAR(255) NOT NULL,
    vulun_organisation VARCHAR(255) NOT NULL,
    duration VARCHAR(255) NOT NULL,
    vulun_lacation VARCHAR(255) NOT NULL,
    vulun_description TEXT(65535) NOT NULL,
    cv_id  INT,
    FOREIGN KEY (cv_id) REFERENCES cvs(cv_id)
);

CREATE TABLE skills(
    id INT PRIMARY KEY AUTO_INCREMENT,
    skills TEXT(65535) NOT NULL,
    cv_id  INT,
    FOREIGN KEY (cv_id) REFERENCES cvs(cv_id)
);

CREATE TABLE summarry(
    id INT PRIMARY KEY AUTO_INCREMENT,
    summ TEXT(65535) NOT NULL,
    cv_id  INT,
    FOREIGN KEY (cv_id) REFERENCES cvs(cv_id)
);

CREATE TABLE language(
    id INT PRIMARY KEY AUTO_INCREMENT,
    lang VARCHAR(255) NOT NULL,
    level VARCHAR(255) NOT NULL,
    cv_id  INT,
    FOREIGN KEY (cv_id) REFERENCES cvs(cv_id)
    
);
CREATE TABLE hobbies(
    id INT PRIMARY KEY AUTO_INCREMENT,
    hobby VARCHAR(255) NOT NULL,
    cv_id  INT,
    FOREIGN KEY (cv_id) REFERENCES cvs(cv_id)


    
);
