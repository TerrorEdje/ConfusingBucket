INSERT INTO `user` (`id`, `username`, `password`, `email`) VALUES
(1, 'mickey', 'hoi', 'mickey@weallclimb.com'),
(2, 'frank_de_wit', 'wachtwoord', 'frank@home.nl'),
(3, 'henk_de_vries', 'geenwachtwoord', 'henkdevries@gmail.com');

INSERT INTO `crud_operation` (`type`) VALUES
('create'),
('delete'),
('read'),
('update');

INSERT INTO `page` (`type`) VALUES
('authtest'),
('upload_story');

INSERT INTO `access` (`user_id`, `page`, `crud_operations`, `item_id`, `release`, `end`) VALUES
(1, 'authtest', 'read', NULL, '2014-02-25 00:00:00', '2014-02-27 00:00:00'),
(2, 'upload_story', 'create', NULL, '2013-03-03 00:00:00', '2015-03-03 00:00:00'),
(2, 'upload_story', 'delete', NULL, '2013-03-03 00:00:00', '2015-03-03 00:00:00'),
(2, 'upload_story', 'read', NULL, '2013-03-03 00:00:00', '2015-03-03 00:00:00'),
(2, 'upload_story', 'update', NULL, '2013-03-03 00:00:00', '2015-03-03 00:00:00'),
(3, 'upload_story', 'create', NULL, '2013-03-03 00:00:00', '2015-03-03 00:00:00'),
(3, 'upload_story', 'delete', NULL, '2013-03-03 00:00:00', '2015-03-03 00:00:00'),
(3, 'upload_story', 'read', NULL, '2013-03-03 00:00:00', '2015-03-03 00:00:00'),
(3, 'upload_story', 'update', NULL, '2013-03-03 00:00:00', '2015-03-03 00:00:00');



INSERT INTO `storytype` (`name`, `description`) VALUES
('Afstudeerstage', NULL),
('EPS', NULL),
('Minor', NULL),
('Stage', NULL);

INSERT INTO `student` (`firstname`, `insertion`, `surname`, `email`) VALUES
('Robin', NULL, 'Collard', 'r.collard@student.avans.nl'),
('Thim', NULL, 'Heider', 'thim.heider@gmail.com'),
('Michael ', 'van de', 'Ven', 'michael.vd.ven95@gmail.com'),
('Edwin', NULL, 'Hattink', 'egjhatti@student.avans.nl'),
('Ruud', 'van', 'Daelen', 'r.vandalen@student.avans.nl'),
('Jip', NULL, 'Verhoeven', 'j.verhoeven5@student.avans.nl'),
('Thomas', NULL, 'Voogt', 'chirimorin@gmail.com');

INSERT INTO `study` (`id`, `name`, `description`, `school_id`) VALUES
(1, 'Informatica', NULL, 1),
(2, 'Werktuigbouwkunde', NULL, 1);

INSERT INTO `location` (`id`, `country`, `city`, `streetname`, `number`, `zipcode`, `latitude`, `longitude`) VALUES
(1, 'Norway', 'Oslo', 'Herslebs gate', '1', '0578', 59.9139, 10.7522),
(2, 'Turkey', 'Izmir', 'Milli Kütüphane Cd', '1', '35100', 38.4188, 27.1287),
(3, 'France', 'Tarbes', NULL, NULL, NULL, 43.233, 0.078082);

INSERT INTO `locationtype` (`name`, `description`) VALUES
('Organization', NULL),
('Residence', NULL),
('School', NULL);

INSERT INTO `organization` (`id`, `name`, `description`, `website`) VALUES
(1, 'Philips', NULL, 'philips.nl'),
(2, 'Google', NULL, 'google.com'),
(3, 'HTC', NULL, 'htc.com');

INSERT INTO `school` (`id`, `name`, `website`) VALUES
(1, 'Avans', 'avans.nl');

INSERT INTO `story` (`id`, `type`, `organization_id`, `student_id`, `study_id`, `startdate`, `enddate`, `description`, `schoolyear`) VALUES
(1, 'Afstudeerstage', 1, 1, 2, '2014-03-02', '2014-03-08', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non metus eu est volutpat bibendum tincidunt ac odio. Sed vitae arcu lobortis, egestas nunc eget, sollicitudin lacus. Integer ut laoreet sapien. Integer ac lacinia elit. In tincidunt fringilla nulla, at vehicula lacus hendrerit eu. Curabitur eget consectetur metus, et porta nibh. Donec blandit auctor ipsum, quis ultrices enim sagittis ut. Nullam tortor nunc, varius feugiat porttitor sed, vestibulum quis metus. Vivamus imperdiet urna eget dui molestie pretium. Nulla eget condimentum massa, eget dignissim tortor. Mauris ac luctus nibh, et commodo lectus. Donec quis lectus eros. Ut metus arcu, venenatis ac volutpat id, tincidunt vel est. Suspendisse tincidunt vitae odio nec fringilla. Vestibulum rhoncus fermentum orci nec laoreet. Donec nec felis ac urna posuere accumsan sit amet sit amet sapien.\r\n\r\nMaecenas tristique rhoncus mi quis sagittis. Praesent pellentesque, sapien sed cursus posuere, nulla diam blandit erat, id egestas mauris justo ac dolor. Ut ligula ante, tincidunt at est id, mollis facilisis quam. Quisque vel dolor nec erat adipiscing tempus nec et neque. Donec non volutpat tortor, tempor luctus elit. Fusce tempus posuere mi, consectetur interdum urna fermentum quis. Etiam vulputate nisi at augue accumsan fermentum. Quisque tincidunt eget metus in laoreet. Mauris in viverra dolor, et posuere massa.', 4),
(2, 'EPS', 3, 2, 1, '2014-02-09', '2014-03-27', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non metus eu est volutpat bibendum tincidunt ac odio. Sed vitae arcu lobortis, egestas nunc eget, sollicitudin lacus. Integer ut laoreet sapien. Integer ac lacinia elit. In tincidunt fringilla nulla, at vehicula lacus hendrerit eu. Curabitur eget consectetur metus, et porta nibh. Donec blandit auctor ipsum, quis ultrices enim sagittis ut. Nullam tortor nunc, varius feugiat porttitor sed, vestibulum quis metus. Vivamus imperdiet urna eget dui molestie pretium. Nulla eget condimentum massa, eget dignissim tortor. Mauris ac luctus nibh, et commodo lectus. Donec quis lectus eros. Ut metus arcu, venenatis ac volutpat id, tincidunt vel est. Suspendisse tincidunt vitae odio nec fringilla. Vestibulum rhoncus fermentum orci nec laoreet. Donec nec felis ac urna posuere accumsan sit amet sit amet sapien.\r\n\r\nMaecenas tristique rhoncus mi quis sagittis. Praesent pellentesque, sapien sed cursus posuere, nulla diam blandit erat, id egestas mauris justo ac dolor. Ut ligula ante, tincidunt at est id, mollis facilisis quam. Quisque vel dolor nec erat adipiscing tempus nec et neque. Donec non volutpat tortor, tempor luctus elit. Fusce tempus posuere mi, consectetur interdum urna fermentum quis. Etiam vulputate nisi at augue accumsan fermentum. Quisque tincidunt eget metus in laoreet. Mauris in viverra dolor, et posuere massa.', 3),
(3, 'Stage', 2, 3, 1, '2013-11-11', '2014-03-25', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non metus eu est volutpat bibendum tincidunt ac odio. Sed vitae arcu lobortis, egestas nunc eget, sollicitudin lacus. Integer ut laoreet sapien. Integer ac lacinia elit. In tincidunt fringilla nulla, at vehicula lacus hendrerit eu. Curabitur eget consectetur metus, et porta nibh. Donec blandit auctor ipsum, quis ultrices enim sagittis ut. Nullam tortor nunc, varius feugiat porttitor sed, vestibulum quis metus. Vivamus imperdiet urna eget dui molestie pretium. Nulla eget condimentum massa, eget dignissim tortor. Mauris ac luctus nibh, et commodo lectus. Donec quis lectus eros. Ut metus arcu, venenatis ac volutpat id, tincidunt vel est. Suspendisse tincidunt vitae odio nec fringilla. Vestibulum rhoncus fermentum orci nec laoreet. Donec nec felis ac urna posuere accumsan sit amet sit amet sapien.\r\n\r\nMaecenas tristique rhoncus mi quis sagittis. Praesent pellentesque, sapien sed cursus posuere, nulla diam blandit erat, id egestas mauris justo ac dolor. Ut ligula ante, tincidunt at est id, mollis facilisis quam. Quisque vel dolor nec erat adipiscing tempus nec et neque. Donec non volutpat tortor, tempor luctus elit. Fusce tempus posuere mi, consectetur interdum urna fermentum quis. Etiam vulputate nisi at augue accumsan fermentum. Quisque tincidunt eget metus in laoreet. Mauris in viverra dolor, et posuere massa.', 3);


