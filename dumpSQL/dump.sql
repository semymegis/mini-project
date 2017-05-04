--
-- PostgreSQL database dump
--

SET statement_timeout = 0;
SET lock_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SET check_function_bodies = false;
SET client_min_messages = warning;

--
-- Name: plpgsql; Type: EXTENSION; Schema: -; Owner: 
--

CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;


--
-- Name: EXTENSION plpgsql; Type: COMMENT; Schema: -; Owner: 
--

COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';


SET search_path = public, pg_catalog;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- Name: social_account; Type: TABLE; Schema: public; Owner: semy; Tablespace: 
--

CREATE TABLE social_account (
    id integer NOT NULL,
    user_id integer,
    provider character varying(255) NOT NULL,
    client_id character varying(255) NOT NULL,
    data text,
    code character varying(32) DEFAULT NULL::character varying,
    created_at integer,
    email character varying(255) DEFAULT NULL::character varying,
    username character varying(255) DEFAULT NULL::character varying
);


ALTER TABLE public.social_account OWNER TO semy;

--
-- Name: account_id_seq; Type: SEQUENCE; Schema: public; Owner: semy
--

CREATE SEQUENCE account_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.account_id_seq OWNER TO semy;

--
-- Name: account_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: semy
--

ALTER SEQUENCE account_id_seq OWNED BY social_account.id;


--
-- Name: migration; Type: TABLE; Schema: public; Owner: semy; Tablespace: 
--

CREATE TABLE migration (
    version character varying(180) NOT NULL,
    apply_time integer
);


ALTER TABLE public.migration OWNER TO semy;

--
-- Name: profile; Type: TABLE; Schema: public; Owner: semy; Tablespace: 
--

CREATE TABLE profile (
    user_id integer NOT NULL,
    name character varying(255) DEFAULT NULL::character varying,
    public_email character varying(255) DEFAULT NULL::character varying,
    gravatar_email character varying(255) DEFAULT NULL::character varying,
    gravatar_id character varying(32) DEFAULT NULL::character varying,
    location character varying(255) DEFAULT NULL::character varying,
    website character varying(255) DEFAULT NULL::character varying,
    bio text,
    timezone character varying(40) DEFAULT NULL::character varying
);


ALTER TABLE public.profile OWNER TO semy;

--
-- Name: token; Type: TABLE; Schema: public; Owner: semy; Tablespace: 
--

CREATE TABLE token (
    user_id integer NOT NULL,
    code character varying(32) NOT NULL,
    created_at integer NOT NULL,
    type smallint NOT NULL
);


ALTER TABLE public.token OWNER TO semy;

--
-- Name: user; Type: TABLE; Schema: public; Owner: semy; Tablespace: 
--

CREATE TABLE "user" (
    id integer NOT NULL,
    username character varying(25) NOT NULL,
    email character varying(255) NOT NULL,
    password_hash character varying(60) NOT NULL,
    auth_key character varying(32) NOT NULL,
    confirmed_at integer,
    unconfirmed_email character varying(255) DEFAULT NULL::character varying,
    blocked_at integer,
    registration_ip character varying(45),
    created_at integer NOT NULL,
    updated_at integer NOT NULL,
    flags integer DEFAULT 0 NOT NULL,
    last_login_at integer,
    nama character varying(255),
    tlp bigint,
    gender character(1),
    alamat text
);


ALTER TABLE public."user" OWNER TO semy;

--
-- Name: user_id_seq; Type: SEQUENCE; Schema: public; Owner: semy
--

CREATE SEQUENCE user_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.user_id_seq OWNER TO semy;

--
-- Name: user_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: semy
--

ALTER SEQUENCE user_id_seq OWNED BY "user".id;


--
-- Name: turnamen; Type: TABLE; Schema: public; Owner: semy; Tablespace: 
--

CREATE TABLE turnamen (
    team_id integer DEFAULT nextval('user_id_seq'::regclass) NOT NULL,
    user_id bigint NOT NULL,
    nama_captain character varying(255) NOT NULL,
    tlp_captain bigint NOT NULL,
    gender_captain character(1) DEFAULT 1 NOT NULL,
    nama_1 character varying(255) NOT NULL,
    tlp_1 bigint NOT NULL,
    gender_1 character(1) DEFAULT 1 NOT NULL,
    nama_2 character(255) NOT NULL,
    tlp_2 bigint NOT NULL,
    gender_2 character(1) DEFAULT 1 NOT NULL,
    nama_3 character varying(255) NOT NULL,
    tlp_3 bigint NOT NULL,
    gender_3 character(1) DEFAULT 1 NOT NULL,
    created_date character varying(155),
    nama_team character varying(225)
);


ALTER TABLE public.turnamen OWNER TO semy;

--
-- Name: id; Type: DEFAULT; Schema: public; Owner: semy
--

ALTER TABLE ONLY social_account ALTER COLUMN id SET DEFAULT nextval('account_id_seq'::regclass);


--
-- Name: id; Type: DEFAULT; Schema: public; Owner: semy
--

ALTER TABLE ONLY "user" ALTER COLUMN id SET DEFAULT nextval('user_id_seq'::regclass);


--
-- Name: account_id_seq; Type: SEQUENCE SET; Schema: public; Owner: semy
--

SELECT pg_catalog.setval('account_id_seq', 1, false);


--
-- Data for Name: migration; Type: TABLE DATA; Schema: public; Owner: semy
--

INSERT INTO migration VALUES ('m000000_000000_base', 1493827080);
INSERT INTO migration VALUES ('m140209_132017_init', 1493827082);
INSERT INTO migration VALUES ('m140403_174025_create_account_table', 1493827083);
INSERT INTO migration VALUES ('m140504_113157_update_tables', 1493827083);
INSERT INTO migration VALUES ('m140504_130429_create_token_table', 1493827083);
INSERT INTO migration VALUES ('m140830_171933_fix_ip_field', 1493827083);
INSERT INTO migration VALUES ('m140830_172703_change_account_table_name', 1493827083);
INSERT INTO migration VALUES ('m141222_110026_update_ip_field', 1493827084);
INSERT INTO migration VALUES ('m141222_135246_alter_username_length', 1493827084);
INSERT INTO migration VALUES ('m150614_103145_update_social_account_table', 1493827084);
INSERT INTO migration VALUES ('m150623_212711_fix_username_notnull', 1493827084);
INSERT INTO migration VALUES ('m151218_234654_add_timezone_to_profile', 1493827084);
INSERT INTO migration VALUES ('m160929_103127_add_last_login_at_to_user_table', 1493827084);


--
-- Data for Name: profile; Type: TABLE DATA; Schema: public; Owner: semy
--

INSERT INTO profile VALUES (15, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO profile VALUES (21, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO profile VALUES (23, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);


--
-- Data for Name: social_account; Type: TABLE DATA; Schema: public; Owner: semy
--



--
-- Data for Name: token; Type: TABLE DATA; Schema: public; Owner: semy
--

INSERT INTO token VALUES (15, 'vAabAfRgWtH_lzOy_DxIW9A4bRaBe2aL', 1493874379, 0);
INSERT INTO token VALUES (21, 'D5vs0DlUvEVoY6ULGNmqPNeLqh7bwI7n', 1493881494, 0);
INSERT INTO token VALUES (23, 'muhGPUc5Di_aj1folpGgEk0vcP7A0SW6', 1493881640, 0);


--
-- Data for Name: turnamen; Type: TABLE DATA; Schema: public; Owner: semy
--

INSERT INTO turnamen VALUES (20, 15, 'Samuel', 82111001211, '1', 'Asep ', 8313213123, '1', 'Suharti                                                                                                                                                                                                                                                        ', 813123131, '2', 'John', 8312321321, '1', 'Thu-May-2017 14:01:23', 'Cross');


--
-- Data for Name: user; Type: TABLE DATA; Schema: public; Owner: semy
--

INSERT INTO "user" VALUES (23, 'sem22y223', 'semsywell@gmail.com', '$2y$12$GIW6ssGjYe1aqYmLzfTnduLzuXaYQeapK67yjwyPdNkHHJqOiXFby', 'NesYFhGI8rSm0IvRG7rlY5rkpVBNlZ4R', NULL, NULL, NULL, '127.0.0.1', 1493881640, 1493881640, 0, NULL, 'sadsa', 2323, '1', '3232');
INSERT INTO "user" VALUES (15, 'semy', 'semywell@gmail.com', '$2y$12$21W.qJYH3YkqD1DXhH011uyKuk.WIg/XEj52gltsJI/6xQN1.mUgy', 'VwIE1XMQQz47VEHd4jGPxIgVPBcCGiwd', NULL, NULL, NULL, '127.0.0.1', 1493874379, 1493874379, 0, 1493882050, 'Ignatius Samuel Megis', 82111001211, '1', 'Jl. Ciriung Perumahan Ciriung Cermelang Blok L. No. 26 RT 04 RW 14');
INSERT INTO "user" VALUES (21, 'semymegis', 'semywell@gmail.com2', '$2y$12$XrVkoKqu7piNN1F3MH/NousG/UdJJoAnnY1S6N7jljiVE1bGS6hCy', 'Codmu_etqLZ8KbwhPVS8iLxwbn6j98-C', NULL, NULL, NULL, '127.0.0.1', 1493881494, 1493881494, 0, 1493882073, 'SUmail', 8123213211, '1', 'sdadsadsad');


--
-- Name: user_id_seq; Type: SEQUENCE SET; Schema: public; Owner: semy
--

SELECT pg_catalog.setval('user_id_seq', 23, true);


--
-- Name: account_pkey; Type: CONSTRAINT; Schema: public; Owner: semy; Tablespace: 
--

ALTER TABLE ONLY social_account
    ADD CONSTRAINT account_pkey PRIMARY KEY (id);


--
-- Name: migration_pkey; Type: CONSTRAINT; Schema: public; Owner: semy; Tablespace: 
--

ALTER TABLE ONLY migration
    ADD CONSTRAINT migration_pkey PRIMARY KEY (version);


--
-- Name: profile_pkey; Type: CONSTRAINT; Schema: public; Owner: semy; Tablespace: 
--

ALTER TABLE ONLY profile
    ADD CONSTRAINT profile_pkey PRIMARY KEY (user_id);


--
-- Name: turnamen_pkey; Type: CONSTRAINT; Schema: public; Owner: semy; Tablespace: 
--

ALTER TABLE ONLY turnamen
    ADD CONSTRAINT turnamen_pkey PRIMARY KEY (team_id);


--
-- Name: turnamen_tlp_1_key; Type: CONSTRAINT; Schema: public; Owner: semy; Tablespace: 
--

ALTER TABLE ONLY turnamen
    ADD CONSTRAINT turnamen_tlp_1_key UNIQUE (tlp_1);


--
-- Name: turnamen_tlp_2_key; Type: CONSTRAINT; Schema: public; Owner: semy; Tablespace: 
--

ALTER TABLE ONLY turnamen
    ADD CONSTRAINT turnamen_tlp_2_key UNIQUE (tlp_2);


--
-- Name: turnamen_tlp_3_key; Type: CONSTRAINT; Schema: public; Owner: semy; Tablespace: 
--

ALTER TABLE ONLY turnamen
    ADD CONSTRAINT turnamen_tlp_3_key UNIQUE (tlp_3);


--
-- Name: user_pkey; Type: CONSTRAINT; Schema: public; Owner: semy; Tablespace: 
--

ALTER TABLE ONLY "user"
    ADD CONSTRAINT user_pkey PRIMARY KEY (id);


--
-- Name: account_unique; Type: INDEX; Schema: public; Owner: semy; Tablespace: 
--

CREATE UNIQUE INDEX account_unique ON social_account USING btree (provider, client_id);


--
-- Name: account_unique_code; Type: INDEX; Schema: public; Owner: semy; Tablespace: 
--

CREATE UNIQUE INDEX account_unique_code ON social_account USING btree (code);


--
-- Name: token_unique; Type: INDEX; Schema: public; Owner: semy; Tablespace: 
--

CREATE UNIQUE INDEX token_unique ON token USING btree (user_id, code, type);


--
-- Name: user_unique_email; Type: INDEX; Schema: public; Owner: semy; Tablespace: 
--

CREATE UNIQUE INDEX user_unique_email ON "user" USING btree (email);


--
-- Name: user_unique_username; Type: INDEX; Schema: public; Owner: semy; Tablespace: 
--

CREATE UNIQUE INDEX user_unique_username ON "user" USING btree (username);


--
-- Name: fk_user_account; Type: FK CONSTRAINT; Schema: public; Owner: semy
--

ALTER TABLE ONLY social_account
    ADD CONSTRAINT fk_user_account FOREIGN KEY (user_id) REFERENCES "user"(id) ON UPDATE RESTRICT ON DELETE CASCADE;


--
-- Name: fk_user_profile; Type: FK CONSTRAINT; Schema: public; Owner: semy
--

ALTER TABLE ONLY profile
    ADD CONSTRAINT fk_user_profile FOREIGN KEY (user_id) REFERENCES "user"(id) ON UPDATE RESTRICT ON DELETE CASCADE;


--
-- Name: fk_user_token; Type: FK CONSTRAINT; Schema: public; Owner: semy
--

ALTER TABLE ONLY token
    ADD CONSTRAINT fk_user_token FOREIGN KEY (user_id) REFERENCES "user"(id) ON UPDATE RESTRICT ON DELETE CASCADE;


--
-- Name: turnamen_user_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: semy
--

ALTER TABLE ONLY turnamen
    ADD CONSTRAINT turnamen_user_id_fkey FOREIGN KEY (user_id) REFERENCES "user"(id) ON DELETE CASCADE;


--
-- Name: public; Type: ACL; Schema: -; Owner: postgres
--

REVOKE ALL ON SCHEMA public FROM PUBLIC;
REVOKE ALL ON SCHEMA public FROM postgres;
GRANT ALL ON SCHEMA public TO postgres;
GRANT ALL ON SCHEMA public TO PUBLIC;


--
-- PostgreSQL database dump complete
--

