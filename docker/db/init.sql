CREATE TABLE league(
    id             serial      PRIMARY KEY,
    name           varchar(64) NOT NULL,
    country        varchar(4)  NOT NULL,
    UNIQUE(name)
);

CREATE TABLE club(
    id             serial      PRIMARY KEY,
    name           varchar(64) NOT NULL,
    league         integer     NOT NULL REFERENCES league,
    UNIQUE(name)
);

CREATE TABLE player(
    id             serial      PRIMARY KEY,
    first_name     varchar(32) NOT NULL,
    last_name      varchar(32) NOT NULL,
    date_of_birth  date        NOT NULL,
    country        varchar(4)  NOT NULL,
    club           integer     NOT NULL REFERENCES club
);

CREATE TABLE match(
    id             serial      PRIMARY KEY,
    host_goals     integer     NOT NULL,
    guest_goals    integer     NOT NULL,
    host           integer     NOT NULL REFERENCES club,
    guest          integer     NOT NULL REFERENCES club,
    league         integer     NOT NULL REFERENCES league,
    UNIQUE(host, guest)
);

INSERT INTO league(name, country)
VALUES
    ('Premier League', 'GB'),
    ('Primera División', 'ES');

INSERT INTO club(name, league)
VALUES
    -- id = 1
    ('Manchester City', 1),
    ('Liverpool',  1),
    ('Chelsea', 1),
    ('Tottenham Hotspur', 1),
    ('Arsenal', 1),
    -- id = 6
    ('Manchester United', 1),
    ('West Ham United', 1),
    ('Leicester City', 1),
    ('Brighton & Hove Albion', 1),
    ('Wolverhampton Wanderers', 1),
    -- id = 11
    ('Newcastle United', 1),
    ('Crystal Palace', 1),
    ('Brentford', 1),
    ('Aston Villa', 1),
    ('Southampton', 1),
    -- id = 16
    ('Everton', 1),
    ('Leeds United', 1),
    ('Fulham', 1),
    ('Bournemouth', 1),
    ('Nottingham Forest FC', 1),

    -- id = 21
    ('Almería', 2),
    ('Athletic Bilbao', 2),
    ('Atlético Madrid', 2),
    ('Barcelona', 2),
    ('Cádiz', 2),
    -- id = 26
    ('Celta Vigo', 2),
    ('Elche', 2),
    ('Espanyol', 2),
    ('Getafe', 2),
    ('Girona', 2),
    -- id = 31
    ('Mallorca', 2),
    ('Osasuna', 2),
    ('Rayo Vallecano', 2),
    ('Real Betis', 2),
    ('Real Madrid', 2),
    -- id = 36
    ('Real Sociedad', 2),
    ('Sevilla', 2),
    ('Valencia', 2),
    ('Valladolid', 2),
    ('Villarreal', 2);

INSERT INTO player(first_name, last_name, date_of_birth, country, club)
VALUES
    ('Erling', 'Haaland', '2000-07-21', 'NO', 1),
    ('Phil', 'Foden', '2000-05-28', 'GB', 1),
    ('Bernardo', 'Silva', '1994-08-10', 'PT', 1),
    ('Leandro', 'Trossard', '1994-12-04', 'BE', 2),
    ('Harry', 'Kane', '1993-07-28', 'GB', 4),
    ('Son', 'Hung-min', '1992-07-08', 'KR', 4),
    ('Jamie', 'Vardy', '1987-01-11', 'GB', 8),
    ('James', 'Maddison', '1996-11-23', 'GB', 8),
    ('Danny', 'Ward', '1993-06-22', 'GB', 8),
    ('Miguel', 'Almirón', '1994-02-10', 'PY', 11),
    ('Nick', 'Pope', '1992-04-19', 'GB', 11),
    ('Ivan', 'Toney', '1996-03-16', 'GB', 13),
    ('Aleksandar', 'Mitrović', '1994-09-16', 'RS', 18);

INSERT INTO match(host_goals, guest_goals, host, guest, league)
SELECT DISTINCT ON (host, guest)
    floor(random() * 4),
    ceil(random() * 4),
    1 + floor(random() * 20) AS host,
    1 + floor(random() * 20) AS guest,
    1
FROM generate_series(1,10);