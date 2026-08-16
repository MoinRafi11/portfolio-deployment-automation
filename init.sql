CREATE USER moin WITH PASSWORD 'moin@123';

DROP DATABASE IF EXISTS course_db;
CREATE DATABASE course_db OWNER moin;

\c course_db
SET ROLE moin;

DROP TABLE IF EXISTS projects;


CREATE TABLE IF NOT EXISTS projects(
        id SERIAL PRIMARY KEY,
        project_name VARCHAR(50) NOT NULL,
        technology VARCHAR(50) NOT NULL,
        status VARCHAR(50) NOT NULclient_loop: send disconnect: Connection reset      );

C:\Users\hp>
        TRUNCATE TABLE projects;


INSERT INTO projects(project_name, technology, status) VALUES
 ('Portfolio Website', 'Frontend, Backend, Database', 'Completed'),
 ('VMWARE ESXI LAB', 'VMware, Linux', 'Completed'),
 ('DevOPS Learning', 'Automation', 'In-Progress');
