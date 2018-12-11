CREATE TABLE categories (
  id  serial PRIMARY key NOT NULL,
  title char(255) NOT NULL,
  article text NOT NULL,
  image char(255) NOT NULL,
  url char(255) NOT NULL,
 updated_at date NOT NULL,
  created_at date NOT NULL,
  slider char(255) DEFAULT NULL
);

INSERT INTO categories (id, title, article, image, url, updated_at, created_at, slider) VALUES
(1, 'Strings', 'Veggies es bonus vobis, proinde vos postulo essum magis kohlrabi welsh onion daikon amaranth.', '1.jpg', 'strings', '2017-12-04 17:48:24', '2017-09-17 00:00:00', '2017.12.04.17.48.24-guitar-2301723-600-400.jpg'),
(2, 'Wind', 'Veggies es bonus vobis, proinde vos postulo essum magis kohlrabi welsh onion daikon amaranth.', '2.jpg', 'wind', '2017-12-04 17:48:59', '2017-09-17 00:00:00', '2017.12.04.17.48.59-saxophone-music-gold-gloss-45243-1920-800.jpg'),
(3, 'Keyboards', 'Veggies es bonus vobis, proinde vos postulo essum magis kohlrabi welsh onion daikon amaranth.', '3.jpg', 'keyboards', '2017-12-04 18:31:19', '2017-09-17 00:00:00', '2017.12.04.18.31.19-piano-2171007.jpg');

CREATE TABLE contents (
  id  serial PRIMARY key NOT NULL,
  menu_id int NOT NULL,
  title char(255) NOT NULL,
  article text NOT NULL,
  updated_at date NOT NULL,
  created_at date NOT NULL
);

INSERT INTO contents (id, menu_id, title, article, updated_at, created_at) VALUES
(1, 2, 'Our company services', 'My article demo for services page.', '2017-10-02 00:00:00', '2017-10-02 00:00:00'),
(2, 2, 'Special Services', 'Maecenas ac augue at erat hendrerit dictum. Praesent porta, purus eget sagittis imperdiet, nulla mi ullamcorper metus, id hendrerit metus diam vitae est. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Lorem ipsum dolor sit amet, consectetur adipiscing elit.', '2017-10-02 00:00:00', '2017-10-02 00:00:00');

CREATE TABLE menus (
  id  serial PRIMARY key NOT NULL,
  link char(255) NOT NULL,
  url char(255) NOT NULL,
  title char(255) NOT NULL,
  updated_at date NOT NULL,
  created_at date NOT NULL
);

INSERT INTO menus (id, link, url, title, updated_at, created_at) VALUES
(2, 'services', 'services', 'Our Services', '2017-09-28 00:00:00', '2017-09-28 00:00:00');

CREATE TABLE orders (
  id  serial PRIMARY key NOT NULL,
  user_id int NOT NULL,
  data text NOT NULL,
  total decimal(8,2) NOT NULL,
  updated_at date NOT NULL,
  created_at date NOT NULL
);

CREATE TABLE products (
  id  serial PRIMARY key NOT NULL,
  categorie_id int NOT NULL,
  title char(255) NOT NULL,
  description_grid text NOT NULL,
  url char(255) NOT NULL,
  image char(255) NOT NULL,
  price decimal(8,2) NOT NULL,
  updated_at date NOT NULL,
  created_at date NOT NULL,
  description_list text,
  discount char(255) DEFAULT NULL,
  image_big char(255) DEFAULT NULL
);

INSERT INTO products (id, categorie_id, title, description_grid, url, image, price, updated_at, created_at, description_list, discount, image_big) VALUES
(1, 1, 'violin 1728891', 'Contrary to popular belief, Lorem Ipsum is not simply random text.', 'violin-1728891', '2017.12.04.19.44.52-e-violin-1728891.png', '10000.00', '2017-12-04 22:50:12', '2017-12-04 00:00:00', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '20%', '2017.12.04.19.53.31-e-violin-17288912.png'),
(2, 1, 'violin 1279043', 'Nullam rhoncus nisi at interdum posuere.', 'violin-1279043', '2017.12.04.20.55.12-violin-12790431.jpg', '50000.00', '2017-12-04 21:13:51', '2017-12-04 20:55:12', 'In odio nisl, bibendum at neque eu, ultrices tempus est. Curabitur varius nunc viverra metus eleifend, eu blandit justo dapibus. Pellentesque accumsan et magna quis tincidunt. Praesent et gravida lacus. Quisque euismod gravida euismod. Sed ligula quam, cursus a posuere lobortis, sodales a odio. In elementum mauris sed metus rhoncus mattis. Nam fermentum risus sit amet tristique viverra. Nam bibendum id sapien eu mattis.', NULL, '2017.12.04.20.55.12-violin-12790432.jpg'),
(3, 1, 'electric guitar 1669233', 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...', 'electric-guitar-1669233', '2017.12.04.22.48.30-electric-guitar-16692331.png', '8500.00', '2017-12-04 22:48:30', '2017-12-04 22:48:30', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using Content here, content here, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for lorem ipsum will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', NULL, '2017.12.04.22.48.30-electric-guitar-16692330.png'),
(4, 1, 'harp 195636', 'Lorem ipsum dolor sit amet consectetur adipisicing elit.', 'harp-195636', '2017.12.04.23.58.25-harp-1956360.jpg', '34000.00', '2017-12-04 23:58:25', '2017-12-04 23:58:25', 'Fugit illum necessitatibus error et excepturi fugiat, officiis earum doloribus tenetur ea ipsa eligendi molestias corporis cum consectetur ex similique nam nemo!', '15%', '2017.12.04.23.58.25-harp-1956361.jpg'),
(5, 2, 'flute 885811', 'Temporibus possimus aut laboriosam eveniet.', 'flute-885811', '2017.12.05.00.19.42-flute-8858111.jpg', '20.00', '2017-12-05 00:19:42', '2017-12-05 00:19:42', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus possimus aut laboriosam eveniet. Numquam quaerat ipsum recusandae quae et architecto sapiente obcaecati voluptatibus commodi tenetur, similique cum quo, accusamus cumque.', NULL, '2017.12.05.00.19.42-flute-8858110.jpg'),
(6, 2, 'clarinet 1870572', 'Lorem ipsum dolor sit amet consectetur adipisicing elit.', 'clarinet-1870572', '2017.12.05.00.36.19-clarinet-18705721.png', '800.00', '2017-12-05 00:36:19', '2017-12-05 00:36:19', 'Earum explicabo qui, doloremque est, doloribus voluptate reiciendis veniam sed atque aperiam quaerat eum omnis fugiat eligendi voluptates pariatur sint sapiente dolorem.', '15%', '2017.12.05.00.36.19-clarinet-18705720.png'),
(7, 2, 'harmonica 956478', 'Fuga facere error ea quam autem nisi nihil blanditiis eaque atque.&nbsp;', 'harmonica-956478', '2017.12.05.00.42.47-harmonica-9564781.jpg', '100.00', '2017-12-05 00:42:47', '2017-12-05 00:42:47', 'Quo ipsa voluptas sunt, facilis, molestias dolore consequuntur saepe, corrupti mollitia esse recusandae! Quos ipsa voluptates cupiditate, consequuntur laborum accusantium aut! Reprehenderit!', '15%', '2017.12.05.00.42.47-harmonica-9564780.jpg'),
(8, 2, 'shofar', 'libero deserunt numquam natus illum aspernatur eligendi ullam voluptatem est facilis dolorum harum!', 'shofar', '2017.12.05.00.52.15-sssccc.com_photo_01187341.jpg', '200000.00', '2017-12-05 00:52:15', '2017-12-05 00:52:15', 'Nesciunt, fuga natus magni odio, beatae sunt culpa esse quidem nostrum fugiat quae asperiores perspiciatis? Nisi deserunt alias nemo neque numquam est?', NULL, '2017.12.05.00.52.15-sssccc.com_photo_01187340.jpg'),
(9, 3, 'organ church', 'Optio pariatur qui vero nam quam iusto quasi debitis quisquam provident ratione ducimus dignissimos delectus atque modi.', 'organ-church', '2017.12.05.01.05.57-organ-church-music-3265011.jpg', '500000.00', '2017-12-05 01:05:57', '2017-12-05 01:00:48', 'Velit aliquam fuga quibusdam, modi suscipit, maxime omnis iure quisquam praesentium esse commodi voluptatem facilis hic nemo ratione eveniet culpa? Delectus, sit.', '50%', '2017.12.05.01.05.57-organ-church-music-3265010.jpg'),
(10, 3, 'piano 2173655', 'porro repellendus rerum itaque ex totam maiores quas quia saepe cumque nisi in eveniet vero repudiandae pariatur.', 'piano-2173655', '2017.12.05.01.05.32-piano-21736551.jpg', '33500.00', '2017-12-05 01:05:32', '2017-12-05 01:05:32', 'Possimus, earum quod culpa cum quia, accusamus fuga nobis delectus, reprehenderit cumque sit doloribus aspernatur. Omnis, accusamus tempora nostrum quidem perferendis beatae!', '15%', '2017.12.05.01.05.32-piano-21736550.jpg'),
(11, 3, 'laptop 2598571', 'Quia nobis est dolorum, autem quo amet corrupti.', 'laptop-2598571', '2017.12.05.01.10.36-laptop-25985711.jpg', '10000.00', '2017-12-05 01:10:36', '2017-12-05 01:10:21', 'Mollitia maxime iusto incidunt odio, tempora minima modi amet ducimus placeat illo. Ipsam tempore accusantium quam voluptatem? Cupiditate iusto at dignissimos veniam.', NULL, '2017.12.05.01.10.36-laptop-25985710.jpg'),
(12, 3, 'Organic Bunk', 'expedita quibusdam ex quasi molestiae consequatur quae.', 'organic-bunk', '2017.12.05.01.17.42-notes-12845031.jpg', '23000.00', '2017-12-05 01:17:42', '2017-12-05 01:17:42', 'Dicta aspernatur consectetur adipisci nesciunt corrupti architecto ratione quidem earum alias, est repudiandae, cumque, ipsa dolore? Voluptatum consequuntur accusantium vel ea expedita!', NULL, '2017.12.05.01.17.42-notes-12845030.jpg');


CREATE TABLE users (
  id  serial PRIMARY key NOT NULL,
  name char(255) NOT NULL,
  email char(255) NOT NULL,
  password char(255) NOT NULL,
  updated_at date NOT NULL,
  created_at date NOT NULL
);

INSERT INTO users (id, name, email, password, updated_at, created_at) VALUES
(1, '-', '-', '-', '2017-09-25 00:00:00', '2017-09-25 00:00:00'),
(2, '--', '--', '--', '2017-09-25 00:00:00', '2017-09-25 00:00:00'),
(3, 'Admin', 'Admin@gmail.com', '$2y$10$qRZlGTJmRXz/ikqhwJk0yuJgsPJNV1ahwIIZepNdvjgZ7qq5N49ka', '2017-09-25 00:00:00', '2017-09-25 00:00:00');

-- (3, 'Admin', 'Admin@gmail.com', '123456', '2017-09-25 00:00:00', '2017-09-25 00:00:00');

CREATE TABLE users_roles (
  uid  int NOT NULL,
  role int NOT NULL
);

INSERT INTO users_roles (uid, role) VALUES(3,3);

ALTER SEQUENCE users_id_seq RESTART WITH 4;
ALTER SEQUENCE products_id_seq RESTART WITH 13;
ALTER SEQUENCE menus_id_seq RESTART WITH 3;
ALTER SEQUENCE contents_id_seq RESTART WITH 3;
ALTER SEQUENCE categories_id_seq RESTART WITH 4;