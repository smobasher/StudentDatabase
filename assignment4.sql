----------Salma Mobasher
----------8120214
----------Assignment 4
CREATE TABLE `course` (
  `courseID` int(11) PRIMARY KEY,
  `courseName` text NOT NULL,
  `courseHours` int(11) NOT NULL
);


CREATE TABLE `coursegrade` (
  `studentID` int(11) NOT NULL,
  `courseID` int(11) NOT NULL,
  `courseGrade` int(11) NOT NULL,
   FOREIGN KEY (`studentID`) REFERENCES `student` (`studentID`),
   FOREIGN KEY (`courseID`) REFERENCES `course` (`courseID`)
);

CREATE TABLE `student` (
  `studentID` int(11) PRIMARY KEY,
  `firstName` text NOT NULL,
  `lastName` text NOT NULL,
  `numberOfCourses` int(11) NOT NULL
);


CREATE TABLE `assignment44` (
  `courseName` text NOT NULL,
  `courseGrade` text NOT NULL,
  `studentID` int(11) PRIMARY KEY
);
----------------------Values for a44 table--------------------------

INSERT INTO assignment44 (courseName, courseGrade, studentID)
VALUES('French','55','865456');

INSERT INTO assignment44 (courseName, courseGrade, studentID)
VALUES('Music','62','125856');
----------------------Values for course table--------------------------

INSERT INTO course (courseID, courseName, courseHours)
VALUES('1234','Math','62');

INSERT INTO course (courseID, courseName, courseHours)
VALUES('1111','Science','80');

INSERT INTO course (courseID, courseName, courseHours)
VALUES('2312','Geography','20');

INSERT INTO course (courseID, courseName, courseHours)
VALUES('3333','Art','30');

INSERT INTO course (courseID, courseName, courseHours)
VALUES('8888','Programming','55');

----------------------Values for student table-------------------------

INSERT INTO student (studentID, firstName, lastName, numberOfCourses)
VALUES('987654', 'Mary', 'Plower', 2);

INSERT INTO student (studentID, firstName, lastName, numberOfCourses)
VALUES('656565', 'Sally', 'Deen', 4);

INSERT INTO student (studentID, firstName, lastName, numberOfCourses)
VALUES('185654', 'George', 'Clown', 3);

INSERT INTO student (studentID, firstName, lastName, numberOfCourses)
VALUES('898989', 'Clark', 'Tree', 2);

INSERT INTO student (studentID, firstName, lastName, numberOfCourses)
VALUES('998999', 'Karry', 'Box', 0);
-----------------------Values for coursegrade table-------------------
INSERT INTO courseGrade (studentID, courseID, courseGrade)
VALUES('898989', '8888', 89);

INSERT INTO courseGrade (studentID, courseID, courseGrade)
VALUES('898989', '2312', 62);

INSERT INTO courseGrade (studentID, courseID, courseGrade)
VALUES('185654', '1234', 77);

INSERT INTO courseGrade (studentID, courseID, courseGrade)
VALUES('185654', '2312', 86);

INSERT INTO courseGrade (studentID, courseID, courseGrade)
VALUES('987654', '1111', 94);

INSERT INTO courseGrade (studentID, courseID, courseGrade)
VALUES('987654', '3333', 65);

INSERT INTO courseGrade (studentID, courseID, courseGrade)
VALUES('185654', '1111', 62);

INSERT INTO courseGrade (studentID, courseID, courseGrade)
VALUES('656565', '1111', 71);

INSERT INTO courseGrade (studentID, courseID, courseGrade)
VALUES('656565', '2312', 52);

INSERT INTO courseGrade (studentID, courseID, courseGrade)
VALUES('656565', '1234', 84);

INSERT INTO courseGrade (studentID, courseID, courseGrade)
VALUES('656565', '3333', 92);
