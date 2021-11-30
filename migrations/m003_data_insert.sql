INSERT INTO types(type) 
VALUES 
    ('supplier'),
    ('client');

INSERT INTO companies(name, country, VAT_number, type_id)
VALUES
    ('Raviga', 'United States', 'US456 654 342', 1),
    ('Dunder Mifflin ', 'United States', 'US678 765 765', 1),
    ('Jouets Jean-Michel', 'France', 'FR 677 544 000', 1),
    ('Bob Vance Refrig', 'United States', 'US456 654 687', 1),
    ('Belgalol', 'Belgique', 'BE0876 654 665', 2),
    ('Pierre Cailloux', 'France', 'FR 678 908 654', 2),
    ('Proximdr', 'Belgique', 'BE0876 985 665', 2),
    ('Electric Power', 'Italie', 'IT 256 852 542', 2),
    ('Mutiny', 'Spain', 'ES664 321 765', 2),
    ('Hooli', 'France', 'FR 679 541 321', 1),
    ('Phoque Off', 'France', 'FR 677 545 789', 1),
    ('Pied Piper', 'Belgique', 'BE0876 598 732', 2);

INSERT INTO peoples(firstname, lastname, email, phone_number, company_id)
VALUES
    ('Peter', 'Gregory', 'peter.gregory@raviga.com', '555-4567', 1),
    ('Dwight', 'Schrute', 'dwight.schruteaddmfl.com', '555-9859', 2),
    ('Cameron', 'Howe', 'cam.howe@mutiny.net', '555-7896', 3),
    ('Gavin', 'Belson', 'gavin@hooli.com', '555-4213', 6),
    ('Jian', 'Yang', 'jian.yangaphoque.off', '555-4567', 11),
    ('Bertram', 'Gilfoyle', 'gilfoyle@piedpiper.com', '555-0987', 12);


INSERT INTO invoices(number, date, company_id, people_id)
VALUES 
    ('F20190404-004', '2019-04-04', 3, 3),
    ('F20190404-003', '2019-04-04', 2, 2),
    ('F20190404-002', '2019-04-04', 6, 4),
    ('F20190404-001', '2019-04-04', 12, 6),
    ('F20190403-654', '2019-04-03', 1, 1),
    ('F20180414-008', '2018-04-14', 2, 2),
    ('F20180408-002', '2018-04-08', 6, 4),
    ('F20180407-001', '2018-04-07', 12, 6),
    ('F20180403-654', '2018-04-03', 1, 1),
    ('F20180404-004', '2018-04-04', 3, 3),
    ('F20170404-003', '2017-04-04', 2, 2),
    ('F20170524-002', '2017-02-04', 6, 4),
    ('F20170404-001', '2017-04-04', 12, 6),
    ('F20170403-654', '2017-04-03', 1, 1);


 







