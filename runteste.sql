--
-- PostgreSQL database dump
--

-- Dumped from database version 9.5.5
-- Dumped by pg_dump version 9.5.5

SET statement_timeout = 0;
SET lock_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SET check_function_bodies = false;
SET client_min_messages = warning;
SET row_security = off;

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
-- Name: anuncio; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE anuncio (
    anundate timestamp without time zone NOT NULL,
    aemail character varying(50) NOT NULL,
    evtname character varying(50) NOT NULL,
    adescrpt character varying(100),
    adelivery boolean,
    nticket integer NOT NULL,
    anprice integer NOT NULL
);


ALTER TABLE anuncio OWNER TO postgres;

--
-- Name: compra; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE compra (
    codtrans character varying(10) NOT NULL,
    usremail character varying(50) NOT NULL,
    dtanun timestamp without time zone NOT NULL,
    finalz boolean,
    venc timestamp without time zone,
    compdate timestamp without time zone,
    qtdtickets integer NOT NULL,
    payway character varying(20) NOT NULL,
    total integer NOT NULL
);


ALTER TABLE compra OWNER TO postgres;

--
-- Name: ender; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE ender (
    cep character varying(10) NOT NULL,
    uf character varying(2) NOT NULL,
    city character varying(50) NOT NULL,
    logr character varying(50) NOT NULL,
    bairro character varying(50) NOT NULL,
    nlog integer NOT NULL,
    country character varying(30) NOT NULL
);


ALTER TABLE ender OWNER TO postgres;

--
-- Name: evnt; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE evnt (
    evname character varying(50) NOT NULL,
    evhour timestamp without time zone NOT NULL,
    evlocal character varying(100) NOT NULL,
    evcat character varying(10) NOT NULL,
    evdate date NOT NULL,
    evnb integer NOT NULL,
    usrmail character varying(50) NOT NULL
);


ALTER TABLE evnt OWNER TO postgres;

--
-- Name: usuario; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE usuario (
    uemail character varying(50) NOT NULL,
    usr character varying(30) NOT NULL,
    pswd character varying(50) NOT NULL,
    utel character varying(40) NOT NULL,
    cpf character varying(30) NOT NULL,
    rg character varying(10) NOT NULL,
    unome character varying(50) NOT NULL,
    endercep character varying(10) NOT NULL
);


ALTER TABLE usuario OWNER TO postgres;

--
-- Name: pk_anuncio; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY anuncio
    ADD CONSTRAINT pk_anuncio PRIMARY KEY (anundate);


--
-- Name: pk_compra; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY compra
    ADD CONSTRAINT pk_compra PRIMARY KEY (codtrans, usremail, dtanun);


--
-- Name: pk_ender; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY ender
    ADD CONSTRAINT pk_ender PRIMARY KEY (cep);


--
-- Name: pk_evnt; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY evnt
    ADD CONSTRAINT pk_evnt PRIMARY KEY (evname);


--
-- Name: pk_user; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY usuario
    ADD CONSTRAINT pk_user PRIMARY KEY (uemail);


--
-- Name: fk_acompra; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY compra
    ADD CONSTRAINT fk_acompra FOREIGN KEY (dtanun) REFERENCES anuncio(anundate);


--
-- Name: fk_anuncio; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY anuncio
    ADD CONSTRAINT fk_anuncio FOREIGN KEY (aemail) REFERENCES usuario(uemail);


--
-- Name: fk_compra; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY compra
    ADD CONSTRAINT fk_compra FOREIGN KEY (usremail) REFERENCES usuario(uemail);


--
-- Name: fk_eanuncio; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY anuncio
    ADD CONSTRAINT fk_eanuncio FOREIGN KEY (evtname) REFERENCES evnt(evname);


--
-- Name: fk_evnt; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY evnt
    ADD CONSTRAINT fk_evnt FOREIGN KEY (usrmail) REFERENCES usuario(uemail);


--
-- Name: fk_user; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY usuario
    ADD CONSTRAINT fk_user FOREIGN KEY (endercep) REFERENCES ender(cep);


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
