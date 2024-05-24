create database test;
use test;


CREATE TABLE Students (
    StudentID INT PRIMARY KEY IDENTITY(1,1) NOT NULL,
    FirstName NVARCHAR(50) NOT NULL,
    LastName NVARCHAR(50) NOT NULL,
    ClassID INT NOT NULL,
    BirthDate DATE NOT NULL,
    CONSTRAINT FK_Class FOREIGN KEY (ClassID) REFERENCES Classes(ClassID)
);

CREATE TABLE Classes (
    ClassID INT PRIMARY KEY IDENTITY(1,1) NOT NULL,
    ClassName NVARCHAR(100) NOT NULL,
    TeacherID INT NOT NULL,
    CONSTRAINT FK_Teacher FOREIGN KEY (TeacherID) REFERENCES Teachers(TeacherID)
);

CREATE TABLE Teachers (
    TeacherID INT PRIMARY KEY IDENTITY(1,1) NOT NULL,
    FirstName NVARCHAR(50) NOT NULL,
    LastName NVARCHAR(50) NOT NULL,
    Subject NVARCHAR(100)
);


--INSERT VALUES

INSERT INTO classes (ClassName, TeacherID)
VALUES 
    (N'Lớp 1', 1), 
    (N'Lớp 2', 2), 
    (N'Lớp 3', 3), 
    (N'Lớp 4', 1), 
    (N'Lớp 5', 2);


INSERT INTO Students(FirstName, LastName, ClassID, BirthDate)
VALUES
    (N'Nguyễn', N'Văn Hoàng', 6, '2005-01-15'),
    (N'Trần', N'Thị Bình', 6, '2006-03-20'),
    (N'Lê', N'Minh Chiến', 2, '2005-05-10'), 
    (N'Phạm', N'Hồng đức', 2, '2006-08-05'),
    (N'Hoàng', N'Thị Loan', 3, '2005-09-12'), 
    (N'Trần', N'Văn Bình', 3, '2005-11-18'),
    (N'Nguyễn', N'Thị Giang', 4, '2006-02-25'), 
    (N'Phạm', N'Văn Huỳnh', 4, '2005-04-30'),
    (N'Vũ', N'Thị Loan', 5, '2005-07-22'), 
    (N'Nguyễn', N'Văn Khải', 5, '2006-10-08');

INSERT INTO Teachers(FirstName, LastName, Subject)
VALUES
    (N'Nguyễn', N'Thị Minh Anh', N'Toán'),
    (N'Trần', N'Văn Nghĩa', N'Văn'),
    (N'Lê', N'Thị Trang', N'Sinh học');



-- 3. Write a SQL query to display a list of all students with class name and teacher in charge.
select std.*, cl.ClassName, t.TeacherID from Students std 
inner join Classes cl on std.ClassID = cl.ClassID
inner join Teachers t on cl.TeacherID = t.TeacherID;

-- 4. Write a SQL query to display students with birth dates from 2000 onwards.
select * from Students where year(BirthDate) >= 2000;

-- 5. Write an SQL query to display all students with class name and teacher in charge, sorted by student name.
select std.FirstName, std.LastName, cl.ClassName, t.TeacherID from Students std
inner join Classes cl on std.ClassID = cl.ClassID
inner join Teachers t on cl.TeacherID = t.TeacherID
order by std.FirstName, cl.ClassName, t.TeacherID, std.LastName;

-- 6. Update the name of the student whose StudentID is 3 to "John Doe".
update Students
set FirstName = 'John', LastName = 'Doe'
where StudentID = 5;
select * from Students

-- 7. Delete students whose StudentID is 7.
select * from Students;
delete from Students where StudentID = 7;

-- 8. Create a stored procedure named GetStudentsByClassAndSubject that takes ClassID and Subject, and returns a list of students belonging to that class and subject.
with GetStudentsByClassAndSubject as (select cl.ClassID, t.Subject from Classes cl inner join Teachers t on cl.TeacherID = t.TeacherID where t.Subject = N'Toán')
select * from Students where ClassID in (select cl.ClassID from GetStudentsByClassAndSubject cl);

-- 9. Create a view named StudentsWithClassAndTeacher that displays information about students along with the class name and teacher in charge.
create view StudentsWithClassAndTeacher
as
select std.*, cl.ClassName, t.TeacherID from Students std 
inner join Classes cl on std.ClassID = cl.ClassID
inner join Teachers t on cl.TeacherID = t.TeacherID;
select * from StudentsWithClassAndTeacher;