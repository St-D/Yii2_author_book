<?php

use yii\db\Migration;

/**
 * Class m180702_211523_create_new_tables_with_data
 */
class m180702_211523_create_new_tables_with_data extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m180702_211523_create_new_tables_with_data cannot be reverted.\n";

        return false;
    }


    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->execute("
			CREATE TABLE author
			(
			id     INT AUTO_INCREMENT
				PRIMARY KEY,
			author CHAR(55) NOT NULL,
			CONSTRAINT author_id_uindex
			UNIQUE (id),
			CONSTRAINT author_author_uindex
			UNIQUE (author)
			);
			");

        $this->execute("
			INSERT INTO author (author) VALUES ('Antoine Marie Jean-Baptiste Roger de Saint-Exupéry');
			INSERT INTO author (author) VALUES ('Daniel Defoe');
			INSERT INTO author (author) VALUES ('Erich Maria Remarque');
			INSERT INTO author (author) VALUES ('Ernest Miller Hemingway');
			INSERT INTO author (author) VALUES ('Jack London');
			INSERT INTO author (author) VALUES ('Raymond Douglas Bradbury');
			");


        $this->execute("
			CREATE TABLE book
			(
			id              INT AUTO_INCREMENT
				PRIMARY KEY,
			author_id       INT      NOT NULL,
			title           CHAR(50) NOT NULL,
			year_of_writing DATE     NULL,
			CONSTRAINT book_id_uindex
			UNIQUE (id),
			CONSTRAINT book_title_uindex
			UNIQUE (title)
			);
			");

        $this->execute("
			INSERT INTO book (author_id, title, year_of_writing) VALUES (1, 'Drei Kameraden', '1936-01-01');
			INSERT INTO book (author_id, title, year_of_writing) VALUES (1, 'Arc de Triomphe', '1945-01-01');
			INSERT INTO book (author_id, title, year_of_writing) VALUES (1, 'Im Westen nichts Neues', '1928-01-01');
			INSERT INTO book (author_id, title, year_of_writing) VALUES (1, 'Der schwarze Obelisk', '1956-01-01');
			INSERT INTO book (author_id, title, year_of_writing) VALUES (1, 'Geborgtes Leben/Der Himmel kennt keine Günstlinge', '1961-01-01');
			INSERT INTO book (author_id, title, year_of_writing) VALUES (1, 'Die Traumbude', '1920-01-01');
			INSERT INTO book (author_id, title, year_of_writing) VALUES (1, 'Die Nacht von Lissabon', '1961-01-01');
			INSERT INTO book (author_id, title, year_of_writing) VALUES (1, 'Liebe Deinen Nächsten', '1941-01-01');
			INSERT INTO book (author_id, title, year_of_writing) VALUES (2, 'The Old Man And The Sea', '1952-01-01');
			INSERT INTO book (author_id, title, year_of_writing) VALUES (2, 'For Whom the Bell Tolls', '1940-01-01');
			INSERT INTO book (author_id, title, year_of_writing) VALUES (2, 'A Farewell to Arms', '1929-01-01');
			INSERT INTO book (author_id, title, year_of_writing) VALUES (2, 'The Snows of Kilimanjaro', '1936-01-01');
			INSERT INTO book (author_id, title, year_of_writing) VALUES (2, 'Across the River and into the Trees', '1950-01-01');
			INSERT INTO book (author_id, title, year_of_writing) VALUES (3, 'Robinson Crusoe', '1719-01-01');
			INSERT INTO book (author_id, title, year_of_writing) VALUES (4, 'Fahrenheit 451', '1951-01-01');
			INSERT INTO book (author_id, title, year_of_writing) VALUES (4, 'A Sound of Thunder', '1952-01-01');
			INSERT INTO book (author_id, title, year_of_writing) VALUES (4, 'Death Is a Lonely Business', '1985-01-01');
			INSERT INTO book (author_id, title, year_of_writing) VALUES (4, 'Dandelion Wine', '1957-01-01');
			INSERT INTO book (author_id, title, year_of_writing) VALUES (5, 'Le Petit Prince', '1942-01-01');
			INSERT INTO book (author_id, title, year_of_writing) VALUES (5, 'Pilote de guerre', '1942-01-01');
			INSERT INTO book (author_id, title, year_of_writing) VALUES (5, 'Citadelle', '1944-01-01');
			INSERT INTO book (author_id, title, year_of_writing) VALUES (6, 'White Fang', '1906-01-01');
			INSERT INTO book (author_id, title, year_of_writing) VALUES (6, 'The Sea-Wolf', '1904-01-01');
			INSERT INTO book (author_id, title, year_of_writing) VALUES (6, 'Hearts of Three', '1920-01-01');
			INSERT INTO book (author_id, title, year_of_writing) VALUES (6, 'The People of the Abyss', '1903-01-01');
			INSERT INTO book (author_id, title, year_of_writing) VALUES (6, 'The White Silence', '1899-01-01');
			");

    }

    public function down()
    {

        $this->dropTable('author');
        $this->dropTable('book');

        echo "m180702_211523_create_new_tables_with_data cannot be reverted.\n";
    }

}
