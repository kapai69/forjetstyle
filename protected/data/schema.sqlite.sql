CREATE TABLE user (
    id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
    username VARCHAR(128) NOT NULL,
    photo VARCHAR(128) NOT NULL,
    birthday VARCHAR(128) NOT NULL
);

INSERT INTO user (username, photo, birthday) VALUES ('Егоров Иван Леонидович', 'images/egorov.jpg', '1955-10-05');
INSERT INTO user (username, photo, birthday) VALUES ('Пахомов Степан Степанович', 'images/pahomov.jpg', '1966-08-06');
INSERT INTO user (username, photo, birthday) VALUES ('Игорев Сергей Игоревич', 'images/igorev.jpg', '1985-04-22');
INSERT INTO user (username, photo, birthday) VALUES ('Сазонов Иван Борисович', 'images/sazonov.jpg', '1977-02-21');
INSERT INTO user (username, photo, birthday) VALUES ('Большаков Глеб Васильевич', 'images/bolshakov.jpg', '1978-12-03');
INSERT INTO user (username, photo, birthday) VALUES ('Кузьмин Егор Иванович', 'images/kuzmin.jpg', '1958-4-04');
INSERT INTO user (username, photo, birthday) VALUES ('Антонов Иван Львович', 'images/antonov.jpg', '1955-05-15');
INSERT INTO user (username, photo, birthday) VALUES ('Шестаков Валентин Иванович', 'images/shestakov.jpg', '1958-05-18');
INSERT INTO user (username, photo, birthday) VALUES ('Ильин Геннадий Святославович', 'images/ilin.jpg', '1997-12-06');
INSERT INTO user (username, photo, birthday) VALUES ('Абрамов Анатолий Яковлевич', 'images/abramov.jpg', '1979-01-08');
INSERT INTO user (username, photo, birthday) VALUES ('Самойлов Святослав Иванович', 'images/samoilov.jpg', '1966-02-07');
INSERT INTO user (username, photo, birthday) VALUES ('Некрасов Эдуард Юрьевич', 'images/necrasov.jpg', '1958-08-08');
INSERT INTO user (username, photo, birthday) VALUES ('Гурьев Егор Кириллович', 'images/gurev.jpg', '1978-08-15');
INSERT INTO user (username, photo, birthday) VALUES ('Брагин Алексей Иванович', 'images/bragin.jpg', '1988-07-15');
INSERT INTO user (username, photo, birthday) VALUES ('Хохлов Даниил Фёдорович', 'images/hohlov.jpg', '1979-09-16');
