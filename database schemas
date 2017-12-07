CREATE DATABASE Users (
	UserID int NOT NULL AUTO_INCREMENT,
    UserName varchar(50) NOT NULL,
    Password varchar(50) NOT NULL,
    Email varchar(255) NOT NULL,
    PlaylistID int,
    PRIMARY KEY (UserID),
    FOREIGN KEY (PlaylistID) REFERENCES Playlist(PlaylistID)
);

CREATE TABLE Music (
	MusicID int NOT NULL AUTO_INCREMENT,
        TrackName varchar(255) NOT NULL,
        Artist varchar(255),
        TimeLength int NOT NULL,
        Genre varchar(255),
        Album varchar(255),
        FilePath varchar(255) NOT NULL
);

CREATE TABLE Playlist (
	PlaylistID int NOT NULL AUTO_INCREMENT,
	MusicID int,
	UserID int,
	PRIMARY KEY (PlaylistID),
	FOREIGN KEY (UserID) REFERENCES Users(UserID),
	FOREIGN KEY (MusicID) REFERENCES Music(MusicID),
);