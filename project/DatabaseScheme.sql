CREATE TABLE Users (
    UserID int NOT NULL AUTO_INCREMENT,
    UserName varchar(50) NOT NULL,
    Password varchar(50) NOT NULL,
    PRIMARY KEY (UserID)
);

CREATE TABLE Song(
    SongID int NOT NULL AUTO_INCREMENT,
    TrackName varchar(255) NOT NULL,
    Artist varchar(255),
    Genre varchar(255),
    FilePath varchar(255) NOT NULL,
    PRIMARY KEY(SongID)
);

CREATE TABLE Playlist (
    PlaylistID int NOT NULL AUTO_INCREMENT,
    SongID int NOT NULL,
    PRIMARY KEY (PlaylistID),
    FOREIGN KEY (SongID) REFERENCES Song(SongID)
);

CREATE TABLE PlayMusic(
    PlaylistID int NOT NULL,
    UserID int NOT NULL,
    PRIMARY KEY (PlaylistID, UserID),
    FOREIGN KEY (PlaylistID) REFERENCES Playlist(PlaylistID),
    FOREIGN KEY (UserID) REFERENCES Users(UserID)
);