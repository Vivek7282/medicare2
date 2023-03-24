require("dotenv").config();
const { v4: uuidv4 } = require("uuid");
const AccessToken = require("twilio").jwt.AccessToken;
const VideoGrant = AccessToken.VideoGrant;
const express = require("express");
const app = express();
const port = 5000;

// use the Express JSON middleware
app.use(express.json());

// create the twilioClient
const twilioClient = require("twilio")(
    "SK5283aef933603f41e0a6209e0eaeb340",
    "V0l6DoMZMkZsnbRzipFQN1jo1Tdd65EI", { accountSid: "AC8beb9d13db020d7da84dfb410e039cd1" }
);

const findOrCreateRoom = async(roomName) => {
    try {
        // see if the room exists already. If it doesn't, this will throw
        // error 20404.
        await twilioClient.video.rooms(roomName).fetch();
    } catch (error) {
        // the room was not found, so create it
        if (error.code == 20404) {
            await twilioClient.video.rooms.create({
                uniqueName: roomName,
                type: "go",
            });
        } else {
            // let other errors bubble up
            throw error;
        }
    }
};

const getAccessToken = (roomName) => {
    // create an access token
    const token = new AccessToken(
        process.env.TWILIO_ACCOUNT_SID,
        process.env.TWILIO_API_KEY,
        process.env.TWILIO_API_SECRET,
        // generate a random unique identity for this participant
        { identity: uuidv4() }
    );
    // create a video grant for this specific room
    const videoGrant = new VideoGrant({
        room: roomName,
    });

    // add the video grant
    token.addGrant(videoGrant);
    // serialize the token and return it
    return token.toJwt();
};

app.post("/join-room", async(req, res) => {

    // return 400 if the request has an empty body or no roomName
    if (!req.body || !req.body.roomName) {
        return res.status(400).send("Must include roomName argument.");
    }
    const roomName = req.body.roomName;
    // find or create a room with the given roomName
    findOrCreateRoom(roomName);
    // generate an Access Token for a participant in this room
    const token = getAccessToken(roomName);
    res.send({
        token: token,
    });
});



// serve static files from the public directory
app.use(express.static("public"));

app.get("/", (req, res) => {
    res.sendFile("public/index.html");
});

// Start the Express server
app.listen(port, () => {
    console.log(`Express server running on port ${port}`);
});