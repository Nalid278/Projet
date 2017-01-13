

--
-- TOC entry 186 (class 1259 OID 50836)
-- Name: gateau_commande; Type: TABLE; Schema: public; Owner: -; Tablespace: 
--

CREATE TABLE gateau_commande (
    id_gt_commande integer NOT NULL,
    id_gt_gateau integer NOT NULL
);


--
-- TOC entry 173 (class 1259 OID 50762)
-- Name: gt_admin; Type: TABLE; Schema: public; Owner: -; Tablespace: 
--

CREATE TABLE gt_admin (
    id_gt_admin integer NOT NULL,
    login text NOT NULL,
    password text NOT NULL
);


--
-- TOC entry 172 (class 1259 OID 50760)
-- Name: gt_admin_id_gt_admin_seq; Type: SEQUENCE; Schema: public; Owner: -
--

CREATE SEQUENCE gt_admin_id_gt_admin_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


--
-- TOC entry 2054 (class 0 OID 0)
-- Dependencies: 172
-- Name: gt_admin_id_gt_admin_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: -
--

ALTER SEQUENCE gt_admin_id_gt_admin_seq OWNED BY gt_admin.id_gt_admin;


--
-- TOC entry 185 (class 1259 OID 50827)
-- Name: gt_client; Type: TABLE; Schema: public; Owner: -; Tablespace: 
--

CREATE TABLE gt_client (
    id_gt_client integer NOT NULL,
    nom_client text NOT NULL,
    prenom_client text NOT NULL,
    email_client text NOT NULL,
    telephone text NOT NULL,
    adresse_client text NOT NULL,
    numero text NOT NULL,
    codepostal text NOT NULL,
    localite text NOT NULL
);


--
-- TOC entry 184 (class 1259 OID 50825)
-- Name: gt_client_id_gt_client_seq; Type: SEQUENCE; Schema: public; Owner: -
--

CREATE SEQUENCE gt_client_id_gt_client_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


--
-- TOC entry 2055 (class 0 OID 0)
-- Dependencies: 184
-- Name: gt_client_id_gt_client_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: -
--

ALTER SEQUENCE gt_client_id_gt_client_seq OWNED BY gt_client.id_gt_client;


--
-- TOC entry 175 (class 1259 OID 50773)
-- Name: gt_commande; Type: TABLE; Schema: public; Owner: -; Tablespace: 
--

CREATE TABLE gt_commande (
    id_gt_commande integer NOT NULL,
    id_gt_presentoir integer,
    id_gt_client integer NOT NULL,
    confirme smallint NOT NULL,
    date_commande date NOT NULL
);


--
-- TOC entry 174 (class 1259 OID 50771)
-- Name: gt_commande_id_gt_commande_seq; Type: SEQUENCE; Schema: public; Owner: -
--

CREATE SEQUENCE gt_commande_id_gt_commande_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


--
-- TOC entry 2056 (class 0 OID 0)
-- Dependencies: 174
-- Name: gt_commande_id_gt_commande_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: -
--

ALTER SEQUENCE gt_commande_id_gt_commande_seq OWNED BY gt_commande.id_gt_commande;


--
-- TOC entry 171 (class 1259 OID 50750)
-- Name: gt_gateau; Type: TABLE; Schema: public; Owner: -; Tablespace: 
--

CREATE TABLE gt_gateau (
    id_gt_gateau integer NOT NULL,
    id_gt_type_gateau integer NOT NULL,
    nom_gateau text NOT NULL,
    image text,
    prix_unitaire numeric
);


--
-- TOC entry 170 (class 1259 OID 50748)
-- Name: gt_gateau_id_gt_gateau_seq; Type: SEQUENCE; Schema: public; Owner: -
--

CREATE SEQUENCE gt_gateau_id_gt_gateau_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


--
-- TOC entry 2057 (class 0 OID 0)
-- Dependencies: 170
-- Name: gt_gateau_id_gt_gateau_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: -
--

ALTER SEQUENCE gt_gateau_id_gt_gateau_seq OWNED BY gt_gateau.id_gt_gateau;


--
-- TOC entry 177 (class 1259 OID 50783)
-- Name: gt_presentoir; Type: TABLE; Schema: public; Owner: -; Tablespace: 
--

CREATE TABLE gt_presentoir (
    id_gt_presentoir integer NOT NULL,
    nom_presentoir text NOT NULL,
    image text,
    prix numeric
);


--
-- TOC entry 176 (class 1259 OID 50781)
-- Name: gt_presentoir_id_gt_presentoir_seq; Type: SEQUENCE; Schema: public; Owner: -
--

CREATE SEQUENCE gt_presentoir_id_gt_presentoir_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


--
-- TOC entry 2058 (class 0 OID 0)
-- Dependencies: 176
-- Name: gt_presentoir_id_gt_presentoir_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: -
--

ALTER SEQUENCE gt_presentoir_id_gt_presentoir_seq OWNED BY gt_presentoir.id_gt_presentoir;


--
-- TOC entry 181 (class 1259 OID 50805)
-- Name: gt_texte; Type: TABLE; Schema: public; Owner: -; Tablespace: 
--

CREATE TABLE gt_texte (
    id_gt_texte integer NOT NULL,
    texte text NOT NULL,
    page text,
    langue text NOT NULL
);


--
-- TOC entry 180 (class 1259 OID 50803)
-- Name: gt_texte_id_gt_texte_seq; Type: SEQUENCE; Schema: public; Owner: -
--

CREATE SEQUENCE gt_texte_id_gt_texte_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


--
-- TOC entry 2059 (class 0 OID 0)
-- Dependencies: 180
-- Name: gt_texte_id_gt_texte_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: -
--

ALTER SEQUENCE gt_texte_id_gt_texte_seq OWNED BY gt_texte.id_gt_texte;


--
-- TOC entry 183 (class 1259 OID 50816)
-- Name: gt_theme; Type: TABLE; Schema: public; Owner: -; Tablespace: 
--

CREATE TABLE gt_theme (
    id_gt_theme integer NOT NULL,
    nom_theme text NOT NULL
);


--
-- TOC entry 182 (class 1259 OID 50814)
-- Name: gt_theme_id_gt_theme_seq; Type: SEQUENCE; Schema: public; Owner: -
--

CREATE SEQUENCE gt_theme_id_gt_theme_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


--
-- TOC entry 2060 (class 0 OID 0)
-- Dependencies: 182
-- Name: gt_theme_id_gt_theme_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: -
--

ALTER SEQUENCE gt_theme_id_gt_theme_seq OWNED BY gt_theme.id_gt_theme;


--
-- TOC entry 179 (class 1259 OID 50794)
-- Name: gt_type_gateau; Type: TABLE; Schema: public; Owner: -; Tablespace: 
--

CREATE TABLE gt_type_gateau (
    id_gt_type_gateau integer NOT NULL,
    type_gateau text NOT NULL
);


--
-- TOC entry 178 (class 1259 OID 50792)
-- Name: gt_type_gateau_id_gt_type_gateau_seq; Type: SEQUENCE; Schema: public; Owner: -
--

CREATE SEQUENCE gt_type_gateau_id_gt_type_gateau_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


--
-- TOC entry 2061 (class 0 OID 0)
-- Dependencies: 178
-- Name: gt_type_gateau_id_gt_type_gateau_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: -
--

ALTER SEQUENCE gt_type_gateau_id_gt_type_gateau_seq OWNED BY gt_type_gateau.id_gt_type_gateau;


--
-- TOC entry 187 (class 1259 OID 50843)
-- Name: theme_gateau; Type: TABLE; Schema: public; Owner: -; Tablespace: 
--

CREATE TABLE theme_gateau (
    id_gt_gateau integer NOT NULL,
    id_gt_theme integer NOT NULL
);


--
-- TOC entry 1881 (class 2604 OID 50765)
-- Name: id_gt_admin; Type: DEFAULT; Schema: public; Owner: -
--

ALTER TABLE ONLY gt_admin ALTER COLUMN id_gt_admin SET DEFAULT nextval('gt_admin_id_gt_admin_seq'::regclass);


--
-- TOC entry 1887 (class 2604 OID 50830)
-- Name: id_gt_client; Type: DEFAULT; Schema: public; Owner: -
--

ALTER TABLE ONLY gt_client ALTER COLUMN id_gt_client SET DEFAULT nextval('gt_client_id_gt_client_seq'::regclass);


--
-- TOC entry 1882 (class 2604 OID 50776)
-- Name: id_gt_commande; Type: DEFAULT; Schema: public; Owner: -
--

ALTER TABLE ONLY gt_commande ALTER COLUMN id_gt_commande SET DEFAULT nextval('gt_commande_id_gt_commande_seq'::regclass);


--
-- TOC entry 1880 (class 2604 OID 50753)
-- Name: id_gt_gateau; Type: DEFAULT; Schema: public; Owner: -
--

ALTER TABLE ONLY gt_gateau ALTER COLUMN id_gt_gateau SET DEFAULT nextval('gt_gateau_id_gt_gateau_seq'::regclass);


--
-- TOC entry 1883 (class 2604 OID 50786)
-- Name: id_gt_presentoir; Type: DEFAULT; Schema: public; Owner: -
--

ALTER TABLE ONLY gt_presentoir ALTER COLUMN id_gt_presentoir SET DEFAULT nextval('gt_presentoir_id_gt_presentoir_seq'::regclass);


--
-- TOC entry 1885 (class 2604 OID 50808)
-- Name: id_gt_texte; Type: DEFAULT; Schema: public; Owner: -
--

ALTER TABLE ONLY gt_texte ALTER COLUMN id_gt_texte SET DEFAULT nextval('gt_texte_id_gt_texte_seq'::regclass);


--
-- TOC entry 1886 (class 2604 OID 50819)
-- Name: id_gt_theme; Type: DEFAULT; Schema: public; Owner: -
--

ALTER TABLE ONLY gt_theme ALTER COLUMN id_gt_theme SET DEFAULT nextval('gt_theme_id_gt_theme_seq'::regclass);


--
-- TOC entry 1884 (class 2604 OID 50797)
-- Name: id_gt_type_gateau; Type: DEFAULT; Schema: public; Owner: -
--

ALTER TABLE ONLY gt_type_gateau ALTER COLUMN id_gt_type_gateau SET DEFAULT nextval('gt_type_gateau_id_gt_type_gateau_seq'::regclass);


--
-- TOC entry 2045 (class 0 OID 50836)
-- Dependencies: 186
-- Data for Name: gateau_commande; Type: TABLE DATA; Schema: public; Owner: -
--



--
-- TOC entry 2032 (class 0 OID 50762)
-- Dependencies: 173
-- Data for Name: gt_admin; Type: TABLE DATA; Schema: public; Owner: -
--

INSERT INTO gt_admin (id_gt_admin, login, password) VALUES (1, 'Berlioz', '0367690577a7702f0c294dd7aed618f8');


--
-- TOC entry 2062 (class 0 OID 0)
-- Dependencies: 172
-- Name: gt_admin_id_gt_admin_seq; Type: SEQUENCE SET; Schema: public; Owner: -
--

SELECT pg_catalog.setval('gt_admin_id_gt_admin_seq', 2, true);


--
-- TOC entry 2044 (class 0 OID 50827)
-- Dependencies: 185
-- Data for Name: gt_client; Type: TABLE DATA; Schema: public; Owner: -
--



--
-- TOC entry 2063 (class 0 OID 0)
-- Dependencies: 184
-- Name: gt_client_id_gt_client_seq; Type: SEQUENCE SET; Schema: public; Owner: -
--

SELECT pg_catalog.setval('gt_client_id_gt_client_seq', 1, false);


--
-- TOC entry 2034 (class 0 OID 50773)
-- Dependencies: 175
-- Data for Name: gt_commande; Type: TABLE DATA; Schema: public; Owner: -
--



--
-- TOC entry 2064 (class 0 OID 0)
-- Dependencies: 174
-- Name: gt_commande_id_gt_commande_seq; Type: SEQUENCE SET; Schema: public; Owner: -
--

SELECT pg_catalog.setval('gt_commande_id_gt_commande_seq', 1, false);


--
-- TOC entry 2030 (class 0 OID 50750)
-- Dependencies: 171
-- Data for Name: gt_gateau; Type: TABLE DATA; Schema: public; Owner: -
--

INSERT INTO gt_gateau (id_gt_gateau, id_gt_type_gateau, nom_gateau, image, prix_unitaire) VALUES (1, 1, 'Frozen Elsa', 'anniv_enfant1.jpg', 39.99);
INSERT INTO gt_gateau (id_gt_gateau, id_gt_type_gateau, nom_gateau, image, prix_unitaire) VALUES (3, 1, 'Petit train', 'anniv_enfant3.jpg', 49.99);
INSERT INTO gt_gateau (id_gt_gateau, id_gt_type_gateau, nom_gateau, image, prix_unitaire) VALUES (2, 1, 'Coccinelle', 'anniv_enfant2.jpg', 37.99);
INSERT INTO gt_gateau (id_gt_gateau, id_gt_type_gateau, nom_gateau, image, prix_unitaire) VALUES (4, 1, 'Cars McQueen', 'anniv_enfant4.jpg', 49.99);
INSERT INTO gt_gateau (id_gt_gateau, id_gt_type_gateau, nom_gateau, image, prix_unitaire) VALUES (5, 2, 'Coeur de roses', 'cake1.jpg', 37.89);
INSERT INTO gt_gateau (id_gt_gateau, id_gt_type_gateau, nom_gateau, image, prix_unitaire) VALUES (6, 2, 'Forêt noire', 'cake2.jpg', 28.99);
INSERT INTO gt_gateau (id_gt_gateau, id_gt_type_gateau, nom_gateau, image, prix_unitaire) VALUES (7, 2, 'Gâteau aux fruits', 'cake3.jpg', 44.99);
INSERT INTO gt_gateau (id_gt_gateau, id_gt_type_gateau, nom_gateau, image, prix_unitaire) VALUES (8, 4, 'Bonshommes de neige', 'christmas3.jpg', 32.49);
INSERT INTO gt_gateau (id_gt_gateau, id_gt_type_gateau, nom_gateau, image, prix_unitaire) VALUES (9, 4, 'Chapeau rouge', 'christmas4.jpg', 41.49);
INSERT INTO gt_gateau (id_gt_gateau, id_gt_type_gateau, nom_gateau, image, prix_unitaire) VALUES (10, 4, 'Bûche tradition', 'christmas1.jpg', 21.99);
INSERT INTO gt_gateau (id_gt_gateau, id_gt_type_gateau, nom_gateau, image, prix_unitaire) VALUES (11, 4, 'Bûche tradition super crème', 'christmas2.jpg', 21.99);
INSERT INTO gt_gateau (id_gt_gateau, id_gt_type_gateau, nom_gateau, image, prix_unitaire) VALUES (12, 3, 'Petits choux à la crème', 'patisserie1.jpg', 2.49);
INSERT INTO gt_gateau (id_gt_gateau, id_gt_type_gateau, nom_gateau, image, prix_unitaire) VALUES (13, 3, 'Eclairs au chocolat', 'patisserie2.jpg', 1.79);
INSERT INTO gt_gateau (id_gt_gateau, id_gt_type_gateau, nom_gateau, image, prix_unitaire) VALUES (14, 3, 'Tartelette aux fraises', 'patisserie3.jpg', 3.89);
INSERT INTO gt_gateau (id_gt_gateau, id_gt_type_gateau, nom_gateau, image, prix_unitaire) VALUES (15, 3, 'Canard à la crème', 'patisserie4.jpg', 2.79);


--
-- TOC entry 2065 (class 0 OID 0)
-- Dependencies: 170
-- Name: gt_gateau_id_gt_gateau_seq; Type: SEQUENCE SET; Schema: public; Owner: -
--

SELECT pg_catalog.setval('gt_gateau_id_gt_gateau_seq', 1, false);


--
-- TOC entry 2036 (class 0 OID 50783)
-- Dependencies: 177
-- Data for Name: gt_presentoir; Type: TABLE DATA; Schema: public; Owner: -
--

INSERT INTO gt_presentoir (id_gt_presentoir, nom_presentoir, image, prix) VALUES (1, 'Présentoir tradition', 'pres_campagne.jpg', 27.59);
INSERT INTO gt_presentoir (id_gt_presentoir, nom_presentoir, image, prix) VALUES (2, 'Présentoir mariage', 'pres_mariage.jpg', 38.69);
INSERT INTO gt_presentoir (id_gt_presentoir, nom_presentoir, image, prix) VALUES (3, 'Présentoir à mignardises', 'pres_miniardises.jpg', 16.39);
INSERT INTO gt_presentoir (id_gt_presentoir, nom_presentoir, image, prix) VALUES (4, 'Présentoir à étages', 'pres_multiples', 48.19);


--
-- TOC entry 2066 (class 0 OID 0)
-- Dependencies: 176
-- Name: gt_presentoir_id_gt_presentoir_seq; Type: SEQUENCE SET; Schema: public; Owner: -
--

SELECT pg_catalog.setval('gt_presentoir_id_gt_presentoir_seq', 1, false);


--
-- TOC entry 2040 (class 0 OID 50805)
-- Dependencies: 181
-- Data for Name: gt_texte; Type: TABLE DATA; Schema: public; Owner: -
--

INSERT INTO gt_texte (id_gt_texte, texte, page, langue) VALUES (1, '<p>Depuis 5 générations, <span class="txtRouge txtItalic">Berlioz Délices</span> vous propose de
délicieuses pâtisseries à la carte ou personnalisées.</p>
<p>Pour les fêtes, réservez dès maintenant en ligne vos gâteaux et autres douceurs.</p>
<p class="centrer">Livraison gratuite !</p>', 'accueil', 'fr');


--
-- TOC entry 2067 (class 0 OID 0)
-- Dependencies: 180
-- Name: gt_texte_id_gt_texte_seq; Type: SEQUENCE SET; Schema: public; Owner: -
--

SELECT pg_catalog.setval('gt_texte_id_gt_texte_seq', 1, false);


--
-- TOC entry 2042 (class 0 OID 50816)
-- Dependencies: 183
-- Data for Name: gt_theme; Type: TABLE DATA; Schema: public; Owner: -
--

INSERT INTO gt_theme (id_gt_theme, nom_theme) VALUES (1, 'Anniversaire');
INSERT INTO gt_theme (id_gt_theme, nom_theme) VALUES (2, 'Mariage');
INSERT INTO gt_theme (id_gt_theme, nom_theme) VALUES (3, 'Saint-Valentin');
INSERT INTO gt_theme (id_gt_theme, nom_theme) VALUES (4, 'Noël');
INSERT INTO gt_theme (id_gt_theme, nom_theme) VALUES (5, 'Nouvel An');
INSERT INTO gt_theme (id_gt_theme, nom_theme) VALUES (6, 'Plaisir sucré');


--
-- TOC entry 2068 (class 0 OID 0)
-- Dependencies: 182
-- Name: gt_theme_id_gt_theme_seq; Type: SEQUENCE SET; Schema: public; Owner: -
--

SELECT pg_catalog.setval('gt_theme_id_gt_theme_seq', 1, false);


--
-- TOC entry 2038 (class 0 OID 50794)
-- Dependencies: 179
-- Data for Name: gt_type_gateau; Type: TABLE DATA; Schema: public; Owner: -
--

INSERT INTO gt_type_gateau (id_gt_type_gateau, type_gateau) VALUES (1, 'Anniversaires d''enfants');
INSERT INTO gt_type_gateau (id_gt_type_gateau, type_gateau) VALUES (2, 'Gâteaux base crème');
INSERT INTO gt_type_gateau (id_gt_type_gateau, type_gateau) VALUES (3, 'Pâtisseries individuelles');
INSERT INTO gt_type_gateau (id_gt_type_gateau, type_gateau) VALUES (4, 'Gâteaux mariage');


--
-- TOC entry 2069 (class 0 OID 0)
-- Dependencies: 178
-- Name: gt_type_gateau_id_gt_type_gateau_seq; Type: SEQUENCE SET; Schema: public; Owner: -
--

SELECT pg_catalog.setval('gt_type_gateau_id_gt_type_gateau_seq', 1, false);


--
-- TOC entry 2046 (class 0 OID 50843)
-- Dependencies: 187
-- Data for Name: theme_gateau; Type: TABLE DATA; Schema: public; Owner: -
--



--
-- TOC entry 1910 (class 2606 OID 50840)
-- Name: pk_gateau_commande; Type: CONSTRAINT; Schema: public; Owner: -; Tablespace: 
--

ALTER TABLE ONLY gateau_commande
    ADD CONSTRAINT pk_gateau_commande PRIMARY KEY (id_gt_commande, id_gt_gateau);


--
-- TOC entry 1892 (class 2606 OID 50770)
-- Name: pk_gt_admin; Type: CONSTRAINT; Schema: public; Owner: -; Tablespace: 
--

ALTER TABLE ONLY gt_admin
    ADD CONSTRAINT pk_gt_admin PRIMARY KEY (id_gt_admin);


--
-- TOC entry 1906 (class 2606 OID 50835)
-- Name: pk_gt_client; Type: CONSTRAINT; Schema: public; Owner: -; Tablespace: 
--

ALTER TABLE ONLY gt_client
    ADD CONSTRAINT pk_gt_client PRIMARY KEY (id_gt_client);


--
-- TOC entry 1896 (class 2606 OID 50778)
-- Name: pk_gt_commande; Type: CONSTRAINT; Schema: public; Owner: -; Tablespace: 
--

ALTER TABLE ONLY gt_commande
    ADD CONSTRAINT pk_gt_commande PRIMARY KEY (id_gt_commande);


--
-- TOC entry 1890 (class 2606 OID 50758)
-- Name: pk_gt_gateau; Type: CONSTRAINT; Schema: public; Owner: -; Tablespace: 
--

ALTER TABLE ONLY gt_gateau
    ADD CONSTRAINT pk_gt_gateau PRIMARY KEY (id_gt_gateau);


--
-- TOC entry 1898 (class 2606 OID 50791)
-- Name: pk_gt_presentoir; Type: CONSTRAINT; Schema: public; Owner: -; Tablespace: 
--

ALTER TABLE ONLY gt_presentoir
    ADD CONSTRAINT pk_gt_presentoir PRIMARY KEY (id_gt_presentoir);


--
-- TOC entry 1902 (class 2606 OID 50813)
-- Name: pk_gt_texte; Type: CONSTRAINT; Schema: public; Owner: -; Tablespace: 
--

ALTER TABLE ONLY gt_texte
    ADD CONSTRAINT pk_gt_texte PRIMARY KEY (id_gt_texte);


--
-- TOC entry 1904 (class 2606 OID 50824)
-- Name: pk_gt_theme; Type: CONSTRAINT; Schema: public; Owner: -; Tablespace: 
--

ALTER TABLE ONLY gt_theme
    ADD CONSTRAINT pk_gt_theme PRIMARY KEY (id_gt_theme);


--
-- TOC entry 1900 (class 2606 OID 50802)
-- Name: pk_gt_type_gateau; Type: CONSTRAINT; Schema: public; Owner: -; Tablespace: 
--

ALTER TABLE ONLY gt_type_gateau
    ADD CONSTRAINT pk_gt_type_gateau PRIMARY KEY (id_gt_type_gateau);


--
-- TOC entry 1914 (class 2606 OID 50847)
-- Name: pk_theme_gateau; Type: CONSTRAINT; Schema: public; Owner: -; Tablespace: 
--

ALTER TABLE ONLY theme_gateau
    ADD CONSTRAINT pk_theme_gateau PRIMARY KEY (id_gt_gateau, id_gt_theme);


--
-- TOC entry 1907 (class 1259 OID 50841)
-- Name: i_fk_gateau_commande_gt_comman; Type: INDEX; Schema: public; Owner: -; Tablespace: 
--

CREATE INDEX i_fk_gateau_commande_gt_comman ON gateau_commande USING btree (id_gt_commande);


--
-- TOC entry 1908 (class 1259 OID 50842)
-- Name: i_fk_gateau_commande_gt_gateau; Type: INDEX; Schema: public; Owner: -; Tablespace: 
--

CREATE INDEX i_fk_gateau_commande_gt_gateau ON gateau_commande USING btree (id_gt_gateau);


--
-- TOC entry 1893 (class 1259 OID 50780)
-- Name: i_fk_gt_commande_gt_client; Type: INDEX; Schema: public; Owner: -; Tablespace: 
--

CREATE INDEX i_fk_gt_commande_gt_client ON gt_commande USING btree (id_gt_client);


--
-- TOC entry 1894 (class 1259 OID 50779)
-- Name: i_fk_gt_commande_gt_presentoir; Type: INDEX; Schema: public; Owner: -; Tablespace: 
--

CREATE INDEX i_fk_gt_commande_gt_presentoir ON gt_commande USING btree (id_gt_presentoir);


--
-- TOC entry 1888 (class 1259 OID 50759)
-- Name: i_fk_gt_gateau_gt_type_gateau; Type: INDEX; Schema: public; Owner: -; Tablespace: 
--

CREATE INDEX i_fk_gt_gateau_gt_type_gateau ON gt_gateau USING btree (id_gt_type_gateau);


--
-- TOC entry 1911 (class 1259 OID 50848)
-- Name: i_fk_theme_gateau_gt_gateau; Type: INDEX; Schema: public; Owner: -; Tablespace: 
--

CREATE INDEX i_fk_theme_gateau_gt_gateau ON theme_gateau USING btree (id_gt_gateau);


--
-- TOC entry 1912 (class 1259 OID 50849)
-- Name: i_fk_theme_gateau_gt_theme; Type: INDEX; Schema: public; Owner: -; Tablespace: 
--

CREATE INDEX i_fk_theme_gateau_gt_theme ON theme_gateau USING btree (id_gt_theme);


--
-- TOC entry 1918 (class 2606 OID 50865)
-- Name: fk_gateau_commande_gt_commande; Type: FK CONSTRAINT; Schema: public; Owner: -
--

ALTER TABLE ONLY gateau_commande
    ADD CONSTRAINT fk_gateau_commande_gt_commande FOREIGN KEY (id_gt_commande) REFERENCES gt_commande(id_gt_commande);


--
-- TOC entry 1919 (class 2606 OID 50870)
-- Name: fk_gateau_commande_gt_gateau; Type: FK CONSTRAINT; Schema: public; Owner: -
--

ALTER TABLE ONLY gateau_commande
    ADD CONSTRAINT fk_gateau_commande_gt_gateau FOREIGN KEY (id_gt_gateau) REFERENCES gt_gateau(id_gt_gateau);


--
-- TOC entry 1917 (class 2606 OID 50860)
-- Name: fk_gt_commande_gt_client; Type: FK CONSTRAINT; Schema: public; Owner: -
--

ALTER TABLE ONLY gt_commande
    ADD CONSTRAINT fk_gt_commande_gt_client FOREIGN KEY (id_gt_client) REFERENCES gt_client(id_gt_client);


--
-- TOC entry 1916 (class 2606 OID 50855)
-- Name: fk_gt_commande_gt_presentoir; Type: FK CONSTRAINT; Schema: public; Owner: -
--

ALTER TABLE ONLY gt_commande
    ADD CONSTRAINT fk_gt_commande_gt_presentoir FOREIGN KEY (id_gt_presentoir) REFERENCES gt_presentoir(id_gt_presentoir);


--
-- TOC entry 1915 (class 2606 OID 50850)
-- Name: fk_gt_gateau_gt_type_gateau; Type: FK CONSTRAINT; Schema: public; Owner: -
--

ALTER TABLE ONLY gt_gateau
    ADD CONSTRAINT fk_gt_gateau_gt_type_gateau FOREIGN KEY (id_gt_type_gateau) REFERENCES gt_type_gateau(id_gt_type_gateau);


--
-- TOC entry 1920 (class 2606 OID 50875)
-- Name: fk_theme_gateau_gt_gateau; Type: FK CONSTRAINT; Schema: public; Owner: -
--

ALTER TABLE ONLY theme_gateau
    ADD CONSTRAINT fk_theme_gateau_gt_gateau FOREIGN KEY (id_gt_gateau) REFERENCES gt_gateau(id_gt_gateau);


--
-- TOC entry 1921 (class 2606 OID 50880)
-- Name: fk_theme_gateau_gt_theme; Type: FK CONSTRAINT; Schema: public; Owner: -
--

ALTER TABLE ONLY theme_gateau
    ADD CONSTRAINT fk_theme_gateau_gt_theme FOREIGN KEY (id_gt_theme) REFERENCES gt_theme(id_gt_theme);


-- Completed on 2016-11-06 23:17:34

--
-- PostgreSQL database dump complete
--
